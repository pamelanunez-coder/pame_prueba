<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
        header("Location: panel.php");
        exit(); 
    }

    //captcha 
    if(!isset($_SESSION['n1']) || !isset($_SESSION['n2'])){
        $_SESSION['n1'] = rand(1,9); 
        $_SESSION['n2'] = rand(1,9); 
    }

    $usuario = ""; 
    $error = "";
    

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $usuario = $_POST['usuario'] ?? '';
        $password = $_POST['password'] ?? '';
        $captcha_usuario = $_POST['captcha'] ?? '';

        
        $suma = $_SESSION['n1'] + $_SESSION['n2'];

        if($usuario =="userupla" && $password == "upla123" && (int)$captcha_usuario === $suma){ 
            $_SESSION['usuario']= $usuario; // guardamos la sesion
            unset($_SESSION['n1'], $_SESSION['n2']); //limpia las variables
            header("location: panel.php"); 
            exit();
        }else{
            $error ="usuario, contraseña o suma incorrectos.";
            $_SESSION['n1']=rand(1,9); 
            $_SESSION['n2']=rand(1,9);
        }
    }
    include 'formulario.html';

    
?>