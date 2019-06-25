@extends('layouts.app')

@section('title', 'Coordenador ' . $coordc->name)


@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Detalhes sobre o Coordenador {{$coordc->name}}</h1>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Nome: </strong>{{$coordc->name}}</p>
            <p><strong>CPF: </strong>{{$coordc->cpf}}</p>
        </div>
    </div>

    <div class="container">
            <a href="/coordenadores/{{ $coordc->id }}/edit" class="btn btn-primary" role="button" class="float-left">Editar</a>

            <form action="/coordenadores/{{ $coordc->id }}" method="POST" class="float-left">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Excluir</button>
            </form>
    </div>
@endsection