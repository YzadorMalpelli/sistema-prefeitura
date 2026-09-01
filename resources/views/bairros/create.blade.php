@extends('layouts.app')
 
@section('content')
<h2>Novo Bairro</h2>
 
<form action="{{ route('bairros.store') }}" method="POST">
    @csrf
 
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" required>
 
    <button class="btn btn-success mt-3">Salvar</button>
</form>
@endsection