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

        <!-- Título y logo -->
        <h1 class="title  is-1 mt-3">"EL FARO"</h1>

        <figure class="image is-inline-block custom-logo">
            <img src="{{ asset('img/1393-El-Faro-noticias-Logo.png') }}" alt="Descripción">

        </figure>

        <!-- Menú -->
        <nav class="navbar is-light" role="navigation" aria-label="main navigation">

            <div class="navbar-menu is-active is-flex is-justify-content-center">

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Menú</a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ route('deportes') }}">Deportes</a>
                        <a class="navbar-item" href="{{ route('negocios') }}">Negocios</a>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Noticias</a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{ route('noticias') }}">Lo más relevante</a>
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


    <!-- Texto de bienvenida -->
    <section class="section">
        <div class="container">
            <p class="content is-medium">
                Bienvenido a <strong>"El Faro"</strong>, tu fuente confiable de noticias más recientes y relevantes en deportes,
                negocios y temas de interés general. Nos dedicamos a ofrecerte la información más actualizada sobre los eventos
                deportivos más destacados, las últimas tendencias en el mundo de los negocios, y las noticias más importantes
                que afectan tu día a día. ¡Mantente informado y al tanto de todo lo que está sucediendo en el mundo con
                nosotros!
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container">




    

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