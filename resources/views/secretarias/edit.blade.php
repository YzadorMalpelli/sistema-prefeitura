@extends('layouts.app')

@section('content')
<h2>Editar Secretaria</h2>

<form action="{{ route('secretarias.update', $secretaria) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ $secretaria->nome }}" required>

    <label>Telefone</label>
    <input type="text" name="telefone" class="form-control" value="{{ $secretaria->telefone }}">

    <label>Endereço</label>
    <input type="text" name="endereco" class="form-control" value="{{ $secretaria->endereco }}">

    <button class="btn btn-success mt-3">Atualizar</button>
</form>
@endsection