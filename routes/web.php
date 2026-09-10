<?php

use Illuminate\Support\Facades\Route;

Route::get('/sobre', function () {
    return 'Pagina sobre';
});

Route::get('/alunos', function () {
    return 'Lista de alunos';
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
