<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;

class ClientController extends Controller
{
  public function index(){
    $clients = Client::all();
    return view('clients.index', compact('clients'));
  }
  
  public function create(){
    return view('clients.create');
  }
  
  public function store(Request $request){
    $validated = $request->validate(['name' => ['required', 'min:3'], 'description' => ['required', 'min:6']]);
    Client::create($validated);
    return to_route('clients.index')->with('message', 'Cliente creado correctamente.');
  }
  
  public function edit(Client $client){
    $orphan_projects = Project::where('client_id', null)->get(); // buscar proyectos huerfanos
    $projects = Client::find($client->id)->projects; // buscar proyectos del cliente
    return view('clients.edit', compact('client', 'projects', 'orphan_projects'));
  }
  
  public function update(Request $request, Client $client){
    $validated = $request->validate(['name' => ['required', 'min:3'], 'description' => ['required', 'min:6']]);
    $client->update($validated);
    return to_route('clients.index')->with('message', 'Cliente modificado correctamente.');
  }
  
  public function destroy(Client $client){
    $client->delete();
    return back()->with('message', 'Cliente eliminado.');
  }
  
  public function addProject(Request $request, Client $client){
    $project = Project::find($request->project);
    $project->client_id = $client->id;
    $project->save();
    return back()->with('message', 'Proyecto agregado.');
  }
  
  public function removeProject(Client $client, Project $project){
    $remove = Client::find($client->id)->projects()->where('id', $project->id)->first()->toArray();
    $remove['client_id'] = null;
    $project->update($remove);
    return back()->with('message', 'Proyecto removido.');
  }
  
}
