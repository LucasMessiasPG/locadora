@extends('master')
@section('conteudo')
    @include('navbar')
    <br/>
    <div class="container">
        <a class="btn grey wave-effect" href="{{ route('painel.index') }}">Voltar</a>
        {!! Form::open(['route' => 'funcionario.cadastrar']) !!}

        <!-- Form modelo Input -->
        <div class='form-group'>
            {!! Form::label('login','Login:') !!}
            {!! Form::text('login') !!}
        </div>

        <!-- Form modelo Input -->
        <div class='form-group'>
            {!! Form::label('nome','Nome:') !!}
            {!! Form::text('nome') !!}
        </div>

        <!-- Form modelo Input -->
        <div class='form-group'>
            {!! Form::label('senha','Senha:') !!}
            {!! Form::password('senha') !!}
        </div>

        <!-- Form modelo Input -->
        <div class='form-group'>
            {!! Form::label('senha','Repita Senha:') !!}
            {!! Form::password('senha_confirmation') !!}
        </div>

        <!-- End Form -->
        <div class='form-group'>
            {!! Form::submit('Cadastrar',['class' => 'btn btn-success btn-block']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@stop