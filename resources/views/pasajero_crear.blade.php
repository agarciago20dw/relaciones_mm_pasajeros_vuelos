<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR PASAJERO</title>
</head>
<body>
    <center>
        <h1 style="text-align: center;">CREAR PASAJERO</h1>
        <form action="{{ route('pasajero_crear') }}" method="post">
            @csrf
            <table style="text-align: center;">
                <tr>
                    <td>
                        <input type="text" name="nombre" placeholder="Nombre del pasajero...">
                    </td>
                    <td>
                        <input type="text" name="dni" placeholder="DNI del pasajero...">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="number" name="edad" placeholder="Edad del pasajero...">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="CREAR" style="margin-top: 10px;">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>