<!DOCTYPE html>
<html lang="es">

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
<section class="section has-text-centered">
        
        <!-- Reloj -->
        <div id="Reloj" class="is-size-4 has-text-weight-bold mb-3"></div>
      
        <!-- Botones reloj -->
        <div class="buttons is-centered mb-5">
          <button id="Formato24" class="button is-info is-small">Formato 24 horas</button>
          <button id="Formato12" class="button is-info is-small">Formato 12 horas</button>
        </div>
      

<!-- Título -->
<section class="section has-text-centered">
    <h1 class="title is-2 mt-3">Las Noticias mas Relevantes de Chile y el Mumdo</h1>
</section>

<!-- audio -->
<div class="container has-text-centered my-5">
    <audio controls autoplay loop>
      <source src="{{ asset('audio/breaking-news-background-music-252187.mp3') }}" type="audio/mpeg">
    </audio>
  </div>

     <!-- Menú -->
     <nav class="navbar is-light" role="navigation" aria-label="main navigation">
        <div class="navbar-menu is-active is-flex is-justify-content-center">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Menú</a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ route('index') }}">Inicio</a>
                    <a class="navbar-item" href="{{ route('deportes') }}">Deportes</a>
                    <a class="navbar-item" href="{{ route('negocios') }}">Negocios</a>
                </div>
            </div>
 <!-- Botónes a la derecha -->
                <div class="navbar-end">
                    <div class="navbar-item">
                        <a href="{{ route('usuario.create') }}" class="button is-primary is-small">
                            Registrar Usuario.
                        </a>
                    </div>
                </div>

                    <div class="navbar-item">
                        <a href="{{ route('contacto.create') }}" class="button is-primary is-small">
                            contactenos.
                        </a>
                    </div>
            
        </div>
    </nav>
</section>

     <!-- Banner de publicidad -->
     <section class="section">
      <div class="container">
        <div class="notification is-primary banner-publicidad">
          <div class="columns is-vcentered">
            <div class="column is-10">
              <figure class="image is-inline-block" style="max-width: 200px;">
                <img src="{{ asset('img/cyberDays.png') }}" alt="Descripción">
               
              </figure>
              <p class="has-text-white is-size-5">No olvides que se acerca el cyber day 2025, y en, tecnolocura estará todo, sí!! Todos los productos a un 50% de descuento, es tu momento para hacerte ese regalito que tanto te mereces, ve ahora a tegnolocura.com y revisas los fabulosos productos que tenemos para ti.
                Eres demasiado pro para dejar pasar esta gran oportunidad, ¿verdad?…</p>
            </div>
            <div class="column is-2 has-text-right">
              <button class= "button is-danger mt-3" id="cerrar">cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </section>



<section class="section">
  <div class="container">
    <div class="columns is-multiline" id="news-container">
      <div id="newsSection" class="columns is-multiline">
        <!-- Aquí agrego las noticias dinámicas -->
      </div>
    </div>
  </div>
</section>


  <div class="container my-6">
    <h2 class="title is-3 has-text-centered">Video Noticia</h2>
  
    <div class="columns is-centered">
      <div class="column is-8 has-text-centered">
        <div class="video-container">
          <iframe
            class="has-ratio"
            width="640"
            height="360"
            src="https://www.youtube.com/embed/V9iMQvg6QZA?si=Ahm1idM88DXhjtEt"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>


  
 <!-- formulario noticia -->
 <section class="section">
  <div class="container">
    <!-- Botón para mostrar/ocultar el formulario -->
    <button id="subirNoticia" class="button is-primary">Sube tu Noticia.</button>

    <!-- Formulario para subir noticia -->
    <div id="Formulario" class="box" style="display: none;">
      <h2 class="title1 is-4 has-text-centered">Completa los campos Requeridos para tu Noticia.</h2>

      <form id="newsForm">
        <!-- Campo de titulo -->
        <div class="field">
          <label class="label" for="titulo">Título</label>
          <div class="control">
            <input class="input" type="text" id="titulo" placeholder="Título de la noticia..." required>
          </div>
        </div>

        <!-- Campo de imagen -->
        <div class="field">
          <label class="label">Imagen de la Noticia</label>
          <div class="control">
            <input class="input" type="file" id="imagen" accept="image/*" required>
          </div>
        </div>

        <!-- Campo de cuerpo noticia -->
        <div class="field">
          <label class="label">Cuerpo</label>
          <div class="control">
            <textarea class="textarea" id="cuerpo" placeholder="Desarrolla tu noticia..." required></textarea>
          </div>
        </div>

        <!-- Campo de Categoría -->
        <div class="field">
          <label class="label">Categoría de la Noticia</label>
          <div class="control">
            <div class="select">
              <select id="categoria" required>
                <option value="Noticias">Noticias</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Botón de Enviar -->
        <div class="field is-grouped is-grouped-centered">
          <div class="control">
            <button type="submit" class="button is-primary">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

  

 <!-- Contador de artículos -->
 <section class="section has-text-centered">
  <div class="notification is-info">
    <strong><span id="contadorNoticias" class="contador">0 artículos</span></strong>
  </div>
</section>

  

  <!-- Footer -->
  <footer class="footer has-background-light">
    <div class="content has-text-centered">
      <p>&copy; 2025 "EL FARO". Todos los derechos reservados.</p>
      <p>Contacto: <a href="mailto:elfaro_noticias@gmail.com">elfaro_noticias@gmail.com</a></p>
    </div>
  </footer>

  @vite('resources/js/app.js')

    
</body>
</html>