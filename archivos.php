<?php
    session_start(); 
    if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit();
    }

    $carpeta_destino = "comprobante/"; 
    $archivos = array_diff(scandir($carpeta_destino), array('.','..')); // escanenado archivos dentro de la carpeta
    if(count($archivos)>0){
        echo "listado de comprobante"; 
        echo "<ul>"; 
        foreach($archivos as $archivo){
            $ruta_archivo = $carpeta_destino . $archivo; 
            echo "<li>"; 
            echo"<a href = 'ruta_archivo' target = '_blank'>" . htmlspecialchars($archivo) . "</a>";
        }
    }
    echo "<hr>"; 
    echo "<a href='panel.php'>Volver al panel</a>"; 
?>