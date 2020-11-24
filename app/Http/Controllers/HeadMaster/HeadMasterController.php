<?php

namespace App\Http\Controllers\HeadMaster;

use App\Http\Controllers\Controller;
use App\HeadMaster;
use Illuminate\Http\Request;

class HeadMasterController extends Controller
{
    public function index()
    {
        
        return view('layouts.head_master.master');
    }
}
