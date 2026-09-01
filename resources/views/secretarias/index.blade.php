@extends('layouts.app')

@section('content')
<h2>Secretarias</h2>

<a href="{{ route('secretarias.create') }}" class="btn btn-primary mb-3">Nova Secretaria</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>

    @foreach($secretarias as $s)
    <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->nome }}</td>
        <td>{{ $s->telefone }}</td>
        <td>
            <a href="{{ route('secretarias.edit', $s) }}" class="btn btn-warning btn-sm">Editar</a>

            <form action="{{ route('secretarias.destroy', $s) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection