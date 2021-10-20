<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TaskController extends Controller
{
    //construir a view da home das tarefas

    public function index(){

        //recuperar todas as tarefas e mostrar ao usuário
        $lista = Tarefa::all();
        return view('dashboard.home',['tarefas'=>$lista]);
    }

    // retornar o formulário de criação de tarefas

    public function create(){

        return view('dashboard.create');
    }

    public function store(Request $request){

        $tarefa = new Tarefa;
        $tarefa->descricao = $request->post('description');
        $tarefa->save();

        //redireciona para a página normal
        return redirect()->to(route('inicio'));
    }

    public function show($id){

        $tarefa = Tarefa::find($id);
        if($tarefa){

            return view('dashboard.show',['tarefa'=>$tarefa]);
        }
        else {
            return redirect()->to(route('inicio'));
        }
        
    }

}
