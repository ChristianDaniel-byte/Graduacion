<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css"/>
    <title>Registro</title>
</head>
<body>
    <section class="row">
        <div class="col-md-6">
            <form action="registroProceso.php" method="POST">
                    <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" class="form-control"name="usuario"></div>

                        <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control"name="contrasena"></div>

                        <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control"name="email"></div>


                </div>
                <button class="btn btn-primary">Registrarse</button>
</form>
</body>
</html>