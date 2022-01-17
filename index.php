<?php

require_once 'views/funcion.php';

session_start();
session_regenerate_id(true);
error_reporting(0);

$new = new Objeto();
$crud = new CRUD();
$respuesta = $crud->mostrar();
$res = $crud->mostrar();
$conexion = Conexion::ConectarBD();

$eliminara = "DELETE FROM publicacion WHERE NOW() >= fecha_f  ";
$fecha = "SELECT * FROM publicacion WHERE NOW() >= fecha_i  AND  id_rol = 1";

$conexion->query($eliminara);
$respuesta = $conexion->query($fecha);

?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
    <script>
      window.onload = function(){
        var contenedor = document.getElementById("carga");
        
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = "0";
      }
    </script>
</head>

<body>
    <!-- navbar -->
    <div class="body">
    <div id="carga">
        <img src="/img/archivo.png" alt="">
    </div>

    </div>


    <?php require_once 'include/navbar.php'; ?>

    <!-- carrusel -->
    <div>
    <p class="p-5"></p>
</div>
    <?php require_once 'include/carrusel.php'; ?>

<!--Seccion avisos-->
    <?php require_once 'include/avisos.php'; ?>

    <!-- SECCION EVENTOS -->
    <?php require_once 'include/eventos.php'; ?>

    <?php require_once 'include/accordion.php'; ?>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>