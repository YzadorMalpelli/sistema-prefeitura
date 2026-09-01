@extends('layouts.app')
 
@section('content')
<h2>Nova CNH</h2>
 
<form action="{{ route('cnhs.store') }}" method="POST">
    @csrf
 
    <label>Número</label>
    <input type="text" name="numero" class="form-control" required>
 
    <label>Categoria</label>
    <input type="text" name="categoria" class="form-control" required>
 
    <label>Validade</label>
    <input type="date" name="validade" class="form-control" required>
 
    <label>Órgão Emissor</label>
    <input type="text" name="orgao_emissor" class="form-control">
 
    <label>Funcionário</label>
    <select name="funcionario_id" class="form-control" required>
        <option value="">Selecione...</option>
        @foreach($funcionarios as $f)
            <option value="{{ $f->id }}">{{ $f->nome }}</option>
        @endforeach
    </select>
 
    <button class="btn btn-success mt-3">Salvar</button>
</form>
@endsection