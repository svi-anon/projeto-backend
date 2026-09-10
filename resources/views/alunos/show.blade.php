@extends('layouts.app')

@section('title', 'Aluno')

@section('content')
<h1>{{ $aluno->nome }}</h1>
<p>{{ $aluno->email }}</p>
<p>{{ $aluno->curso }}</p>
@endsection