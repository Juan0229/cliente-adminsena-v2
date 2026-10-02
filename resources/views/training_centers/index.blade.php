@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Centros de Formacion</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trainingCenters as $trainingCenter)
                <tr>
                    <td>{{ $trainingCenter['id'] ?? '' }}</td>
                    <td>{{ $trainingCenter['name'] ?? '' }}</td>
                    <td>{{ $trainingCenter['location'] ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
