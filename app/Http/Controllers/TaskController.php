<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'priority' => 'numeric|required',
        ]);

        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->priority = $request->priority;
        if ($request->team_id){
            $task->team_id = $request->team_id;
        }
        $task->created_by = Auth::user()->id;
        $task->save();
    }
}
