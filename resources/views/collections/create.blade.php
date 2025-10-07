<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Programar Recolección</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h2 class="mb-4 text-center">Programar Nueva Recolección</h2>

        <form action="{{ route('collections.store') }}" method="POST" class="card p-4 shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="type" class="form-label">Tipo de residuo</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="">Seleccione un tipo</option>
                    <option value="Orgánico">Orgánico</option>
                    <option value="Inorgánico Reciclable">Inorgánico Reciclable</option>
                    <option value="Peligroso">Peligroso</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="collection_date" class="form-label">Fecha de recolección</label>
                <input type="date" name="collection_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="collection_time" class="form-label">Hora de recolección</label>
                <input type="time" name="collection_time" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('collections.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
