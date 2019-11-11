<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Lista</title>
</head>
<body>
<?php
include("conexion.php");

$sentencia = "SELECT nombre,contrasena,email,lugares FROM usuarios";
$resultado = $conexionBD->query($sentencia);

$usuarios = array();
while($fila = mysqli_fetch_assoc($resultado)){
    $usuarios[] = $fila;
}

echo"<table class=\"table table-striped\">
<tr>
<th>Nombre</th>
<th>Contraseña</th>
<th>Email</th>
<th>Lugares reservados</th>
</tr>";


foreach($usuarios AS $usuario ){
    $nombre = $usuario["nombre"];
    $contrasena=$usuario["contrasena"];
    $email=$usuario["email"];
    $lugares=$usuario["lugares"];
    echo"<tr>
    <td>$nombre</td>
    <td>$contrasena</td>
    <td>$email</td>
    <td>$lugares</td>
    </tr>";
}
echo"</table>"

//var_dump($usuarios);

?>
    
</body>
</html>