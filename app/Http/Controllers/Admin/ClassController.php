<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_class()
    {
        $class=Classes::all();
        return view('admin.class.list_class', ['class' => $class]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.class.add_class');
    }



    public function add_major()   
    {
         $teachers=Teacher::join('users', 'teachers.user_id','=','users.usr_id')
                ->join('subjects', 'teachers.tcr_subject_id', '=', 'subjects.subject_id')->get();

             return view('admin/teacher/list_teacher',compact('teachers'));
    }   


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $message = ['required' => 'Inputan wajib di isi'];
         $request->validate([
            'class' => 'required|max:3',
            'major' => 'required',
          ], $message);


        $class = new Classes();
        $class->class = $request->input('class');
        $class->major = $request->input('major');
        $class->save();
        return redirect('/admin/list_class');
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
    public function edit($class_id)
    {
        $class=Classes::find($class_id);
        return view('admin/class/edit_class', ['class' => $class]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $class_id)
    {

        $message = ['required' => 'Inputan wajib di isi'];
         $request->validate([
            'class' => 'required|max:3',
            'major' => 'required',
          ], $message);
         

        $class = Classes::where('class_id', $class_id)->first();
        $class->class = $request->class;
        $class->major = $request->major;
        $class->update();
        return redirect('/admin/list_class');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function delete($class_id)
    {
        $class = Classes::find($class_id);
        $class->delete();
        return redirect('/admin/list_class');
    }
}

               