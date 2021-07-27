<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Stud_View_Controller extends Controller
{
    public function viewdata()
    {
        $students = DB::select("select * from students");
        return view('index', ["students" => $students]);
    }
}
