<?php

namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $student = student::all();
        return view('student.dashboard');
    }


    public function schedule(Request $request)
    {
        return view('layouts.schedule');
    }
    public function view(){
    	return view('student.view');
    }

}
