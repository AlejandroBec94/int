<?php

namespace Intranet\Http\Controllers\Classes;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Intranet\Http\Controllers\Controller;
use Auth;

class LogsController extends Controller
{


    public static function InsertLog($LogType, $IP,$UserInfo)
    {

        if (!$UserInfo){
            $UserInfo['UserID'] = Auth::user()->UserID;
            $UserInfo['UserCountry'] = Auth::user()->UserCountry;
        }

        $IpInfo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $IP . '&radius=50'));

        DB::table('intra_logs')->insert([
            [
                'LogUserID' => $UserInfo['UserID'],
                'LogUserCountry' => $UserInfo['UserCountry'],
                'LogCountry' => $IpInfo['geoplugin_city'],
                'LogType' => $LogType,
                'LogIP' => $IP,
                'LogIPExtraInfo' => json_encode($IpInfo),
            ],
        ]);

    }


}
