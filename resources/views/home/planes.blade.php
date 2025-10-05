@extends('layouts.app')

@section('title', 'Planes')

@section('content')

<header class="bg-dark py-5 border-bottom border-primary border-3">
<div class="container">
<h1 class="display-4 text-light text-center">Planes de Reciclaje Inteligente</h1>
<p class="lead text-center" style="color: rgb(211, 211, 211) !important;">Elige el plan que mejor se adapta a tus necesidades y comienza a ganar puntos hoy.</p>
</div>
</header>

<div class="container my-5">
<div class="row justify-content-center">

    <!-- Plan Básico -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card bg-dark text-light border-secondary h-100 shadow-lg">
            <div class="card-header text-center py-3">
                <h4 class="my-0 fw-normal text-light">Básico</h4>
            </div>
            <div class="card-body text-center">
                <h1 class="card-title pricing-card-title text-primary">$0 <small class="text-light">/ mes</small></h1>
                <ul class="list-unstyled mt-3 mb-4 text-start mx-auto" style="max-width: 250px;">
                    <li class="mb-2" style="color: rgb(211, 211, 211) !important;">✅ 1 recolección mensual</li>
                    <li class="mb-2" style="color: rgb(211, 211, 211) !important;">✅ Puntos estándar por kg</li>
                    <li class="mb-2" style="color: rgb(211, 211, 211) !important;">❌ Soporte prioritario</li>
                    <li class="mb-2" style="color: rgb(211, 211, 211) !important;">❌ Beneficios en aliados</li>
                </ul>
                <a href="#" class="btn btn-outline-light w-100">Comenzar Gratis</a>
            </div>
        </div>
    </div>

    <!-- Plan Estándar (Destacado - Color Primario) -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card text-white border-primary h-100 shadow-lg" style="background-color: #1a1a1a;">
            <div class="card-header text-center py-3 bg-primary">
                <h4 class="my-0 fw-normal">Estándar (Recomendado)</h4>
            </div>
            <div class="card-body text-center">
                <h1 class="card-title pricing-card-title text-primary">$15.000 <small class="text-light">/ mes</small></h1>
                <ul class="list-unstyled mt-3 mb-4 text-start mx-auto" style="max-width: 250px;">
                    <li class="mb-2 text-light">✅ 4 recolecciones mensuales</li>
                    <li class="mb-2 text-light">✅ Puntos +20% extra por kg</li>
                    <li class="mb-2 text-light">✅ Acceso anticipado a eventos</li>
                    <li class="mb-2 text-light">❌ Soporte prioritario</li>
                </ul>
                <a href="#" class="btn btn-success w-100 py-2 fw-bold">Suscribirme</a>
            </div>
        </div>
    </div>

    <!-- Plan Premium -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card bg-dark text-light border-secondary h-100 shadow-lg">
            <div class="card-header text-center py-3">
                <h4 class="my-0 fw-normal text-light">Premium</h4>
            </div>
            <div class="card-body text-center">
                <h1 class="card-title pricing-card-title text-primary">$35.000 <small class="text-light">/ mes</small></h1>
                <ul class="list-unstyled mt-3 mb-4 text-start mx-auto" style="max-width: 250px;">
                    <li class="mb-2" style="color: rgb(211, 211, 211) !important;">✅ Recolecciones ilimitadas</li>
                    <li class="mb-2" style="color: rgb(211, 211, 211) !important;">✅ Puntos +50% extra por kg</li>
                    <li class="mb-2" style="color: rgb(211, 211, 211) !important;">✅ Soporte prioritario 24/7</li>
                    <li class="mb-2" style="color: rgb(211, 211, 211) !important;">✅ Beneficios exclusivos en aliados</li>
                </ul>
                <a href="#" class="btn btn-outline-primary w-100">Quiero el Plan Premium</a>
            </div>
        </div>
    </div>
</div>

</div>
@endsection