@extends('master')

@section('conteudo')
<div class="container">
    {!! Form::open(['route' => 'registrar']) !!}

    <div class="input-field">
        {!! Form::label('login', 'Login:') !!}
        {!! Form::text('login', null, ['class' => 'form-control']) !!}
    </div>

    <div class="input-field">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>

    <div class="input-field">
        {!! Form::label('senha', 'Senha:') !!}
        {!! Form::password('senha', ['class' => 'form-control']) !!}
    </div>

    <div class="input-field">
            {!! Form::label('senha_confirmation', 'Repita a senha:') !!}
            {!! Form::password('senha_confirmation', ['class' => 'form-control']) !!}
        </div>

    <div class="input-field">
        {!! Form::submit('Logar', ['class' => 'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}
</div>
@stop()