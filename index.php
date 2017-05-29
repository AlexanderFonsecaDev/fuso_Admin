<!DOCTYPE html>
<html>
<head>
    <title>Admin | Fuso Platform</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="include/font-awesome/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="include/sweetalert2/sweetalert2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>
<div class="topnav">
    <div class="top_left">
        <div class="logo">
            <img src="media/img/logo.jpg" alt="">
        </div>
    </div>
    <div class="burger transition05 hovering">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <div class="top_right">
        <div class="inner_top_right transition05 hovering" style="margin-right: 10px;">
            <i class="fa fa-cloud" aria-hidden="true"></i>
        </div>
        <div class="inner_top_right transition05 hovering">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
        </div>
        <div class="inner_top_right transition05 hovering">
            Oscar Diaz
        </div>
    </div>
</div>
<div class="col_left transition1">
    <div class="inner_col_left">
        <div class="tools">
            <div class="inner_tools transition05 selected" data-id="1">Inicio</div>
            <div class="inner_tools transition05" data-id="2">Usuarios</div>
            <!--<div class="inner_tools transition05">Clases</div>-->
            <div class="inner_tools transition05" data-id="3">Módulos</div>
            <div class="inner_tools transition05" data-id="4">Lecciones</div>
            <div class="inner_tools transition05" data-id="5">Configuración</div>
            <div class="inner_tools transition05" data-id="6">Salir</div>
        </div>
        <div class="foot_tools">
            www.soouse.com
            <div style="font-size: 11px;">Copyright&#169; 2017</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="inner_container">

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="include/graph/animateNumbers.js"></script>
<script src="include/graph/raphael-min.js"></script>
<script src="include/graph/rickshaw.min.js"></script>
<script src="include/graph/morris.min.js"></script>
<script src="include/sweetalert2/sweetalert2.js"></script>

<script>

    $(".inner_container").load("home.php");

    $(".inner_tools").click(function () {
        $(".inner_tools").removeClass("selected");
        $(this).addClass("selected");
        var data = $(this).data("id");
        switch (data) {
            case 1:
                $(".inner_container").load("home.php");
                break;
            case 2:
                $(".inner_container").load("users.php");
                break;
            case 3:
                $(".inner_container").load("modules.php");
                break;
            case 4:
                $(".inner_container").load("lessons.php");
                break;
            case 5:
                $(".inner_container").load("settings.php");
                break;
            case 6:
                $(".inner_container").load("logout.php");
                break;
            default:
                break;
        }
    });

    $( document ).ready(function() {
        $("#type_user").load("php/ajax/listarRoles.php");
    });


</script>
</body>
</html>