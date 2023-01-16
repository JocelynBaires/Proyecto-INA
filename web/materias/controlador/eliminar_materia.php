<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql=$conexion->query("delete from asignaturas where id_asignatura=$id");
    
    if ($sql==1) {
        echo '<div>Materia eliminada</div>';
    }else{
        echo '<div>No se pudo eliminar la materia</div>';
    }
}

?>