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
        <form name="formulario" method="post" action="Alumno_modificar_confirmado.php">
            <div class="row g-2">
                <div class="col p-1"><h2 class="text-center"><i class="bi bi-cursor-text"></i> MODIFICANDO INFORMACIÓN DEL ALUMNO <i class="bi bi-cursor-text"></i></h2></div>
                <div class="w-100"></div>
                <i style="font-size: 200px; text-align:center;" class="bi bi-person-bounding-box"></i>
               
                <div class="form-group" style="display:none;">
                    <label class="">Nombre del docente:</label>
                    <input type="" name="id_alumno" value="$id_alumno" id="id_alumno" class="form-control" placeholder="Servicios, Telecomunicaciones, etc." minlength="5" maxlength="40" >
                </div>
                <div class="form-group">
                    <label class="">Nombre del docente:</label>
                    <input type="" name="nombre_alumno" value="$nombre_alumno" id="nombre_alumno" class="form-control" placeholder="Servicios, Telecomunicaciones, etc." minlength="5" maxlength="40" >
                </div>
                <div class="form-group">
                    <label class="">Nombre del docente:</label>
                    <input type="" name="apellido_alumno" value="$apellido_alumno" id="apellido_alumno" class="form-control" placeholder="Servicios, Telecomunicaciones, etc." minlength="5" maxlength="40" >
                </div>
                <div class="form-group">
                    <label class="">Apellidos del docente:</label>
                    <input type="" name="carrera_alumno" value="$carrera_alumno" id="carrera_alumno" class="form-control" placeholder="Servicios, Telecomunicaciones, etc." minlength="5" maxlength="40" >
                </div>
                <div class="form-group">
                <label for="A">Seccion:</label>
                <select class="form-control" name="seccion" claname="seccion" id="seccion">
    tabla;
    echo $Datos;

    $NumeroFila = $NumeroFila + 1;
}
$SQL = "SELECT * FROM secciones WHERE 1";

$objeto = $BDD_DSS->query($SQL);

while ($fila = $objeto->fetch_assoc()) {
    $id_seccion = $fila['id_seccion'];
    $year_registro_seccion = $fila['year_registro_seccion'];
    $year_carrera_seccion = $fila['year_carrera_seccion'];
    $letra_seccion = $fila['letra_seccion'];
    $seleccionar = "";
    if ($idselect == $id_seccion) {
        $seleccionar = "selected";
    }

    $Datos = <<<tabla
                
                <option $seleccionar value="$id_seccion">$year_carrera_seccion$letra_seccion</option>
    tabla;
    echo $Datos;
}

?>
</select>
</div>
<br><br>
<input class="btn btn-dark" type="submit" value="Modficiar Alumno." />
</form>

</div>
<br>
</div>
<html>