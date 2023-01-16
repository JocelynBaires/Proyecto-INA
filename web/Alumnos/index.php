<!doctype html>
<html lang="es">
<?php
require_once('../../plantillas/encabezado.php');
?>

<?php
require_once('../../plantillas/menu2.php');
?>

<body>


    <!-- <h2 class="text-center"><i class="bi bi-card-list"></i> BIENVENDIDO <i class="bi bi-card-list"></i></h2> -->
    <br>
    <div class="container-fluid">
        <div class="d-flex flex-row">
            <!-- <a href="Maestro_crear.php"  type="button" class="btn btn-outline-primary"><i class="bi bi-bookmark-plus-fill"></i> Agregar nuevo docente</a> -->
        </div>
        <br>
        <h2>LISTA DE ALUMNOS</h2>

        <table class="table table-striped" id="ver-oferta">
            <thead>
                <tr>
                    <th scope="col">Lista</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Alumno</th>
                    <th scope="col">Apellido Alumno</th>
                    <th scope="col">Bachillerato</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php


                include_once("../../funciones/Connector_bdd.php");

                $SQL = "SELECT id_alumno, nombre_alumno, apellido_alumno, E.nombre_expecialidad, S.grupo_seccion FROM alumnos A  INNER JOIN expecialidades E ON A.expecialidad_alumno = E.id_expecialidad LEFT JOIN secciones S ON A.seccion_alumno = S.id_seccion";
                // WHERE empresas.Correo = '". $EmpresaUsuario ."'

                $objeto = $BDD_DSS->query($SQL);
                $NumeroFila = '1';


                while ($fila = $objeto->fetch_assoc()) {
                    $id_alumno = $fila['id_alumno'];
                    $nombre_alumno = $fila['nombre_alumno'];
                    $apellido_alumno = $fila['apellido_alumno'];
                    $genero_alumno   = "F";//$fila['genero_alumno'];
                    $carrera_alumno = "Contable"; //$fila['carrera_alumno'];

                    $datos = <<<tabla
    <tr>
        <th scope="row"><i class="bi bi-clipboard2-check-fill"></i> $NumeroFila</th>
        <td>$id_alumno</td>
        <td>$nombre_alumno</td>
        <td>$apellido_alumno</td>
        <td>$carrera_alumno</td>
        <td>
            <div class="btn-group" role="group">
                <a class="btn btn-dark text-dark disabled" href="empresas_ver_oferta.php?idOferta=$id_alumno" class="btn btn-default"><i class="bi bi-eye"></i> Ver mas</span></a>
                <a class="btn btn-dark" href="Alumno_modificar.php?id_alumno=$id_alumno" class="btn btn-default" name='Modific' disabled><i class="bi bi-pencil"></i> Modificar</span></a>	
                <a class="btn btn-danger" href="Alumno_eliminar.php?id_alumno=$id_alumno"><i class="bi bi-trash"></i> Eliminar</a>
            </div>
        </td>
    </tr>
    tabla;
                    echo $datos;

                    $NumeroFila = $NumeroFila + 1;
                }

                ?>
            </tbody>
        </table>
    </div>
    <?php
    require_once('../../plantillas/Footer2.php');
    ?>