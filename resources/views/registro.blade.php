<!DOCTYPE html>
<!-- <html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro EcoRecicla</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4">

                        <h2 class="text-center mb-4 text-success fw-bold">Registro de Usuario</h2>

                        <!-- Mensaje de éxito 
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Formulario 
                        <form method="POST" action="{{ asset('/registro') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-semibold">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Tu nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Correo electrónico</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="tu@email.com" required>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label fw-semibold">Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100 fw-semibold">
                                <i class="bi bi-person-plus"></i> Registrarse
                            </button>
                        </form>

                    </div>
                </div>

                <div class="text-center mt-3">
                    <a href="/" class="text-decoration-none text-secondary">
                        <i class="bi bi-arrow-left"></i> Volver al inicio
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body> -->
</html>
