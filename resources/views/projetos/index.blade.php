@extends('layouts.app')

@section('content')
<h2>Projetos</h2>

<a href="{{ route('projetos.create') }}" class="btn btn-primary mb-3">Novo Projeto</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Secretaria</th>
        <th>Ações</th>
    </tr>

    @foreach($projetos as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nome }}</td>
        <td>{{ $p->secretaria->nome }}</td>
        <td>
            <a href="{{ route('projetos.edit', $p) }}" class="btn btn-warning btn-sm">Editar</a>

            <form action="{{ route('projetos.destroy', $p) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection