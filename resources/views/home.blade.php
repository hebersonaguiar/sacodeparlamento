@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Sacode Parlamento">
        <!-- Redes Sociais -->
        <div class="row">
            <div class="col-md-4">
                <caixa qtd="80" titulo="Artigos" url="#" cor="orange" icone="ion ion-pie-graph"></caixa>
            </div>
            <div class="col-md-4">
                <caixa qtd="180" titulo="Usuários" url="#" cor="blue" icone="ion ion-person-stalker"></caixa>
            </div>
            <div class="col-md-4">
                <caixa qtd="10" titulo="Autores" url="#" cor="green" icone="ion ion-person"></caixa>
            </div>
        </div>
    </painel>
</pagina>
@endsection
