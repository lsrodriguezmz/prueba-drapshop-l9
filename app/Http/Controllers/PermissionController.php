<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
      $permissions = Permission::all();
      return view('permissions.index', compact('permissions'));
    }
    
    public function create(){
      return view('permissions.create');
    }
    
    public function store(Request $request){
      $validated = $request->validate(['name' => ['required', 'min:3']]);
      Permission::create($validated);
      return to_route('permissions.index')->with('message', 'Permiso creado correctamente.');
    }
    
    public function edit(Permission $permission){
      return view('permissions.edit', compact('permission'));
    }
    
    public function update(Request $request, Permission $permission){
      $validated = $request->validate(['name' => ['required', 'min:3']]);
      $permission->update($validated);
      return to_route('permissions.index')->with('message', 'Permiso modificado correctamente.');
    }
}
