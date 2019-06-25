@extends('layouts.app')

@section('title')
    Adicionar Novo Coordenador
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Adicionar novo Coordenador</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/coordenadores" method="POST">
                @include('coordenadores.form')

                <button type="submit" class="btn btn-primary" class="form-control">Cadastrar Coordenador</button>
            </form>
        </div>
    </div>
@endsection