<?php

use App\Http\Controllers\LivrosController;
use Illuminate\Support\Facades\Route;

Route::prefix('livros')->group(function(){
    Route::get('/',[LivrosController::class,'index'])->name('livros.index');
    Route::get('/create',[LivrosController::class,'create'])->name('livros.create');
    Route::post('/',[LivrosController::class,'store'])->name('livros.store');
});

Route::fallback(function(){
    return "404 - Not Found";
});