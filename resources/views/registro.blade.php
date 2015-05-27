@extends('master')

@section('conteudo')
<div class="container span12">
    {!! Form::open(['route' => 'registrar']) !!}

    <div class="form-group">
        {!! Form::label('login', 'Login:') !!}
        {!! Form::text('login', null, ['placeholder' => 'Seu Login', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['placeholder' => 'Seu Nome', 'class' => 'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('senha', 'Senha:') !!}
        {!! Form::password('senha', ['placeholder' => '*****', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
            {!! Form::label('senha_confirmation', 'Repita a senha:') !!}
            {!! Form::password('senha_confirmation', ['placeholder' => '*****', 'class' => 'form-control']) !!}
        </div>

    <div class="text-center">
        {!! Form::submit('Logar', ['class' => 'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}
</div>
@stop()