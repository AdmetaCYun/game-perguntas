@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">

        <h1>Jogo de perguntas e respostas</h1>

        <form action="{{ route('start-game') }}" method="GET">
            <div class="form-group">
                <label for="exampleInputEmail1">Digite seu nome</label>
                <input type="text" class="form-control" name="name" >
                <small id="emailHelp" class="form-text text-muted">Esse nome vai ser utilizado no game</small>
            </div>

            <button type="submit" class="btn btn-primary">Jogar</button>
        </form>
    </div>
</div>
@endsection