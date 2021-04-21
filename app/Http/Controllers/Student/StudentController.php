<?php

namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\student;
use App\subjects;
use App\teacher;    
use App\classes;
use App\majors;
use App\curriculum;
use App\SchoolYears;
use App\SchoolActivitiesAgenda;

class StudentController extends Controller
{
    public function index()
    {
        $student=student::count();
        $subject=subjects::count();
        $teacher=teacher::count();
        $classes=classes::count();
        $Majors=majors::count();
        $curriculum=curriculum::count();
        $school_year=SchoolYears::count();
        $sa_agenda=SchoolActivitiesAgenda::count();
        return view('student.dashboard',compact(['student','teacher','subject', 'classes', 'Majors', 'curriculum', 'school_year', 'sa_agenda']));
    }


    public function schedule(Request $request)
    {
        return view('layouts.schedule');
    }
    // public function view(){
    // 	return view('student.view');
    // }

}
