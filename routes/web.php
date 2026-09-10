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