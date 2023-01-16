<?php
include_once("../../funciones/Connector_bdd.php");
// $EmpresaUsuario = $_SESSION['usuario'];
$idMaestro = $_GET['id_profesores'];

$BorrarOfertas = "DELETE FROM docentes WHERE docentes.id_docente = '" . $idMaestro . "'";

    $objeto = $BDD_DSS->query($BorrarOfertas);

    if ($objeto == TRUE) {
        echo "Se borro";
        header("location:index.php");
    } else {
        echo "Error";
    }

?>