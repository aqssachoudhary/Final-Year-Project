<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//teacers
Route::get('teacher','TeacherController@index');
Route::get('teacher/create','TeacherController@create');
Route::post('teacher','TeacherController@store');
//Students
Route::get('student','StudentController@index');
Route::get('student/create','StudentController@create');
Route::post('student','StudentController@store');
//departments
Route::get('department','DepartmentController@index');
Route::get('department/create','DepartmentController@create');
Route::post('department','DepartmentController@store');
//sessions
Route::get('session','SessionController@index');
Route::get('session/create','SessionController@create');
Route::post('session','SessionController@store');
//attendance
Route::get('attendance','AttendanceController@index');
Route::get('attendance/create','AttendanceController@create');
Route::post('attendance','AttendanceController@store');


