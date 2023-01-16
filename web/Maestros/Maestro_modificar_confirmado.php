<?php

include_once("../../funciones/Connector_bdd.php");

$id_docente = $_POST['id_profesor']; 
$abre_docente = $_POST['abre_docente'];
$nombre_docente = $_POST['Nombre_profesor'];
$apellido_docente = $_POST['Apellido_profesor'];


// echo "xd". $id_docente . " " .$abreviatura_docente. " " . $nombre_docente . " " . $apellido_docente;

$ModificarDato = "UPDATE docentes SET id_docente='" . $id_docente . "', abreviatura_docente='".$abre_docente."', nombre_docente='" . $nombre_docente . "', apellido_docente='" . $apellido_docente . "' WHERE docentes.id_docente = '" . $id_docente . "'";

$objeto = $BDD_DSS->query($ModificarDato);

if ($objeto == TRUE) {
    echo "Se Modifico";
    header("location:index.php");
} else {
    echo "Error";
}
