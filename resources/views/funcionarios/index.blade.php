@extends('layouts.app')
 
@section('content')
<h2>CNHs</h2>
 
<a href="{{ route('cnhs.create') }}" class="btn btn-primary mb-3">Nova CNH</a>
 
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
 
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Número</th>
        <th>Categoria</th>
        <th>Validade</th>
        <th>Funcionário</th>
        <th>Ações</th>
    </tr>
 
    @foreach($cnhs as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->numero }}</td>
        <td>{{ $c->categoria }}</td>
        <td>{{ \Carbon\Carbon::parse($c->validade)->format('d/m/Y') }}</td>
        <td>{{ $c->funcionario->nome }}</td>
        <td>
            <a href="{{ route('cnhs.edit', $c) }}" class="btn btn-warning btn-sm">Editar</a>
 
            <form action="{{ route('cnhs.destroy', $c) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection