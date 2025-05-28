<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Las noticias más recientes y relevantes de deportes, negocios y más</title>

    <!-- para utilizar Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <!-- mi estilo -->
    @vite('resources/css/app.css')

    <!-- Tipografías -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Special+Gothic&family=Special+Gothic+Condensed+One&display=swap"
        rel="stylesheet" />
</head>


<body>

<div class="container py-4">

@if (session('success'))
  <div class="notification is-success is-light">
    {{ session('success') }}
  </div>
@endif

    <h2 class="title is-4">Nuevo registro</h2>

    <a href="{{ url('usuario/create') }}" class="button is-primary is-small">
        registrarse
    </a>

    <a href="{{ route('index') }}" class="button is-primary is-small">
        Inicio
    </a>
    
</div>
    
</body>
</html>