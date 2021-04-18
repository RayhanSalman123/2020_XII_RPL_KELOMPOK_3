<?php

namespace App\Http\Controllers\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Day;
use App\Uniform;
use App\UniformSchedules;

class SchUniformController extends Controller
{
    public function list_sch_uniform()
    {
    	$sch_uniform= UniformSchedules::join('days', 'days.day_id', '=', 'uniform_schedules.unf_day_id')->
        join('uniforms', 'uniforms.urm_id', '=', 'uniform_schedules.unf_urm_id')->get();
        return view('student/sch_uniform/list_sch_uniform', ['sch_uniform' => $sch_uniform]);
    }
}
