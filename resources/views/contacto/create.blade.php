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
  

  <form action="{{ url('contacto') }}" method="POST" class="box" style="max-width: 700px; margin: auto; padding: 20px;">
    @csrf
   <h2 class="title is-4 has-text-centered">Contactanos.</h2>
   

    <!-- Campo Nombre -->
    <div class="field">
      <label class="label" for="nombre">Nombre</label>
      <div class="control">
        <input class="input" type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="Nombre" required>
      </div>
      @error('nombre')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div>


    <!-- Campo Email -->
    <div class="field">
      <label class="label" for="email">Email</label>
      <div class="control">
        <input class="input" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="ejemplo@correo.com" required>
      </div>
      @error('email')
        <p class="help is-danger">{{ $message }}</p>
      @enderror
    </div>

    <!-- Campo mensaje -->
    <div class="field">
      <label class="label" for="telefono">mensaje</label>
      <div class="control">
        <textarea 
            class="textarea" 
            name="mensaje" 
            id="mensaje" 
            placeholder="Escribe tu mensaje aquí..." 
            required>{{ old('mensaje') }}</textarea>
      </div>
      @error('mensaje')
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