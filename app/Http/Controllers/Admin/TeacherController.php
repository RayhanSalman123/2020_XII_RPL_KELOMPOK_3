<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;


class TeacherController extends Controller
{
    public function index()
    {
        return view('admin/teacher/list_teacher');
    }


    public function list_teacher()
    {
        $teacher=Teacher::all();
        // $count = 0;
        return view('admin/teacher/list_teacher');
    }
}
