<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Confirm;

class ConfirmController extends Controller
{
   public function index()
    {
        return view('admin/confirm/list_confirm');
    }


    public function list_confirm()
    {
        $confirm=Confirm::all();
        // $count = 0;
        return view('admin/confirm/list_confirm');
    }
}
