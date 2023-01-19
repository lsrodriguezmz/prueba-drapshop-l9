<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
  public function index(){
    $roles = Role::count();
    $permissions = Permission::count();
    $clients = Client::count();
    $projects = Project::count();
    $tasks = Task::count();
    $user_tasks = Task::where('user_id', auth()->user()->id)->count();
    $users = User::count();
    $trashed = Client::onlyTrashed()->count() + Project::onlyTrashed()->count() + Task::onlyTrashed()->count();
    
    return view('dashboard', compact('roles','permissions','clients','projects','tasks','user_tasks','users','trashed'));
  }
}
