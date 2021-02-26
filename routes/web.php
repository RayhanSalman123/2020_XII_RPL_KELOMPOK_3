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
		Route::get('admin/dashboard', 'User\UserController@index')->name('dashboard.users');

});


//ADMIN
Route::group(['middleware' => ['auth', 'DisablePreventBack', 'verified', 'role:admin']], function () {
	Route::get('/admin/index_admin', 'Admin\AdminController@index');
// Route::get('/pages/admin/list-class', 'AdminController@store');
	Route::get('/admin/list_class', 'Admin\ClassController@list_class');
	Route::get('/admin/list_class/add_class', 'Admin\ClassController@create');
	Route::post('/admin/list_class', 'Admin\ClassController@store');
	Route::get('/admin/edit_class/{class_id}/edit', 'Admin\ClassController@edit');
	Route::post('/admin/update/{class_id}', 'Admin\ClassController@update');
	Route::delete('/admin/list_class/{class_id}/delete', 'Admin\ClassController@delete');


	Route::get('/admin/list_teacher', 'Admin\TeacherController@list_teacher');
	Route::get('/admin/list_teacher/add_teacher', 'Admin\TeacherController@create');
	Route::post('/admin/list_teacher/add_teacher', 'Admin\TeacherController@store');
	Route::get('/admin/edit_teacher/{teacher_id}/edit', 'Admin\TeacherController@edit');
	Route::post('/admin/edit_teacher/{teacher_id}/edit', 'Admin\TeacherController@update');
	Route::delete('/admin/list_teacher/{teacher_id}/delete', 'Admin\TeacherController@delete');


	Route::get('/admin/manage_subject', 'Admin\ManageSubjectController@createSubject');
	Route::post('/admin/manage_subject', 'Admin\ManageSubjectController@StoreSubject');


	Route::get('/admin/list_subject_admin', 'Admin\SubjectController@list_subject');
	Route::get('/admin/list_subject_admin/add_subject', 'Admin\SubjectController@create');
	Route::post('/admin/list_subject_admin/add_subject', 'Admin\SubjectController@store');
	Route::get('/admin/list_subject/edit_subject/{subject_id}/edit', 'Admin\SubjectController@edit');
	Route::post('/admin/list_subject/update/{subject_id}', 'Admin\SubjectController@update');
	Route::delete('/admin/list_subject_admin/{subject_id}/delete', 'Admin\SubjectController@delete');


	Route::get('/admin/manage_schedule', 'Admin\ScheduleController@AddSchedule');

	Route::get('/admin/list_submission_admin', 'Admin\SubmissionController@list_submission');

	Route::get('/admin/confirm_headmaster', 'Admin\ConfirmController@list_confirm');

	Route::get('/admin/manage_major', 'Admin\MajorController@index');
	Route::get('/admin/manage_major/add_major', 'Admin\MajorController@create');
	Route::post('/admin/manage_major/add_major', 'Admin\MajorController@store');
	Route::delete('/admin/manage_major/{major_id}/delete', 'Admin\MajorController@delete');

	Route::get('/admin/list_curriculum', 'Admin\CurriculumController@list_curriculum');
	Route::get('/admin/list_curriculum/add_curriculum', 'Admin\CurriculumController@create');
	Route::post('/admin/list_curriculum/add_curriculum', 'Admin\CurriculumController@store');
	Route::delete('/admin/list_curriculum/{curriculum_id}/delete', 'Admin\CurriculumController@delete');

	Route::get('/admin/list_school_year', 'Admin\SchoolYearController@list_school_year');
	Route::get('/admin/list_school_year/add_school_year', 'Admin\SchoolYearController@create');
	Route::post('/admin/list_school_year/add_school_year', 'Admin\SchoolYearController@store');
	Route::delete('/admin/list_school_year/{school_year_id}/delete', 'Admin\SchoolYearController@delete');

	Route::get('/admin/list_grade', 'Admin\GradeController@list_grade');
	Route::get('/admin/list_grade/add_grade', 'Admin\GradeController@create');
	Route::post('/admin/list_grade/add_grade', 'Admin\GradeController@store');
	Route::delete('/admin/list_grade/{grade_id}/delete', 'Admin\GradeController@delete');
	



});




Route::group(['middleware' => [ 'role:student','auth', 'DisablePreventBack', 'verified']], function () {
	Route::get('/index_student', 'Student\StudentController@index');
	// Route::get('/student/schedule', 'StudentController@schedule');
	Route::get('/list_schedule', 'Student\ScheduleController@list_schedule');
});



Route::group(['middleware' => ['auth', 'DisablePreventBack', 'verified', 'role:teacher']], function () {
	Route::get('/index_teacher', 'Teacher\TeacherController@index');
	Route::get('/teacher/list_schedule_teacher', 'Teacher\ScheduleController@list_schedule_teacher');
	Route::get('/teacher/form-submission', 'Teacher\TeacherController@create');

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