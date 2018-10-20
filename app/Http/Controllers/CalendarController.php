<?php

namespace Intranet\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Intranet\User;
use Intranet\NikkenCalendar;
use Auth;
use Illuminate\Support\Facades\Validator;

class CalendarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCalendar(){

        $Users  = User::all()->where("UserStatus","1");
        $Events = NikkenCalendar::all()->toArray();

        $CalendarEvents = [];

        foreach ($Events as $event){
            if ($event['EventStatus']==2) {

                if ($event['EventAllDay'] == 'false') {
                    $EventStart     = date("M d, y", strtotime($event['EventDateStart'])). " " . date("H:i:s",strtotime($event['EventTimeStart']));
                    $EventExpire     = date("M d, y", strtotime($event['EventDateExpire'])). " " . date("H:i:s",strtotime($event['EventTimeExpire']));
                }
                else{
                    $EventStart     = date("M d, y", strtotime($event['EventDateStart']));
                    $EventExpire    = date("M d, y", strtotime($event['EventDateExpire']));
                }

                    $CalendarEvents[] = [
                    'id'                => $event['EventID'],
                    'title'             => $event['EventTitle'],
                    'start'             => $EventStart,
                    'end'               => $EventExpire,
                    'allDay'            => ($event['EventAllDay'] == "true") ? true : false ,
                    'tag'               => $event['EventTag'],
                    'backgroundColor'   => $event['EventBackground'],
                    'borderColor'       => $event['EventBackground'],
                    'description'       => $event['EventDescription'],
                    'guests'            => json_decode($event['EventGuests']),
                    'ubication'         => $event['EventUbication'],
                ];

            }
        }

        return view("calendar",['Users'=>$Users,"Events"=>$Events,'CalendarEvents'=>json_encode($CalendarEvents)]);

    }

    public function addEvent(Request $request){

        $validator = Validator::make($request->all(), [
            // Do not allow any shady characters
            'UserCreate' => 'required|max:11|regex:[A-Za-z1-9 ]',
            'EventTitle' => 'required|max:50|regex:[A-Za-z1-9 ]',
            'EventBackground' => 'required|max:20|regex:[A-Za-z1-9 ]',
            'EventStatus' => 'required|max:1|regex:[A-Za-z1-9 ]',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        DB::table('nikken_calendars')
            ->insert([

                'EventID' => $request['EventID'],
                'UserCreate' => Auth::user()->UserID,
                'EventTitle' => $request['EventTitle'],
                'EventBackground' => $request['EventBackground'],
                'EventStatus' => 1,
                'EventAllDay' => true,

            ]);

        return $request;

    }

    public function putEvent(Request $request){

        /*$validator = Validator::make($request->all(), [
            // Do not allow any shady characters
            'UserCreate' => 'required|max:11|regex:[A-Za-z1-9 ]',
            'EventTitle' => 'required|max:50|regex:[A-Za-z1-9 ]',
            'EventBackground' => 'required|max:20|regex:[A-Za-z1-9 ]',
            'EventStatus' => 'required|max:1|regex:[A-Za-z1-9 ]',
            'EventDateStart' => 'required|max:1|regex:[A-Za-z1-9 ]',
            'EventDateExpire' => 'required|max:1|regex:[A-Za-z1-9 ]',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }*/

        DB::table('nikken_calendars')
            ->insert([

                'EventID'           => $request['EventID'],
                'UserCreate'        => Auth::user()->UserID,
                'EventTitle'        => $request['EventTitle'],
                'EventBackground'   => $request['EventBackground'],
                'EventStatus'       => 2,
                'EventDateStart'    => $request['EventDateStart'],
                'EventDateExpire'   => $request['EventDateStart'],
                'EventAllDay'       => $request['EventAllDay'],

            ]);

        return $request;

    }

    public function editEvent(Request $request){

        /*

        'EventID'           : event.id,
                    'EventTitle'        : event.title,
                    'EventBackground'   : event.backgroundColor,
                    'EventGuests'       : event.guests,
                    'EventDateStart'    : $("#EventStart").val().toISOString(),
                    'EventDateExpire'   : $("#EventExpire").val().toISOString(),
                    'EventTimeStart'    : $("#EventTimeStart").val().toISOString(),
                    'EventTimeExpire'   : $("#EventTimeExpire").val().toISOString(),
                    'EventAllDay'       : event.allDay,
                    'EventDescription'  : event.description,
                    'EventTag'          : event.tag,

         * */
        if($request['EventAllDay'] == "False"){
            $TimeStart = "";
            $TimeExpire = "";
        }
        else{
            $TimeStart  = date("H:i:s",strtotime($request['EventTimeStart']));
            $TimeExpire =date("H:i:s",strtotime($request['EventTimeExpire']));
        }
        DB::table('nikken_calendars')
            ->where("EventID", $request['EventID'])
            ->update([

                'EventID'           => $request['EventID'],
                'EventTitle'        => $request['EventTitle'],
                'EventBackground'   => $request['EventBackground'],
                'EventGuests'       => json_encode($request['EventGuests']),
                'EventDateStart'    => $request['EventDateStart'],
                'EventDateExpire'   => $request['EventDateExpire'],
                'EventTimeStart'    => $TimeStart,
                'EventTimeExpire'   => $TimeExpire,
                'EventAllDay'       => $request['EventAllDay'],
                'EventDescription'  => $request['EventDescription'],
                'EventTag'          => $request['EventTag'],
                'EventUbication'    => $request['EventUbication'],

            ]);

    }

    public function editDatetimeEvent(Request $request)
    {


        $TimeStart = date("H:i:s", strtotime($request['EventDatetimeStart']));
        $TimeExpire = date("H:i:s", strtotime($request['EventDatetimeExpire']));
        $DateStart = date("Y-m-d", strtotime($request['EventDatetimeStart']));
        $DateExpire = date("Y-m-d", strtotime($request['EventDatetimeExpire']));

        DB::table('nikken_calendars')
            ->where("EventID", $request['EventID'])
            ->update([

                'EventDateExpire' => $DateExpire,
                'EventDateStart' => $DateStart,
                'EventTimeStart' => $TimeStart,
                'EventTimeExpire' => $TimeExpire,

            ]);

    }

}
