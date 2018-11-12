<?php

namespace Intranet\Http\Controllers\TI;

use Intranet\Http\Controllers\Controller;
use Intranet\Http\Controllers\Classes\LogsController;
use Intranet\Http\Controllers\Classes\MailController;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Intranet\Area;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Mail;
use Auth;

class AreasController extends Controller
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
            'AreaName' => 'required',
            'AreaAcronym' => 'required',
            'AreaPermissions' => 'required',
            'AreaDescription' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "mensaje" => "Existen campos vacios",
                "type" => "error"
            ]);
        }

        $area = new Area();
        $Permissions = $request->input('AreaPermissions');
        $area->AreaName = $request->input('AreaName');
        $area->DocDate = date("Y-m-d H:i:s");
        $area->AreaAcronym = $request->input('AreaAcronym');
        $area->AreaPermissions = $Permissions;
        $area->AreaDescription = $request->input('AreaDescription');

        $area->save();

        MailController::LogMail("Un Área ha sido creada", 9, 'apps.mail.new_area', $request->all());

        LogsController::InsertLog('AreaCreate', $request->ip());

        return response()->json([
            "mensaje" => "Guardado con éxito",
            "type" => "success"
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        // $area = Area::find($AreaID);
        return view("TI.edit_area", ['area' => $area]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {

        $validator = Validator::make($request->all(), [
            'AreaName' => 'required',
            'AreaAcronym' => 'required',
            'AreaPermissions' => 'required',
            'AreaDescription' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "mensaje" => "Existen campos vacios",
                "type" => "warning",
            ]);
        }

        $Permissions = $request->input('AreaPermissions');
        $area->AreaName = $request->input('AreaName');
        $area->DocDate = date("Y-m-d H:i:s");
        $area->AreaAcronym = $request->input('AreaAcronym');
        $area->AreaPermissions = $Permissions;
        $area->AreaDescription = $request->input('AreaDescription');

        $area->save();

        MailController::LogMail("Un Área ha sido modificada", 12, 'apps.mail.edit_area', $request->all());

        LogsController::InsertLog('AreaEdit', $request->ip());

        return response()->json([
            "mensaje" => "Guardado con éxito",
            "type" => "success",
        ]);

    }

    public function getAreas()
    {
        $areas = Area::all();

        return view('TI.areas', compact('areas'));
    }

}
