<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subjects;
use App\Majors;
use App\Classes;

class SubjectController extends Controller
{
    public function list_subject()
    {
        $subject=Subjects::join('classes', 'classes.class_id','=','subjects.sbj_class_id')
        ->join('majors',  'majors.major_id', '=','subjects.sbj_major_id')->get();
          return view('admin/subject/list_subject', ['subject' => $subject]);
    }

    public function create()
    {
        $majors=Majors::all();
        return view('admin.subject.add_subject', compact('majors'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $message = ['required' => 'Inputan wajib di isi'];
        $request->validate([
          'class' => 'required',
          'major_name' => 'required',
          'name_subject' => 'required',
          'school_year'   => 'required',
        ], $message);

        $subject = new Subjects();
        $subject->sbj_class_id = $request->input('class');
        $subject->sbj_major_id = $request->input('major_name');
        $subject->name_subject = $request->input('name_subject');
        $subject->school_year = $request->input('school_year');
        $subject->save();
        return redirect('/admin/list_subject_admin');
    }

    public function edit($subject_id)
    {
         $majors= majors::all();
        $subjects= Subjects::all();
        $subject =Subjects::join('classes', 'classes.class_id','=','subjects.sbj_class_id')
                ->join('majors',  'majors.major_id', '=','subjects.sbj_major_id')
                ->where('subjects.subject_id',$subject_id)->first();

        return view('admin/subject/edit_subject', compact(['subject','subjects','majors']));
    }

    public function update(Request $request,$subject_id)
    {
     // dd($request);
      $message = ['required' => 'Inputan wajib di isi'];
      $request->validate([
          'name_subject' => 'required',
          'class' => 'required',
          'major_name' => 'required',
          'school_year'   => 'required',
          ], $message);

          $subject = Subjects::where('subject_id', $subject_id)->first();
        $subject->name_subject = $request->input('name_subject');  
        $subject->sbj_class_id = $request->input('class');
        $subject->sbj_major_id = $request->input('major_name');
        $subject->school_year = $request->input('school_year');
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