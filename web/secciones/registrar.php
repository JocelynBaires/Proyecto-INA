<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtSigno"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $year_registro_seccion = $_POST["txtNombre"];
    $year_carrera_seccion = $_POST["txtEdad"];
    $letra_seccion = $_POST["txtSigno"];
    
    $sentencia = $bd->prepare("INSERT INTO secciones(year_registro_seccion,year_carrera_seccion,letra_seccion) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$year_registro_seccion,$year_carrera_seccion,$letra_seccion]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>