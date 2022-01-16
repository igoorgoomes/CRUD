<?php

//Um controller nada mais é que um controlador para organizar toda nossa lógica do código
//Rotas-> Controller=> (Model) <= -> View

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index(){
        //dd('Teste');
        $livros = Livro::all();
        //dd($livros);
        return view('home.index',['livros'=>$livros]);
    }

    public function create(){
        return view('home.create');
    }

    public function store(Request $request){
        Livro::create($request->all());
        return redirect()->route('livros.index');
    }

    public function edit($id){
        $livros = Livro::where('id',$id)->first();
        if(!empty($livros)){
            return view('home.edit',['livros'=>$livros]);
        }else{
            return redirect()->route('livros.index');
        }
        
    }

    public function update(Request $request,$id){
        
        $data = [
            'nome'=>$request->nome,
            'categoria'=>$request->categoria,
            'ano_criacao'=>$request->ano_criacao,
            'valor'=>$request->valor,
        ];
        Livro::where('id',$id)->update($data);
        return redirect()->route('livros.index');
    }

    public function destroy($id){
        //dd($id);
        Livro::where('id',$id)->delete();
        return redirect()->route('livros.index');
    }
}
