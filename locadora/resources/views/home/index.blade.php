@extends('master')
@section('conteudo')
    @include('navbar')
    <div class="container">
        <div>
            <div>
                <div>
                    <p><p>Logado com:</p> <h5>{{ \Auth::user()->nome }}</h5></p>
                    <p><a class="btn blue darken-2" href="{{ route('painel.edit') }}">Editar</a></p>
                    <p><a class="btn orange darken-2" href="{{ route('logout') }}">Sair</a></p>
                </div>
                <div>
                    <ul >
                        <li>
                            <div>Veiculo</div>
                            <ul>
                                <li><a href="{{ route('veiculo.create') }}">Cadastrar Viceulo</a></li>
                                <li><a href="{{ route('veiculo.listar') }}">Listar Veiculo</a></li>
                            </ul>
                        </li>
                        <li>
                            <div>Funcionário</div>
                            <ul>
                                <li><a href="#">Cadastrar Funcionário</a></li>
                                <li><a href="#">Listar Funcionário</a></li>
                                <li><a href="#">Promover Funcionário</a></li>
                            </ul>
                        </li>
                        <li>
                            <div>Locação</div>
                            <ul>
                                <li><a href="#">Locar</a></li>
                                <li><a href="#">Visualizar Locados</a></li>
                                <li><a href="#">Historico de Locação</a></li>
                            </ul>
                        </li>
                        <li>
                            <div>Faturamento</div>
                            <ul>
                                <li><a href="#">Relatório</a></li>
                                <li><a href="#">Notas Fiscais</a></li>
                                <li><a href="#">Boletos</a></li>
                                <li><a href="#">Grafico</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop