@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Aprendices</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Curso</th>
                <th>Computador</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apprentices as $apprentice)
                <tr>
                    <td>{{ $apprentice['id'] ?? '' }}</td>
                    <td>{{ $apprentice['name'] ?? '' }}</td>
                    <td>{{ $apprentice['email'] ?? '' }}</td>
                    <td>{{ $apprentice['cell_number'] ?? '' }}</td>
                    <td>{{ $apprentice['course_id'] ?? '' }}</td>
                    <td>{{ $apprentice['computer_id'] ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
