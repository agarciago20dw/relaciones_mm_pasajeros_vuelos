<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR VUELO</title>
</head>
<body>
    <center>
        <h1>CREAR VUELO</h1>
        <form action="{{ route('vuelo_crear') }}" method="post">
        @csrf
            <table style="text-align: center;">
                <tr>
                    <td colspan="2">
                        <input type="text" name="nombre" placeholder="Nombre del vuelo...">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="destino" placeholder="Destino del vuelo...">
                    </td>
                    <td>
                        <input type="text" name="origen" placeholder="Origen del vuelo...">
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