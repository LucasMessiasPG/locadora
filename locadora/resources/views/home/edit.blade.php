@extends('master')
@section('conteudo')
@include('navbar')
<br/>
<div class="container">
    <a class="btn grey wave-effect" href="{{ route('painel.index') }}">Voltar</a>
    <div class='container'>
    {!! Form::model($user,['route' => 'painel.update']) !!}

          <!-- Form nome Input -->
          <div class='form-group'>
              {!! Form::label('nome','Nome:') !!}
              {!! Form::text('nome', null, ['class' => 'form-control']) !!}
          </div>

          <!-- Form login Input -->
          <div class='form-group'>
              {!! Form::label('login','Login:') !!}
              {!! Form::text('login', null, ['class' => 'form-control', 'disabled']) !!}
          </div>

          <!-- Form senha Input -->
          <div class='form-group'>
              {!! Form::label('senha','Senha:') !!}
              {!! Form::password('senha', null, ['class' => 'form-control']) !!}
          </div>

          <!-- Form senha_confirmation Input -->
          <div class='form-group'>
              {!! Form::label('senha_confirmation','Repita a Senha:') !!}
              {!! Form::password('senha_confirmation', null, ['class' => 'form-control']) !!}
          </div>

          <!-- End Form -->
          <div class='form-group'>
              {!! Form::submit('Salvar',['class' => 'btn btn-success btn-block']) !!}
          </div>

    {!! Form::close() !!}
    </div>
</div>
@stop