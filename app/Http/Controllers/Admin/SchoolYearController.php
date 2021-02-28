<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SchoolYears;

class SchoolYearController extends Controller
{
    public function list_school_year()
    {
        $school_year=SchoolYears::all();

        return view('Admin.school_year.list_school_year', ['school_year' => $school_year]);
    }

    public function create()
    {

        return view('Admin.school_year.add_school_year');
    }

    public function store(Request $request)
    {
        
         $message = ['required' => 'Inputan wajib di isi'];
         $request->validate([
            'school_year_name' => 'required|numeric|unique:school_years,school_year_name',
          ], $message);


        $school_year = new SchoolYears();
        $school_year->school_year_name = $request->input('school_year_name');
        $school_year->save();
        return redirect('/admin/list_school_year');
    }

    public function delete($school_year_id)
    {
        $school_year = SchoolYears::find($school_year_id);
        $school_year->delete();
        return redirect('/admin/list_school_year');
    }
}
