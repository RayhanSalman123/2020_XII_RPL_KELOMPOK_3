<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Classes;
use App\Majors;
use App\Grades;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_class()
    {
         $class=Classes::join('majors', 'majors.major_id','=','classes.cl_major_id')->
                         join('grades', 'grades.grade_id','=','classes.cl_grade_id')->get();


        return view('admin.class.list_class', ['class' => $class]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $major=Majors::all();
        $grades = Grades::all();
        return view('admin.class.add_class',compact('major','grades'));

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         // $message = ['required' => 'Inputan wajib di isi'];
         if($request->validate([
            'grade' => 'required|',
            'major' => 'required',
            'group' => 'required|numeric'
          ])){


         $class= classes::where('cl_grade_id',$request->input('grade'))->where('cl_major_id',$request->input('major'))->where('group',$request->input('group'))->first();
         if ($class) {
            Alert::error('Gagal', 'Data Sudah Tersedia'); 
             return back();
         }

        $class = new Classes();
        $class->cl_grade_id = $request->input('grade');
        $class->cl_major_id = $request->input('major');
        $class->group = $request->input('group');
        $class->save();
        return redirect('/admin/list_class')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{
            return back();  
        }
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
         $grades = Grades::all();
         $class=Classes::join('majors', 'majors.major_id','=','classes.cl_major_id')->where('classes.class_id',$class_id)->first();
         $major=Majors::where('major_id','!=','cl_major_id')->get();

        // $class=Classes::find($class_id);
        return view('admin/class/edit_class', compact(['class','major','grades']));
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
      // dd($request);
        // $message = ['required' => 'Inputan wajib di isi'];
         if($request->validate([
            'grade' => 'required|',
            'major_name' => 'required',
            'group' => 'required|numeric'
          ])){

            $class= classes::where('cl_grade_id',$request->input('grade'))->where('cl_major_id',$request->input('major'))->where('group',$request->input('group'))->first();
         if ($class) {
            Alert::error('Gagal', 'Data Sudah Tersedia'); 
             return back();
         }
         

        $class = Classes::where('class_id', $class_id)->first();
        $class->cl_grade_id = $request->input('grade');
        $class->cl_major_id = $request->input('major_name');
        $class->group = $request->input('group');
        $class->update();
        return redirect('/admin/list_class')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{ 
            return back();  
        }
          
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
        return redirect('/admin/list_class')->withSuccess('Data Berhasil DiHapus');
    }
}

               