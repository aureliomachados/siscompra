@extends('app')

@section('title')
    Novo produto
@stop

@section('content')

    <h1>Novo produto</h1>

    <hr>

    {!! Form::open(['url' => 'produtos']) !!}

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        @if($errors->has('nome')) <div class="has-error"><span class="help-block">{{$errors->first('nome')}}</span></div> @endif
    </div>
    <div class="form-group">
        {!! Form::label('categoria', 'Categoria:') !!}
        {!! Form::text('categoria', null, ['class' => 'form-control']) !!}
        @if($errors->has('categoria')) <div class="has-error"><span class="help-block">{{$errors->first('categoria')}}</span></div> @endif
    </div>
    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
        @if($errors->has('descricao')) <div class="has-error"><span class="help-block">{{$errors->first('descricao')}}</span></div> @endif
    </div>
    <div class="form-group">
        {!! Form::submit('Adicionar produto', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop