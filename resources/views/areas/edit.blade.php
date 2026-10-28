@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Editar área</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('areas.update', $area['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name"><strong>Nombre del área</strong></label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $area['name']) }}" required>
        </div>

        <div class="form-group">
            <label><strong>Imagen del área</strong></label>
            @if (!empty($area['image']))
                <div class="mb-2">
                    <img src="{{ $area['image'] }}" alt="{{ $area['name'] }}" class="img-thumbnail" style="max-height: 120px;">
                </div>
            @endif
            <div id="dropzone" class="border rounded p-4 text-center" style="border-style: dashed !important; cursor: pointer;">
                <img id="preview" src="" alt="" class="img-thumbnail mb-2 d-none" style="max-height: 150px;">
                <p class="mb-1">Cambiar imagen desde mi PC</p>
                <small class="text-muted">JPG, PNG o WEBP</small>
                <input type="file" name="image" id="image" accept="image/jpeg,image/png,image/webp" class="d-none">
            </div>
        </div>

        <button type="submit" class="btn btn-secondary">Guardar</button>
        <a href="{{ route('areas.index') }}" class="btn btn-outline-secondary">Volver</a>
    </form>

    <script>
        const dropzone = document.getElementById('dropzone');
        const input = document.getElementById('image');
        const preview = document.getElementById('preview');

        dropzone.addEventListener('click', () => input.click());

        input.addEventListener('change', () => {
            const file = input.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
            }
        });
    </script>
@endsection
