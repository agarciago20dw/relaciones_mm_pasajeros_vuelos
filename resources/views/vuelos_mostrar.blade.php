<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR VUELOS</title>
    <style>
        table {
            border: 1px solid black;
        }
        td {
            text-align: center;
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <center>
        <h1 style="text-align: center;">MOSTRAR VUELOS</h1>
        
        <table>
            <tr>
                <td>NOMBRE</td>
                <td>ORIGEN</td>
                <td>DESTINO</td>
            </tr>
            @foreach ($vuelos as $vuelo)
                <tr>
                    <td>
                        {{ $vuelo->nombre }}
                    </td>
                    <td>
                        {{ $vuelo->origen }}
                    </td>
                    <td>
                        {{ $vuelo->destino }}
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
</body>
</html>