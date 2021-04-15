<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Note;
use App\Subjects;


class NoteController extends Controller
{
    public function list_note()
    {
    	$note=Note::join('subjects', 'subjects.subject_id', '=', 'notes.nt_subject_id')->get();
        return view('student/note/list_note', ['note' => $note]);
    }

    public function create()
    {

        $subject= Subjects::all();
        return view('student.note.add_note', compact('subject'));
    }

    public function store(Request $request)
    {
        
         // $message = ['required' => 'Inputan wajib di isi'];
         if($request->validate([
            'subject' => 'required|unique:subjects,name_subject',
            'nt_date' => 'required',
            'nt_name' => 'required|',
          ])){

        $note = new Note();
        $note->nt_subject_id = $request->input('subject');
        $note->nt_date = $request->input('nt_date');
        $note->nt_name = $request->input('nt_name');
        $note->save();
        return redirect('/student/list_note')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{
            return back();   
        }
    }

     public function edit($nt_id)
    {
        $subject= Subjects::all();
        $note=Note::join('subjects', 'subjects.subject_id', '=', 'notes.nt_subject_id')->where('nt_id', $nt_id)->first();
        


        return view('student/note/edit_note', compact(['note', 'subject']));
    }

    public function update(Request $request,$nt_id)
    {
        // dd($teacher_id);
        // $message = ['required' => 'Inputan wajib di isi'];
        if($request->validate([
            'subject' => 'required|unique:subjects,name_subject',
            'nt_date' => 'required',
            'nt_name' => 'required',
        ])){

        $note = Note::where('nt_id',$nt_id)->first();
        $note->nt_subject_id= $request->input('subject');
        $note->nt_date = $request->input('nt_date');
        $note->nt_name = $request->input('nt_name');
        $note->update();
        return redirect('/student/list_note')->withSuccess('Berhasil', 'Data Berhasil DiSimpan');
        }else{
            return back();   
        }
    }

    public function delete($nt_id)
    {
        $note = Note::find($nt_id);
        $note->delete();
        return redirect('/student/list_note')->withSuccess('Data Berhasil DiHapus');
    }
}