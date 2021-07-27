<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/create', function () {
    return view('create');
});

Route::post('/insert', 'App\Http\Controllers\Stud_Insert_Controller@insertrecord');

Route::get('/', 'App\Http\Controllers\Stud_View_Controller@viewdata');

Route::get('edit_view/{No}', 'App\Http\Controllers\Stud_Edit_Controller@edit_view');

Route::post('edit/{No}', 'App\Http\Controllers\Stud_Edit_Controller@edit');

Route::get('delete/{No}', 'App\Http\Controllers\Stud_Delete_Controller@delete');