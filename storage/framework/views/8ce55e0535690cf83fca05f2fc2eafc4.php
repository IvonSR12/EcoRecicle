

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>

<!-- SECCIÓN 1: HERO / INICIO DE SESIÓN (Mantiene el layout en 2 columnas) -->

<div class="container-fluid py-5 bg-dark">
<div class="container py-5">
<div class="row align-items-center">

<!-- Columna Izquierda: Mensaje principal y beneficios (Similar a la imagen) -->
        <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="display-3 fw-bold text-light">
                Transforma tus residuos <span class="text-primary">en recompensas</span>
            </h1>
            <p class="lead mt-4 text-light" style="color: rgb(211, 211, 211) !important;">
                Únete a la revolución del reciclaje inteligente. Programa recolecciones, gana puntos y contribuye a un planeta más limpio.
            </p>

            <!-- Cards de Beneficios (Estilo oscuro/gris como en la imagen) -->
            <div class="row mt-5">
                <div class="col-sm-4 mb-3">
                    <div class="card bg-dark border border-secondary text-center p-3 h-100 shadow-lg">
                        <h4 class="text-primary">Recicla Fácil</h4>
                        <p class="mb-0" style="color: rgb(211, 211, 211) !important;">Programa recolecciones desde la app.</p>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="card bg-dark border border-secondary text-center p-3 h-100 shadow-lg">
                        <h4 class="text-primary">Gana Puntos</h4>
                        <p class="mb-0" style="color: rgb(211, 211, 211) !important;">Por cada kg reciclado.</p>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="card bg-dark border border-secondary text-center p-3 h-100 shadow-lg">
                        <h4 class="text-primary">Horarios Flexibles</h4>
                        <p class="mb-0" style="color: rgb(211, 211, 211) !important;">Cuando te convenga.</p>
                    </div>
                </div>
            </div>
        </div>
    <!-- Columna Derecha: Formulario de Inicio de Sesión (Similar a la imagen) -->
        <div class="col-lg-5 offset-lg-1">
            <div class="card bg-dark p-4 shadow-2xl border-secondary rounded-4">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4 text-primary">Iniciar Sesión</h2>
                    <form action="#" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="email" class="form-label text-light">Correo Electrónico</label>
                            <input type="email" class="form-control bg-secondary text-light border-0" id="email" placeholder="tu.correo@ejemplo.com" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label text-light">Contraseña</label>
                            <input type="password" class="form-control bg-secondary text-light border-0" id="password" required>
                        </div>
                        
                        <!-- Botón verde #00a86b -->
                        <button type="submit" class="btn btn-success w-100 py-2 fw-bold">
                            Iniciar Sesión
                        </button>

                        <div class="text-center mt-3">
                            <a href="#" class="text-secondary small">¿Olvidaste tu contraseña?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<hr class="border-secondary container my-5">

<!-- SECCIÓN 2: ¿CÓMO FUNCIONA? (Bloque de ancho completo) -->
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center display-5 fw-bold mb-3">
                El proceso es <span class="text-primary">simple</span>
            </h2>
            <p class="text-center lead mb-5">
                Reciclar nunca fue tan fácil y gratificante. 
                Sigue estos tres pasos para empezar a ganar.
            </p>
        </div>
    </div>

    <div class="row text-center">
        <!-- Paso 1 -->
        <div class="col-md-4 mb-4">
            <div class="p-4 rounded-4 h-100">
                <div class="bg-primary text-dark rounded-circle d-inline-flex align-items-center justify-content-center mb-4" 
                     style="width: 60px; height: 60px;">
                    <span class="fs-4 fw-bold text-white">1</span>
                </div>
                <h4 class="text-light mb-3">Programa y Clasifica</h4>
                <p>
                    Usa la aplicación para solicitar una recolección y separa tus residuos 
                    según nuestras guías.
                </p>
            </div>
        </div>

        <!-- Paso 2 -->
        <div class="col-md-4 mb-4">
            <div class="p-4 rounded-4 h-100">
                <div class="bg-primary text-dark rounded-circle d-inline-flex align-items-center justify-content-center mb-4" 
                     style="width: 60px; height: 60px;">
                    <span class="fs-4 fw-bold text-white">2</span>
                </div>
                <h4 class="text-light mb-3">Recolectamos y Pesamos</h4>
                <p>
                    Nuestro equipo llega a tu ubicación en el horario acordado. 
                    Pesamos y registramos tus residuos reciclables.
                </p>
            </div>
        </div>

        <!-- Paso 3 -->
        <div class="col-md-4 mb-4">
            <div class="p-4 rounded-4 h-100">
                <div class="bg-primary text-dark rounded-circle d-inline-flex align-items-center justify-content-center mb-4" 
                     style="width: 60px; height: 60px;">
                    <span class="fs-4 fw-bold text-white">3</span>
                </div>
                <h4 class="text-light mb-3">Gana Recompensas</h4>
                <p>
                    Recibe puntos instantáneamente en tu cuenta por cada kilogramo. 
                    Canjéalos por increíbles beneficios.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- FIN SECCIÓN 2 -->

<!-- SECCIÓN 3: IMPACTO SOSTENIBLE (Bloque de ancho completo) -->
<div class="container py-5 my-5">
    <div class="row">
        <!-- Imagen de impacto -->
        <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="<?php echo e(asset('images/impacto_sostenible.jpg')); ?>" 
                 alt="Gráfico de impacto ambiental" 
                 class="img-fluid rounded-4 shadow-lg">
        </div>

        <!-- Texto y Métricas -->
        <div class="col-lg-6">
            <h2 class="display-5 fw-bold mb-3">
                Tu Reciclaje tiene un <span class="text-primary">Impacto Real</span>
            </h2>
            <p class="lead mb-4">
                Cada acción cuenta. Mira cómo EcoRecicla, con tu ayuda, está contribuyendo 
                a un planeta más limpio y sostenible.
            </p>

            <div class="row mb-4">
                <!-- Métrica 1 -->
                <div class="col-6 mb-3">
                    <h3 class="display-6 fw-bold text-primary">850K+</h3>
                    <p class="text-light">Kilogramos Reciclados</p>
                </div>

                <!-- Métrica 2 -->
                <div class="col-6 mb-3">
                    <h3 class="display-6 fw-bold text-primary">2.5K+</h3>
                    <p class="text-light">Usuarios Activos</p>
                </div>

                <!-- Métrica 3 -->
                <div class="col-6 mb-3">
                    <h3 class="display-6 fw-bold text-primary">120+</h3>
                    <p class="text-light">Recompensas Disponibles</p>
                </div>
            </div>

            <!-- Llamado a la acción -->
            <a href="/planes" class="btn btn-primary py-3 px-5 fw-bold btn-lg">
                Ver Planes de Suscripción
            </a>
        </div>
    </div>
</div>
<!-- FIN SECCIÓN 3 -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\EcoRecicla\resources\views/home/landing_page.blade.php ENDPATH**/ ?>