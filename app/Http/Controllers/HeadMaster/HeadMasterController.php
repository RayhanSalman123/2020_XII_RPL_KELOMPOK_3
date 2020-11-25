<?php

namespace App\Http\Controllers\HeadMaster;

use App\Http\Controllers\Controller;
use App\HeadMaster;
use App\Submissions;
use App\Schedules;
use Illuminate\Http\Request;

class HeadMasterController extends Controller
{
    public function index()
    {
        
        return view('layouts.head_master.master');
    }

    public function list_submission()
    {
        $Submissions=Submissions::all();
        // $count = 0;
        return view('HeadMaster/list_submission');
    }

    public function list_cek_schedule()
    {
        $Schedule=Schedules::all();
        // $count = 0;
        return view('HeadMaster/list_cek_schedule');
    }

    public function approve()
    {
        return redirect('list_submission');
    }

    public function block()
    {
        return view('HeadMaster/block');
    }

    // public function store()
    // {
    //     return redirect('list_submission');
    // }
}
