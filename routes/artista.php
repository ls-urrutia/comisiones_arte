<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Artista\ArtistaController;

Route::prefix('artista')->name('artista.')->group(function(){

Route::middleware(['guest:artista','PreventBackHistory'])->group(function(){
     Route::view('/login','dashboard.artista.login')->name('login');
     Route::view('/register','dashboard.artista.register')->name('register');
     Route::post('/create',[ArtistaController::class,'create'])->name('create');
     Route::post('/check',[ArtistaController::class,'check'])->name('check');
});

Route::middleware(['auth:artista','PreventBackHistory'])->group(function(){
     Route::view('/home','dashboard.artista.home')->name('home');
     Route::post('logout',[ArtistaController::class,'logout'])->name('logout');
     Route::resource('/portafolio','App\Http\Controllers\Artista\FileController')->names('files');
});

});
