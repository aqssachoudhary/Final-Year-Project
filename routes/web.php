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




Auth::routes();

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/get-student-count', 'HomeController@getStudentCount');


Route::get('teacher','TeacherController@index');
Route::get('teacher/create','TeacherController@create');
Route::post('teacher','TeacherController@store');
Route::get('teacher/{id}/edit','TeacherController@edit');
Route::put('teacher/{id}','TeacherController@update');
Route::delete('teacher/{id}','TeacherController@destroy');

Route::get('my-classes','TeacherController@myClasses');
//Students
Route::get('student','StudentController@index');
Route::get('student/create','StudentController@create');
Route::post('student','StudentController@store');
Route::get('student/{id}/edit','StudentController@edit');
Route::put('student/{id}','StudentController@update');
Route::delete('student/{id}','StudentController@destroy');
//departments
Route::get('department','DepartmentController@index');
Route::get('department/create','DepartmentController@create');
Route::post('department','DepartmentController@store');
Route::get('department/{id}/edit','DepartmentController@edit');
Route::put('department/{id}','DepartmentController@update');
Route::delete('department/{id}','DepartmentController@destroy');
//sessions
Route::get('session-year','SessionYearController@index');
Route::get('session-year/create','SessionYearController@create');
Route::post('session-year','SessionYearController@store');
Route::get('session-year/{id}/edit','SessionYearController@edit');
Route::get('session-year/{id}/show','SessionYearController@show');

Route::get('assign_teacher/{sub}/{year}/{teacher}','SessionYearController@assignTeacher');
Route::delete('session-year/{id}','SessionYearController@destroy');
//classes
Route::get('classes','ClassesController@index');
Route::get('classes/create','ClassesController@create');
Route::post('classes','ClassesController@store');
Route::get('classes/{id}/edit','ClassesController@edit');
Route::put('classes/{id}','ClassesController@update');
Route::delete('classes/{id}','ClassesController@destroy');

//subject
Route::get('subject','SubjectController@index');
Route::get('subject/create','SubjectController@create');
Route::post('subject','SubjectController@store');
Route::get('subjects/{id}/edit','SubjectController@edit');
Route::put('subjects/{id}','SubjectController@update');
Route::delete('subjects/{id}','SubjectController@destroy');

//sections
Route::get('section','SectionController@index');
Route::get('section/create','SectionController@create');
Route::post('section','SectionController@store');
Route::get('section/{id}/edit','SectionController@edit');
Route::put('section/{id}','SectionController@update');
Route::delete('section/{id}','SectionController@destroy');
//pages
Route::get('logout', 'HomeController@logout');

Route::get('privacy','TermsController@index');
Route::get('faq','TermsController@faq');

Route::get('add-attendance/{id}','AttendanceController@addAttendance');
Route::post('attendance','AttendanceController@store');
Route::get('view-attendance/{id}','AttendanceController@viewAttendance');


Route::get('my-class','StudentController@myClass');
Route::get('att-detail/{id}','StudentController@attDetail');
});



