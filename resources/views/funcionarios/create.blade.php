@extends('layouts.app')

@section('content')
<h2>Novo Funcionário</h2>

<form action="{{ route('funcionarios.store') }}" method="POST">
    @csrf

    <label>Nome</label>
    <input type="text" name="nome" class="form-control" required>

    <label>Email</label>
    <input type="email" name="email" class="form-control" required>

    <label>Telefone</label>
    <input type="text" name="telefone" class="form-control">

    <label>Cargo</label>
    <input type="text" name="cargo" class="form-control">

    <button class="btn btn-success mt-3">Salvar</button>
</form>
@endsection