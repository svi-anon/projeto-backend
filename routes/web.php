<?php

use App\Http\Controllers\AlunoController;
use App\Models\Turma;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/sobre', function () {
    return 'Pagina sobre';
});

Route::get('/contato', function () {
    return 'Pagina de contato';
});

Route::get('/produto/{id}', function ($id) {
    return "Produto {$id}";
});

Route::get('/categoria/{id}', function ($id) {
    return "Categoria {$id}";
});

Route::get('/usuario/{id}', function ($id) {
    return "Usuario {$id}";
});

Route::get('/turmas/{turma}', function (Turma $turma) {
    return view('turmas.show', compact('turma'));
})->name('turmas.show');

Route::resource('alunos', AlunoController::class);