<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Submissions;

class SubmissionController extends Controller
{
    public function index()
    {
        return view('admin/submission/list_submission');
    }


     public function create()
    {
        return view('admin.submission.add_submission');
    }

    public function list_submission()
    {
        $Submissions=Submissions::all();
        // $count = 0;
        return view('admin/submission/list_submission');
    }
}
