@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Areas</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($areas as $area)
                <tr>
                    <td>{{ $area['id'] ?? '' }}</td>
                    <td>{{ $area['name'] ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
