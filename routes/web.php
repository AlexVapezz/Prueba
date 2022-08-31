<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\IncidenceController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\UserController;

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
    return view('init');
});

Route::get('rol', [RoleController::class, 'show']);

Route::get('project', [ProjectController::class, 'index']);

Route::get('incidence', [IncidenceController::class, 'index']);

Route::get('activity', [ActivityController::class, 'index']);

Route::get('user', [UserController::class, 'show']);

Route::post('addIncidence', [IncidenceController::class, 'store']);

Route::post('addActivity', [ActivityController::class, 'store']);

Route::post('addProject', [ProjectController::class, 'store']);