<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR PASAJEROS</title>
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
        <h1 style="text-align: center;">MOSTRAR PASAJEROS</h1>
        
        <table>
            <tr>
                <td>NOMBRE</td>
                <td>DNI</td>
                <td>EDAD</td>
            </tr>
            @foreach ($pasajeros as $pasajero)
                <tr>
                    <td>
                        {{ $pasajero->nombre }}
                    </td>
                    <td>
                        {{ $pasajero->dni }}
                    </td>
                    <td>
                        {{ $pasajero->edad }}
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
</body>
</html>