<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Schedules;
use App\Classes;
use App\Majors;
use App\Subjects;
use App\SchoolYears;
use App\Teacher;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        dd($class);
      

        return view('admin/schedule/list_schedule_admin',compact(['class']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        $subjects = Subjects::all();
        $classes = Classes::join('majors','classes.cl_major_id','=','majors.major_id')
        ->join('grades','classes.cl_grade_id','=','grades.grade_id')->get();
        $school_years = SchoolYears::all();
        $teachers = Teacher::join('users','teachers.user_id','=','users.usr_id')->get();

        return view('admin/schedule/add_schedule', compact('subjects','classes','school_years','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $schedule = new Schedules;
        $schedule->sch_teacher_id = $request->teacher;
        $schedule->sch_class_id = $request->class;
        $schedule->sch_school_year_id = $request->school_year;
        $schedule->sch_subject_id = $request->subject;
        $schedule->day = $request->day;
        $schedule->lesson_to = $request->lesson_to;
        $schedule->hour = $request->hour;
        $schedule->save();
        return redirect('/admin/list_schedule_admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($schedule_id)
    { 
        $subjects = Subjects::all();
        $teachers = Teacher::all();
        $classes = Classes::all();
        $subjects = Subjects::all();
       $school_years = SchoolYears::all();
       $schedules = Schedules::join('teachers','schedules.sch_teacher_id','=','teachers.teacher_id')
        ->join('users','teachers.user_id','=','users.usr_id')
        ->join('subjects','schedules.sch_subject_id','=','subjects.subject_id')
        ->join('curriculums','subjects.sbj_curriculum_id','=','curriculums.curriculum_id')
        ->join('school_years','schedules.sch_school_year_id','=','school_years.school_year_id')
        ->join('classes','schedules.sch_class_id','=','classes.class_id')
        ->join('majors','classes.cl_major_id','=','majors.major_id')
        ->join('grades','classes.cl_grade_id','=','grades.grade_id')->where('schedules.schedule_id',$schedule_id)->first();
        // dd($schedules);
        return view('admin/schedule/edit_schedule', compact('schedules','school_years','subjects','classes','teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }

     public function list_schedule()
    {
        $schedules = Schedules::join('teachers','schedules.sch_teacher_id','=','teachers.teacher_id')
        ->join('users','teachers.user_id','=','users.usr_id')
        ->join('subjects','schedules.sch_subject_id','=','subjects.subject_id')
        ->join('curriculums','subjects.sbj_curriculum_id','=','curriculums.curriculum_id')
        ->join('school_years','schedules.sch_school_year_id','=','school_years.school_year_id')
        ->join('classes','schedules.sch_class_id','=','classes.class_id')
        ->join('majors','classes.cl_major_id','=','majors.major_id')
        ->join('grades','classes.cl_grade_id','=','grades.grade_id')->get();
        // dd($schedules);
        return view('admin/schedule/list_schedule_admin', compact('schedules'));
    }

}