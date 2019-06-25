@extends('layouts.app')

@section('title')
    Gerenciar PPCs
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Lista de PPCs</h1>
        </div>
    </div>
<br>

    <div class="row">
        <div class="col-2">
            <p>ID</p>
        </div>
        <div class="col-4">
            <p>PPC</p>
        </div>
        <div class="col-4">
            <p>Curso</p>
        </div>
    @foreach($ppcs as $ppc)
        <div class="container">
        <div class="row">
            <div class="col-2">
                {{$ppc->id}}
            </div>
            <div class="col-4">
                <a href="/ppcs/{{$ppc->id}}">{{$ppc->perfil}}</a> </div>
            <div class="col-4">
                {{$ppc->curso->denominação}}</div>
        </div>
        </div>
    @endforeach

<br>

    <div class="row">
        <div class="col-12">
            <a  href="ppcs/create"  class="btn btn-light" role="button" data-toggle="tooltip" data-placement="top" title="Hooray!"> + Adicionar Novo PPC</a>

        </div>
    </div>



@endsection