<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Uniform;


class UniformController extends Controller
{
     public function list_uniform()
    {
        $uniform= Uniform::all();
        return view('admin/uniform/list_uniform', ['uniform' => $uniform]);
    }

    public function create()
    {

        return view('admin.uniform.add_uniform');

    }

    public function store(Request $request)
    {

        if($request->validate([
        'urm_name' => 'required|unique:uniforms,urm_name',
        ])){  

        $uniform = new Uniform();
        $uniform->urm_name = $request->input('urm_name');
        $uniform->save();
        return redirect('/admin/list_uniform')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{
            return back();   
        }
    }

     public function edit($urm_id)
    {
        $uniform=Uniform::find($urm_id);
        return view('admin/uniform/edit_uniform', ['uniform' => $uniform]);
    }

    public function update(Request $request, $urm_id)
    {
        // $message = ['required' => 'Inputan wajib di isi'];
        if($request->validate([
            'urm_name' => 'required|unique:uniforms,urm_name',
        ])){

        $uniform = Uniform::where('urm_id',$urm_id)->first();;
        $uniform->urm_name         = $request->input('urm_name');
        $uniform->update();
        return redirect('/admin/list_uniform')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{ 
            return back();  
        }
    }

    public function delete($urm_id)
    {
        $uniform = Uniform::find($urm_id);
        $uniform->delete();
        return redirect('/admin/list_uniform')->withSuccess('Data Berhasil DiHapus');
    }
}
