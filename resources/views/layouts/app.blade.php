<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminSena - Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <a class="navbar-brand" href="{{ url('/') }}">AdminSena</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('areas.index') }}">Areas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('training_centers.index') }}">Centros</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('computers.index') }}">Computadores</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('courses.index') }}">Cursos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('teachers.index') }}">Instructores</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('apprentices.index') }}">Aprendices</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('categories') }}">Categorias</a></li>
            </ul>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>