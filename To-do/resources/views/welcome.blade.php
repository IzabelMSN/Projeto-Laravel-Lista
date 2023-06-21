@extends('layouts.main')

@section('content')
<div class="flex">
    <h1 id="titulo">Crie suas tarefas!</h1>
    <form action="{{route('criar')}}" method="POST">
        {{csrf_field()}}
        <button type="submit" class="btn-criar">Criar</button>
    </form>
</div>
 <hr>

<div class="tabela-coluna-c">
    <h2 class="tabela-linha-c">Tarefa</h2>
    <h2 class="tabela-linha-c">Descrição</h2>
    <h2 class="tabela-linha-c">Porcentagem</h2>
    <h2 class="tabela-linha-c">Concluída</h2>
</div>
<hr>

@if(empty($tasks)) 
<h2 id="tarefa-no">Não há nehuma tarefa ainda registrada!</h2>
@else
    <table class="tabela">
        @foreach($tasks as $index => $task)
            <tr class="tabela-coluna"> 
                <td>N° de Tarefas {{$index + 1}}</td>  
                <td class="tabela-linha-b">{{$task['tarefa']}}</td>
                <td class="tabela-linha-b">{{$task['descricao']}}</td>
                <td class="tabela-linha-b">{{$task['porcentagem']}}</td>
                <td class="tabela-linha-b">{{$task['concluida']}}</td>
                <td class="tabela-linha-b btn">
                    <button type="submit" id="btn-concluir">Concluir</button>
                    <button type="submit" id="btn-editar"><a href="{{route('editar', ['index' => $index])}}" class="link">Editar</a></button>
                </td>
            </tr>
        @endforeach    
    </table>
@endif

@endsection