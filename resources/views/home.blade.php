@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div v-for="conteudo in conteudos" class="col-md-4">
                <painel :conteudo="conteudo" font-color="white" background-color="success">
                </painel>
            </div>
        </div>
        <div class="row justisfy-content-center">
            <div v-for="produto in produtos" class="col-md-4">
                <caixa :produto="produto"></caixa>
            </div>
        </div>
    </div> 
@endsection
