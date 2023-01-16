<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
</head>
<?php
require_once('../Plantillas/Menu.php');
?>
<!-- <h2 class="text-center"><i class="bi-x-octagon-fill"></i> SEGURO QUE DESEA ELIMINAR LA SIGUIENTE MAESTRO? <i class="bi-x-octagon-fill"></i></h2> -->
<?php
include_once("../BDD_connection/Connector_bdd.php");
// $EmpresaUsuario = $_SESSION['usuario'];
$id_alumno = $_GET['id_alumno'];

$SQL = "SELECT * FROM alumnos INNER JOIN secciones ON alumnos.seccion_alumno = secciones.id_seccion WHERE alumnos.id_alumno = '" . $id_alumno . "'";

$objeto = $BDD_DSS->query($SQL);
$NumeroFila = '1';
$IdDetallesOferta;
$idselect;


while ($fila = $objeto->fetch_assoc()) {
    $id_alumno = $fila['id_alumno'];
    $nombre_alumno = $fila['nombre_alumno'];
    $apellido_alumno = $fila['apellido_alumno'];
    $carrera_alumno = $fila['carrera_alumno'];
    $year_carrera_seccion = $fila['year_carrera_seccion'];
    $letra_seccion = $fila['letra_seccion'];
    $id_seccion = $fila['id_seccion'];

    $idselect = $id_seccion;

    $Datos = <<<tabla
    <div class="container border border-dark border-3">
    <div class="row g-2">
        <div class="col p-1"><h2 class="text-center"><i class="bi-x-octagon-fill"></i> SEGURO QUE DESEA ELIMINAR EL SIGUIENTE ALUMNO? <i class="bi-x-octagon-fill"></i></h2></div>
        <div class="w-100"></div>
        <i style="font-size: 200px; text-align:center;" class="bi bi-person-bounding-box"></i>
        <div class="p-10 border bg-light">
            <h5>Importante:</h5>
            <p>
                Es importante mencionar que una vez se realice la eliminación no podra recuperar los datos del alumno, por ello mismo
                debera verificar si el alumno que a continucación eliminara es el correcto, a continuación se detallara la información del alumno
                que se elminara.
            </p>
        </div>
        
        <div class="col p-3 border bg-light"><h5><i class="bi bi-file-earmark-text"></i><b> Nombre:</b> $nombre_alumno</h5></div>
        <div class="col p-3 border bg-light"><h5><i class="bi bi-file-earmark-text"></i><b> Apellido:</b> $apellido_alumno</h5></div>
        <br><br>
        <div style="text-align:center;" class="col p-3 border bg-light">
            <a class="btn btn-dark" href="Alumno_eliminar_confirmado?id_alumno=$id_alumno" class="btn btn-default"><i class="bi bi-trash"></i> Eliminar Alumno</span></a>
        </div>
    tabla;
    echo $Datos;

    $NumeroFila = $NumeroFila + 1;
}

?>
</form>

</div>
<br>
</div>
<html>