<?php

include("conexion.php");
$usuario = $_POST["usuario"];
$contrasena = hash("whirlpool",$_POST["contrasena"]);
$email = $_POST["email"];
$statement = "INSERT INTO 
                usuarios(nombre,contrasena,email) 
                VALUES('$usuario','$contrasena','$email')";

//echo $statement;

$resultado = $conexionBD->query($statement);
if($resultado){
    echo"Se inserto el registro correctamente";
}
else{
    echo"No se inserto el registro";
}
?>