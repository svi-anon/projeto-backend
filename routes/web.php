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

Route::get('/admin', function () {
    return 'Area admin';
})->middleware(['auth', 'role:admin']);

Route::get('/professor', function () {
    return 'Area prof';
})->middleware(['auth', 'role:prof']);

Route::resource('alunos', AlunoController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';