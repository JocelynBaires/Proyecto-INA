<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $id_seccion = $_GET['codigo'];

    $sentencia = $bd->prepare("select * from secciones where id_seccion = ?;");
    $sentencia->execute([$id_seccion]);
    $secciones = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Año de ingreso: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $secciones->year_registro_seccion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Años cursados: </label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required
                        value="<?php echo $secciones->year_carrera_seccion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Seccion: </label>
                        <input type="text" class="form-control" name="txtSigno" autofocus required
                        value="<?php echo $secciones->letra_seccion; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $secciones->id_seccion; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>