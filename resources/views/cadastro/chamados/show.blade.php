@extends('app')

@section('title')
    Produto {{$produto->nome}}
@stop

@section('content')
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{$produto->id}}</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>{{$produto->nome}}</td>
        </tr>
        <tr>
            <th>Categoria</th>
            <td>{{$produto->categoria}}</td>
        </tr><tr>
            <th>Descrição</th>
            <td>{{$produto->descricao}}</td>
        </tr>

    </table>
@stop