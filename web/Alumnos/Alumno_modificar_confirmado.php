<?php

include_once("../BDD_connection/Connector_bdd.php");

    $id_alumno = $_POST['id_alumno'];
    $nombre_alumno =$_POST['nombre_alumno'];
    $apellido_alumno = $_POST['apellido_alumno'];
    $carrera_alumno = $_POST['carrera_alumno'];
    $seccion = $_POST['seccion'];


    // echo "xd". $id_alumno . " " . $nombre_alumno . " " . $apellido_alumno ." " . $carrera_alumno ." " . $seccion;

// echo "xd";

    $ModificarDato = "UPDATE alumnos SET id_alumno='" .$id_alumno."', nombre_alumno ='" . $nombre_alumno . "', apellido_alumno ='" . $apellido_alumno . "', seccion_alumno = '" . $seccion . "', carrera_alumno = '" . $carrera_alumno . "' WHERE alumnos.id_alumno = '" . $id_alumno . "'";

    $objeto = $BDD_DSS->query($ModificarDato);

    if ($objeto == TRUE) {
        echo "Se Modifico";
        header("location:index.php");
    } else {
        echo "Error";
    }

?>