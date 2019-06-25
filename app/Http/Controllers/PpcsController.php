<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Ppc;
use Illuminate\Http\Request;

class PpcsController extends Controller
{

    public function index()
    {
        $ppcs = Ppc::all();
        return view('ppcs.index', compact('ppcs'));
    }


    public function create()
    {
        $cursos = Curso::all();
        $ppc = new Ppc();

        return view('ppcs.create', compact('cursos','ppc'));
    }


    public function store()
    {
        Ppc::create($this->validateRequest());
        return redirect('ppcs');
    }


    public function show(Ppc $ppc)
    {
        return view('ppcs.show', compact('ppc'));
    }


    public function edit(Ppc $ppc)
    {
        $cursos = Curso::all();
        return view('ppcs.edit', compact('ppc', 'cursos'));
    }


    public function update(Ppc $ppc)
    {
        $ppc->update($this->validateRequest());
        return redirect('ppcs/' . $ppc->id);
    }


    public function destroy(Ppc $ppc)
    {
        $ppc->delete();
        return redirect('ppcs/');
    }

    private function validateRequest()
    {
        return request()->validate([
            'curso_id' => 'required',
            'perfil' => 'required',
            'engresso' => 'required',
            'acesso' => 'required',
            'perfilforma' => 'required',
            'avaaprendi' => 'required',
            'avacurso' => 'required',
            'def' => 'required',
            'tcc' => 'required',
            'estagio' => 'required',
        ]);
    }
}
