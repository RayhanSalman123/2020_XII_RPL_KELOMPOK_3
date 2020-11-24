<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function(){
	Auth::logout();
	return redirect('login');
});

Auth::routes();

Route::get('/dashboard/create', 'StudentController@view');

Route::get('/account/{userId}/{userVerificationToken}/activate', 'Auth\AccountController@verifyToken');
Route::get('/account/waiting-verification', 'Auth\AccountController@waitingVerification');
Route::post('/account/resend-verification', 'Auth\AccountController@resendVerification');

Route::get('/account/forgot-password', 'Auth\AccountController@forgotPassword')->name('forgot.password');
Route::post('/account/forgot-password', 'Auth\AccountController@sendEmailForgotPassword')->name('forgot.password');
Route::get('/account/{resetVerificationToken}/forgot-password', 'Auth\AccountController@verifyForgotToken');
Route::post('/account/reset-password', 'Auth\AccountController@updatePassword')->name('password-reset');

Route::group(['middleware' => 'auth', 'DisablePreventBack', 'verified'], function () {



//Admin
Route::get('/index_admin', 'Admin\AdminController@index');
// Route::get('/pages/admin/list-class', 'AdminController@store');
Route::get('/index_admin/create','Admin\AdminController@create');
Route::get('/list_class', 'Admin\ClassController@list_class');
Route::get('/list_teacher', 'Admin\TeacherController@list_teacher');
Route::get('/list_subject', 'Admin\SubjectController@list_subject');
Route::get('/list_schedule', 'Admin\ScheduleController@list_schedule');

//Siswa
Route::get('/index_student', 'Student\StudentController@index');
// Route::get('/student/schedule', 'StudentController@schedule');
Route::get('/list_schedule', 'Student\ScheduleController@list_schedule');


//Guru
Route::get('/index_teacher', 'Teacher\TeacherController@index');
Route::get('/list_subject', 'Teacher\SubjectController@list_subject');


//Kepsek
Route::get('/index_head_master', 'HeadMaster\HeadMasterController@index');


//Route untuk register teacher dan staff
});

Route::get('/register-student', 'Auth\RegisterController@registerStudent');
Route::get('/register-teacher', 'Auth\RegisterController@registerTeacher');
Route::get('/register-select', 'Auth\RegisterController@registerSelect');
Route::get('/dashboard', 'Admin\AdminController@index')->name('layouts.admin.master');


//Route Untuk Admin, Student, Teacher, Staff TU, jika register dan login maka akan ke halaman ini 
Route::group(['middleware' => ['auth', 'verified']], function () {
Route::get('/dashboard', 'User\UserController@index')->name('dashboard.users');



});