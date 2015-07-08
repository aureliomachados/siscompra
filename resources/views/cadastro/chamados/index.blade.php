@extends('app')

@section('title')
    Lista de chamados
@stop

@section('content')

    <a class="btn btn-primary btn-sm pull-right" href="{{route('cadastro.chamados.create')}}">Adicionar novo</a>

    <div class="panel panel-default">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Ver</th>
                    <th>Status</th>
                    <th>Data de abertura</th>
                    <th>Data de fechamento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chamados as $chamado)
                    <tr>
                        <td>{!!Html::linkRoute('cadastro.chamados.show', 'ver', $chamado->id)!!}</td>
                        <td>{{$chamado->status ? 'Ativo' : 'Inativo'}}</td>
                        <td>{{date('d/m/Y', strtotime($chamado->dataAbertura))}}</td>
                        <td>{{date('d/m/Y', strtotime($chamado->dataFechamento))}}</td>
                        <td>{!!Html::linkRoute('cadastro.chamados.edit', 'editar', $chamado->id, ['class' => 'btn btn-warning'])!!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop