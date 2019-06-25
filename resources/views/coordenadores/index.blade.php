@extends('layouts.app')

@section('title')
    Gerenciar Coordenadores
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Lista de Coordenadores</h1>
        </div>
    </div>
<br>


    <div class="row">
        <div class="col-2">
            <p>ID</p>
        </div>
        <div class="col-4">
            <p>Coordenador</p>
        </div>
    @foreach($coordcs as $coordc)
        <div class="container">
        <div class="row">
            <div class="col-2">
                {{$coordc->id}}
            </div>
            <div class="col-4">
                <a href="/coordenadores/{{$coordc->id}}">{{$coordc->name}}</a> </div>
        </div>
        </div>
    @endforeach


    <div class="row">
        <div class="col-12">
            <br>
            <br>
            <br>
            <a  href="coordenadores/create"  class="btn btn-light" role="button" data-toggle="tooltip" data-placement="top" title="Hooray!" class="float-left"> + Adicionar Novo Coordenador</a>
        </div>
    </div>



@endsection