<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de invitados</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Lista de invitados para el evento: {{ $evento->nombre }}</h2>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invitados as $invitado)
            <tr>
                <td>{{ $invitado->name }}</td>
                <td>{{ $invitado->email }}</td>
                <td>{{ ucfirst($invitado->estado) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
