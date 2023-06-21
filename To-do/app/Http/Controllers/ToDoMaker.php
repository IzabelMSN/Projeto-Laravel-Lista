<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoMaker extends Controller{
    protected $task = [];
    
    public function criar(Request $request){
        $dados = $request->input('dados');
        
        if ($dados) {
            $tarefa = $dados['tarefa'];
            $porcentagem = $dados['porcentagem'];
            $descricao = $dados['descricao'];
            $concluida = $dados['concluida'];

            $novaTask = [
                'tarefa' => $tarefa,
                'porcentagem' => $porcentagem,
                'descricao' => $descricao,
                'concluida' => $concluida
            ];

            $this->task[] = $novaTask;
                        
            return $this->exibir();
        }

        return view('criar');           
    }

    public function editar($index){
        $task = $this->getTask($index);

        dd($this->task);

        return view('/editar', compact('task', 'index'));
    }

    public function atualizar(Request $request, $index){
        $task = $this->getTask($index);

        if ($task) {
            $task['tarefa'] = $request->input('tarefa');
            $task['porcentagem'] = $request->input('porcentagem');
            $task['descricao'] = $request->input('descricao');
            $task['concluida'] = $request->input('concluida');
            
            $this->task[$index] = $task;
        }
        

        return redirect()->route('exibir');
    }

    public function exibir(){
        $tasks = $this->task;

        return view('welcome', compact('tasks'));
    }

    private function getTask($index){
        return $this->task[$index] ?? null;
    }
}
