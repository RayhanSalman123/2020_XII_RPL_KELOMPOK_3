<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Day;
use App\Uniform;
use App\UniformSchedules;

class UniformScheduleController extends Controller
{
    public function list_schedule_uniform()
    {
    	$schedule_uniform= UniformSchedules::join('days', 'days.day_id', '=', 'uniform_schedules.unf_day_id')->
        join('uniforms', 'uniforms.urm_id', '=', 'uniform_schedules.unf_urm_id')->get();
        return view('admin/schedule_uniform/list_schedule_uniform', ['schedule_uniform' => $schedule_uniform]);
    }

    public function create()
    {

        $day= Day::all();
        $uniform= uniform::all();
        $data ['day'] = Day::whereNotIn('day_id', [1, 7])->get();
        return view('admin.schedule_uniform.add_schedule_uniform', $data, compact('day', 'uniform'));

    }

    public function store(Request $request)
    {
        
         // $message = ['required' => 'Inputan wajib di isi'];
         if($request->validate([
            'day_id'			 => 'required',
            'uniform'	         => 'required|unique:uniform_schedules,unf_urm_id',
            'unf_week' 			 => 'required',
          ])){
            
        $schedule_uniform = new UniformSchedules();
        $schedule_uniform->unf_day_id 		= $request->input('day_id');
        $schedule_uniform->unf_urm_id   	= $request->input('uniform');
        $schedule_uniform->unf_week			= $request->input('unf_week');
        $schedule_uniform->save();
        return redirect('/admin/list_schedule_uniform')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{ 
            return back();  
        }
    }

     public function edit($unf_id)
    {
        $day= Day::all();
        $uniform= uniform::all();
        $data ['day'] = Day::whereNotIn('day_id', [1, 7])->get();
        $schedule_uniform= UniformSchedules::join('days', 'days.day_id', '=', 'uniform_schedules.unf_day_id')->where('unf_id', $unf_id)->first();
        
        return view('admin/schedule_uniform/edit_schedule_uniform', $data, compact(['schedule_uniform', 'day', 'uniform']));
    }

    public function update(Request $request, $unf_id)
    {
        
        // $message = ['required' => 'Inputan wajib di isi'];
        if($request->validate([
            'day_id'			 => 'required|',
            'uniform'            => 'required',
            'unf_week' 			 => 'required',
        ])){

            $schedule_uniform = UniformSchedules::where('unf_id', $unf_id)->first();
            $schedule_uniform_check = UniformSchedules::where('unf_day_id',$request->input('day_id'))->where('unf_urm_id',$request->input('uniform'))->where('unf_week',$request->input('unf_week'))->first();
            

            if ($schedule_uniform_check) {
            Alert::error('Gagal', 'Jadwal Sudah Tersedia'); 
             return back();
         }

         if($schedule_uniform->unf_day_id == $request->day_id && $schedule_uniform->unf_urm_id == $request->uniform && $schedule_uniform->unf_week == $request->unf_week){
            return redirect('/admin/list_schedule_uniform');
         }

        $schedule_uniform = UniformSchedules::where('unf_id',$unf_id)->first();
        $schedule_uniform->unf_day_id		= $request->input('day_id');
        $schedule_uniform->unf_urm_id       = $request->input('uniform');
        $schedule_uniform->unf_week		 	= $request->input('unf_week');
        $schedule_uniform->update();
        return redirect('/admin/list_schedule_uniform')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{ 
            return back();  
        }
    }

    public function delete($unf_id)
    {
        $schedule_uniform = UniformSchedules::find($unf_id);
        $schedule_uniform->delete();
        return redirect('/admin/list_schedule_uniform')->withSuccess('Data Berhasil DiHapus');;
    }
}