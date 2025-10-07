<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Recolecciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h2 class="mb-4 text-center">Mis Recolecciones</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="d-flex justify-content-end mb-3">
             <a href="{{ route('collections.reporte') }}" class="btn btn-info me-2">📊 Ver Reporte</a>
             <a href="{{ route('collections.create') }}" class="btn btn-success">+ Programar nueva recolección</a>
        </div>


        <table class="table table-striped table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Peso (kg)</th>
                    <th>Estado</th>
                    <th>Puntos</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($collections as $collection)
                    <tr>
                        <td>{{ $collection->type }}</td>
                        <td>{{ $collection->collection_date }}</td>
                        <td>{{ $collection->collection_time }}</td>
                        <td>{{ $collection->weight ?? '—' }}</td>
                        <td>{{ $collection->status }}</td>
                        <td>{{ $collection->points }}</td>
                        <td>
                            <a href="{{ route('collections.show', $collection->id) }}" class="btn btn-sm btn-info">Ver</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No tienes recolecciones registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
