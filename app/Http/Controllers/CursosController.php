<?php

namespace App\Http\Controllers;
use App\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public function list ()
    {
        $cursos = Curso::all();


        return view('interno.cursos',[
            'cursos' => $cursos,

        ]);
    }
    public function store ()
    {
        $data = request()-> validate([
            'denominação' => 'required|min:3',
            'tipo' => 'required',
            'active' => 'required',
        ]);

        $curso = new Curso();
        $curso->title = request('denominação');
        $curso->tipo = request('tipo');
        $curso->active = request('active');
        $curso->save();

        return back();
    }
}
