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

            $Datos = <<<tabla
        <div class="container border border-dark border-3">
        <form name="formulario" method="post" action="Maestro_modificar_confirmado.php">
            <div class="row g-2">
                <div class="col p-1"><h2 class="text-center"><i class="bi bi-cursor-text"></i> MODIFICANDO INFORMACIÓN DEL MAESTRO <i class="bi bi-cursor-text"></i></h2></div>
                <div class="w-100"></div>
                <i style="font-size: 200px; text-align:center;" class="bi bi-person-bounding-box"></i>
               
                <div class="form-group" style="display:none;">
                    <label class="">Nombre del docente:</label>
                    <input type="" name="id_profesor" value="$id_docente" id="id_profesor" class="form-control" placeholder="Servicios, Telecomunicaciones, etc." minlength="5" maxlength="40" >
                </div>
                <div class="form-group">
                    <label class="">Nombre del docente:</label>
                    <input type="" name="abre_docente" value="$abreviatura_docente" id="abre_docente" class="form-control" placeholder="Servicios, Telecomunicaciones, etc." minlength="5" maxlength="40" >
                </div>
                <div class="form-group">
                    <label class="">Nombre del docente:</label>
                    <input type="" name="Nombre_profesor" value="$nombre_docente" id="Nombre_profesor" class="form-control" placeholder="Servicios, Telecomunicaciones, etc." minlength="5" maxlength="40" >
                </div>

                <div class="form-group">
                    <label class="">Apellidos del docente:</label>
                    <input type="" name="Apellido_profesor" value="$apellido_docente" id="Apellido_profesor" class="form-control" placeholder="Servicios, Telecomunicaciones, etc." minlength="5" maxlength="40" >
                </div>
                <br><br>
                <input class="btn btn-dark" type="submit" value="Modficiar Docente."/>
            </form>
        <for
    tabla;
            echo $Datos;

            $NumeroFila = $NumeroFila + 1;
        }
        ?>
    </div>
    </div>
    </div>
</body>