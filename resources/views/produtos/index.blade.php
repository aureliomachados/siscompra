@extends('app')

@section('title')

@stop

@section('content')

    <a class="btn btn-primary btn-sm pull-right" href="{{route('produtos.create')}}">Adicionar novo</a>

    <div class="panel panel-default">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <td><a href="/produtos/{{$produto->id}}"> {{$produto->nome}}</a></td>
                        <td>{{$produto->categoria}}</td>
                        <td>{{$produto->descricao}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop