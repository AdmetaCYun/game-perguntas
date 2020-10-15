@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4"></div>
    <div class="col">
        <h1>Danilo</h1>
    </div>
    <div class="col-2"></div>
</div>

<div class="row">
    <div class="col-4"></div>
    <div class="col">
        <h3>Pontos: 999</h3>
    </div>
    <div class="col-2"></div>
</div>

<div class="row">
    <div class="col-2"></div>
    <div class="col">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action ">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Pergunta-01</h5>
                    <small>3 pontos</small>
                </div>
                <p class="mb-1">Resposta</p>
            </a>

            <a href="#" class="list-group-item list-group-item-action ">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Pergunta-02</h5>
                    <small>3 pontos</small>
                </div>
                <p class="mb-1">Resposta</p>
            </a>

            <a href="#" class="list-group-item list-group-item-action ">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Pergunta-03</h5>
                    <small>3 pontos</small>
                </div>
                <p class="mb-1">Resposta</p>
            </a>
        </div>
    </div>
    <div class="col-2"></div>
</div>
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <br>
            <a href="{{ route('index') }}" class="btn btn-primary">Jogar novamente</a>
        </div>
        <div class="col-8">
        </div>
    </div>
@endsection