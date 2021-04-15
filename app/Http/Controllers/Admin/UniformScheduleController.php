<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Day;
use App\UniformSchedules;

class UniformScheduleController extends Controller
{
    public function list_uniform()
    {
    	$uniform= UniformSchedules::join('days', 'days.day_id', '=', 'uniform_schedules.unf_day_id')->get();
        return view('admin/uniform/list_uniform', ['uniform' => $uniform]);
    }

    public function create()
    {

        $day= Day::all();
        return view('admin.uniform.add_uniform', compact('day'));
    }

    public function store(Request $request)
    {
        
         // $message = ['required' => 'Inputan wajib di isi'];
         if($request->validate([
            'day_id'			 => 'required',
            'unf_name_uniform'	 => 'required',
            'unf_week' 			 => 'required|numeric',
          ])){


        $uniform = new UniformSchedules();
        $uniform->unf_day_id 		= $request->input('day_id');
        $uniform->unf_name_uniform	= $request->input('unf_name_uniform');
        $uniform->unf_week			= $request->input('unf_week');
        $uniform->save();
        return redirect('/admin/list_uniform')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{ 
            return back();  
        }
    }

     public function edit($unf_id)
    {
        $day= Day::all();
        $uniform= UniformSchedules::join('days', 'days.day_id', '=', 'uniform_schedules.unf_day_id')->where('unf_id', $unf_id)->first();
        
        return view('admin/uniform/edit_uniform', compact(['uniform', 'day']));
    }

    public function update(Request $request, $unf_id)
    {
        
        // $message = ['required' => 'Inputan wajib di isi'];
        if($request->validate([
            'day_id'			 => 'required',
            'unf_name_uniform'	 => 'required',
            'unf_week' 			 => 'required|numeric',
        ])){

        $uniform = UniformSchedules::where('unf_id',$unf_id)->first();
        $uniform->unf_day_id		= $request->input('day_id');
        $uniform->unf_name_uniform	= $request->input('unf_name_uniform');
        $uniform->unf_week		 	= $request->input('unf_week');
        $uniform->update();
        return redirect('/admin/list_uniform')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{ 
            return back();  
        }
    }

    public function delete($unf_id)
    {
        $uniform = UniformSchedules::find($unf_id);
        $uniform->delete();
        return redirect('/admin/list_uniform')->withSuccess('Data Berhasil DiHapus');;
    }
}