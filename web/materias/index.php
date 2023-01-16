<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('../../plantillas/encabezado.php') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
<script src="https://kit.fontawesome.com/3ca0a5d581.js" crossorigin="anonymous"></script>
</head>
<?php
    require_once('../../plantillas/menu2.php');
    ?>
<body>
   <h1 class="text-center p-3">Control de Asignaturas</h1>
    <?php
    include "modelo/conexion.php";
        include "controlador/eliminar_materia.php";
    ?>


   <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
        
        <h3 class="text-center text-secondary">Registra las nuevas asignaturas</h3>
        <?php
                    include "modelo/conexion.php";
                    include "controlador/registro_materia.php";
                    
                ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de la asignatura</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Actualizar dato</button>
        </form>


        <div class="col-8 p-4">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th>Materia</th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from asignaturas");
                    while($datos=$sql->fetch_object()) { ?>
                    <tr>
                        <th><?= $datos->id_asignatura?></th>
                        <th><?= $datos->nombre_asignatura?></th>
                        <td>
                            <a href="index.php?id=<?= $datos->id_asignatura ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></i></a>
                            <a href="modificar_asignatura.php?id=<?= $datos->id_asignatura ?>" class="btn btn-small btn-dark"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                 <?php   }
                ?>

                
            </tbody>
        </table>
        </div>
   </div>

   <?php
    require_once('../../plantillas/Footer2.php');
    ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>