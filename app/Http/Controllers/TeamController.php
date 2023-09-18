<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function index()
    {

    }

    public function teamselect()
    {
        $teams = Auth::user()->team;

        return view('auth.teamselect', ['teams' => $teams]);
    }
}
