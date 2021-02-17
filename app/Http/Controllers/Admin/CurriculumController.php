<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        
         $message = ['required' => 'Inputan wajib di isi'];
         $request->validate([
            'curriculum_name' => 'required|unique:curriculums,curriculum_name',
          ], $message);


        $curriculum = new Curriculum();
        $curriculum->curriculum_name = $request->input('curriculum_name');
        $curriculum->save();
        return redirect('/admin/list_curriculum');
    }

    public function delete($curriculum_id)
    {
        $curriculum = Curriculum::find($curriculum_id);
        $curriculum->delete();
        return redirect('/admin/list_curriculum');
    }
}
