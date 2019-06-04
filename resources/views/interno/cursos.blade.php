@extends('layout')

@section('title')
    Gerenciar Cursos
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Lista de Cursos</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="cursos" method="POST">
                <label for="Tipo">Tipo</label>
                <div class="form-group">
                    <input tipe="text"name="tipo" value="{{old ('Tipo')}}" class="form-control">
                    <div>{{$errors->first('Tipo')}}</div>
                </div>
                <label for="Denominação">Denominação do curso</label>
                <div class="form-group">
                    <input tipe="text"name="denominação" value="{{old ('Denominação')}}" class="form-control">
                    <div>{{$errors->first('Denominação')}}</div>
                </div>

                <label for="active">Active</label>
                <div class="form-group">
                    <select name="active" id="Active" class="form-control">
                        <option value="" disabled>Status do Curso</option>
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-primary" class="form-control">Cadastrar Curso</button>
                @csrf

            </form>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-12">
            <ul>
                @foreach($cursos as $curso)
                    <li>{{$curso->title}} <span class="text-muted">({{$curso->tipo}})</span> </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection