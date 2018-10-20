<?php

namespace Intranet\Http\Controllers\RH;

use Illuminate\Http\Request;
use Intranet\Http\Controllers\Controller;
use Intranet\User;
use Illuminate\Support\Facades\DB;

class DirectoryController extends Controller
{

    public function user_directory(Request $request){

        if($request['dir'] == "lat"){
            $request['dir'] = "latinoamerica";
            $Name = "Latinoamérica";
        }
        elseif($request['dir'] == "colombia"){
            $Name = "Colombia";
        }
        elseif($request['dir'] == "mexico"){
            $Name = "México";
        }
        elseif($request['dir'] == "ecuador"){
            $Name = "Ecuador";
        }
        elseif($request['dir'] == "peru"){
            $Name = "Perú";
        }
        elseif($request['dir'] == "panama"){
            $Name = "Panamá";
        }
        elseif($request['dir'] == "guatemala"){
            $Name = "Guatemala";
        }
        elseif($request['dir'] == "salvador"){
            $Name = "El Salvador";
        }
        elseif($request['dir'] == "costarica"){
            $Name = "Costa Rica";
        }

        $UsersInfo = DB::select('SELECT * FROM users WHERE UserCountryControl = ?', [$request['dir']]);
        $UsersInfo = (array)$UsersInfo;
        $UserAreas = [];
        foreach($UsersInfo as $UserInfo){
            $UserInfo = (array)$UserInfo;
            $UserAreas[$UserInfo['UserArea']][] = $UserInfo;
        }
        $UserAreas = (array)$UserAreas;

        return view('rh.user_directory',['UserAreas'=>$UserAreas,"Dir"=>$Name]);

    }

}
