@extends('layouts.main')

@section('content')
<div class="flex">
    <h1 id="titulo">Edite sua tarefa:</h1>
</div>
 <hr>

@if($task)
<form class="tabela-coluna-flex" action="{{route('atualizar', ['index' => $index])}}" method="POST">
    @csrf
    <div class="tabela-flex">    
        <label class="tabela-linha">Tarefa</label>
        <input type="text" class="tabela-input" name="tarefa" value="{{$task['tarefa']}}">
    </div>
    <div class="tabela-flex">
        <label class="tabela-linha">Descrição</label>
        <textarea cols="16" rows="5" class="tabela-input" name="descricao">{{$task['descricao']}}</textarea>
    </div>
    <div class="tabela-flex">
        <label class="tabela-linha">Porcentagem</label>
        <input type="text" class="tabela-input" name="porcentagem" value="{{$task['porcentagem']}}">
    </div>
    <div class="tabela-flex">
        <label class="tabela-linha">Concluída</label>
        <input type="text" class="tabela-input" name="concluida" value="{{$task['concluida']}}">
    </div>

    <button type="submit" class="btn-criar dif">Atualizar</button>
</form>
@else
<h2 id="tarefa-no">Não foi possível encontrar a tarefa.</h2>
@endif
@endsection