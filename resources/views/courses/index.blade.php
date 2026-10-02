@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Cursos</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Numero de curso</th>
                <th>Dia</th>
                <th>Area</th>
                <th>Centro de formacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course['id'] ?? '' }}</td>
                    <td>{{ $course['course_number'] ?? '' }}</td>
                    <td>{{ $course['day'] ?? '' }}</td>
                    <td>{{ $course['area_id'] ?? '' }}</td>
                    <td>{{ $course['training_center_id'] ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
