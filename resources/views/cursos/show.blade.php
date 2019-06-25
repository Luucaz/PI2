@extends('layouts.app')

@section('title', 'Curso de ' . $curso->denominação)


@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Detalhes sobre o Curso de {{$curso->denominação}}</h1>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Denominação: </strong>{{$curso->denominação}}</p>
            <p><strong>Modalidade: </strong>{{$curso->modalidade}}</p>
            <p><strong>Tipo: </strong>{{$curso->tipo}}</p>
            <p><strong>Coordenador do Curso: </strong>{{$curso->coordc->name}}</p>
            <p><strong>Habilitação: </strong>{{$curso->habilitação}}</p>
            <p><strong>Local de Oferta: </strong>{{$curso->local}}</p>
            <p><strong>Turnos de Funcionamento: </strong>{{$curso->turno}}</p>
            <p><strong>Nº de Vagas para cada Turno: </strong>{{$curso->vaga}}</p>
            <p><strong>Carga Horária do Curso: </strong>{{$curso->carga}}</p>
            <hr>
            <h3>Estrutura Curricular</h3>
            <br>
            <p><strong>Regime Letivo: </strong>{{$curso->regime}}</p>
            <p><strong>Periodos: </strong>{{$curso->periodo}}</p>
        </div>
    </div>

    <div class="container">
            <a href="/cursos/{{ $curso->id }}/edit" class="btn btn-primary" role="button" class="float-left">Editar</a>

            <form action="/cursos/{{ $curso->id }}" method="POST" class="float-left">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Excluir</button>
            </form>
    </div>
@endsection