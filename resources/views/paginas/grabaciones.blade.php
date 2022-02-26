<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grabaciones</title>
</head>
<body>
    <h1>Grabaciones de {{ $nombre }} del año {{ $aa }}</h1>

    <h2>
        @if(isset($aa))
            Del año {{ $aa }}
        @else
            De todos los tiempos
        @endif
    </h2>

    <h2>
        <ol>
            @for ($i = 0; $i < $cantidad; $i++ )
                <li>Algun texto</li>
            @endfor
        </ol>
    </h2>
</body>
</html>