<?php

namespace Intranet\Http\Controllers\Staff;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intranet\Http\Controllers\Controller;
use Intranet\User;
use \Colors\RandomColor;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
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
        $colors = RandomColor::many(18, array('hue'=>'blue'));
        return view("Staff.profile",['UserInfo'=>Auth::user(),"colors"=>$colors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeImage(Request $request){

        if ($request->hasFile('UserPhoto')) {
            $file = $request->file('UserPhoto');

            $ext = explode(".",$file->getClientOriginalName());
            $ext[1] = strtolower($ext[1]);

            if ($ext[1] != "png" && $ext[1] != "jpg" && $ext[1] != "jpeg"){
                return response()->json([
                    "mensaje" => "Extensión no compatible.",
                    'type' => "error"
                ]);
            }

            $name = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 25).".jpg";
//                $file->move(public_path() . "/img/", $name);
            file_put_contents(public_path() . "/fotos_intra/" . $name, file_get_contents($file));

            DB::update("UPDATE users SET LastUpdate = ?, UserPhoto = ?  where UserID = ?", [date("Y-m-d H:i:s"),$name,Auth::user()->UserID]);

        }
    }

}
