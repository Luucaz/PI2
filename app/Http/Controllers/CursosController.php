<?php

namespace App\Http\Controllers;
use App\Curso;
use App\Coordc;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public function index ()
    {
        $cursos = Curso::all();
        //$presencialcursos = Curso::presencial()->get();
        //$distanciacursos = Curso::distancia()->get();
        //$semicursos = Curso::semi()->get();


        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {

        $coordcs = Coordc::all();
        $curso = new Curso();

        return view('cursos.create', compact('coordcs','curso'));
    }


    public function store ()
    {
        Curso::create($this->validateRequest());
        return redirect('cursos')->with('message', 'Um novo curso foi vinculado à base.');
    }

    public function show (Curso $curso)
    {
        //Exemplo de route model binding do laravel acima declarando o app Curso
        //uma opção para evitar o código abaixo vv
        //$curso = Curso::where('id', $curso)->firstOrFail();
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        $coordcs = Coordc::all();
        return view('cursos.edit', compact('curso', 'coordcs'));
    }


    public function update(Curso $curso)
    {
        $curso->update($this->validateRequest());
        return redirect('cursos/' . $curso->id)->with('message', 'Detalhes do curso alterados com sucesso.');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect('cursos/')->with('danger', 'Curso deletado da base de dados.');
    }

    private function validateRequest()
    {
        return request()->validate([
            'denominação' => 'required|min:3',
            'tipo' => 'required',
            'modalidade' => 'required',
            'coordc_id' => 'required',
            'habilitação' => 'required',
            'local' => 'required',
            'turno' => 'required',
            'regime' => 'required',
            'vaga' => 'required|integer',
            'carga' => 'required|integer',
            'periodo' => 'required|integer',
            ]);
    }

}
