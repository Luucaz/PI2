<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    # fara a autenticacao do usuario e ira redirecionar para a home
    public function login(){
      return view('login');
    }
    public function home(){
      return view('home');
    }
    public function cursos(){
      return view('cursos');
    }
    public function professores(){
      return view('professores');
    }
    public function reuniao(){
      return view('reuniao');
    }
    public function disciplinas(){
      return view('disciplinas');
    }
    public function ensino(){
      return view('ensino');
    }
    public function avaliacao(){
      return view('avaliacao');
    }
    public function ppc(){
      return view('ppc');
    }
    public function filtro(){
      return view('filtroppc');
    }
    public function bibliografias(){
      return view('bibliografias');
    }

}
