@extends('app')

@section('title')
    Lista de produtos
@stop

@section('content')

    <a class="btn btn-primary btn-sm pull-right" href="{{route('cadastro.produtos.create')}}">Adicionar novo</a>

    <div class="panel panel-default">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <td><a href="/cadastro/produtos/{{$produto->id}}"> {{$produto->nome}}</a></td>
                        <td>{{$produto->categoria}}</td>
                        <td>{{$produto->descricao}}</td>
                        <td>
                            {!!Html::linkRoute('cadastro.produtos.edit', 'editar', $produto->id, array('class' => 'btn btn-primary'))!!}
                        </td>
                        <td>
                            {!! Form::model($produto, ['method' => 'DELETE', 'route' => ['cadastro.produtos.destroy', $produto->id]]) !!}
                                {!! Form::submit('remover', ['class' => 'btn btn-danger'] ) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {!! $produtos->render() !!}
@stop