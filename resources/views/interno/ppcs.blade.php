@extends('layout')

@section('content')

    <h1>PPC</h1>

    <form action="ppcs" method="POST" class="pb-5">
        <div class="imput-group">
            <input tipe="text"name="Denominação">
        </div>

        <button type="submit">Cadastrar PPC</button>
        @csrf
    </form>

    <ul>
        @foreach($ppcs as $ppc)
            <li>{{$ppc->title}}</li>
        @endforeach
    </ul>
@endsection
