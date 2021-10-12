<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route:: get('/dashboard/tasks',function(){
    return view('dashboard.home');
});

Route:: get('/dashboard/tasks/create',function(){
    return view('dashboard.create');
});

Route:: post('/dashboard/tasks/store',function(Request $request){
    $tarefa = $request->post('task');
    $descricao = $request->post('description');
    return $tarefa . "---" . $descricao;
})-> name('tasks.store');

Route:: get('/dashboard/tasks/{id}/show', function($id){
    return view('dashboard.show',['task_id' => $id]);
});