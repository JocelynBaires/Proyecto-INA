<!doctype html>
<html lang="es">
<?php
require_once('../../plantillas/encabezado.php');
?>

     <?php
    require_once('../../plantillas/menu2.php');
    ?>
<body>
   
    <div class="container">

        <!-- <h2 class="text-center"><i class="bi bi-card-list"></i> BIENVENDIDO <i class="bi bi-card-list"></i></h2> -->
        <br>
        <div class="container-fluid">
            <div class="d-flex flex-row">
                <!-- <a href="Maestro_crear.php"  type="button" class="btn btn-outline-primary"><i class="bi bi-bookmark-plus-fill"></i> Agregar nuevo docente</a> -->
            </div>
            <br>
            <h2>LISTA DE DOCENTES</h2>

            <table class="table table-striped" id="ver-oferta">
                <thead>
                    <tr>
                        <th scope="col">Lista</th>
                        <!-- <th scope="col">ID</th> -->
                        <th scope="col">Abreviación</th>
                        <th scope="col">Nombre Docente</th>
                        <th scope="col">Apellido Docente</th>
                        <th>Opciones (Editar, Eliminar)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include_once("../../funciones/Connector_bdd.php");

                    $SQL = "SELECT `id_docente`, `abreviatura_docente`, `nombre_docente`, `apellido_docente` FROM `docentes` WHERE 1";
                    // WHERE empresas.Correo = '". $EmpresaUsuario ."'

                    $objeto = $BDD_DSS->query($SQL);
                    $NumeroFila = '1';

                    while ($fila = $objeto->fetch_assoc()) {
                        $id_docente = $fila['id_docente'];
                        $abreviatura_docente = $fila['abreviatura_docente'];
                        $nombre_docente = $fila['nombre_docente'];
                        $apellido_docente = $fila['apellido_docente'];


                        $datos = <<<tabla
                        <tr>
                            <th scope="row"><i class="bi bi-clipboard2-check-fill"></i> $NumeroFila</th>
                            <td> $abreviatura_docente</td>
                            <td> $nombre_docente</td>
                            <td>$apellido_docente</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-dark disabled" style="background: #242F9B;" href="empresas_ver_oferta.php?idOferta=$id_docente" class="btn btn-default"><i class="bi bi-eye"></i> Ver mas</span></a>
                                    <a class="btn btn-dark" style="background: #242F9B;" href="Maestro_modificar.php?idMaestro=$id_docente" class="btn btn-default" name='Modific' disabled><i class="bi bi-pencil"></i> Modificar</span></a>	
                                    <a class="btn btn-danger" href="Maestro_borrar.php?idMaestro=$id_docente   "><i class="bi bi-trash"></i> Eliminar</a>
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
    </div>
    <?php
    require_once('../../plantillas/Footer2.php');
    ?>
</body>