<?php

namespace Intranet\Http\Controllers\Auth;
use Intranet\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    public function login(Request $request)
    {

//        return $request->all();
        // return $this->aes_encrypt($request->password);

        $credentials = array('UserNick' => $request->UserNick, 'password' => $request->password, "UserStatus" => 1);
//        print_r(Auth::attempt($credentials, false));exit;
        if (Auth::attempt($credentials, false)) {

            $IpInfo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $request->ip() . '&radius=50'));

            DB::table('intra_logs')->insert([
                [
                    'LogUserID' => Auth::user()->UserID,
                    'LogUserCountry' => Auth::user()->UserCountry,
                    'LogCountry' => $IpInfo['geoplugin_city'],
                    'LogType' => 'Login',
                    'LogIP' => $request->ip(),
                    'LogIPExtraInfo' => json_encode($IpInfo),
                ],
            ]);


            return redirect()->intended('/');
        } else {
            //when echoing something here it is always displayed thus admin login is just refreshed.
            return redirect('/login')->withInput()->with('message', 'Login Failed');
        }

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
