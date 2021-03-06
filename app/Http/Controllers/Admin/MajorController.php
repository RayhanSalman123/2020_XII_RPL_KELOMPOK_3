<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Majors;
use RealRashid\SweetAlert\Facades\Alert;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Majors=Majors::all();

        return view('Admin.Major.manage_major', ['Majors' => $Majors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.Major.add_major');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $major= Majors::where('major_name', $request->input('major'))->first();
         if ($major) {
            Alert::error('Gagal', 'Jurusan Sudah Tersedia'); 
             return back();
         }

       if($request->validate([
        'major' => 'required|unique:majors,major_name',
        ])){  

        $major = new Majors();
        $major->major_name = $request->input('major');
        $major->save();
        return redirect('/admin/manage_major')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{
            return back();   
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($major_id)
    {
        $major = Majors::find($major_id);
        $major->delete();
        return redirect('/admin/manage_major')->withSuccess('Data Berhasil DiHapus');
    }
}
