@extends('layouts.app')

@section('title', 'PPC de ' . $ppc->perfil)


@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Detalhes sobre o PPC de {{$ppc->perfil}}</h1>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Perfil Curso: </strong>{{$ppc->perfil}}</p>
            <p><strong>Curso: </strong>{{$ppc->curso->denominação}}</p>
            <p><strong>Perfil do Engresso: </strong>{{$ppc->engresso}}</p>
            <p><strong>Forma de Acesso Curso: </strong>{{$ppc->acesso}}</p>
            <p><strong>Representação Gráfica de um Perfil de Formação: </strong>{{$ppc->perfilforma}}</p>
            <p><strong>Sistema de Avaliação do Processo Ensino Aprendizagem: </strong>{{$ppc->avaaprendi}}</p>
            <p><strong>Sistema de Avaliação do Projeto do Curso: </strong>{{$ppc->avacurso}}</p>
            <p><strong>Trabalho de Conclusão de Curso: </strong>{{$ppc->tcc}}</p>
            <p><strong>Estágio Curricular: </strong>{{$ppc->estagio}}</p>
            <p><strong>Política de Atendimento à Pessoas com Deficiência e/ou Mobilidade Reduzida: </strong>{{$ppc->def}}</p>

        </div>
    </div>

    <div class="container">
            <a href="/ppcs/{{ $ppc->id }}/edit" class="btn btn-primary" role="button">Editar</a>

            <form action="/ppcs/{{ $ppc->id }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Excluir</button>
            </form>
    </div>
@endsection