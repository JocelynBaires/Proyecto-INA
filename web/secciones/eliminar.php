<?php 
    if(!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $id_seccion = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM secciones where id_seccion = ?;");
    $resultado = $sentencia->execute([$id_seccion]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>