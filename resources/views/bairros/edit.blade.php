@extends('layouts.app')
 
@section('content')
<h2>Editar Bairro</h2>
 
<form action="{{ route('bairros.update', $bairro) }}" method="POST">
    @csrf
    @method('PUT')
 
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ $bairro->nome }}" required>
 
    <button class="btn btn-success mt-3">Atualizar</button>
</form>
@endsection