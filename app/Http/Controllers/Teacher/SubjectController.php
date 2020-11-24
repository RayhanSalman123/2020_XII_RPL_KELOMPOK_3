<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subjects;

class SubjectController extends Controller
{
     public function index()
    {
        return view('teacher/subject/list_subject');
    }


    public function list_subject()
    {
        $subject=Subjects::all();
        // $count = 0;
        return view('teacher/subject/list_subject');
    }
}
