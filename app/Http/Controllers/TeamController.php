<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function saveteam(Request $request)
    {

        $team = new Team;
        $team->name = $request->name;
        $team->save();

        Auth::user()->teams()->attach($team->id);

        return to_route('dashboard');
    }

    public function setTeam($id)
    {
        session(['teamid' => $id]);

        return to_route('dashboard');
    }
}
