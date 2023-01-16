<?php
include_once("../BDD_connection/Connector_bdd.php");
// $EmpresaUsuario = $_SESSION['usuario'];
$id_alumno = $_GET['id_alumno'];

$BorrarOfertas = "DELETE FROM alumnos WHERE alumnos.id_alumno = '" . $id_alumno . "'";

    $objeto = $BDD_DSS->query($BorrarOfertas);

    if ($objeto == TRUE) {
        echo "Se borro";
        header("location:index.php");
    } else {
        echo "Error";
    }

?>