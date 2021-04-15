<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Grades;


class GradeController extends Controller
{
    public function list_grade()
    {
        $grade=Grades::all();

        return view('Admin.grade.list_grade', ['grade' => $grade]);
    }

    public function create()
    {

        return view('Admin.grade.add_grade');
    }

    public function store(Request $request)
    {
        
         // $message = ['required' => 'Inputan wajib di isi'];
        if($request->validate([
            'grade_name' => 'required|unique:grades,grade_name',
          ])){

        $grade = new Grades();
        $grade->grade_name = $request->input('grade_name');
        $grade->save();
         return redirect('/admin/list_grade')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{
            return back();  
        }
    }

    public function delete($grade_id)
    {
        $grade = Grades::find($grade_id);
        $grade->delete();
        return redirect('/admin/list_grade')->withSuccess('Data Berhasil DiHapus');
    }
}