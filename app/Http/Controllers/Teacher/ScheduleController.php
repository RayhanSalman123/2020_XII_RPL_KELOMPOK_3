<?php

namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Schedules;


class ScheduleController extends Controller
{
    public function index()
    {
        return view('teacher/schedule/list_schedule_teacher');
    }

    public function list_schedule_teacher()
    {
        $schedules=Schedules::all();
        // $count = 0;
        return view('teacher/schedule/list_schedule_teacher');
    }
}
