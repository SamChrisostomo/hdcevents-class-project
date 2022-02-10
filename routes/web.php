<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use GuzzleHttp\Middleware;

Route::get('/', [EventController::class, 'index']); //Rota para chamar a index

Route::get('/events/create', [EventController::class, 'create'])->Middleware('auth'); //Rota para chamar a view de criar evento
Route::get('/events/{id}', [EventController::class, 'show']); //Rota para chamar view com detalhes do evento
Route::post('/events', [EventController::class, 'store']); //Rota do formulário de criação de eventos

//Rotas criadas pelo Jetstream e Livewire
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
