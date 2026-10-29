<?php
    session_start(); 
    
    if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
    }

    $precio_unitario = 2000;

    if (isset($_POST['n_rifa'])) {
        $n_rifa = (int)$_POST['n_rifa'];
        $total = $n_rifa*$precio_unitario;

        $_SESSION['n_rifa'] = $n_rifa;
        $_SESSION['total_rifa'] = $total;
    } else {

        $n_rifa = $_SESSION['n_rifa'] ?? 0;
        $total = $_SESSION['total_rifa'] ?? 0;
    }

    
    include 'rifa_vista.html';
?>

