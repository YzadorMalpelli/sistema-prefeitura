@extends('layouts.app')

 

@section('content')

<h2>Editar CNH</h2>

 

<form action="{{ route('cnhs.update', $cnh) }}" method="POST">

    @csrf

    @method('PUT')

 

    <label>Número</label>

    <input type="text" name="numero" class="form-control" value="{{ $cnh->numero }}" required>

 

    <label>Categoria</label>

    <input type="text" name="categoria" class="form-control" value="{{ $cnh->categoria }}" required>

 

    <label>Validade</label>

    <input type="date" name="validade" class="form-control" value="{{ $cnh->validade }}" required>

 

    <label>Órgão Emissor</label>

    <input type="text" name="orgao_emissor" class="form-control" value="{{ $cnh->orgao_emissor }}">

 

    <label>Funcionário</label>

    <select name="funcionario_id" class="form-control" required>

        @foreach($funcionarios as $f)

            <option value="{{ $f->id }}" {{ $cnh->funcionario_id == $f->id ? 'selected' : '' }}>

                {{ $f->nome }}

            </option>

        @endforeach

    </select>

 

    <button class="btn btn-success mt-3">Atualizar</button>

</form>

@endsection


