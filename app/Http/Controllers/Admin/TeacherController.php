<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;
use App\Subjects;
use App\User;
use Hash;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    public function index()
    {
        return view('admin/teacher/list_teacher');
    }

     public function create()
    {
        $subjects = Subjects::all();
        return view('admin.teacher.add_teacher', compact('subjects'));
    }

    public function store(Request $request)
    {
        $message = ['required' => 'Inputan wajib di isi'];
        $request->validate([
            'nip' => 'required|unique:teachers,nip|numeric|min:0',
            'usr_name' => 'required',
            'usr_email' => 'required|unique:users,usr_email',
            'gender' => 'required',
        ], $message);

        $nip = $request -> input('nip');
        $usr_name = $request -> input('usr_name');
        $usr_email = $request -> input('usr_email');
        $gender= $request -> input('gender');

        $user = new User;
        $user->usr_name = $usr_name;
        $user->usr_email = $usr_email;
        $user->usr_password = Hash::make('qwerty');
        $user->usr_is_active = 1;
        $user->usr_email_verified_at = date('Y-m-d H:i:s');
        //ini buat role
        $user->assignRole('teacher');

       if ($user->save()) {
            $teacher = new Teacher();
            $teacher->user_id = $user->usr_id;
            $teacher->nip = $nip;
            $teacher->gender = $gender;
            $teacher->save();
       }

        return redirect('admin/list_teacher');
        

    }


    public function list_teacher()
    {
        $teachers=Teacher::join('users', 'teachers.user_id','=','users.usr_id')->get();

        return view('admin/teacher/list_teacher',compact('teachers'));
    }

    public function delete($teacher_id)
    {

        $teacher = Teacher::where('teacher_id', $teacher_id)->first();

        $teacher->delete();
        return redirect('/admin/list_teacher');
    }

     public function edit($teacher_id)
    {
        $subjects = Subjects::all();
         $teacher=Teacher::join('users', 'teachers.user_id','=','users.usr_id')->where('teacher_id', $teacher_id)->first();


        return view('admin/teacher/edit_teacher', compact(['teacher', 'subjects']));
    }

    public function update(Request $request,$teacher_id)
    {
        // dd($teacher_id);
        $message = ['required' => 'Inputan wajib di isi'];
        $request->validate([
            'nip' => 'required|numeric|min:5',
            'usr_name' => 'required',
            'gender' => 'required',
        ], $message);

        $teacher = Teacher::where('teacher_id',$teacher_id)->first();
        $teacher->nip = $request->input('nip');
        $teacher->gender = $request->input('gender');
        $teacher->update();

        $user = User::where('usr_id',$teacher->user_id)->first();
        $user->usr_name = $request->input('usr_name');
        $user->update();
        return redirect('/admin/list_teacher');
    }
}
