<?php

use App\Http\Controllers\LivrosController;
use Illuminate\Support\Facades\Route;

Route::prefix('livros')->group(function(){
    Route::get('/',[LivrosController::class,'index'])->name('livros.index');
    Route::get('/create',[LivrosController::class,'create'])->name('livros.create');
    Route::post('/',[LivrosController::class,'store'])->name('livros.store');
    Route::get('/{id}/edit',[LivrosController::class,'edit'])->where('id','[0-9]+')->name('livros.edit');
    Route::put('/{id}',[LivrosController::class,'update'])->where('id','[0-9]+')->name('livros.update');
    Route::delete('/{id}',[LivrosController::class,'destroy'])->where('id','[0-9]+')->name('livros.destroy');
});

Route::get('/',[LivrosController::class,'index'])->name('livros.index');

Route::fallback(function(){
    return "404 - Not Found";
});