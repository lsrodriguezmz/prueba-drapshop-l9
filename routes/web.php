<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrashedController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     // return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth', 'verified', 'role:admin']], function() {
    Route::resource('roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('permissions', PermissionController::class);
    Route::resource('trashed', TrashedController::class);
});

Route::group(['middleware' => ['auth', 'verified', 'role:manager']], function() {
    Route::resource('clients', ClientController::class);
    Route::post('/clients/{client}/projects', [ClientController::class, 'addProject'])->name('clients.projects');
    Route::delete('/clients/{client}/projects/{project}', [ClientController::class, 'removeProject'])->name('clients.projects.remove');
    Route::resource('projects', ProjectController::class);
    Route::post('/projects/{project}/projects', [ProjectController::class, 'addTask'])->name('projects.tasks');
    Route::delete('/projects/{project}/projects/{task}', [ProjectController::class, 'removeTask'])->name('projects.tasks.remove');
    Route::resource('tasks', TaskController::class);
});

Route::group(['middleware' => ['auth', 'verified', 'role:user']], function() {
    Route::get('/user_tasks', [TaskController::class, 'user_tasks'])->name('user.tasks');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
