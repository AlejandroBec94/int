<?php

namespace Intranet\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Auth;

class NewsController extends Controller
{

    public function editNew(Request $request)
    {

        if ($request['FileType'] == "Url") {

            $validator = Validator::make($request->all(), [
                'NewID' => 'required',
                'NewName' => 'required',
                'CountriesView' => 'required',
                'FileType' => 'required',
                'FileTypeU' => 'required',
            ]);

            $name = $request['FileTypeU'];

        }
        elseif ($request['FileType'] == "Archivo") {

            $validator = Validator::make($request->all(), [
                'NewID' => 'required',
                'NewName' => 'required',
                'CountriesView' => 'required',
                'FileType' => 'required',
            ]);

//            1538692247R51knNjLvcld7IGK3VYBU49Ai.jpg
            if ($request->hasFile('FileTypeF')) {
                $file = $request->file('FileTypeF');
                $name = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 25).".jpg";
//                $file->move(public_path() . "/img/", $name);
                file_put_contents(public_path() . "/img/" . $name, file_get_contents($file));

            }

        }
        elseif ($request['FileType'] == "Info") {

            $validator = Validator::make($request->all(), [
                'NewID' => 'required',
                'NewName' => 'required',
                'CountriesView' => 'required',
                'FileType' => 'required',
            ]);

            $name = "";
            /*$request['FileContent']*/
            $Content = json_decode($request['FileContent']);
            $Content = (array)$Content;

        }

        if ($validator->fails()) {
            return response()->json([
                "mensaje" => "Existen campos vacios",
                'type' => "error"
            ]);
        }

        DB::table('nikken_news')
            ->where('NewID', $request['NewID'])
            ->update(
                [
                    'NewName' => $request['NewName'],
                    'CountriesView' => $request['CountriesView'],
                    'FileType' => $request['FileType'],
                    'ExpireDate' => $request['ExpireDate'],
                    'FileUrl' => $name,
                    'NewDescription'=>(isset($request['FileContent'])) ? $Content['Description'] : '',
                    'NewBackground'=>(isset($request['FileContent'])) ? $Content['Background'] : '',
                    'NewColorWord'=>(isset($request['FileContent'])) ? $Content['ColorWord'] : '',
                ]
            );

    }

    public function createNew(Request $request)
    {

        if ($request['FileType'] == "Url") {
            $validator = Validator::make($request->all(), [
                'NewID' => 'required',
                'NewName' => 'required',
                'CountriesView' => 'required',
                'FileType' => 'required',
                'FileTypeU' => 'required',
            ]);

        } elseif ($request['FileType'] == "Archivo") {

            $validator = Validator::make($request->all(), [
                'NewID' => 'required',
                'NewName' => 'required',
                'CountriesView' => 'required',
                'FileType' => 'required',
                'FileTypeF' => 'required',
            ]);

        }

        if ($validator->fails()) {
            return response()->json([
                "mensaje" => "Existen campos vacios",
                'type' => "error"
            ]);
        }

        DB::table('nikken_news')->insert(
            [
                'NewID' => $request['NewID'],
                'NewName' => $request['NewName'],
                'CountriesView' => $request['CountriesView'],
                'FileType' => $request['FileType'],
                'ExpireDate' => $request['ExpireDate'],
                'FileUrl' => (isset($request['FileTypeU'])) ? $request['FileTypeU'] : $request['FileTypeF'],
            ]
        );

    }

    public function deleteNew(Request $request)
    {

        DB::table('nikken_news')
            ->where('NewID', $request['NewID'])
            ->update(
                [
                    'Cancelled' => 1,
                    'CancelledInfo' => json_encode(["UserID" => Auth::user()->UserID, "DocDate" => date("Y-m-d H:i:s")]),
                ]
            );

    }

}
