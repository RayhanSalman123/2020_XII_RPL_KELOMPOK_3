<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SchoolActivitiesAgenda;

class SaAgendaController extends Controller
{
     public function list_sa_agenda()
    {
        $sa_agenda=SchoolActivitiesAgenda::all();

        return view('student.sa_agenda.list_sa_agenda', ['sa_agenda' => $sa_agenda]);
    }
}
