<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('storage/logoveterinaria.png') }}"
                        alt="Logo Veterinaria AnimalCare"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav" id="lista">
                        <li class="nav-item" id="lista-item">
                            <a class="nav-link enlace" href="{{ route('home#services') }}"
                                id="lista-item-enlace">Servicios</a>
                        </li>
                        <li class="nav-item" id="lista-item">
                            <a class="nav-link" href="{{ route('home#about') }}" id="lista-item-enlace">Nosotros</a>
                        </li>
                        <li class="nav-item" id="lista-item">
                            <a class="nav-link" href="{{ route('home#contact') }}" id="lista-item-enlace">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
        

            
        @yield('content2')

    </main>
    <footer>
        <p>&copy; 2024 Veterinaria Amigos son los Amigos - Todos los derechos reservados.</p>
    </footer>
</body>

</html>