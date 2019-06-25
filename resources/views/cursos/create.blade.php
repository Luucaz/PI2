@extends('layouts.app')

@section('title')
    Adicionar Novo Curso
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Adicionar novo Curso</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/cursos" method="POST">
                @include('cursos.form')

                <button type="submit" class="btn btn-primary" class="form-control">Cadastrar Curso</button>
            </form>
        </div>
    </div>
@endsection