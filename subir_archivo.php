<?php
    session_start(); 
    if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
    }

    $carpeta_destino = "comprobante/"; // ruta del archivo 
    if(isset($_FILES['comprobante']) && $_FILES['comprobante']['error'] === UPLOAD_ERR_OK){ // validar que se suba el archivo sin errores
        $archivo_tmp =$_FILES['comprobante']['tmp_name'];
        $nombre_original = basename($_FILES['comprobante']['name']); 
        $ruta_final = $carpeta_destino . $nombre_original; // ruta final donde se guardara el archivo
        if(move_uploaded_file($archivo_tmp, $ruta_final)){ // ruta temporal a la carpeta destinadda
            echo "el archivo se a guardado correctamente";
        }else{
            echo "hubo error al mover el archivo";
        }
    }
    include 'vista_subir_archivo.html'; 

?>