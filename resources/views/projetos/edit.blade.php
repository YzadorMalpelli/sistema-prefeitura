@extends('layouts.app')
 
@section('content')
<h2>Editar Projeto</h2>
 
<form action="{{ route('projetos.update', $projeto) }}" method="POST">
    @csrf
    @method('PUT')
 
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ $projeto->nome }}" required>
 
    <label>Descrição</label>
    <textarea name="descricao" class="form-control">{{ $projeto->descricao }}</textarea>
 
    <label>Data Início</label>
    <input type="date" name="data_inicio" class="form-control" value="{{ $projeto->data_inicio }}">
 
    <label>Data Fim</label>
    <input type="date" name="data_fim" class="form-control" value="{{ $projeto->data_fim }}">
 
    <label>Orçamento</label>
    <input type="number" step="0.01" name="orcamento" class="form-control" value="{{ $projeto->orcamento }}">
 
    <label>Secretaria</label>
    <select name="secretaria_id" class="form-control" required>
        @foreach($secretarias as $s)
            <option value="{{ $s->id }}" {{ $projeto->secretaria_id == $s->id ? 'selected' : '' }}>
                {{ $s->nome }}
            </option>
        @endforeach
    </select>
 
    <label>Bairros</label>
    <select name="bairros[]" class="form-control" multiple>
        @foreach($bairros as $b)
            <option value="{{ $b->id }}"
                {{ $projeto->bairros->contains($b->id) ? 'selected' : '' }}>
                {{ $b->nome }}
            </option>
        @endforeach
    </select>
 
    <button class="btn btn-success mt-3">Atualizar</button>
</form>
@endsection