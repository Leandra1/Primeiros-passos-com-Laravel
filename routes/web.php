<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})-> name('inicio');

Route::get('/admin',function(){
    return "Vamos desenvolver aplicações com Laravel";
});

Route::get('/task',function(){
    return view('home',['user' => 'Leandra']);
    //return view('home',['user => 'Leandra]) passando uma informação para o template;
    // no template a informação seria passada assim: 
        // por exemplo <h1> Olá, {{$user}}</h1>
});