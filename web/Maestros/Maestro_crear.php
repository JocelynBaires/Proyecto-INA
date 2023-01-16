<?php
require_once('../../plantillas/encabezado.php');
?>
  <?php
    include_once("../../funciones/Connector_bdd.php");
  ?>
  <?php
    require_once('../../plantillas/menu2.php');
    ?>
  <br><br>
<!-- <h2 class="text-center"><i class="bi-x-octagon-fill"></i> SEGURO QUE DESEA ELIMINAR LA SIGUIENTE MAESTRO? <i class="bi-x-octagon-fill"></i></h2> -->
<?php

    $OfertaEmpresa = <<<tabla
        <div class="container border border-dark border-3">
        <form name="formulario" method="post" action="Maestro_crear_confirmado.php">
            <div class="row g-2">
                <div class="col p-1"><h2 class="text-center"><i class="bi bi-cursor-text"></i> AGREGAR NUEVO DOCENTE <i class="bi bi-cursor-text"></i></h2></div>
                <div class="w-100"></div>
                <i style="font-size: 200px; text-align:center;" class="bi bi-person-bounding-box"></i>
               
                <div class="form-group" style="display:none;">
                    <label class="">Nombre del docente:</label>
                    <input type="" name="id_profesor" value="" id="id_profesor" class="form-control" placeholder="Nombre del docente." minlength="1" maxlength="6" >
                </div>
                <div class="form-group">
                    <label class="">Abreviación:</label>
                    <input type="" name="abre_docente" value="" id="abre_docente" class="form-control" placeholder="Lic, Licda, Dr, o Prof." minlength="1" maxlength="6" >
                </div>
                <div class="form-group">
                    <label class="">Nombre del docente:</label>
                    <input type="" name="Nombre_profesor" value="" id="Nombre_profesor" class="form-control" placeholder="Nombre del docente." minlength="5" maxlength="60" required>
                </div>

                <div class="form-group">
                    <label class="">Apellidos del docente:</label>
                    <input type="" name="Apellido_profesor" value="" id="Apellido_profesor" class="form-control" placeholder="Apellido del docente." minlength="5" maxlength="60" required>
                </div>
                <div class="w-100"></div>
                <input class="btn btn-dark" type="submit" value="GUARDAR DOCENTE"/>
            </form>
        <for
    tabla;
    echo $OfertaEmpresa;
?>
    
</form>
</div>
<br>
</div>
<?php
    require_once('../../plantillas/Footer2.php');
    ?>
<html>

