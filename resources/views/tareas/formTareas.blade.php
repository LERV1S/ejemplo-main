<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FormTareas</title>
</head>
<body>
    <h1>Agregar Tarea</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @isset($tarea)
        <form action="/tarea/{{ $tarea->id }}" method="POST"> {{-- Editar --}}
            @method('PATCH')
    @else
        <form action="/tarea" method="POST"> {{-- Crear --}}
    @endisset

        @csrf
        <label for="tarea">Nombre de la tarea:</label><br>
        <input type="text" name="tarea" value="{{ isset($tarea) ? $tarea->tarea : '' }} {{ old('tarea') }}">
        <br>

        <br>
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" id="descripcion" cols="10" rows="10">
            {{ isset($tarea) ? $tarea->descripcion : '' }} {{ old('descripcion') }}

        </textarea>
        <br>

        <label for="categoria">Categoria</label><br>
        <select name="categoria" id="categoria">
            <option value="Escuela" {{ isset($tarea) && $tarea->categoria == 'Escuela' ? 'selected' : '' }}>Escuela</option>
            <option value="Trabajo" {{ isset($tarea) && $tarea->categoria == 'Trabajo' ? 'selected' : '' }}>Trabajo</option>
            <option value="Otra" {{ isset($tarea) && $tarea->categoria == 'Otra' ? 'selected' : '' }}>Otra</option>
        </select>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
