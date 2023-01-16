<?php
require_once('../../plantillas/encabezado.php');
?>
<?php
    require_once('../../plantillas/menu2.php');
    ?>
<body>

    <div class="container">
        <?php
        include_once("../../funciones/Connector_bdd.php");
        // $EmpresaUsuario = $_SESSION['usuario'];
        $idMaestro = $_GET['idMaestro'];

        $SQL = "SELECT* FROM docentes WHERE docentes.id_docente = '" . $idMaestro . "'";

        $objeto = $BDD_DSS->query($SQL);
        $NumeroFila = '1';
        $IdDetallesOferta;

        while ($fila = $objeto->fetch_assoc()) {
            $id_docente = $fila['id_docente'];
            $abreviatura_docente = $fila['abreviatura_docente'];
            $nombre_docente = $fila['nombre_docente'];
            $apellido_docente = $fila['apellido_docente'];

            $OfertaEmpresa = <<<tabla
        <div class="container border border-dark border-3">
            <div class="row g-2">
                <div class="col p-1"><h2 class="text-center"><i class="bi-x-octagon-fill"></i> SEGURO QUE DESEA ELIMINAR LA SIGUIENTE DOCENTE? <i class="bi-x-octagon-fill"></i></h2></div>
                <div class="w-100"></div>
                <i style="font-size: 200px; text-align:center;" class="bi bi-person-bounding-box"></i>
                <div class="p-10 border bg-light">
                    <h5>Importante:</h5>
                    <p>
                        Es importante mencionar que una vez se realice la eliminación no podra recuperar los datos del docente, por ello mismo
                        debera verificar si el docente que a continucación eliminara es el correcto, a continuación se detallara la información del docente
                        que se elminara.
                    </p>
                </div>
                <div class="col p-3 border bg-light"><h5><i class="bi bi-file-earmark-text"></i><b> Nombre:</b>$abreviatura_docente $nombre_docente</h5></div>
                <div class="col p-3 border bg-light"><h5><i class="bi bi-file-earmark-text"></i><b> Apellido:</b> $apellido_docente</h5></div>
                <br><br>
                <div style="text-align:center;" class="col p-3 border bg-light">
                    <a class="btn btn-dark" href="Maestro_borrar_confirmado?id_profesores=$id_docente" class="btn btn-default"><i class="bi bi-trash"></i> Eliminar Docente</span></a>
                </div>
    tabla;
            echo $OfertaEmpresa;

            $NumeroFila = $NumeroFila + 1;
        }

        // if (isset($_POST['Eliminar'])) {
        //     //echo "This is Button1 that is selected";
        //     echo $idMaestro;
        //     $BorrarOfertas = "DELETE FROM profesores WHERE profesores.id_profesores = '$idMaestro'";

        //     $objeto = $BDD_DSS->query($BorrarOfertas);

        //     if ($objeto == TRUE) {
        //         echo "Se borro";
        //         header("location:index.php");
        //     } else {
        //         echo "Error";
        //     }
        // }

        // if (isset($_POST['Cancelar'])) {
        //     echo "This is Button2 that is selected";
        //     header("location:index.php");
        // }

        ?>
        <div class="w-100"></div>
    </div>
    </div>
    </div>
    <?php
    require_once('../../plantillas/Footer2.php');
    ?>
</body>