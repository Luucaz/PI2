<?php

namespace App\Http\Controllers;

use App\Coordc;
use App\User;
use Illuminate\Http\Request;

class CoordenadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordcs = Coordc::all();

        return view('coordenadores.index', compact('coordcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coordc = new Coordc();

        return view('coordenadores.create', compact('coordc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Coordc::create($this->validateRequest());
        return redirect('coordenadores')->with('message', 'Um novo coordenador foi vinculado à base.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coordc  $coordc
     * @return \Illuminate\Http\Response
     */
    public function show(Coordc $coordc)
    {
        return view('coordenadores.show', compact('coordc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coordc  $coordc
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordc $coordc)
    {
        return view('coordenadores.edit', compact('coordc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coordc  $coordc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coordc $coordc)
    {
        $coordc->update($this->validateRequest());
        return redirect('coordenadores/' . $coordc->id)->with('message', 'Coordenador editado.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coordc  $coordc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordc $coordc)
    {
        $coordc->delete();
        return redirect('coordenadores/')->with('danger', 'Coordenador deletado da base de dados.');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'cpf' => 'required|min:11',
        ]);
    }
}
