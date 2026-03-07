<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.layout.main'); //load file yg dibuat tadi
    }

    public function dashboard()
    {
        return view('backend.content.dashboard');  // arahkan ke views


    }

    public function profile()
    {
        return view('backend.content.profile'); //arahkan ke views

    }


}
