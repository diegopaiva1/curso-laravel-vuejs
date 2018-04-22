@extends('layouts.app')

@section('content')
    <div class="container">
        <painel
        titulo="Produtos" 
        font-color="white" 
        body-background-color="#e8dfb0" 
        header-background-color="#282f31">
            <div class="row justisfy-content-center">
                <div v-for="categoria in categorias" class="col-md-4">
                    <caixa :categoria="categoria"></caixa>
                </div>
            </div>
        </painel>
    </div> 
@endsection
