@extends('layouts.app')

@section('title', 'Editar PPC de ' . $ppc->perfil)


@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Editar detalhes do PCC de {{ $ppc->perfil }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/ppcs/{{ $ppc->id }}" method="POST">
                @method('PATCH')
                @include('ppcs.form')

                <button type="submit" class="btn btn-primary" class="form-control">Salvar detalhes do PPC</button>
            </form>
        </div>
    </div>
@endsection