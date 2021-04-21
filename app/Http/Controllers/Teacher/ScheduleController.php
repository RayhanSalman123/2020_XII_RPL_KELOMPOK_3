<?php

namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Schedules;
use App\Grades;
use App\TeacherSubject;
use App\Day;
use App\Hours;
use App\Classes;


class ScheduleController extends Controller
{
    public function index()
    {
        return view('teacher/schedule/list_schedule_teacher');
    }

    public function list_schedule_teacher()
    {
        $data['teacher'] = TeacherSubject::join('teachers', 'teacher_subjects.ts_teacher_id', '=', 'teachers.teacher_id')
            ->join('users', 'teachers.user_id', '=', 'users.usr_id')
            ->join('subjects', 'ts_subject_id', '=', 'subjects.subject_id')
            ->get();
        $data ['day'] = Day::whereNotIn('day_id', [1, 7])->get();
        $data  ['hour'] = Hours::all();
        $data ['class'] = Classes::join('grades', 'classes.cl_grade_id', '=', 'grades.grade_id')
            ->join('majors', 'classes.cl_major_id', '=', 'majors.major_id')
            ->get();
        return view('teacher.schedule.list_schedule_teacher', $data);
    }

    public function schedule($id)
    {
        return view('teacher/schedule/schedule',compact(['id']));
    }
}
