<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\SchoolActivitiesAgenda;

class SaAgendaController extends Controller
{
    public function list_sa_agenda()
    {
        $sa_agenda=SchoolActivitiesAgenda::all();

        return view('Admin.sa_agenda.list_sa_agenda', ['sa_agenda' => $sa_agenda]);
    }

    public function create()
    {
    	
        return view('Admin.sa_agenda.add_sa_agenda');
    }

    public function store(Request $request)
    {
        
         // $message = ['required' => 'Inputan wajib di isi'];
         if($request->validate([
            'sa_date'        => 'required',
            'sa_description' => 'required',
            'sa_place'       => 'required'
          ])){

            $sa_agenda= SchoolActivitiesAgenda::where('sa_date',$request->input('sa_date'))->where('sa_description',$request->input('sa_description'))->where('sa_place',$request->input('sa_place'))->first();
         if ($sa_agenda) {
            Alert::error('Gagal', 'Agenda Sudah Tersedia'); 
             return back();
         }

        $sa_agenda = new SchoolActivitiesAgenda();
        $sa_agenda->sa_date          = $request->input('sa_date');
        $sa_agenda->sa_description   = $request->input('sa_description');
        $sa_agenda->sa_place         = $request->input('sa_place');
        $sa_agenda->save();
        return redirect('/admin/list_sa_agenda')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{
            return back();   
        }
    }

     public function edit($sa_id)
    {
        $sa_agenda=SchoolActivitiesAgenda::find($sa_id);
    	return view('admin/sa_agenda/edit_sa_agenda', ['sa_agenda' => $sa_agenda]);
    }

    public function update(Request $request, $sa_id)
    {
        // dd($request);
        // $message = ['required' => 'Inputan wajib di isi'];
        if($request->validate([
            'sa_date' => 'required',
            'sa_description' => 'required',
            'sa_place'       => 'required'
        ])){


            $sa_agenda = SchoolActivitiesAgenda::where('sa_id', $sa_id)->first();
            $sa_agenda_check = SchoolActivitiesAgenda::where('sa_date',$request->input('sa_date'))->where('sa_description',$request->input('sa_description'))->where('sa_place',$request->input('sa_place'))->first();
            // dd($sa_agenda_check);

            if ($sa_agenda_check) {
            Alert::error('Gagal', 'Agenda Sudah Tersedia'); 
             return back();
         }

         if($sa_agenda->sa_date == $request->sa_date && $sa_agenda->sa_description == $request->sa_description && $sa_agenda->sa_place == $request->sa_place){
            return redirect('/admin/list_sa_agenda');
         }

        $sa_agenda = SchoolActivitiesAgenda::where('sa_id', $sa_id)->first();
        $sa_agenda->sa_date          = $request->input('sa_date');
        $sa_agenda->sa_description   = $request->input('sa_description');
        $sa_agenda->sa_place         = $request->input('sa_place');
        $sa_agenda->update();
        return redirect('/admin/list_sa_agenda')->withSuccess('Berhasil', 'Agenda Berhasil DiUbah');
        }
    }

    public function delete($sa_id)
    {
        $sa_agenda = SchoolActivitiesAgenda::find($sa_id);
        $sa_agenda->delete();
        return redirect('/admin/list_sa_agenda')->withSuccess('Data Berhasil DiHapus');
    }
}
