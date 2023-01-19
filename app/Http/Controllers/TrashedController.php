<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class TrashedController extends Controller
{
  public function index(){
    $clients = Client::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
    $projects = Project::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
    $tasks = Task::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
    return view('trashed.index', compact('projects', 'clients', 'tasks'));
  }
}
