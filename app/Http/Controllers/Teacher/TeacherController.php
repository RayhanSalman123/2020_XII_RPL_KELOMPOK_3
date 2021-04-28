<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Submissions;
use App\Teacher;
use App\Subjects;
use App\Day;
use App\Hours;
use App\classes;
use App\majors;
use App\curriculum;
use App\SchoolYears;
use App\SchoolActivitiesAgenda;
use App\student;

use Alert;



class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=student::count();
        $subject=subjects::count();
        $teacher=teacher::count();
        $classes=classes::count();
        $Majors=majors::count();
        $curriculum=curriculum::count();
        $school_year=SchoolYears::count();
        $sa_agenda=SchoolActivitiesAgenda::count();
        return view('teacher.dashboard',compact(['student','teacher','subject', 'classes', 'Majors', 'curriculum', 'school_year', 'sa_agenda']));
    }


    public function submission()

    {
         $submissions=Submissions::join('users','users.usr_id','=','submissions.user_id')
                                    ->where('users.usr_id','=',auth()->user()->usr_id)
                                    ->join('subjects', 'subjects.subject_id', 'submissions.sbm_subject_id')
                                    ->orderBy('submissions.created_at','asc')->get();
        
                                  
        return view ('teacher/submission/mysubmission', ['submissions' => $submissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $data['teacher']=Teacher::join('users','teachers.user_id','=','users.usr_id')->where('teachers.user_id', Auth()->user()->usr_id)->first();
        $data['subject']=Subjects::whereNotIn('subject_id', [3, 4])->get();
        $data ['day'] = Day::whereNotIn('day_id', [1, 7])->get();
        $data  ['hour'] = Hours::whereNotIn('hour_id', [12, 13,14])->get();

        return view('teacher/submission/form_submission',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $check = Submissions::where('time', $request->hour_id)->where('day', $request->day_id)->first();
       if ($check) {
            Alert::error('Gagal', 'Jam pengajuan sudah digunakan');  
           return back();
       }
       // dd($request->all());
        $submission = new Submissions();
        $submission->user_id = $request->input('teacher_id');
        $submission->sbm_subject_id = $request->input('subject_id');
        $submission->time = $request->input('hour_id');
        $submission->day = $request->input('day_id');
        $submission->save();
        Alert::success('Berhasil', 'Data berhasil di ajukan');  
        return redirect('/teacher/mysubmission');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($submission_id)
    {
         $submissions = Submissions::find($submission_id);
        $submissions->delete();
        return redirect('/teacher/mysubmission')->withSuccess('Data Berhasil DiHapus');
    }
}
