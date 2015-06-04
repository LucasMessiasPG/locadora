@extends('master')
@section('conteudo')
    @include('navbar')
    <br/>
    <div class="container">
        <a class="btn grey wave-effect" href="{{ route('painel.index') }}">Voltar</a>
        {!! Form::open(['route' => 'veiculo.store']) !!}

            <!-- Form modelo Input -->
            <div class='form-group'>
                {!! Form::label('modelo','Modelo:') !!}
                {!! Form::select('modelo', $modelos,null, ['class' => 'browser-default']) !!}
            </div>

            <!-- Form cor Input -->
            <div class='form-group'>
                {!! Form::label('cor','Cor:') !!}
                {!! Form::select('cor', $cores,null, ['class' => 'browser-default']) !!}
            </div>

            <!-- Form placa Input -->
            <div class='form-group'>
                {!! Form::label('placa','Placa:') !!}
                {!! Form::text('placa', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Form ano_fabricacao Input -->
            <div class='form-group'>
                {!! Form::label('ano_fabricacao','Ano Fabricação:') !!}
                {!! Form::text('ano_fabricacao', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Form ano_modelo Input -->
            <div class='form-group'>
                {!! Form::label('ano_modelo','Ano Modelo:') !!}
                {!! Form::text('ano_modelo', null, ['class' => 'form-control']) !!}
            </div>

            <!-- End Form -->
            <div class='form-group'>
                {!! Form::submit('Cadastrar',['class' => 'btn btn-success btn-block']) !!}
            </div>

        {!! Form::close() !!}
        <p><a class="" href="{{ route('veiculo.createModelo') }}">Cadastrar Modelo</a></p>
        <p><a class="" href="{{ route('veiculo.createCor') }}">Cadastrar Cor</a></p>
    </div>
@stop