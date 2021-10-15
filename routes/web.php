<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;

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
    return "Página inicial";
})-> name('inicio');

// Registro de rotas individualmente
/* Route:: get('/dashboard/tasks',[TaskController::class,'index']);

Route:: get('/dashboard/tasks/create',[TaskController::class,'create']);

Route:: post('/dashboard/tasks/store',[TaskController::class,'store'])-> name('tasks.store');

Route:: get('/dashboard/tasks/{id}/show', [TaskController:: class, 'show']); */


// Registro de rotas por meio do Controller Resource

//Route::resource('/painel',TaskController::class);
Route::resource('/painel',TaskController::class)->except([
    'destroy','update','edit'
]);
