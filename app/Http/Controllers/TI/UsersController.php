<?php

namespace Intranet\Http\Controllers\TI;

use Intranet\Http\Controllers\Controller;
use Intranet\Http\Controllers\Classes\LogsController;
use Intranet\Http\Controllers\Classes\MailController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Intranet\Area;
use Intranet\User;
use Intranet\IntraLog;
use Intranet\EmailMaster;
use Mail;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {

            $validator = Validator::make($request->all(), [
                'UserName' => 'required',
                'UserEmail' => 'required',
                'UserNick' => 'required',
                'UserPassword' => 'required',
                'UserJobTitle' => 'required',

                'UserArea' => 'required',
                'UserCountry' => 'required',
                'UserCountryControl' => 'required',
                'UserPermissions' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    "mensaje" => "Existen campos vacios",
                    'type' => "error"
                ]);
            }

            $User = new User();

            $UserInfo = DB::table('users')
                ->where('UserNick', $request->input('UserNick'))
                ->orWhere("UserEmail", $request->input('UserEmail'))
                ->first();

            if ($UserInfo) {
                return response()->json([
                    "mensaje" => "El nombre de usuario o email ya existe",
                    'type' => "error"
                ]);
            }

            if ($request->hasFile('FilePhoto')) {
                $file = $request->file('FilePhoto');
                $name = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 25) . ".jpg";
//                $file->move(public_path() . "/img/", $name);
                file_put_contents(public_path() . "/fotos_intra/" . $name, file_get_contents($file));

            } else {
                $name = "default.png";
            }

            if ($request->input('UserStatus') == "false") {
                $User->UserStatus = 0;
            } else {
                $User->UserStatus = 1;
            }

            $Permissions = $request->input('UserPermissions');

            $User->UserName = $request->input('UserName');
            $User->UserEmail = $request->input('UserEmail');
            $User->UserNick = $request->input('UserNick');
            $User->password = bcrypt($request->input('UserPassword'));
            $User->PasswordAltern = $this->aes_encrypt($request->input('UserPassword'));
            $User->UserJobTitle = $request->input('UserJobTitle');
            $User->UserArea = $request->input('UserArea');
            $User->UserCountry = $request->input('UserCountry');
            $User->UserCountryControl = $request->input('UserCountryControl');
            $User->UserPermissions = $Permissions;
            $User->UserBorn = $request->input('UserBorn');
            $User->UserChiefID = $request->input('UserChiefID');
            $User->UserPhoto = $name;
            $User->save();
            $NewID = DB::getPdo()->lastInsertId();

            //Save in old intranet
//            Its not require because the new users, only add in a new intranet
//            $this->update_oldIntra($Permissions);

            MailController::LogMail("Usuario Nuevo", 4, 'apps.mail.new_user', $request->all());
            LogsController::InsertLog('UserCreate', $request->ip());

            DB::table('dashboard_users')->insert(
                [
                    'UserID' => $NewID,
                    'UserDashboardSorted' => '{"Right":["Calendar","NikkenYoutube"],"Left":["News","UsersBirthday"]}',
                    "LastUpdate" => date("Y-m-d H:i:s")
                ]
            );

            return response()->json([
                "mensaje" => "Guardado con éxito",
                'type' => "success"
            ]);

        } catch (Exception $e) {
            print_r("D: Ocurrió un error");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        $areas = Area::all();
        $UsersInfo = DB::select('SELECT * FROM users WHERE UserID != ?', [$user['UserID']]);

        return view("TI.edit_user", ['areas' => $areas, "user" => $user, 'UsersInfo' => $UsersInfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {

        // return $request->all();
        $validator = Validator::make($request->all(), [
            'UserName' => 'required',
            'UserEmail' => 'required',
            'UserNick' => 'required',
            'UserJobTitle' => 'required',

            'UserArea' => 'required',
            'UserCountry' => 'required',
            'UserCountryControl' => 'required',
            'UserPermissions' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "mensaje" => "Existen campos vacios",
                'type' => "error"
            ]);
        }

        // print_r($request->all());exit;


        $UserInfo = DB::select('SELECT * FROM users WHERE UserNick = ? AND UserID != ?', [$request->input('UserNick'), $User['UserID']]);

        if ($UserInfo) {
            return response()->json([
                "mensaje" => "El nombre de usuario ya existe",
                'type' => "error"
            ]);
        }

        if ($request->hasFile('FilePhoto')) {
            $file = $request->file('FilePhoto');

            $name = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 25) . ".jpg";
//                $file->move(public_path() . "/img/", $name);
            file_put_contents(public_path() . "/fotos_intra/" . $name, file_get_contents($file));

        } else {
            $name = "default.png";
        }

        $Permissions = $request->input('UserPermissions');

        if ($request->input('UserEmail') != $User['UserEmail']) {
            $User->UserEmail = $request->input('UserEmail');
        }

        // $User->save();
        $data = [];
        $values = "";
        $ValuesTotal = (int)count($request->all()) - 1;
        $ii = 0;

        foreach ($request->all() as $key => $input) {
            if ($key == 'UserPassword') {
                if ($input == "") {
                    $ii++;
                    continue;
                }

                $input2 = $this->aes_encrypt($input);
                $input = bcrypt($input);

                $key = "password";
            }

            if ($key == "UserStatus") {
                if ($input == "false") {
                    $input = 0;
                } else {
                    $input = 1;
                }
            }
            if ($ValuesTotal == $ii) {
                $values .= $key . "= ?";
                if ($key == "password") {
                    $values .= " PasswordAltern = ?";
                }
            } else {
                $values .= $key . "= ?,";
                if ($key == "password") {
                    $values .= " PasswordAltern = ?,";
                }
            }

            $data[] = $input;

            if ($key == "password") {
                $data[] = $input2;
            }

            $ii++;
        }
        $data[] = $User['UserID'];
        // print_r($values);exit;
        DB::update("UPDATE users SET {$values} where UserID = ?", $data);

        //Save in old intranet
        $this->update_oldIntra($request->input('UserPermissions'));

        MailController::LogMail("Usuario Editado", 14, 'apps.mail.edit_user', $request->all());

        LogsController::InsertLog('UserEdit', $request->ip());

        return response()->json([
            "mensaje" => "Guardado con éxito",
            'type' => "success"
        ]);

    }

    public function update_oldIntra($Permissions)
    {
        $Permissions = (json_decode($Permissions));

        $DicPermisos = [
            /*'CO' => 'Camara_Col',
            'MX' => 'Camara_Mex',
            'PAN' => 'Camara_Pan',
            'ECU' => 'Camara_Ecu',
            'PR' => 'Camara_Per',
            'GTM' => 'Camara_Gtm',
            'CRI' => 'Camara_Cri',
            'SAL' => 'Camara_Slv',
            'News' => 'Noticias',
            'IC' => 'Informes',
            'CW' => 'Camaras',
            'CC' => 'Sap',
            'MP' => 'Notificaciones',
            'RS' => 'SeminarioReporte',
            'SA' => 'saldos_acum',
            'CCR' => 'env_check',
            'CuadreMVS' => 'Cuadre_Volumen',
            'SV' => 'solicitudes',
            'ACE' => 'compra_empleado_gestion',
            'CER' => 'compra_empleado_reporte',*/
            'Camara_Col' => 'CO',
            'Camara_Mex' => 'MX',
            'Camara_Pan' => 'PAN',
            'Camara_Ecu' => 'ECU',
            'Camara_Per' => 'PR',
            'Camara_Gtm' => 'GTM',
            'Camara_Cri' => 'CRI',
            'Camara_Slv' => 'SAL',
            'Noticias' => 'News',
            'Informes' => 'IC',
            'Camaras' => 'CW',
            'Sap' => 'CC',
            'Notificaciones' => 'MP',
            'SeminarioReporte' => 'RS',
            'saldos_acum' => 'SA',
            'env_check' => 'CCR',
            'Cuadre_Volumen' => 'CuadreMVS',
            'solicitudes' => 'SV',
            'compra_empleado_gestion' => 'ACE',
            'compra_empleado_reporte' => 'CER',
        ];
        $values = "";
        $ii = 0;
        foreach ($DicPermisos as $key => $permission) {

            if (in_array($permission, $Permissions)) {
                $values .= $key . " = 'Si',";
            } else {
                $values .= $key . " = 'No',";
            }
            $ii++;

        }

        $values = rtrim($values, ",");
        $UserIDOld = DB::connection('mysql2')->table('users')->where('user', Auth::user()->UserNick)->first();
        $UserIDOld = (array)$UserIDOld;
        $users = DB::connection('mysql2')->update("UPDATE permisos SET {$values} where id_permisos = ?", [$UserIDOld['id_users']]);
    }

    public function getUsers()
    {
        $users = User::all();

        return view("TI.users", compact('users'));
    }

    public function newUser()
    {
        $areas = Area::all();
        $users = User::all();
        // DB::select('SELECT * FROM users WHERE UserNick = ? AND UserID != ?', [$request->input('UserNick'),$User['UserID']]);

        return view('TI.new_user', compact('areas', 'users'));
    }

    public function userRequest()
    {

        $areas = Area::all();
        $users = User::all();
        // DB::select('SELECT * FROM users WHERE UserNick = ? AND UserID != ?', [$request->input('UserNick'),$User['UserID']]);

        return view('TI.request_user', compact('areas', 'users'));

    }

        function aes_decrypt($Encrypt = "")
        {

            $password = '}H70 #w3hz+64.b';
            $method = 'aes-256-cbc';

            $password = substr(hash('sha256', $password, true), 0, 32);

            $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

            $decrypted = openssl_decrypt(base64_decode($Encrypt), $method, $password, OPENSSL_RAW_DATA, $iv);

            return $decrypted;

        }


    function aes_encrypt($String = "")
    {

        $plaintext = $String;
        $password = '}H70 #w3hz+64.b';
        $method = 'aes-256-cbc';

        $password = substr(hash('sha256', $password, true), 0, 32);

        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

        $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $password, OPENSSL_RAW_DATA, $iv));

        return $encrypted;

    }

}
