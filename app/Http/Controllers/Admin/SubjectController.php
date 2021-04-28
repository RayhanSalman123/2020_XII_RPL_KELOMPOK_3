<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Subjects;
use App\Majors;
use App\Classes;
use App\Curriculum;
use App\SchoolYears;

class SubjectController extends Controller
{
    public function list_subject()
    {
        $subject=Subjects::join('curriculums', 'curriculums.curriculum_id' , '=', 'subjects.sbj_curriculum_id')
                          ->leftJoin('majors', 'majors.major_id' , '=', 'subjects.sbj_major_id')
                          ->whereNotIn('subject_id', [3, 4])
                          ->get();
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
        // $message = ['required' => 'Inputan wajib di isi'];
        if($request->validate([
          'curriculum_name' => 'required',
          'name_subject' => 'required',
        ])){

            $subject= Subjects::where('sbj_curriculum_id',$request->input('curriculum_name'))->where('name_subject',$request->input('name_subject'))->first();
         if ($subject) {
            Alert::error('Gagal', 'Data Sudah Tersedia'); 
             return back();
         }

        $subject = new Subjects();
        $subject->sbj_curriculum_id = $request->input('curriculum_name');
        $subject->name_subject = $request->input('name_subject');
        $subject->save();
        return redirect('/admin/list_subject_admin')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{
            return back();  
        }
    }

    public function edit($subject_id)
    {
        $majors= majors::all();
        $curriculum= curriculum::all();
        $subjects= Subjects::all();
        $school_year= SchoolYears::all();
        $subject =Subjects::join('curriculums', 'curriculums.curriculum_id' , '=', 'subjects.sbj_curriculum_id')
                            ->where('subjects.subject_id',$subject_id)->first();

        return view('admin/subject/edit_subject', compact(['subject','subjects','majors','curriculum','school_year']));
    }

    public function update(Request $request,$subject_id)
    {
     // dd($request);
      // $message = ['required' => 'Inputan wajib di isi'];
      if($request->validate([
          'name_subject' => 'required',
          'curriculum_name' => 'required',
          ])){

            $subject = Subjects::where('subject_id', $subject_id)->first();
            $subject_check = Subjects::where('name_subject',$request->input('name_subject'))->where('sbj_curriculum_id',$request->input('curriculum_name'))->first();
            

            if ($subject_check) {
            Alert::error('Gagal', 'Data Sudah Tersedia'); 
             return back();
         }

         if($subject->name_subject == $request->name_subject && $subject->sbj_curriculum_id == $request->curriculum_name){
            return redirect('/admin/list_subject_admin');
         }

        $subject = Subjects::where('subject_id', $subject_id)->first();
        $subject->name_subject = $request->input('name_subject');  
        $subject->sbj_curriculum_id = $request->input('curriculum_name');
        $subject->update();
        return redirect('/admin/list_subject_admin')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{
            return back();  
        }
    }
    

    public function delete($subject_id)
    {
        $subject = Subjects::find($subject_id);
        $subject->delete();
        return redirect('/admin/list_subject_admin')->withSuccess('Data Berhasil DiHapus');;
    }
}