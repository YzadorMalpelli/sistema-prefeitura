@extends('layouts.app')
 
@section('content')
<h2>Bairros</h2>
 
<a href="{{ route('bairros.create') }}" class="btn btn-primary mb-3">Novo Bairro</a>
 
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
 
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
 
    @foreach($bairros as $b)
    <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->nome }}</td>
        <td>
            <a href="{{ route('bairros.edit', $b) }}" class="btn btn-warning btn-sm">Editar</a>
 
            <form action="{{ route('bairros.destroy', $b) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection