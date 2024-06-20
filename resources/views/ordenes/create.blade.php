@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nueva Orden</h1>
    <form action="{{ route('ordens.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="mesa">Mesa</label>
            <input type="text" class="form-control" id="mesa" name="mesa" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection