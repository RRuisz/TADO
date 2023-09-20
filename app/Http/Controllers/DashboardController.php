<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }


    public function team()
    {
        return view ('dashboard.team');
    }

    public function taskoverview()
    {
        return view('dashboard.taskoverview');
    }
}
