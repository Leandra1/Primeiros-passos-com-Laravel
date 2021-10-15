<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //construir a view da home das tarefas

    public function index(){

        //como construir a view das tarefas 
        return view('dashboard.home');
    }

    // retornar o formulário de criação de tarefas

    public function create(){

        return view('dashboard.create');
    }

    public function store(Request $request){

        $tarefa = $request->post('task');
        $descricao = $request->post('description');

        return 'Tarefa: ' . $tarefa . '<br>' . 'Descrição: ' . $descricao;
    }

    public function show($id){

        return view('dashboard.show', ['task_id' => $id]);
    }

}
