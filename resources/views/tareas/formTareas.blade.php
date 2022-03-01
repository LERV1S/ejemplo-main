<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FormTareas</title>
</head>
<body>
    <h1>Agregar Tareas</h1>
    <form action="/tareas/store" method="POST">
        <label for="tarea">Nombre de la tarea:</label><br>
        <input type="text" name="tarea">
        <br>
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" id="descripcion" cols="10" rows="10"></textarea>
        <br>

        <label for="categoria">Categoria</label><br>
        <select name="categoria" id="categoria">
            <option value="Escuela">Escuela</option>
            <option value="Trabajo">Trabajo</option>
        </select>
    </form>
</body>
</html>
