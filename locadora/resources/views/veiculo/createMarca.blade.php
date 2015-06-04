@extends('master')
@section('conteudo')
    @include('navbar')
    <br/>
    <div class="container">
        <a class="btn grey wave-effect" href="{{ route('veiculo.createModelo') }}">Voltar</a>
        {!! Form::open(['route' => 'veiculo.storeMarca']) !!}

        <!-- Form marca Input -->
        <div class='form-group'>
            {!! Form::label('marca','Marca:') !!}
            {!! Form::text('marca', null, ['class' => 'form-control']) !!}
        </div>

        <!-- End Form -->
        <div class='form-group'>
            {!! Form::submit('Cadastrar',['class' => 'btn btn-success btn-block']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@stop