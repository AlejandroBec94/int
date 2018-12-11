<?php

namespace Intranet\Http\Controllers\TI;

use Intranet\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Intranet\Http\Controllers\Classes\LogsController;
use Intranet\Http\Controllers\Classes\MailController;

use Intranet\EmailMaster;
use Intranet\User;
use Intranet\Area;
use Mail;
use Auth;
use Intranet\IntraMenu;

use Illuminate\Http\Request;

class EmailsController extends Controller
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

        if (EmailMaster::where('EmailID', $request['EmailID'])->exists() || EmailMaster::where('CreateID', $request['EmailID'])->exists()) {

            $email = DB::select('SELECT * FROM email_masters WHERE (EmailID = ? OR CreateID = ?) LIMIT 1', [$request['EmailID'], $request['EmailID']]);
            $email = (array)$email[0];
            // return $email;
            if ($email['CreateID'] == $request['EmailID']) {
                $label = "CreateID";
            } elseif ($email['EmailID'] == $request['EmailID']) {
                $label = "EmailID";
            }

            if (isset($request['EmailStatus'])) {
                if ($request['EmailStatus'] == "EmailEnable") {
                    $Status = 1;
                } elseif ($request['EmailStatus'] == 'EmailDisable') {
                    $Status = 0;
                }
            } else {
                $Status = 1;
            }

            DB::table('email_masters')
                ->where($label, $request['EmailID'])
                ->update([

                    'Email' => $request['Email'],
                    'MenuID' => $request['MenuID'],
                    'EmailStatus' => $Status,
                    'LastUpdate' => date("Y-m-d H:i:s"),

                ]);

        } else {
            // return $request->all();
            // return "otro";
            // return "jbgsd";
            DB::table('email_masters')
                ->insert([

                    'Email' => $request['Email'],
                    'MenuID' => $request['MenuID'],
                    'EmailStatus' => 1,
                    'LastUpdate' => date("Y-m-d H:i:s"),
                    'CreateID' => $request['EmailID'],

                ]);
        }

        MailController::LogMail("Correos Maestros modificados", 11, 'apps.mail.emails_master', $request->all());

        return LogsController::InsertLog('UpdateEmailsMaster', $request->ip(),false);

        // return $request->all();
    }

    public function getEmails()
    {

        $Emails = EmailMaster::all();
        $Users = User::all();
        $Menus = IntraMenu::all();

        return view("TI.emails", ['Emails' => $Emails, "Users" => $Users, "Menus" => $Menus]);

    }
}
