@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categorias del Menu</h1>
    <a href="{{ route('ordens.create') }}" class="btn btn-primary">Crear nuevas Ordenes</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mesa</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ordens as $orden)
            <tr>
                <td>{{ $orden->id }}</td>
                <td>{{ $orden->Mesa }}</td>
                <td>{{ $orden->Estado }}</td>
                
                <td>
                    <a href="{{ route('ordens.edit', $orden->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('ordens.destroy', $orden->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection