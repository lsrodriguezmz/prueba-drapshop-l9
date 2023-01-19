<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Client;
use App\Models\Task;

class ProjectController extends Controller
{
  public function index(){
    $clients = Client::all();
    $projects = Project::all();
    return view('projects.index', compact('projects', 'clients'));
  }
  
  public function create(){
    return view('projects.create');
  }
  
  public function store(Request $request){
    $validated = $request->validate(['name' => ['required', 'min:3'], 'description' => ['required', 'min:6'], 'client_id' => ['required']]);
    $project = new Project($validated);
    $client = Client::find($project->client_id);
    $client->projects()->save($project);
    return to_route('projects.index')->with('message', 'Proyecto creado correctamente.');
  }
  
  public function edit(Project $project){
    $clients = Client::all();
    $orphan_tasks = Task::where('project_id', null)->get(); // buscar tareas huerfanas
    $tasks = Project::find($project->id)->tasks; // buscar tareas del proyecto
    return view('projects.edit', compact('project', 'clients', 'orphan_tasks', 'tasks'));
  }
  
  public function update(Request $request, Project $project){
    $validated = $request->validate(['name' => ['required', 'min:3'], 'description' => ['required', 'min:6']]);
    $project->update($validated);
    return to_route('projects.index')->with('message', 'Proyecto modificado correctamente.');
  }
  
  public function destroy(Project $project){
    $project->delete();
    return back()->with('message', 'Proyecto eliminado.');
  }
  
  public function addTask(Request $request, Project $project){
    $task = Task::find($request->task);
    $task->project_id = $project->id;
    $task->save();
    return back()->with('message', 'Tarea agregada.');
  }
  
  public function removeTask(Project $project, Task $task){
    $remove = Project::find($project->id)->tasks()->where('id', $task->id)->first()->toArray();
    $remove['project_id'] = null;
    $task->update($remove);
    return back()->with('message', 'Tarea removida.');
  }
}
