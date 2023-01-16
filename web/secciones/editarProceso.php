<?php
    print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $id_seccion = $_POST['codigo'];
    $year_registro_seccion = $_POST['txtNombre'];
    $year_carrera_seccion = $_POST['txtEdad'];
    $letra_seccion = $_POST['txtSigno'];

    $sentencia = $bd->prepare("UPDATE secciones SET year_registro_seccion = ?, year_carrera_seccion = ?, letra_seccion = ? where id_seccion = ?;");
    $resultado = $sentencia->execute([$year_registro_seccion, $year_carrera_seccion, $letra_seccion, $id_seccion]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>