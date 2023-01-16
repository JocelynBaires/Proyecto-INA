<?php

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"])){
        
        $nombre = $_POST["nombre"];

        $sql=$conexion->query("insert into asignaturas(nombre_asignatura) values('$nombre')");
        
        if ($sql==1) {
            echo '<div class="alert alert-success">Materia Ingresada Correctamente</div>' ;
        } else {
            echo '<div class="alert alert-danger">Error al Ingresar la materia</div>' ;
        }
        
    }else{
        echo '<div class="alert alert-warning">Los campos estan vacios</div>' ;

    }
}


?>