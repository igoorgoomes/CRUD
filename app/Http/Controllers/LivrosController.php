<?php

//Um controller nada mais é que um controlador para organizar toda nossa lógica do código
//Rotas-> Controller=> (Model) <= -> View

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index(){
        //dd('Teste');
        $teste = 'Testando o template';
        return view('home.index',['teste'=>$teste]);
    }
}
