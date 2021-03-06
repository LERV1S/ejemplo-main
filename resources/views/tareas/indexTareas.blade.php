<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas</title>
</head>
<body>
    <h1>Listado de Tareas</h1>

    <a href="/tarea/create">Crear Nueva Tarea</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Tarea</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Acciones</th>
        </tr>

        @foreach ($tareas as $tarea)
            <tr>
                <td>{{ $tarea->id }}</td>
                <td>{{ $tarea->tarea }}</td>
                <td>{{ $tarea->descripcion }}</td>
                <td>{{ $tarea->categoria }}</td>
                <td>
                    <a href="tarea/{{ $tarea->id }}">Ver Detalle</a>
                    <a href="tarea/{{ $tarea->id }}/edit">Editar</a>
                    <form action="/tarea/{{ $tarea->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
