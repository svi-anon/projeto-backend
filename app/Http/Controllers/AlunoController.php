<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use Illuminate\Support\Facades\Gate;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    public function create()
    {
        Gate::authorize('create', Aluno::class);

        return view('alunos.create');
    }

    public function store(AlunoRequest $request)
    {
        Gate::authorize('create', Aluno::class);

        Aluno::create($request->validated());

        return redirect()->route('alunos.index');
    }

    public function edit(Aluno $aluno)
    {
        Gate::authorize('update', $aluno);

        return view('alunos.edit', compact('aluno'));
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        Gate::authorize('update', $aluno);

        $aluno->update($request->validated());

        return redirect()->route('alunos.index');
    }

    public function destroy(Aluno $aluno)
    {
        Gate::authorize('delete', $aluno);

        $aluno->delete();

        return redirect()->route('alunos.index');
    }
}