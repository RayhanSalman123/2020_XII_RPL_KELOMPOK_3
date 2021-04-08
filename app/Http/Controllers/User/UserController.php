<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware(['auth']);
        $this->middleware('DisablePreventBack');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth()->user()->hasRole('student')) {
            return redirect('/index_student')
        }elseif(Auth()->user()->hasRole('teacher')){
            return redirect('index_teacher')
        }else{
            abort(404);
        }
    }
}
