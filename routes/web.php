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
|*/

Route::get('/logout', function(){
	Auth::logout();
	return view('auth.login');
});

Route::get('/', function () {
    return view('auth.login');
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


	Route::get('/register-student', 'Auth\RegisterController@registerStudent');
	Route::get('/register-teacher', 'Auth\RegisterController@registerTeacher');
	Route::get('/register-select', 'Auth\RegisterController@registerSelect');

	//Route Untuk Admin, Student, Teacher, Staff TU, jika register dan login maka akan ke halaman ini 



Route::group(['middleware' => ['auth', 'verified']], function () {
		Route::get('/dashboard', 'User\UserController@index')->name('dashboard.users');

});



Route::group(['middleware' => ['auth', 'DisablePreventBack', 'verified', 'role:admin']], function () {
	Route::get('/index_admin', 'Admin\AdminController@index');
// Route::get('/pages/admin/list-class', 'AdminController@store');
	Route::get('/list_class', 'Admin\ClassController@list_class');
	Route::get('/list_class/add_class', 'Admin\ClassController@create');

	Route::get('/list_teacher', 'Admin\TeacherController@list_teacher');
	Route::get('/list_teacher/add_teacher', 'Admin\TeacherController@create');

	Route::get('/list_subject_admin', 'Admin\SubjectController@list_subject');
	Route::get('/list_subject/add_subject', 'Admin\SubjectController@create');

	Route::get('/list_schedule_admin', 'Admin\ScheduleController@list_schedule');
	Route::get('/list_schedule/add_schedule', 'Admin\ScheduleController@create');

	Route::get('/list_submission', 'Admin\SubmissionController@list_submission');
	Route::get('/list_submission/add_submission', 'Admin\SubmissionController@create');
});




Route::group(['middleware' => [ 'role:student','auth', 'DisablePreventBack', 'verified']], function () {
	Route::get('/index_student', 'Student\StudentController@index');
	// Route::get('/student/schedule', 'StudentController@schedule');
	Route::get('/list_schedule', 'Student\ScheduleController@list_schedule');
});



Route::group(['middleware' => ['auth', 'DisablePreventBack', 'verified', 'role:teacher']], function () {
	Route::get('/index_teacher', 'Teacher\TeacherController@index');
	Route::get('/list_schedule_teacher', 'Teacher\ScheduleController@list_schedule_teacher');
	Route::get('/form-submission', 'Teacher\TeacherController@create');

});




Route::group(['middleware' => ['auth', 'DisablePreventBack', 'verified', 'role:head_master']], function () {
//Kepsek
	Route::get('/index_head_master', 'HeadMaster\HeadMasterController@index');
	Route::get('/list_submission', 'HeadMaster\HeadMasterController@list_submission');
	Route::get('/list_cek_schedule', 'HeadMaster\HeadMasterController@list_cek_schedule');
	Route::get('/approve', 'HeadMaster\HeadMasterController@approve');
	Route::get('/block', 'HeadMaster\HeadMasterController@block');
	// Route::post('/list_submission','HeadMaster\HeadMasterController@store');
});