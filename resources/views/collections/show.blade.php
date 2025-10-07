<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Recolección</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h2 class="mb-4 text-center">Detalle de la Recolección</h2>

        <div class="card p-4 shadow-sm">
            <p><strong>Tipo:</strong> {{ $collection->type }}</p>
            <p><strong>Fecha:</strong> {{ $collection->collection_date }}</p>
            <p><strong>Hora:</strong> {{ $collection->collection_time }}</p>
            <p><strong>Peso:</strong> {{ $collection->weight ?? '—' }} kg</p>
            <p><strong>Estado:</strong> {{ $collection->status }}</p>
            <p><strong>Puntos:</strong> {{ $collection->points }}</p>
        </div>

        <a href="{{ route('collections.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>
