@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
<h1>Alunos</h1>

@if(count($alunos) > 0)
    @foreach($alunos as $aluno)
        <p>{{ $aluno['nome'] }}</p>
    @endforeach
@else
    <p>Nenhum aluno cadastrado</p>
@endif
@endsection