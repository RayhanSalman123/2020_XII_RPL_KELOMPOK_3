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

    public function list_submission()
    {
        $submissions=Submissions::join('users','users.usr_id','=','submissions.user_id')
                                  ->join('subjects', 'subjects.subject_id', 'submissions.sbm_subject_id')
                                  ->orderBy('submissions.created_at','asc')
                                  ->get();
       
        return view('admin/submission/list_submission', ['submissions' => $submissions]);
    }
}
