<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;
use App\Subjects;
use App\TeacherSubject;

class ManageSubjectController extends Controller
{
   public function CreateSubject()
   {
   	$data['teacher']=Teacher::join('users','teachers.user_id','=','users.usr_id')->get();
   	$data['subject']=Subjects::join('curriculums','subjects.sbj_curriculum_id','=','curriculums.curriculum_id')->get();

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
   		return back();
   	}else{
   		TeacherSubject::create([

   			'ts_teacher_id'=>$teacher_id,
   			'ts_subject_id'=>$subject_id
   		]);
   		return back();

   	}

   }
}
