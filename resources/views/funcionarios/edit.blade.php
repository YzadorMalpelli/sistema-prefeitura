@extends('layouts.app')

@section('content')
<h2>Editar Funcionário</h2>

<form action="{{ route('funcionarios.update', $funcionario) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ $funcionario->nome }}" required>

    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ $funcionario->email }}" required>

    <label>Telefone</label>
    <input type="text" name="telefone" class="form-control" value="{{ $funcionario->telefone }}">

    <label>Cargo</label>
    <input type="text" name="cargo" class="form-control" value="{{ $funcionario->cargo }}">

    <button class="btn btn-success mt-3">Atualizar</button>
</form>
@endsection