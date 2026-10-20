@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Crear Computador</h1>

        <form action="{{ route('computers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="number">Número</label>
                <input type="text" name="number" id="number" class="form-control" placeholder="Número del computador" required>
            </div>
            <div class="form-group mt-2">
                <label for="brand">Marca</label>
                <input type="text" name="brand" id="brand" class="form-control" placeholder="Marca" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
            <a href="{{ route('computers.index') }}" class="btn btn-secondary mt-3">Volver</a>
        </form>
    </div>
@endsection
