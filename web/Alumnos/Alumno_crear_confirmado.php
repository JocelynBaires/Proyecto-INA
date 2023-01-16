<?php

include_once("../BDD_connection/Connector_bdd.php");

$id_alumno = $_POST['id_alumno'];
$nombre_alumno =$_POST['nombre_alumno'];
$apellido_alumno = $_POST['apellido_alumno'];
$carrera_alumno = $_POST['carrera_alumno'];
$seccion = $_POST['seccion'];


    // echo "xd". $id_profesor . " " . $Nombre_profesor . " " . $Apellido_profesor;

    $NuevoDato = "INSERT INTO alumnos(nombre_alumno, apellido_alumno, seccion_alumno, carrera_alumno) VALUES ('".$nombre_alumno."','".$apellido_alumno."','".$seccion."','".$carrera_alumno."')";

    $objeto = $BDD_DSS->query($NuevoDato);

    if ($objeto == TRUE) {
        echo "Se Modifico";
        header("location:index.php");
    } else {
        echo "Error";
    }
?>