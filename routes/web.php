<?php

use App\Http\Controllers\LivrosController;
use Illuminate\Support\Facades\Route;

/* Trabalhando com Routes
Route::get('/', function () {
    return view('welcome');
});

//retorna as views
Route::view('/home','home');

//retorna um texto
Route::get('/home', function(){
   return "Hello";
});

//enviar um parâmetro estático
Route::view('/home','home',['id'=>'GTA']);

//retorna parâmetros dinâmicos
Route::get ('/home/{id?}/{name?}', function($id = null, $name = null){
    return view ('home',['idCadastro'=>$id, 'nomeColaborador'=>$name]);
})->where('id','[0-9]+', 'name','[a-z]+');*/

//para iniciar um controller, utilzar o seguindo comando no terminal
//php artisan make:controller [nomeDoController]

Route::get('/home',[LivrosController::class,'index']);

