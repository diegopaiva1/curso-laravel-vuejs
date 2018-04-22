@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <painel titulo="Conteudo 1" font-color="white" background-color="dark">
                    Este é o primeiro conteúdo!
                </painel>
            </div>

            <div class="col-md-4">
                <painel titulo="Conteudo 2" font-color="white" background-color="primary">
                    Este é o segundo conteúdo!
                </painel>
            </div>

            <div class="col-md-4">
                <painel titulo="Conteudo 3" font-color="white" background-color="success">
                    Este é o terceiro conteúdo!
                </painel>
            </div>
        </div>
    </div> 
@endsection
