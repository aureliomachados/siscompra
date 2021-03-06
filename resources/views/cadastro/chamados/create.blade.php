@extends('app')

@section('title')
    Novo chamado
@stop

@section('content')

    <h1>Novo chamado</h1>

    <hr>

    {!! Form::open(['route' => 'cadastro.chamados.store']) !!}

    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
        @if($errors->has('descricao')) <div class="has-error"><span class="help-block">{{$errors->first('descricao')}}</span></div> @endif
    </div>
    <div class="form-group">
        {!! Form::label('status', 'Ativo:') !!}
        {!! Form::radio('status', '1', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', 'Inativo:') !!}
        {!! Form::radio('status', '0', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dataAbertura', 'Data de abertura:') !!}
        {!! Form::text('dataAbertura', null, ['class' => 'form-control datepicker']) !!}
        @if($errors->has('dataAbertura')) <div class="has-error"><span class="help-block">{{$errors->first('dataAbertura')}}</span></div> @endif
    </div>
    <div class="form-group">
        {!! Form::label('dataFechamento', 'Data de fechamento:') !!}
        {!! Form::text('dataFechamento', null, ['class' => 'form-control datepicker']) !!}
        @if($errors->has('dataFechamento')) <div class="has-error"><span class="help-block">{{$errors->first('dataFechamento')}}</span></div> @endif
    </div>
    <div class="form-group">
        {!! Form::submit('Adicionar chamado', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop