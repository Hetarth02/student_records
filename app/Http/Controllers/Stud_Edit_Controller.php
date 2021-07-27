<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Stud_Edit_Controller extends Controller
{
    public function edit_view($No)
    {
        $students = DB::select('select * from students where No = ?',[$No]);
        return view('edit_view',['students'=>$students]);
    }
    public function edit(Request $request, $No)
    {
        $fname = $request -> input('fname');
        $lname = $request -> input('lname');
        $age = $request -> input('age');
        DB::update('update students set Firstname = ?, Lastname = ?, Age = ?  where No = ?',[$fname, $lname, $age, $No]);
        echo "Student record edited Successfully.";
        echo '<a href="/">Click here</a> to go back.';
    }
}
