@extends('master')

@section('conteudo')
<div class="container span12">
    {!! Form::open(['route' => 'login']) !!}

    <div class="form-group">
        {!! Form::label('login', 'Login:') !!}
        {!! Form::text('nome', null, ['placeholder' => 'Seu Nome', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('senha', 'Senha:') !!}
        {!! Form::password('senha', ['placeholder' => '*****', 'class' => 'form-control']) !!}
    </div>

    <div class="text-center">
        {!! Form::submit('Logar', ['class' => 'btn btn-info']) !!}
    </div>

    {!! Form::close() !!}
</div>
@stop()