<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Schedules;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('student/schedule/list_schedule');
    }


    public function list_schedule()
    {
        $schedule=Schedules::all();
        // $count = 0;
        return view('student/schedule/list_schedule');
    }
}
