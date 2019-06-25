@extends('layouts.app')

@section('title', 'Editar curso de ' . $coordc->name)


@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Editar detalhes do Coordenador {{ $coordc->name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/coordenadores/{{ $coordc->id }}" method="POST">
                @method('PATCH')
                @include('coordenadores.form')

                <button type="submit" class="btn btn-primary" class="form-control">Salvar detalhes do Curso</button>
            </form>
        </div>
    </div>
@endsection