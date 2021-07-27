<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Stud_Delete_Controller extends Controller
{
    public function delete($No)
    {
        DB::delete("delete from students where No = ?", [$No]);
        echo "Student record deleted Successfully.";
        echo '<a href="/">Click here</a> to go back.';
    }
}
