<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Stud_Insert_Controller extends Controller
{
    public function insertrecord(Request $request)
    {
        $fname = $request -> input('fname');
        $lname = $request -> input('lname');
        $age = $request -> input('age');
        DB::insert("insert into students (Firstname, Lastname, Age) values (?, ?, ?)", [$fname, $lname, $age]);
        echo "Student added Successfully.";
        echo '<a href="/">Click here</a> to go back.';
    }
}
