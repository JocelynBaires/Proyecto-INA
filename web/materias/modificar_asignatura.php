<?php
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query("select * from asignaturas where id_asignatura=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar datos</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        
        <h5 class="text-center alert alert-secondary">Modificar Materia</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
                  include "controlador/modificar_materia.php"; 
                    while($datos=$sql->fetch_object()) { ?>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre de la asignatura</label>
                        <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre_asignatura ?>">
                    </div>
                    
                 <?php   }
                ?>

        
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Actualizar dato</button>

    </form>
</body>
</html>