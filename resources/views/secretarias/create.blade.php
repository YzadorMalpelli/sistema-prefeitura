@extends('layouts.app')

@section('content')
<h2>Nova Secretaria</h2>

<form action="{{ route('secretarias.store') }}" method="POST">
    @csrf

    <label>Nome</label>
    <input type="text" name="nome" class="form-control" required>

    <label>Telefone</label>
    <input type="text" name="telefone" class="form-control">

    <label>Endereço</label>
    <input type="text" name="endereco" class="form-control">

    <button class="btn btn-success mt-3">Salvar</button>
</form>
@endsection