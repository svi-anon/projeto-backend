<?php

namespace App\Http\Controllers;

class AlunoController extends Controller
{
public function index()
{
    $alunos = [
        ['nome' => 'Ana'],
        ['nome' => 'Bruno'],
        ['nome' => 'Carlos']
    ];

    return view('alunos.index', compact('alunos'));
}
    public function show(string $id)
    {
        return view('alunos.show', compact('id'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store()
    {
        return 'Aluno cadastrado';
    }

    public function edit(string $id)
    {
        return view('alunos.edit', compact('id'));
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
