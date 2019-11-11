<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
        $(function(){
            $boton = $("button");
            $spin = $(".fa-spin");

            $boton.on("click",function(evento){
                evento.preventDefault();
                $boton.prop("disabled",true);
                $spin.fadeIn();
                var usuario = $('[name="usuario"]').val();
                var contrasena = $('[name="password"]').val();

                $.ajax({
                    url:"resultado.php",
                    method:"POST",
                    dataType: "json",
                    data:{
                       usuario:usuario,
                       password:contrasena 
                    }
            }).done(function(informacion){
                var json = (informacion);
                console.log(json);
                $boton.prop("disabled",false);
                $spin.fadeOut();

                if(json.codigo == "0"){
                $("#mensaje").html(json.mensaje);
                }
                else if(json.codigo == "1"){
                    window.location.href="vip.php";
                }

            });
        });
     }); 
    </script>
    <style>
        .fa-spin{
            display:none;
        }
    </style> 
</head>

<body>
<section class="container">
    <section class="row">
        <div class="col-md-6">
        <form action="resultado.php" method="POST">
            <div class="form-group">
                <label for="">Usuario<label>
                <input type="text" class="form-control" name="usuario">
            </div>
             
            <div class="form-group">
                <label for="">Password<label>
                <input type="password" class="form-control"name="password">
            </div>
            <button class="btn btn-primary">Enviar datos</button>
            <i class="fas fa-spinner fa-spin"></i>
            <div id="mensaje"> 
            </div>
</form>
</div>
</section>
</section>
</body>
</html>