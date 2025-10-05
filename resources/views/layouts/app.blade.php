<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title') | EcoRecicla</title>

        <!-- 1. Cargar Bootstrap -->
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

        <!-- 2. Cargar tu CSS Personalizado (¡Justo aquí, después de Bootstrap!) -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
                
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo EcoRecicla" width="70" height="70" class="d-inline-block align-text-top">
                    EcoRecicla
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="/" class="nav-link">Inicio</a></li>
                        <li class="nav-item"><a href="/nosotros" class="nav-link">Nosotros</a></li>
                        <li class="nav-item"><a href="/planes" class="nav-link">Planes</a></li>
                        <li class="nav-item"><a href="/contacto" class="nav-link">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav> 
        
        <main class="container-fluid p-0">
            @if (isset($slot)) {{ $slot }} @else @yield('content') @endif
        </main> 
            
        <footer class="bg-dark text-light text-center py-4 mt-5">
            <div class="container">
                <div class="row text-start"> 
                    <div class="col-md-3 col-sm-6">
                        <h4 class="footer-title">Empresa</h4>
                        <ul class="footer-list">
                        <li><a href="#" class="footer-link">Sobre nosotros</a></li>
                        <li><a href="#" class="footer-link">PQR</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h4 class="footer-title">Ciudades</h4>
                        <ul class="footer-list">
                        <li>Bogotá</li>
                        <li>Medellín</li>
                        <li>Barranquilla</li>
                        <li>Cali</li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h4 class="footer-title">Soporte</h4>
                        <ul class="footer-list">
                        <li><a href="#" class="footer-link">Centro de ayuda</a></li>
                        <li><a href="#" class="footer-link">Contáctanos</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h5 class="footer-title">Síguenos en nuestras redes sociales</h5>
                        <div class="social-icons">
                        <span class="me-2">🌿</span> <span class="me-2">🔗</span> <span>💚</span>
                        </div>
                    </div>
                </div>

                <hr class="my-4 border-secondary">
                <p>© {{ date('Y') }} EcoRecicla - Todos los derechos reservados.</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>