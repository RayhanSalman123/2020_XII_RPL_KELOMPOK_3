<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subjects;
use App\Majors;
use App\Classes;
use App\Curriculum;
use App\SchoolYears;

class SubjectController extends Controller
{
    public function list_subject()
    {
        $subject=Subjects::join('classes', 'classes.class_id','=','subjects.sbj_class_id')
        ->join('majors',  'majors.major_id', '=','subjects.sbj_major_id')
        ->join('curriculums', 'curriculums.curriculum_id' , '=', 'subjects.sbj_curriculum_id')
        ->join('school_years', 'school_years.school_year_id', '=', 'subjects.sbj_school_year_id')->get();
          return view('admin/subject/list_subject', ['subject' => $subject]);
    }

    public function create()
    {
        $majors=Majors::all();
        $school_year= SchoolYears::all();
        $curriculum= curriculum::all();
        return view('admin.subject.add_subject', compact('majors', 'school_year', 'curriculum'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $message = ['required' => 'Inputan wajib di isi'];
        $request->validate([
          'class' => 'required',
          'major_name' => 'required',
          'curriculum_name' => 'required',
          'school_year_name'   => 'required|numeric',
          'name_subject' => 'required',
        ], $message);

        $subject = new Subjects();
        $subject->sbj_class_id = $request->input('class');
        $subject->sbj_major_id = $request->input('major_name');
        $subject->sbj_curriculum_id = $request->input('curriculum_name');
        $subject->sbj_school_year_id = $request->input('school_year_name');
        $subject->name_subject = $request->input('name_subject');
        $subject->save();
        return redirect('/admin/list_subject_admin');
    }

    public function edit($subject_id)
    {
        $majors= majors::all();
        $curriculum= curriculum::all();
        $subjects= Subjects::all();
        $school_year= SchoolYears::all();
        $subject =Subjects::join('classes', 'classes.class_id','=','subjects.sbj_class_id')
                ->join('majors',  'majors.major_id', '=','subjects.sbj_major_id')
                ->join('curriculums', 'curriculums.curriculum_id' , '=', 'subjects.sbj_curriculum_id')
                ->join('school_years', 'school_years.school_year_id', '=', 'subjects.sbj_school_year_id')
                ->where('subjects.subject_id',$subject_id)->first();

        return view('admin/subject/edit_subject', compact(['subject','subjects','majors','curriculum','school_year']));
    }

    public function update(Request $request,$subject_id)
    {
     // dd($request);
      $message = ['required' => 'Inputan wajib di isi'];
      $request->validate([
          'name_subject' => 'required',
          'class' => 'required',
          'major_name' => 'required',
          'curriculum_name' => 'required',
          'school_year_name'   => 'required|numeric',
          ], $message);

        $subject = Subjects::where('subject_id', $subject_id)->first();
        $subject->name_subject = $request->input('name_subject');  
        $subject->sbj_class_id = $request->input('class');
        $subject->sbj_major_id = $request->input('major_name');
        $subject->sbj_curriculum_id = $request->input('curriculum_name');
        $subject->sbj_school_year_id = $request->input('school_year_name');
        $subject->update();
        return redirect('/admin/list_subject_admin');
    }
    

    public function delete($subject_id)
    {
        $subject = Subjects::find($subject_id);
        $subject->delete();
        return redirect('/admin/list_subject_admin');
    }
}