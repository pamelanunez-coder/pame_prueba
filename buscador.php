<?php
    session_start();    
    if(!isset($_SESSION['usuario'])){
        header("Location: index.php");
    exit(); 
    }

    $grupo_alfa = $_GET['grupo_alfa'];  
    $nombre =     $_GET['nombre']; 
    $apellido =   $_GET['apellido']; 
    $ciudad =     $_GET['ciudad']; 

    $usuario= [
        [ 
            "grupo_alfa" => "Grupo A",
            "nombre" => "Universidad",
            "apellido" => "Playa ancha", 
            "ciudad" => "Valparaiso"
        ],

        [ 
            "grupo_alfa" => "Grupo B",
            "nombre" => "Daniel",
            "apellido" => "Riquelme", 
            "ciudad" => "Valparaiso"
        ],

        [ 
            "grupo_alfa" => "Grupo C",
            "nombre" => "Gabriel",
            "apellido" => "Vega", 
            "ciudad" => "Viña del mar"
        ], 

        [ 
            "grupo_alfa" => "Grupo A",
            "nombre" => "Roberto",
            "apellido" => "Lopez", 
            "ciudad" => "Coquimbo"
        ],
        
        [ 
            "grupo_alfa" => "Grupo B",
            "nombre" => "Benjamin",
            "apellido" => "Garcia", 
            "ciudad" => "Limache"
        ]

    ]; 

    $encontrado = false; 
    foreach($usuario as $u){
        if($u['grupo_alfa'] == $grupo_alfa && $u['nombre'] == $nombre && $u['apellido'] == $apellido && $u['ciudad'] == $ciudad){
            $encontrado = true; 
            break;
        }
    }
    if($encontrado){
        echo  "participante encontrado"; 
    }else{
        echo"Participante no encontrado";
    }
    include 'buscador.html';
    
?> 