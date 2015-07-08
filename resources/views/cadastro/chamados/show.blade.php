@extends('app')

@section('title')
    Chamado
@stop

@section('content')
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{$chamado->id}}</td>
        </tr>
        <tr>
            <th>Descrição</th>
            <td>{{$chamado->descricao}}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{$chamado->status ? 'Ativo' : 'Inativo'}}</td>
        </tr>
        <tr>
            <th>Data de abertura</th>
            <td>{{date('d/m/Y', strtotime($chamado->dataAbertura))}}</td>
        </tr>
        <tr>
            <th>Data de fechamento</th>
            <td>{{date('d/m/Y', strtotime($chamado->dataFechamento))}}</td>
        </tr>

    </table>
@stop