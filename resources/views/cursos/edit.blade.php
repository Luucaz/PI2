@extends('layouts.app')

@section('title', 'Editar curso de ' . $curso->denominação)


@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Editar detalhes do Curso de {{ $curso->denominação }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/cursos/{{ $curso->id }}" method="POST">
                @method('PATCH')
                @include('cursos.form')

                <button type="submit" class="btn btn-primary" class="form-control">Salvar detalhes do Curso</button>
            </form>
        </div>
    </div>
@endsection