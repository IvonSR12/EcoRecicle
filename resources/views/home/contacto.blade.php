@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<header class="bg-dark py-5 border-bottom border-primary border-3">
<div class="container">
<h1 class="display-4 text-light text-center">Contáctanos</h1>
<p class="lead text-center" style="color: rgb(211, 211, 211) !important;">Estamos listos para escuchar tus preguntas, sugerencias o propuestas.</p>
</div>
</header>

<div class="container my-5">
<div class="row">
<!-- Columna de Información de Contacto -->
<div class="col-lg-4 mb-4">
<h3 class="text-primary mb-4">Información de Contacto</h3>

        <div class="d-flex mb-3">
            <i class="fas fa-map-marker-alt text-primary me-3 pt-1"></i> 
            <p class="text-light">Carrera 10 # 20-30, Bogotá D.C., Colombia</p>
        </div>
        
        <div class="d-flex mb-3">
            <i class="fas fa-envelope text-primary me-3 pt-1"></i> 
            <p class="text-light">soporte@ecorecicla.co</p>
        </div>
        
        <div class="d-flex mb-3">
            <i class="fas fa-phone-alt text-primary me-3 pt-1"></i> 
            <p class="text-light">+57 601 555-1234</p>
        </div>

        <!-- Placeholder para Mapa o Imagen -->
        <img src="{{ asset('images/contacto_mapa.jpg') }}" alt="Ubicación de EcoRecicla" class="img-fluid rounded-4 mt-4 shadow-sm">
    </div>

    <!-- Columna del Formulario de Contacto -->
    <div class="col-lg-8">
        <div class="card bg-dark p-4 shadow-lg border-secondary rounded-4">
            <h3 class="text-primary mb-4">Envíanos un Mensaje</h3>
            <form action="#" method="POST">
                @csrf
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nombre" class="form-label text-light">Nombre Completo</label>
                        <input type="text" class="form-control bg-secondary text-light border-0" id="nombre" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label text-light">Correo Electrónico</label>
                        <input type="email" class="form-control bg-secondary text-light border-0" id="email" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="ciudad" class="form-label text-light">Ciudad</label>
                        <input type="text" class="form-control bg-secondary text-light border-0" id="ciudad" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="asunto" class="form-label text-light">Asunto</label>
                        <input type="text" class="form-control bg-secondary text-light border-0" id="asunto" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label text-light">Mensaje</label>
                    <textarea class="form-control bg-secondary text-light border-0" id="mensaje" rows="5" required></textarea>
                </div>
                
                <!-- Botón verde #00a86b -->
                <button type="submit" class="btn btn-success py-2 px-4 fw-bold">
                    Enviar Mensaje
                </button>
            </form>
        </div>
    </div>
</div>

</div>
@endsection