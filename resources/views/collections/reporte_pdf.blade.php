<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Recolecciones</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; margin: 30px; }
        h2 { text-align: center; color: #2e6da4; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #999; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>📊 Reporte General de Recolecciones</h2>

    <p><strong>Total de recolecciones:</strong> {{ $totalRecolecciones }}</p>
    <p><strong>Total de puntos:</strong> {{ $totalPuntos }}</p>

    <h4>Distribución por tipo de residuo</h4>
    <table>
        <thead>
            <tr>
                <th>Tipo de residuo</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($porTipo as $tipo => $cantidad)
            <tr>
                <td>{{ $tipo }}</td>
                <td>{{ $cantidad }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
