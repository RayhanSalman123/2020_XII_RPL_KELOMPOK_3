<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SchoolActivitiesAgenda;

class SaAgendaController extends Controller
{
    public function list_sa_agenda()
    {
        $sa_agenda=SchoolActivitiesAgenda::all();

        return view('teacher.sa_agenda.list_sa_agenda', ['sa_agenda' => $sa_agenda]);
    }

}
