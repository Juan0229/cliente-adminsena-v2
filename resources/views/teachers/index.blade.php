@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Instructores</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Area</th>
                <th>Centro de formacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher['id'] ?? '' }}</td>
                    <td>{{ $teacher['name'] ?? '' }}</td>
                    <td>{{ $teacher['email'] ?? '' }}</td>
                    <td>{{ $teacher['area_id'] ?? '' }}</td>
                    <td>{{ $teacher['training_center_id'] ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
