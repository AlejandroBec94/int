<?php

namespace Intranet\Http\Controllers\Staff;

use Illuminate\Http\Request;
use Intranet\Http\Controllers\Controller;

class StaffInductionController extends Controller
{
    public function show(){
        return view("staff.induction");
    }
}
