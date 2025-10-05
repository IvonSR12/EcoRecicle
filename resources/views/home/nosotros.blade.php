@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')


<header class="bg-dark py-5 border-bottom border-primary border-3">
<div class="container">
<h1 class="display-4 text-light text-center">Nuestra Historia y Propósito</h1>
<p class="lead text-center" style="color: rgb(211, 211, 211) !important;">Conoce qué nos mueve y cómo estamos transformando el futuro del reciclaje.</p>
</div>
</header>

<div class="container my-5">
<div class="row">

    <!-- COLUMNA IZQUIERDA (sm: 12, lg: 6) - HISTORIA -->
    <div class="col-lg-6 mb-5 mb-lg-0">
        <h2 class="text-primary mb-3">Historia de EcoRecicla</h2>
        
        <!-- Imagen de la Historia (Ahora antes del párrafo) -->
        <img src="{{ asset('images/nosotros_historia.jpg') }}" alt="Equipo EcoRecicla" class="img-fluid rounded-4 shadow-lg mb-4">
        
        <!-- Párrafos de la Historia -->
        <p style="color: rgb(211, 211, 211) !important;">
            Nacimos en el corazón de Bogotá en 2018 con la visión de hacer del reciclaje un proceso inteligente y gratificante. Observamos los desafíos en la gestión de residuos y decidimos aplicar tecnología para conectar a las personas con un sistema eficiente de recolección y recompensa. Desde entonces, hemos crecido exponencialmente, transformando miles de toneladas de residuos en recursos valiosos y empoderando a las comunidades a través de puntos canjeables.
        </p>
        <p style="color: rgb(211, 211, 211) !important;">
            Nuestro compromiso va más allá de la recolección; se trata de educación ambiental y de construir un futuro sostenible juntos.
        </p>
    </div>

    <!-- COLUMNA DERECHA (sm: 12, lg: 6) - MISIÓN Y VISIÓN -->
    <div class="col-lg-6">
        <h2 class="text-primary mb-4">Misión y Visión</h2>
        <div class="row">
            <!-- Card Misión -->
            <div class="col-md-12 mb-4">
                <div class="card bg-dark border-primary border-start border-5 h-100 shadow">
                    <div class="card-body p-4">
                        <h3 class="card-title text-primary mb-3">Misión</h3>
                        <p class="card-text" style="color: rgb(211, 211, 211) !important;">
                            Facilitar el proceso de reciclaje a todos los ciudadanos mediante soluciones tecnológicas y logísticas, ofreciendo un sistema de recompensas justo que motive la participación activa en la economía circular y la protección del medio ambiente.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card Visión -->
            <div class="col-md-12 mb-4">
                <div class="card bg-dark border-primary border-start border-5 h-100 shadow">
                    <div class="card-body p-4">
                        <h3 class="card-title text-primary mb-3">Visión</h3>
                        <p class="card-text" style="color: rgb(211, 211, 211) !important;">
                            Ser la plataforma líder en gestión de residuos inteligentes de América Latina, reconocida por su impacto social, ambiental y por transformar la percepción del reciclaje de una obligación a una oportunidad de crecimiento y bienestar comunitario.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection