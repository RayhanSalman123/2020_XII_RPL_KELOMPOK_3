<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Subjects;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function index()
    {
        return view('admin/subject/list_subject');
    }


    public function list_subject()
    {
        $subject=Subjects::all();
        // $count = 0;
        return view('admin/subject/list_subject');
    }
}
