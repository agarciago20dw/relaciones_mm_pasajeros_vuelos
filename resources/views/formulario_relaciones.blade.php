<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>PASAJEROS - VUELOS</title>
    <style>
        table {
            padding: 10px;
        }
        td {
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <center>
        <h1 style="text-align: center;">PASAJEROS - VUELOS</h1>
        
        <table>
            <form action="{{ route('relacion_asignar') }}" method="post">
                @csrf

                <tr>
                    <td>
                    <label for="pasajeros">Selecciona el pasajero:</label>
                        <select name="pasajeros">
                            @foreach ($pasajeros as $pasajero)
                                <option id="{{ $pasajero->id }}" value="{{ $pasajero->id }}">{{ $pasajero->nombre }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <label for="vuelos">Selecciona el vuelo:</label>
                        <select name="vuelos">
                            @foreach ($vuelos as $vuelo)
                                <option id="{{ $vuelo->id }}" value="{{ $vuelo->id }}">{{ $vuelo->nombre }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <label for="num_reservas">Indica el nº de reservas:</label>
                        <input type="number" name="num_reservas">
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" value="ACEPTAR">
                    </td>
                </tr>
            </form>
        </table>

        <table>
            @each('boton_eliminar', $vuelos, 'vuelo')
        </table>
           
    </center>
</body>
</html>