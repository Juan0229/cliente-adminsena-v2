@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Registrar área</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('areas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name"><strong>Nombre del área</strong></label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Ej: Sistemas"
                   value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label><strong>Imagen del área</strong></label>
            <div id="dropzone" class="border rounded p-4 text-center" style="border-style: dashed !important; cursor: pointer;">
                <img id="preview" src="" alt="" class="img-thumbnail mb-2 d-none" style="max-height: 150px;">
                <p class="mb-1">Seleccionar imagen desde mi PC</p>
                <small class="text-muted">JPG, PNG o WEBP</small>
                <input type="file" name="image" id="image" accept="image/jpeg,image/png,image/webp" class="d-none">
            </div>
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-secondary mr-2">Guardar área</button>
            <button type="button" id="btn-clear" class="btn btn-outline-secondary d-none">Eliminar imagen</button>
        </div>
    </form>

    <script>
        const dropzone = document.getElementById('dropzone');
        const input = document.getElementById('image');
        const preview = document.getElementById('preview');
        const btnClear = document.getElementById('btn-clear');

        dropzone.addEventListener('click', () => input.click());

        input.addEventListener('change', () => {
            const file = input.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
                btnClear.classList.remove('d-none');
            }
        });

        btnClear.addEventListener('click', () => {
            input.value = '';
            preview.src = '';
            preview.classList.add('d-none');
            btnClear.classList.add('d-none');
        });
    </script>
@endsection
