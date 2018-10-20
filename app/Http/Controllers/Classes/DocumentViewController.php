<?php

namespace Intranet\Http\Controllers\Classes;

use Illuminate\Http\Request;
use Intranet\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intranet\DocumentView;

class DocumentViewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function image_view(Request $request){

        $FileID = json_decode($this->aes_decrypt($request['document']));
        $FileID = (array) $FileID;
        $FileID = $FileID['id'];

        $FileInfo = DB::table('document_views')->where('FileID', $FileID)->first();
        $FileInfo = (array)$FileInfo;

		if (!$FileInfo) {
			//algo error
		}

			$ext = explode(".", $FileInfo['FileName']);

			$url         = "{$FileInfo['FilePath']}{$FileInfo['FileName']}";

			if (!file_exists($url)) {
				$url = "http://www.santacruzmentor.org/wp-content/uploads/2012/12/Placeholder.png";
			}
            if ($ext[1] == "pdf") {
				header("Content-type:application/pdf");
			}
            else{
			    header("Content-type: image/jpg");
            }

			readfile($url);

    }

    public function manage_view(){
        return view("rh.content_manager");
    }

    public function manage_content(Request $request){

        if ($request->hasFile('FileName')) {

            $file_name = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);

            $file = $request->file('FileName');
            $ext = explode(".", $file->getClientOriginalName());

            $name = $file_name.".".$ext[1] ;
            file_put_contents(public_path() . "/docs/".$name, file_get_contents($file));

            if($request['FileID'] == "Filosofy"){
                $id = 1;
            }
            // OS
            elseif($request['FileID'] == "OS_Latam"){
                $id = 4;
            }
            elseif($request['FileID'] == "OS_Mex"){
                $id = 5;
            }
            elseif($request['FileID'] == "OS_Col"){
                $id = 6;
            }
            elseif($request['FileID'] == "OS_Ecu"){
                $id = 7;
            }
            elseif($request['FileID'] == "OS_Gtm"){
                $id = 8;
            }
            elseif($request['FileID'] == "OS_Pan"){
                $id = 9;
            }
            elseif($request['FileID'] == "OS_Sal"){
                $id = 10;
            }
            elseif($request['FileID'] == "OS_Cri"){
                $id = 11;
            }
            elseif($request['FileID'] == "OS_Per"){
                $id = 12;
            }
            // Extensions
            elseif($request['FileID'] == "EA_Phones"){
                $id = 3;
            }
            elseif($request['FileID'] == "V_RMA"){
                $id = 13;
            }
            elseif($request['FileID'] == "SN"){
                $id = 14;
            }
            elseif($request['FileID'] == "C_AS"){
                $id = 15;
            }
            elseif($request['FileID'] == "C_CI"){
                $id = 16;
            }
            elseif($request['FileID'] == "C_CB"){
                $id = 17;
            }
            elseif($request['FileID'] == "F_9052"){
                $id = 18;
            }
            elseif($request['FileID'] == "FG"){
                $id = 19;
            }
            elseif($request['FileID'] == "FS"){
                $id = 20;
            }
            elseif($request['FileID'] == "FF"){
                $id = 21;
            }
            elseif($request['FileID'] == "IA"){
                $id = 22;
            }
            elseif($request['FileID'] == "I_SMS"){
                $id = 23;
            }
            elseif($request['FileID'] == "MR"){
                $id = 24;
            }
            elseif($request['FileID'] == "OU"){
                $id = 25;
            }
            /*Jobs*/
            /*Ecuador*/
            elseif($request['FileID'] == "EGGeneal"){
                $id = 26;
            }
            elseif($request['FileID'] == "GCF"){
                $id = 27;
            }
            elseif($request['FileID'] == "CSC"){
                $id = 28;
            }
            elseif($request['FileID'] == "SCP"){
                $id = 29;
            }
            elseif($request['FileID'] == "SCCC"){
                $id = 30;
            }
            elseif($request['FileID'] == "ECLC"){
                $id = 31;
            }
            elseif($request['FileID'] == "EACG"){
                $id = 32;
            }
            elseif($request['FileID'] == "EACI"){
                $id = 33;
            }
            elseif($request['FileID'] == "EACCP"){
                $id = 34;
            }

            /*Colombia*/
            elseif($request['FileID'] == "CGGeneal"){
                $id = 35;
            }
            elseif($request['FileID'] == "CGCEC"){
                $id = 36;
            }
            elseif($request['FileID'] == "CGCNOc"){
                $id = 37;
            }
            elseif($request['FileID'] == "CGCNOr"){
                $id = 38;
            }
            elseif($request['FileID'] == "CGCO"){
                $id = 39;
            }
            elseif($request['FileID'] == "CGCSO"){
                $id = 40;
            }
            elseif($request['FileID'] == "CC"){
                $id = 41;
            }
            elseif($request['FileID'] == "CCG"){
                $id = 42;
            }
            elseif($request['FileID'] == "CCCBA"){
                $id = 43;
            }
            elseif($request['FileID'] == "CAT"){
                $id = 44;
            }
            elseif($request['FileID'] == "CAC"){
                $id = 45;
            }
            elseif($request['FileID'] == "CACE"){
                $id = 46;
            }
            elseif($request['FileID'] == "CCO"){
                $id = 47;
            }
            elseif($request['FileID'] == "CAACE"){
                $id = 48;
            }
            elseif($request['FileID'] == "CACO"){
                $id = 49;
            }
            elseif($request['FileID'] == "CAAB"){
                $id = 50;
            }
            elseif($request['FileID'] == "ESG"){
                $id = 51;
            }
            elseif($request['FileID'] == "ESCG"){
                $id = 52;
            }
            elseif($request['FileID'] == "ESSC"){
                $id = 53;
            }
            elseif($request['FileID'] == "ESSG"){
                $id = 54;
            }
            elseif($request['FileID'] == "GG"){
                $id = 55;
            }
            elseif($request['FileID'] == "GCG"){
                $id = 56;
            }
            elseif($request['FileID'] == "GSC"){
                $id = 57;
            }
            elseif($request['FileID'] == "GSG"){
                $id = 58;
            }
            elseif($request['FileID'] == "MACI"){
                $id = 59;
            }
            elseif($request['FileID'] == "MAAC"){
                $id = 60;
            }
            elseif($request['FileID'] == "MAC"){
                $id = 61;
            }
            elseif($request['FileID'] == "MCG"){
                $id = 62;
            }
            elseif($request['FileID'] == "MCCECL"){
                $id = 63;
            }
            elseif($request['FileID'] == "MCBT"){
                $id = 64;
            }
            elseif($request['FileID'] == "MCIN"){
                $id = 65;
            }
            elseif($request['FileID'] == "MGAF"){
                $id = 66;
            }
            elseif($request['FileID'] == "MSCC"){
                $id = 67;
            }
            elseif($request['FileID'] == "MTI"){
                $id = 68;
            }
            elseif($request['FileID'] == "PaGG"){
                $id = 69;
            }
            elseif($request['FileID'] == "PaCG"){
                $id = 70;
            }
            elseif($request['FileID'] == "PaCLC"){
                $id = 71;
            }
            elseif($request['FileID'] == "PaESC"){
                $id = 72;
            }
            elseif($request['FileID'] == "PaSG"){
                $id = 73;
            }
            elseif($request['FileID'] == "PeGG"){
                $id = 74;
            }
            elseif($request['FileID'] == "PaGFA"){
                $id = 75;
            }
            elseif($request['FileID'] == "PeAC"){
                $id = 76;
            }
            elseif($request['FileID'] == "PeJSC"){
                $id = 77;
            }
            elseif($request['FileID'] == "PeESC"){
                $id = 78;
            }
            elseif($request['FileID'] == "PeCL"){
                $id = 79;
            }
            elseif($request['FileID'] == "PeAB"){
                $id = 80;
            }
            elseif($request['FileID'] == "RegDG"){
                $id = 81;
            }
            elseif($request['FileID'] == "RegDF"){
                $id = 82;
            }
            elseif($request['FileID'] == "RegDC"){
                $id = 83;
            }
            elseif($request['FileID'] == "RegAI"){
                $id = 84;
            }
            elseif($request['FileID'] == "RegGCH"){
                $id = 85;
            }
            elseif($request['FileID'] == "RegDSP"){
                $id = 86;
            }
            elseif($request['FileID'] == "RegGOPD"){
                $id = 87;
            }
            elseif($request['FileID'] == "RegGP"){
                $id = 88;
            }
            elseif($request['FileID'] == "RegGC"){
                $id = 89;
            }
            elseif($request['FileID'] == "RegGM"){
                $id = 90;
            }
            elseif($request['FileID'] == "RegECom"){
                $id = 91;
            }
            elseif($request['FileID'] == "RegGTI"){
                $id = 92;
            }
            elseif($request['FileID'] == "RegSSTI"){
                $id = 93;
            }
            elseif($request['FileID'] == "RegSADTI"){
                $id = 94;
            }

            DB::table('document_views')
                ->where('FileID', $id)
                ->update(
                    [
                        'FileName'       => $name,
                    ]
                );
        }



        return $request->all();
    }

    public function aes_decrypt($Encrypt = "")
    {

        $password = 'LW(V3K%*TiQbJ5:gm;z!z:5;8Pd#6Xg[gk#}E*5=hq;K5}ky}L!8%a[G8Q)P6!5AVexdBA';
        $method = 'aes-256-cbc';

        $password = substr(hash('sha256', $password, true), 0, 32);

        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

        $decrypted = openssl_decrypt(base64_decode(base64_decode($Encrypt)), $method, $password, OPENSSL_RAW_DATA, $iv);

        return $decrypted;

    }

}
