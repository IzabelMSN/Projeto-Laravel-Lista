@extends('layouts.main')

@section('content')
<div class="flex">
    <h1 id="titulo">Abaixo escreva a(s) sua(s) tarefa(s)!</h1>
</div>
 <hr>

<form class="tabela-coluna-flex" action="{{route('criar')}}" method="POST">
    {{csrf_field()}}
    <div class="tabela-flex">    
        <label class="tabela-linha" for="tarefa">Tarefa</label>
        <input type="text" class="tabela-input" name="dados[tarefa]" id="tarefa">
    </div>
    <div class="tabela-flex">
        <label class="tabela-linha" for="descricao">Descrição</label>
        <textarea cols="16" rows="5" class="tabela-input" name="dados[descricao]" id="descricao"></textarea>
    </div>
    <div class="tabela-flex">
        <label class="tabela-linha" for="porcentagem">Porcentagem</label>
        <input type="text" class="tabela-input" name="dados[porcentagem]" id="porcentagem">
    </div>
    <div class="tabela-flex">
        <label class="tabela-linha" for="concluida">Concluída</label>
        <input type="text" class="tabela-input" name="dados[concluida]" id="concluida">
    </div>

    <button type="submit" class="btn-criar dif">Criar</button>
</form>

@endsection