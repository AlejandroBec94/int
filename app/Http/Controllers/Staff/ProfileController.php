<?php

namespace Intranet\Http\Controllers\Staff;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intranet\Http\Controllers\Classes\LogsController;
use Intranet\Http\Controllers\Controller;
use Intranet\User;
use \Colors\RandomColor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
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
        $colors = RandomColor::many(18, array('hue'=>'blue'));
        return view("Staff.profile",['UserInfo'=>Auth::user(),"colors"=>$colors]);
    }

    public function changeImage(Request $request){

        if ($request->hasFile('UserPhoto')) {
            $file = $request->file('UserPhoto');

            $ext = explode(".",$file->getClientOriginalName());
            $ext[1] = strtolower($ext[1]);

            if ($ext[1] != "png" && $ext[1] != "jpg" && $ext[1] != "jpeg"){
                return response()->json([
                    "mensaje" => "Extensión no compatible.",
                    'type' => "error"
                ]);
            }

            $name = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 25).".jpg";
//                $file->move(public_path() . "/img/", $name);
            file_put_contents(public_path() . "/fotos_intra/" . $name, file_get_contents($file));

            DB::update("UPDATE users SET LastUpdate = ?, UserPhoto = ?  where UserID = ?", [date("Y-m-d H:i:s"),$name,Auth::user()->UserID]);

        }
    }

    public function saveData(Request $request){



        if ($request->input("UserNick")){
            LogsController::InsertLog('Change Nick', $request->ip(),false);
        }
        if ($request->input("UserSkype")){
            LogsController::InsertLog('Change Skype', $request->ip(),false);
        }
        if ($request->input("UserPhone")){
            LogsController::InsertLog('Change Phone', $request->ip(),false);
        }
        if ($request->input("UserPassword")){

            $validator = Validator::make($request->all(), [
                'UserPassword' => 'required|between:4,12|alpha_num|confirmed',
            ]);

            if($request['UserPassword'] != $request['UserPasswordCheck']){
                if ($validator->fails()) {
                    return response()->json([
                        "mensaje" => "Las contraseñas no coinciden.",
                        'type' => "error"
                    ]);
                }
            }
            LogsController::InsertLog('Change Password', $request->ip(),false);
        }

        $UserNick  = ($request->input("UserNick"))? $request->input("UserNick") : Auth::user()->UserNick;
        $UserSkype  = ($request->input("UserSkype"))? $request->input("UserSkype") :Auth::user()->UserSkype;
        $UserPhone  = ($request->input("UserPhone"))? $request->input("UserPhone") :Auth::user()->UserPhone;
        $UserPassword  = ($request->input("UserPassword"))? bcrypt($request->input("UserPassword")) : Auth::user()->password;
        $UserPassword2  = ($request->input("UserPassword"))? $this->aes_encrypt($request->input("UserPassword")) : Auth::user()->PasswordAltern;

        DB::update("UPDATE users SET LastUpdate = ?, UserNick = ?,UserSkype = ?,UserPhone = ?,password = ?,PasswordAltern = ?  where UserID = ?",
            [date("Y-m-d H:i:s"),$UserNick,$UserSkype,$UserPhone,$UserPassword,$UserPassword2,Auth::user()->UserID]);

        return response()->json([
            "mensaje" => "Guardado con éxito",
            'type' => "success"
        ]);

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
