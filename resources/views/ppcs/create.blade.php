@extends('layouts.app')

@section('title')
    Adicionar PPC
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Adicionar novo PPC</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/ppcs" method="POST">
                @include('ppcs.form')

                <button type="submit" class="btn btn-primary" class="form-control">Cadastrar PPC</button>
            </form>
        </div>
    </div>
@endsection