<?php
session_start();    
if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit(); 
}

?>

<html>
    <head>
        <title>Pagina principal</title>
    </head>
    <body>
        <h1>Bienvenido al panel</h1>
        <p>has iniciado sesion correctamente</p>
        <a href="rifa_vista.html"> Rifa de numeros</a>
        <a href="buscador.html"> Buscador</a>
        <a href="vista_subir_archivo.html"> Subir archivo</a>
        <a href="archivos.php">Archivos</a>
        <a href="salir.php">Cerrar Sesion</a>

    </body>

</html>