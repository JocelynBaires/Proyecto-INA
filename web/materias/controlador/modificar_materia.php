<?php


    if(!empty($_POST["btnregistrar"])){
        if (!empty($_POST["nombre"])) {
            $id=$_POST["id"];
            $nombre=$_POST["nombre"];

            $sql=$conexion->query(" update asignaturas set nombre_asignatura='$nombre' where id_asignatura=$id ");

            if ($sql==1) {
                header("location:index.php");
            } else {
                echo "<div class='alert alert-danger'>Error al modificar los datos</div>";
            }
            
        }else{
            echo "<div class='alert alert-warning'>HAY CAMPOS VACIOS</div>";
        }
    }


?>
