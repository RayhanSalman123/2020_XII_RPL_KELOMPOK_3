<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Curriculum;

class CurriculumController extends Controller
{
    public function list_curriculum()
    {
        $curriculum=Curriculum::all();

        return view('Admin.curriculum.list_curriculum', ['curriculum' => $curriculum]);
    }

    public function create()
    {

        return view('Admin.curriculum.add_curriculum');
    }

    public function store(Request $request)
    {
        
        $curriculum= Curriculum::where('curriculum_name',$request->input('curriculum_name'))->first();
         if ($curriculum) {
            Alert::error('Gagal', 'Kurikulum Sudah Tersedia'); 
             return back();
         }
        
         $message = ['required' => 'Inputan wajib di isi'];
         if($request->validate([
            'curriculum_name' => 'required|unique:curriculums,curriculum_name',
          ])){



        $curriculum = new Curriculum();
        $curriculum->curriculum_name = $request->input('curriculum_name');
        $curriculum->save();
        return redirect('/admin/list_curriculum')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }
    }

    public function delete($curriculum_id)
    {
        $curriculum = Curriculum::find($curriculum_id);
        $curriculum->delete();
        return redirect('/admin/list_curriculum')->withSuccess('Data Berhasil DiHapus');
    }
}
