<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Grades;


class GradeController extends Controller
{
    public function list_grade()
    {
        $grade=Grades::all();

        return view('Admin.grade.list_grade', ['grade' => $grade]);
    }
}