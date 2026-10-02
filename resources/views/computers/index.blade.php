@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Computadores</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Numero</th>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computers as $computer)
                <tr>
                    <td>{{ $computer['id'] ?? '' }}</td>
                    <td>{{ $computer['number'] ?? '' }}</td>
                    <td>{{ $computer['brand'] ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
