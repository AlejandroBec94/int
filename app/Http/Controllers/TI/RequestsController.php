<?php

namespace Intranet\Http\Controllers\TI;

use Intranet\Http\Controllers\Classes\LogsController;
use Intranet\Http\Controllers\Classes\MailController;
use Intranet\User;
use Intranet\Area;
use Intranet\RequestUsers;
use Mail;
use Session;
use Redirect;
use Auth;
use Intranet\Http\Requests, PDF;
use Intranet\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RequestsController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'UserName' => 'required',
            'MoveRequest' => 'required',
            'TypePlace' => 'required',
            'UserReplace' => 'required',
            'UserEquipment' => 'required',
            'UserJobTitle' => 'required',
            'UserChiefID' => 'required',
            'RequestDate' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "mensaje" => "Existen campos vacios",
                'type' => "error"
            ]);
        }

        $RequestDate = \DateTime::createFromFormat('d/m/Y', $request->input('RequestDate'));

        if ($request->input('RequestComment') == '') {
            $comment = "";
        } else {
            $comment = json_encode([0 => ["DocDate" => date("d/m/Y h:i A"), "UserID" => Auth::user()->UserID, "UserName" => Auth::user()->UserName, "UserPhoto" => Auth::user()->UserPhoto, "UserComment" => $request->input('RequestComment')]]);
        }
        // Insert Data Request
        DB::table('request_users')->insert([
            [
                'RequestUserID' => Auth::user()->UserID,
                'UserName' => $request->input('UserName'),
                'MoveRequest' => $request->input('MoveRequest'),
                'TypePlace' => $request->input('TypePlace'),
                'UserReplace' => $request->input('UserReplace'),
                'UserEquipment' => $request->input('UserEquipment'),
                'UserJobTitle' => $request->input('UserJobTitle'),
                'UserChiefID' => $request->input('UserChiefID'),
                'UserTools' => $request->input('UserTools'),
                'OtherTool' => $request->input('OtherTool'),


                'RequestComment' => $comment,
                'RequestDate' => $RequestDate->format('Y-m-d'),
                'RequestStatus' => 2,
            ],
        ]);

        // Consult Data Chief
        $UserInfo = DB::table('users')->where('UserID', $request->input('UserChiefID'))->first();
        $UserInfo = (array)$UserInfo;

        // Add data Chief
        $request['UserChiefEmail'] = $UserInfo['UserEmail'];
        $request['UserChiefName'] = $UserInfo['UserName'];
        $request['RequestComment'] = $request->input('UserName');
        $request['Date'] = date("d/m/Y");

        // Create random name pdf
        $name = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);

        // Create Request PDF
        $pdf = PDF::loadView('apps.pdf_user', $request->all())->save('./pdfs/' . $name . ".pdf");
        // return $pdf->download($name.".pdf");

        $request['PdfName'] = $name;

        $Emails = DB::select('SELECT * FROM email_masters WHERE MenuID = ?', [6]);
        $Emails = (array)$Emails;

        if (count($Emails) > 0) {
            foreach ($Emails as $Email) {

                $Email = (array)$Email;
                $request['Email'] = $Email;

                Mail::send('apps.mail.request_user', $request->all(), function ($msj) use ($request) {
                    $msj->subject('Solicitud de Movimiento de Usuario');
                    $msj->to($request['Email']['Email']);
                    $msj->attach('./pdfs/' . $request['PdfName'] . ".pdf");
                });

            }
        }

        LogsController::InsertLog('NewRequestUser', $request->ip(),false);

        return response()->json([
            "mensaje" => "Solicitud Enviada",
            'type' => "success"
        ]);

    }

    public function userRequest()
    {

        $areas = Area::all();
        $users = User::all();
        // DB::select('SELECT * FROM users WHERE UserNick = ? AND UserID != ?', [$request->input('UserNick'),$User['UserID']]);

        return view('TI.request_user', compact('areas', 'users'));

    }

    public function getRequests()
    {

        $RequestUsers = RequestUsers::all();
        $Users = [];
        foreach ($RequestUsers as $key => $value) {
            $UserInfo = DB::table('users')->where('UserID', $value['RequestUserID'])->first();
            $UserInfo = (array)$UserInfo;
            $Users[$UserInfo['UserID']] = $UserInfo;
        }
        $Users = (array)$Users;

        return view("TI.requests_users", compact('RequestUsers', 'Users'));

    }

    public function updateStatus(Request $request)
    {

        $status = 2;

        if ($request['Status'] == "RequestWait") {
            $status = 2;
        } elseif ($request['Status'] == "RequestNull") {
            $status = 4;
        } elseif ($request['Status'] == "RequestAccept") {
            $status = 3;
        } else {
            return response()->json([
                "mensaje" => "Se ha generado un error",
                'type' => "error"
            ]);
        }

        DB::table('request_users')
            ->where('RequestID', $request['RequestID'])
            ->update(['RequestStatus' => $status]);

        $request['status'] = $status;

        MailController::LogMail("Solicitudes de Usuario", 13, 'apps.mail.edit_status_request_user', $request->all());

        LogsController::InsertLog('RequestUserChangeStatus', $request->ip(),false);

        return response()->json([
            "mensaje" => "Solicitud Actualizada",
            'type' => "success"
        ]);

    }

    public function getObservations(Request $request)
    {

        $RequestInfo = DB::table('request_users')
            ->where('RequestID', $request['RequestID'])->first();

        $RequestInfo = (array)$RequestInfo;

        if (!$RequestInfo['RequestComment']) {
            return response()->json([
                "messages" => 'No existen observaciones.',
                'type' => "success"
            ]);

        }

        $html = "";

        foreach (json_decode($RequestInfo['RequestComment']) as $Comment) {

            $Comment = (array)$Comment;
            if (Auth::user()->UserID != $Comment['UserID']) {

                $html .= '<div class="direct-chat-msg">
                <div class="direct-chat-info clearfix">
                  <span class="direct-chat-name pull-left">' . $Comment['UserName'] . '</span>
                  <span class="direct-chat-timestamp pull-right">' . $Comment['DocDate'] . '</span>
                </div>
                <!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="/fotos_intra/' . $Comment['UserPhoto'] . '" alt=""><!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                ' . $Comment['UserComment'] . '
                </div>
              </div>';

            } else {

                $html .= '<div class="direct-chat-msg right">
                <div class="direct-chat-info clearfix">
                  <span class="direct-chat-name pull-right">' . $Comment['UserName'] . '</span>
                  <span class="direct-chat-timestamp pull-left">' . $Comment['DocDate'] . '</span>
                </div>
                <!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="/fotos_intra/' . $Comment['UserPhoto'] . '" alt="Message User Image"><!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                ' . $Comment['UserComment'] . '
                </div>
                <!-- /.direct-chat-text -->
              </div>';

            }

        }


        return response()->json([
            "messages" => $html,
            'type' => "success"
        ]);

    }

    public function putObservations(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'Observation' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "mensaje" => "Existen campos vacios",
                'type' => "error"
            ]);
        }

        $RequestInfo = DB::table('request_users')
            ->where('RequestID', $request['RequestID'])->first();

        $RequestInfo = (array)$RequestInfo;

        $Comments = json_decode($RequestInfo['RequestComment']);

        $CommentsInfo = [];
        if ($Comments) {
            foreach ($Comments as $Comment) {

                $Comment = (array)$Comment;

                $CommentsInfo[] = $Comment;

            }
        }

        $CommentsInfo  [] = ["DocDate" => date("d/m/Y h:i A"), "UserID" => Auth::user()->UserID, "UserName" => Auth::user()->UserName, "UserPhoto" => Auth::user()->UserPhoto, "UserComment" => $request['Observation']];

        DB::table('request_users')
            ->where('RequestID', $request['RequestID'])
            ->update(
                ['RequestComment' => json_encode($CommentsInfo)]
            );

        $html = '<div class="direct-chat-msg right">
                <div class="direct-chat-info clearfix">
                  <span class="direct-chat-name pull-right">' . Auth::user()->UserName . '</span>
                  <span class="direct-chat-timestamp pull-left">' . date("d/m/Y h:i:s A") . '</span>
                </div>
                <!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="/fotos_intra/' . Auth::user()->UserPhoto . '" alt="Message User Image"><!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                ' . $request['Observation'] . '
                </div>
                <!-- /.direct-chat-text -->
              </div>';


        return response()->json([
            "messages" => $html,
            'type' => "success"
        ]);

    }

}
