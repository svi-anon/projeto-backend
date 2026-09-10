@extends('layouts.app')

@section('title', 'Cadastrar aluno')

@section('content')
<h1>Cadastrar aluno</h1>

<form action="{{ route('alunos.store') }}" method="POST">
    @csrf

    <label>Nome</label>
    <input type="text" name="nome">

    <label>Email</label>
    <input type="email" name="email">

    <label>Curso</label>
    <input type="text" name="curso">

    <button type="submit">Cadastrar</button>
</form>
@endsection