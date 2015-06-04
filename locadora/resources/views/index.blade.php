@extends('master')

@section('conteudo')
<div class="row">
    <div style="padding: 30px 40px;" class="card-panel col s10 offset-s1 m4 offset-m4">
        {!! Form::open(['route' => 'login']) !!}

            <div class="input-field col s12">
                {!! Form::label('login', 'Login:',['class' => 'light-green-text text-darken-3']) !!}
                {!! Form::text('login', null, ['class' => 'validate']) !!}
            </div>
            <div class="input-field col s12">
                {!! Form::label('password', 'Senha:',['class' => 'light-green-text text-darken-3']) !!}
                {!! Form::password('password', ['class' => 'validate']) !!}
            </div>
            {!! Form::button('Logar', ['type' => 'submit', 'class' => 'col s12 m3 light-green darken-3 btn waves-effect waves-light']) !!}

        {!! Form::close() !!}
        <div>
            <p><a class="light-blue blue-text text-darken-2 btn right" href="{{ route('registrar.page') }}">Registrar</a></p>
        </div>
    </div>
</div>
@stop()
