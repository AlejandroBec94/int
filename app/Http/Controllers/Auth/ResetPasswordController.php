<?php

namespace Intranet\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use \Illuminate\Support\Facades\Validator;
use Intranet\Http\Controllers\Classes\LogsController;
use Intranet\Http\Controllers\Classes\MailController;
use Intranet\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Intranet\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function forgot_password()
    {
        return view("Auth.forgot");
    }

    public function forgot_password_send(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'UserEmail' => 'required',
        ]);

        $UserInfo = User::where("UserEmail", $request->input("UserEmail"))->first();

        if ($validator->fails() || !isset($UserInfo)) {
            return response()->json([
                "mensaje" => "Correo invalido",
                'type' => "error"
            ]);
        }

        $token['time'] = date("Y-m-d H:i:s");
        $token['UserInfo'] = $UserInfo;
        $token['code'] = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 50);
        $token = $this->aes_encrypt(json_encode($token));

        $request['token'] = $token;

        DB::table('users')
            ->where('UserID', $UserInfo['UserID'])
            ->update(['remember_token' => $token]);

        $subject = "Recuperar contraseña de la Intranet Nikken.";
        $email = $request->input("UserEmail");
        $request['UserInfo'] = $UserInfo;
        Mail::send('apps.mail.forgot_password', $request->all(), function ($msj) use ($subject, $email) {
            $msj->subject($subject);
            $msj->to($email);
        });

        return response()->json([
            "mensaje" => "¡Envío de petición exitosa!",
            'type' => "success"
        ]);

    }

    public function reset_password(Request $request)
    {

        $Token = $this->aes_decrypt($request['token']);

        $Token = (array)json_decode($Token);

        $diff = (int)date('Y-m-d H:i:s') - (int)date("Y-m-d H:i:s", strtotime($Token['time']));

        $dates = ceil((int)$diff / (3600 * 24));

        if ($dates > 1) {
            return redirect('/');
        }
        $Token['UserInfo'] = (array)$Token['UserInfo'];

        $UserLastInfo = User::where("UserID", $Token['UserInfo']['UserID'])->first();

        if ($UserLastInfo['remember_token'] != $request['token']) {
            return redirect('/');
        }

        //print_r($Token['UserInfo']);exit;
        //print_r((array)json_decode($this->aes_decrypt($request['token'])));exit;
        return view("auth.reset", ["DataInfo" => json_decode($this->aes_decrypt($request['token']))]);
    }

    public function reset_password_send(Request $request)
    {

        $messages = [
            "password.required" => "La contraseña es obligatoria",
            "password.min" => "La contraseña debe tener minimo 6 carácteres",
            "password.confirm" => "La contraseñas no coinciden",
        ];

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6',
            'password2' => 'required|min:6',
        ]);


        if ($validator->fails()) {
//            print_r($validator->errors()->first('password'));
            return response()->json([
                "mensaje" => $validator->errors()->first('password'),
                'type' => "error"
            ]);
        }
        if ($request->input("password") != $request->input("password2")) {
//            print_r($validator->errors()->first('password'));
            return response()->json([
                "mensaje" => "La contraseñas no coinciden",
                'type' => "error"
            ]);
        }

        /*DB::table('users')
            ->where('UserID', $request['UserID'])
            ->update(['remember_token' => "","password"=>bcrypt($request->input("password")),"PasswordAltern"=>$this->aes_encrypt($request->input("password",true))]);*/

        $UserInfo = User::where("UserID",$request['UserID'])->first();
        //print_r($UserInfo['UserNick']);exit;

        $users = DB::connection('mysql2')->update("UPDATE users SET pass = '?' where user = '?'", [$request['password'],$UserInfo['UserNick']]);

        return $users;
        //LogsController::InsertLog('ResetPassword', $request->ip());

        return response()->json([
            "mensaje" => "Se ha cambiado la contraseña con éxito",
            'type' => "success"
        ]);

    }

    function aes_decrypt($Encrypt = "", $Simple = false)
    {

        $password = '}H70 #w3hz+64.b';
        $method = 'aes-256-cbc';

        $password = substr(hash('sha256', $password, true), 0, 32);

        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

        if ($Simple) {
            $decrypted = openssl_decrypt(base64_decode($Encrypt), $method, $password, OPENSSL_RAW_DATA, $iv);
        } else {
            $decrypted = openssl_decrypt(base64_decode(base64_decode($Encrypt)), $method, $password, OPENSSL_RAW_DATA, $iv);
        }

        return $decrypted;

    }

    function aes_encrypt($String = "", $Simple = false)
    {

        $plaintext = $String;
        $password = '}H70 #w3hz+64.b';
        $method = 'aes-256-cbc';

        $password = substr(hash('sha256', $password, true), 0, 32);

        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

        if ($Simple) {
            $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $password, OPENSSL_RAW_DATA, $iv));
        } else {
            $encrypted = base64_encode(base64_encode(openssl_encrypt($plaintext, $method, $password, OPENSSL_RAW_DATA, $iv)));
        }

        return $encrypted;

    }

}
