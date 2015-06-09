@extends('master')
@section('conteudo')
    @include('navbar')
    <br/>
    <div class="container">
        <a class="btn grey wave-effect" href="{{ route('painel.index') }}">Voltar</a>
        <table>
            <thead>
            <tr>
                <td width="150px">Login</td>
                <td>Nome</td>
                <td width="150px">Ações</td>
            </tr>
            </thead>
            <tbody>
            @foreach($funcionarios as $funcionario)
                <tr>
                    <td>{{ $funcionario->login }}</td>
                    <td>{{ $funcionario->nome }}</td>
                    <td>
                        <a href="{{ route('painel.edit', $funcionario->id_usuario) }}">Editar</a>
                        @if($funcionario->id_usuario != \Auth::user()->id_usuario)
                        <a href="{{ route('funcionario.demitir', $funcionario->id_usuario) }}">Excluir</a>
                        @endif
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
@stop