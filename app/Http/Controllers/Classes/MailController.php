<?php

namespace Intranet\Http\Controllers\Classes;

use Illuminate\Http\Request;
use Intranet\Http\Controllers\Controller;
use Mail;
use Auth;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{

    public static function LogMail($Subject, $MenuID, $Template, $request)
    {

        $Emails = DB::select('SELECT * FROM email_masters WHERE MenuID = ?', [$MenuID]);
        $Emails = (array)$Emails;

        if (count($Emails) > 0) {
            foreach ($Emails as $Email) {

                $Email = (array)$Email;
                $request['Email'] = $Email;
                $request['Subject'] = $Subject;

                Mail::send($Template, $request, function ($msj) use ($request) {
                    $msj->subject($request['Subject']);
                    $msj->to($request['Email']['Email']);
                });

            }
        }

    }

}
