@extends('master')
@section('conteudo')
    @include('navbar')
    <br/>
    <div class="container">
        <a class="btn grey wave-effect" href="{{ route('veiculo.create') }}">Voltar</a>
        {!! Form::open(['route' => 'veiculo.storeCor']) !!}

        <!-- Form cor Input -->
        <div class='form-group'>
            {!! Form::label('cor','Cor:') !!}
            {!! Form::text('cor', null, ['class' => 'form-control']) !!}
        </div>

        <!-- End Form -->
        <div class='form-group'>
            {!! Form::submit('Cadastrar',['class' => 'btn btn-success btn-block']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@stop