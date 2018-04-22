@extends('layouts.app')

@section('content')
    <div class="container">
        <painel
        titulo="Bicicletas" 
        font-color="white" 
        body-background-color="#fff" 
        header-background-color="#282f31">

        <botao texto="Novo registro" modificador-bootstrap="primary"></botao>

        <tabela :colunas="colunasTabelaBicicletas" :bicicletas="bicicletas">
        </tabela>

        </painel>
    </div> 
@endsection
