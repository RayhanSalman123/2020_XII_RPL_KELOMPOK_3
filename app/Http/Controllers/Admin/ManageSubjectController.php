<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Teacher;
use App\Subjects;
use App\TeacherSubject;

class ManageSubjectController extends Controller
{
   public function CreateSubject()
   {
   	$data['teacher']=Teacher::join('users','teachers.user_id','=','users.usr_id')->whereNotIn('teacher_id', [2])->get();
   	$data['subject']=Subjects::join('curriculums','subjects.sbj_curriculum_id','=','curriculums.curriculum_id')->whereNotIn('subject_id', [3, 4])->get();

   	return view('admin.manage_subject.add',$data);
   }


    public function StoreSubject(Request $request)
   {

   	$teacher_id=$request->input('teacher_id');
   	$subject_id = $request->input('subject_id');
   	$chek=TeacherSubject::whereTsTeacherId($teacher_id)
   	->whereTsSubjectId($subject_id)
   	->first();
   	if ($chek) {
   		return redirect('/admin/manage_subject')->withSuccess('Data Berhasil DiSimpan');
   	}else{
   		TeacherSubject::create([

   			'ts_teacher_id'=>$teacher_id,
   			'ts_subject_id'=>$subject_id
   		]);
   		return back();

   	}

   }
}
