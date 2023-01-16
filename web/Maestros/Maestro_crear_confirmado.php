<?php

include_once("../../funciones/Connector_bdd.php");

$id_profesor = $_POST['id_profesor'];
$abreviatura_docente = $_POST['abre_docente'];
$Nombre_profesor = $_POST['Nombre_profesor'];
$Apellido_profesor = $_POST['Apellido_profesor'];

// echo "si es lic ->". $abreviatura_docente;

// echo "xd". $id_profesor . " " . $Nombre_profesor . " " . $Apellido_profesor;

$NuevoDato = "INSERT INTO docentes (abreviatura_docente, nombre_docente, apellido_docente)  VALUES ('". $abreviatura_docente ."','" . $Nombre_profesor . "','" . $Apellido_profesor . "')";

echo $NuevoDato;
$objeto = $BDD_DSS->query($NuevoDato);

if ($objeto == TRUE) {
    echo "Se Modifico";
    header("location:index.php");
} else {
    echo "Error";
}
