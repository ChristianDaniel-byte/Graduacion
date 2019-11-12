<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservaciones</title>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
     <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        .salon{
            margin:40px;
        }
        .silla-reservada{
            color:red;
        }
        .contenedor-mesa{
            margin:5px;
            width:150px;
            height:150px;
            position:relative;
        }
        .mesa{
            font-size:6em;
        }
        .silla{
            font-size:1.5em;
            position:absolute;
            cursor:pointer;
        }
        .silla-pos1 {
            top:-25px;
            left:18px;

        }
        .silla-pos2 {
            top:-25px;
            left:56px;

        }
        .silla-pos3 {
            top:15px;
            left:94px;

        }
        .silla-pos4 {
            top:56px;
            left:94px;

        }
        .silla-pos5 {
            top:96px;
            left:56px;

        }
        .silla-pos6 {
            top:96px;
            left:18px;

        }
        .silla-pos7 {
            top:15px;
            left:-20px;

        }
        .silla-pos8 {
            top:56px;
            left:-20px;

        }

    </style>
</head>
<body>
    <section class="salon">
    <div class="contenedor-mesa"data-mesa="1">
    <i class="fas fa-dot-circle mesa"></i>
    <i class="fas fa-chair silla silla-pos1 silla-reservada" title="Esta silla ya la reservó el hombre araña" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></i>
    <i class="fas fa-chair silla silla-pos2"></i>
    <i class="fas fa-chair silla silla-pos3"></i>
    <i class="fas fa-chair silla silla-pos4"></i>
    <i class="fas fa-chair silla silla-pos5"></i>
    <i class="fas fa-chair silla silla-pos6"></i>
    <i class="fas fa-chair silla silla-pos7"></i>
    <i class="fas fa-chair silla silla-pos8"></i>
    </div>

    </section>
    <script>
        $(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
    </script>
</body>
</html>