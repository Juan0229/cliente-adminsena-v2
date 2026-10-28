@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Areas</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('areas.create') }}" class="btn btn-primary mb-3">Crear Area</a>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($areas as $area)
                <tr>
                    <td>{{ $area['id'] ?? '' }}</td>
                    <td>{{ $area['name'] ?? '' }}</td>
                    <td>
                        @if (!empty($area['image']))
                            <img src="{{ $area['image'] }}" alt="{{ $area['name'] }}" class="img-thumbnail" style="max-height: 60px;">
                        @else
                            <span class="text-muted">Sin imagen</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('areas.edit', $area['id']) }}" class="btn btn-sm btn-secondary">Editar</a>
                        @if (!empty($area['image']))
                            <form action="{{ route('areas.removeImage', $area['id']) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('¿Eliminar la imagen del área?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-secondary">Eliminar imagen</button>
                            </form>
                        @endif
                        <form action="{{ route('areas.destroy', $area['id']) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('¿Eliminar el área completa?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-secondary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
