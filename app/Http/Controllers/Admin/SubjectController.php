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
        $Majors=Majors::all();
        return view('admin.subject.add_subject', compact('Majors'));
    }

    public function store(Request $request)
    {
        $message = ['required' => 'Inputan wajib di isi'];
        $request->validate([
          'sbj_class_id' => 'required',
          'sbj_major_id' => 'required',
          'name_subject' => 'required',
          'curriculum'   => 'required',
        ], $message);

        $subject = new Subjects();
        $subject->sbj_class_id = $request->input('sbj_class_id');
        $subject->sbj_major_id = $request->input('sbj_major_id');
        $subject->name_subject = $request->input('name_subject');
        $subject->curriculum = $request->input('curriculum');
        $subject->save();
        return redirect('/admin/list_subject_admin');
    }

    public function edit($subject_id)
    {
        $subject = Subjects::all();
        $subject=Subjects::join('classes', 'classes.class_id','=','subjects.sbj_class_id')
                ->join('majors',  'majors.major_id', '=','subjects.sbj_major_id')
                ->where('subjects.subject_id',$subject_id)->first();

        return view('admin/subject/list_subject', compact(['subject']));
    }

    public function update(Request $request,$subject_id)
    {
      $message = ['required' => 'Inputan wajib di isi'];
      $request->validate([
          'sbj_class_id' => 'required',
          'sbj_major_id' => 'required',
          'name_subject' => 'required',
          'curriculum'   => 'required',
          ], $message);

           $subject = new Subjects();
           $subject->sbj_class_id = $request->input('sbj_class_id');
           $subject->sbj_major_id = $request->input('sbj_major_id');
           $subject->name_subject = $request->input('name_subject');
           $subject->curriculum = $request->input('curriculum');
           $subject->save();
           return redirect('/admin/list_subject_admin');
    }

    public function delete($subject_id)
    {
        $subject = Subjects::find($subject_id);
        $subject->delete();
        return redirect('/admin/list_subject_admin');
    }
}