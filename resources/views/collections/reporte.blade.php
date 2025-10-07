<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Recolecciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light p-4">

<div class="container">
    <h2 class="text-center mb-4">📊 Reporte de tus Recolecciones</h2>

<div class="text-center mb-3">
    <a href="{{ route('collections.reporte.pdf') }}" class="btn btn-danger">
        📄 Descargar Reporte en PDF
    </a>
</div>


    <div class="row mb-4 text-center">
        <div class="col-md-6">
            <div class="card shadow-sm p-3">
                <h5>Total de Recolecciones</h5>
                <p class="fs-3 fw-bold text-primary">{{ $totalRecolecciones }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm p-3">
                <h5>Total de Puntos Acumulados</h5>
                <p class="fs-3 fw-bold text-success">{{ $totalPuntos }}</p>
            </div>
        </div>
    </div>

    <div class="card shadow-sm p-3">
        <h5 class="text-center mb-3">Distribución por Tipo de Residuo</h5>
        <canvas id="chartTipos"></canvas>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('collections.index') }}" class="btn btn-secondary">⬅ Volver a mis recolecciones</a>
       <a href="{{ route('collections.reporte.pdf') }}" class="btn btn-danger mt-3">📄 Descargar PDF</a>

    </div>
</div>

<script>
    const ctx = document.getElementById('chartTipos');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: {!! json_encode($porTipo->keys()) !!},
            datasets: [{
                data: {!! json_encode($porTipo->values()) !!},
                backgroundColor: ['#4CAF50', '#2196F3', '#FFC107', '#E91E63']
            }]
        },
    });
</script>

</body>
</html>
