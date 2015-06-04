@extends('master')
@section('conteudo')
    @include('navbar')
    <br/>
    <div class="container">
        <a class="btn grey wave-effect" href="{{ route('painel.index') }}">Voltar</a>
        <table>
            <thead>
                <tr>
                    <td>Id Veiculo</td>
                    <td>Modelo</td>
                    <td>Cor</td>
                    <td>Placa</td>
                    <td>Ano Fabricação</td>
                    <td>Ano Modelo</td>
                    <td>Açoes</td>
                </tr>
            </thead>
            <tbody>
                @foreach($veiculos as $veiculo)
                    <tr>
                        <td>{{ $veiculo->id_veiculo }}</td>
                        <td>{{ $veiculo->nome_modelo }}</td>
                        <td>{{ $veiculo->nome_cor }}</td>
                        <td>{{ $veiculo->placa }}</td>
                        <td>{{ $veiculo->ano_fabricacao }}</td>
                        <td>{{ $veiculo->ano_modelo }}</td>
                        <td>
                            Editar
                            Excluir
                        </td>
                    </tr>
                @endforeach

        </table>
    </div>
@stop