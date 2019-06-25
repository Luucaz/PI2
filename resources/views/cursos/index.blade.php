@extends('layouts.app')

@section('title')
    Gerenciar Cursos
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Lista de Cursos</h1>
        </div>
    </div>
<br>


    <div class="row">
        <div class="col-2">
            <p>ID</p>
        </div>
        <div class="col-4">
            <p>Curso</p>
        </div>
        <div class="col-4">
            <p>Coordenador do Curso</p>
        </div>
        <div class="col-2">
            <p>Modalidade</p>
        </div>
    @foreach($cursos as $curso)
        <div class="container">
        <div class="row">
            <div class="col-2">
                {{$curso->id}}
            </div>
            <div class="col-4">
                <a href="/cursos/{{$curso->id}}">{{$curso->denominação}}</a> </div>
            <div class="col-4">{{$curso->coordc->name}}</div>
            <div class="col-2">{{$curso->modalidade}}</div>
        </div>
        </div>
    @endforeach


    <div class="row">
        <div class="col-12">
            <br>
            <br>
            <br>
            <a  href="cursos/create"  class="btn btn-light" role="button" data-toggle="tooltip" data-placement="top" title="Hooray!" class="float-left"> + Adicionar Novo Curso</a>
            <a  href="coordenadores"  class="btn btn-light" role="button" data-toggle="tooltip" data-placement="top" title="Hooray!" class="float-left"> + Adicionar Novo Coordenador</a>
        </div>
    </div>



@endsection