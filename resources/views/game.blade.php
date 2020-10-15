@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4">
        <h2>{{ $user }}</h2>
    </div>
    <div class="col-4">

    </div>
    <div class="col-4">
        <h2>Pontos: 999</h2>
    </div>
</div>

<div class="row">
    <div class="col-2"></div>
    <div class="col">
        <h1>Perguntas</h1>
    </div>
    <div class="col-2"></div>
</div>

<div class="row">
    <div class="col-2"></div>
    <div class="col">
           <form>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    Default radio
                </label>
            </div>
                
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    Default radio
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                    Default radio
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <div class="col-2"></div>
</div>
@endsection 