<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(){
      $roles = Role::all();
      return view('roles.index', compact('roles'));
    }
    
    public function create(){
      return view('roles.create');
    }
    
    public function store(Request $request){
      $validated = $request->validate(['name' => ['required', 'min:3']]);
      Role::create($validated);
      return to_route('roles.index')->with('message', 'Rol creado correctamente.');
    }
    
    public function edit(Role $role){
      $permissions = Permission::all();
      return view('roles.edit', compact('role', 'permissions'));
    }
    
    public function update(Request $request, Role $role){
      $validated = $request->validate(['name' => ['required', 'min:3']]);
      $role->update($validated);
      return to_route('roles.index')->with('message', 'Rol modificado correctamente.');
    }
    
    public function destroy(Role $role){
      $role->delete();
      return back()->with('message', 'Rol eliminado.');
    }
    
    public function givePermission(Request $request, Role $role){
      if ($role->hasPermissionTo($request->permission)) {
        return back()->with('message', 'Este permiso ya fue otorgado.');
      }else {
        $role->givePermissionTo($request->permission);
        return back()->with('message', 'Permiso otorgado.');
      }
    }
    
    public function revokePermission(Role $role, Permission $permission){
      if ($role->hasPermissionTo($permission)) {
        $role->revokePermissionTo($permission);
        return back()->with('message', 'Permiso removido.');
      }else {
        return back()->with('message', 'El Permiso no se encuentra.');
      }
    }
}
