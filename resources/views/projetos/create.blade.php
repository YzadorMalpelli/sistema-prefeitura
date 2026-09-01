@extends('layouts.app')

 

@section('content')

<h2>Novo Projeto</h2>

 

<form action="{{ route('projetos.store') }}" method="POST">

    @csrf

 

    <label>Nome</label>

    <input type="text" name="nome" class="form-control" required>

 

    <label>Descrição</label>

    <textarea name="descricao" class="form-control"></textarea>

 

    <label>Data Início</label>

    <input type="date" name="data_inicio" class="form-control">

 

    <label>Data Fim</label>

    <input type="date" name="data_fim" class="form-control">

 

    <label>Orçamento</label>

    <input type="number" step="0.01" name="orcamento" class="form-control">

 

    <label>Secretaria</label>

    <select name="secretaria_id" class="form-control" required>

        <option value="">Selecione...</option>

        @foreach($secretarias as $s)

            <option value="{{ $s->id }}">{{ $s->nome }}</option>

        @endforeach

    </select>

 

    <label>Bairros</label>

    <select name="bairros[]" class="form-control" multiple>

        @foreach($bairros as $b)

            <option value="{{ $b->id }}">{{ $b->nome }}</option>

        @endforeach

    </select>

 

    <button class="btn btn-success mt-3">Salvar</button>

</form>

@endsection
