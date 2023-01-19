<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Client;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
  public function index(){
    $projects = Project::all();
    $tasks = Task::all();
    $users = User::role('user')->get();
    return view('tasks.index', compact('projects', 'tasks', 'users'));
  }
  
  public function create(){
    return view('tasks.create');
  }
  
  public function store(Request $request){
    $validated = $request->validate(['name' => ['required', 'min:3'], 'description' => ['required', 'min:6'], 'project_id' => ['required'], 'user_id' => ['required']]);
    $task = new Task($validated);
    $project = Project::find($task->project_id);
    $project->tasks()->save($task);
    return to_route('tasks.index')->with('message', 'Tarea creada correctamente.');
  }
  
  public function edit(Task $task){
    $projects = Project::all();
    $users = User::role('user')->get();
    return view('tasks.edit', compact('task', 'projects', 'users'));
  }
  
  public function update(Request $request, Project $task){
    $validated = $request->validate(['name' => ['required', 'min:3'], 'description' => ['required', 'min:6']]);
    $task->update($validated);
    return to_route('tasks.index')->with('message', 'Tarea modificada correctamente.');
  }
  
  public function destroy(Task $task){
    $task->delete();
    return back()->with('message', 'Tarea eliminada.');
  }
  
  public function user_tasks(){
    $tasks = Task::where('user_id', auth()->user()->id)->get();
    // dd(auth()->user()->id, $tasks);
    return view('tasks.user_tasks', compact('tasks'));
  }
}
