<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
</head>
<body>
    <center>
        <button class="btn btn-danger text-white my-3" data-bs-toggle="modal" data-bs-target="#registrarse">REGISTRARSE</button>
        <button class="btn btn-info text-white my-3" data-bs-toggle="modal" data-bs-target="#iniciar_sesion">INICIAR SESION</button>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p style="width: 100%">{{ $error }}</p>
            @endforeach
        @endif
    </center>

    <div class="modal fade" id="registrarse">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center container-fluid">REGISTRARSE</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('usuario_crear') }}" method="post">
                    @csrf
                    <div class="modal-body d-flex justify-content-center align-items-center flex-wrap gap-3">
                        <input type="text" name="nombre" id="nombre" placeholder="Introduce tu nombre...">
                        <input type="text" name="apellidos" id="apellidos" placeholder="Introduce tus apellidos...">
                        <input type="email" name="email" id="email" placeholder="Introduce tu email...">
                        <input type="password" name="password" id="password" placeholder="Introduce una contraseña...">
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center">
                        <input type="submit" value="ENVIAR">
                    </div> 
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="iniciar_sesion">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center container-fluid">INICIAR SESIÓN</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('usuario_entrar') }}" method="post">
                    @csrf
                    <div class="modal-body d-flex justify-content-center align-items-center flex-wrap gap-3">
                        <input type="email" name="email" id="email" placeholder="Introduce tu email...">
                        <input type="password" name="password" id="password" placeholder="Introduce tu contraseña...">
                    </div>
                    <div class="modal-footer d-flex justify-content-center align-items-center">
                        <input type="submit" value="ENVIAR">
                    </div> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>