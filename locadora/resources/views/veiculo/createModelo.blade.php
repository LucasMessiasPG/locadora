@extends('master')
@section('conteudo')
    @include('navbar')
    <br/>
    <div class="container">
        <a class="btn grey wave-effect" href="{{ route('veiculo.create') }}">Voltar</a>
        {!! Form::open(['route' => 'veiculo.storeModelo']) !!}

        <!-- Form marca Input -->
        <div class='form-group'>
            {!! Form::label('marca','Marca:') !!}
            {!! Form::select('marca', $marcas,null, ['class' => 'browser-default']) !!}
        </div>

        <!-- Form Modelo Input -->
        <div class='form-group'>
            {!! Form::label('modelo','Modelo:') !!}
            {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
        </div>

        <!-- End Form -->
        <div class='form-group'>
            {!! Form::submit('Cadastrar',['class' => 'btn btn-success btn-block']) !!}
        </div>

        {!! Form::close() !!}
        <a class="" href="{{ route('veiculo.createMarca') }}">Cadastrar Marca</a>
    </div>
@stop