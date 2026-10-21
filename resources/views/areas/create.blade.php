@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Crear Area</h1>

        <form action="{{ route('areas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre del area" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
            <a href="{{ route('areas.index') }}" class="btn btn-secondary mt-3">Volver</a>
        </form>
    </div>
@endsection
