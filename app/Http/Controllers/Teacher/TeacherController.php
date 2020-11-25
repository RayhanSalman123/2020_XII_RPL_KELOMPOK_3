<?php

namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;
use App\Submissions;

class TeacherController extends Controller
{
    public function index()
    {
        
        return view('teacher/dashboard');
    }

    public function create()
    {
        return view('teacher/submission/form_submission');
    }
}
