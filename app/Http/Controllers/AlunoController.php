<?php

namespace App\Http\Controllers;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de alunos';
    }

    public function show(string $id)
    {
        return "Aluno {$id}";
    }

    public function create()
    {
        return 'Criar aluno';
    }

    public function store()
    {
        return 'Aluno cadastrado';
    }

    public function edit(string $id)
    {
        return "Editar aluno {$id}";
    }

    public function update(string $id)
    {
        return "Aluno {$id} atualizado";
    }

    public function destroy(string $id)
    {
        return "Aluno {$id} excluido";
    }
}
