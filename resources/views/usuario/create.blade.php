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
  

  <form action="{{ url('usuario') }}" method="POST" class="box" style="max-width: 700px; margin: auto; padding: 20px;">
    @csrf
   <h2 class="title is-4 has-text-centered">Registrar Usuario</h2>
   
   <!-- Campo: RUT -->
<div class="field">
  <label class="label" for="rut">RUT</label>
  <div class="control">
    <input class="input @error('rut') is-danger @enderror" type="text" name="rut" id="rut" value="{{ old('rut') }}" placeholder="Ej: 12.345.678-9" required>
  </div>
  @error('rut')
  <p class="help is-danger has-text-weight-bold is-size-5">{{ $message }}</p>
@enderror
</div>

    <!-- Campo Nombre -->
    <div class="field">
      <label class="label" for="nombre">Nombre</label>
      <div class="control">
        <input class="input" type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="Nombre">
      </div>
      @error('nombre')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div>

    <!-- Campo Apellido -->
    <div class="field">
      <label class="label" for="apellido">Apellido</label>
      <div class="control">
        <input class="input" type="text" name="apellido" id="apellido" value="{{ old('apellido') }}" placeholder="Apellido">
      </div>
      @error('apellido')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div>

    <!-- Campo Email -->
    <div class="field">
      <label class="label" for="email">Email</label>
      <div class="control">
        <input class="input" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="ejemplo@correo.com">
      </div>
      @error('email')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div>

    <!-- Campo Teléfono -->
    <div class="field">
      <label class="label" for="telefono">Teléfono</label>
      <div class="control">
        <input class="input" type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" placeholder="+56 9 1234 5678">
      </div>
      @error('telefono')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div>

   <!-- Botón -->
    <div class="field is-grouped mt-4">
      <div class="control">
        <button type="submit" class="button is-primary">Registrar</button>
      </div>
      <div class="control">
        <a href="{{ route('index') }}" class="button is-light">Cancelar</a>
      </div>
    </div>

  </form>
</div>



<!-- Footer -->
  <footer class="footer has-background-light">
    <div class="content has-text-centered">
      <p>&copy; 2025 "EL FARO". Todos los derechos reservados.</p>
      <p>Contacto: <a href="mailto:elfaro_noticias@gmail.com">elfaro_noticias@gmail.com</a></p>
    </div>
  </footer>

</body>
</html>