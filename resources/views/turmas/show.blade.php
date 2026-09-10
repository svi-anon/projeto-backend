@extends('layouts.app')

@section('title', 'Turma')

@section('content')
<h1>{{ $turma->nome }}</h1>

@if($turma->alunos->count() > 0)
    @foreach($turma->alunos as $aluno)
        <p>{{ $aluno->nome }}</p>
    @endforeach
@else
    <p>Nenhum aluno nesta turma</p>
@endif
@endsection