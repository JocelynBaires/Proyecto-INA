<!doctype html>
<html lang="en">
<?php
date_default_timezone_set("America/El_Salvador");
$tiempo = date("h:i A");
$clave = password_hash("71287345", PASSWORD_DEFAULT);
?>

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <!-- Estilos locales -->
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>

<body>
    <br><br><br><br>
    <div class="login-page bg-light">
        <div class="container">
            <br><br><br>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <!-- <h3 class="mb-3">Prueba de hora php </h3> -->
                    <!-- <p><?php echo $clave ?></p> -->
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-3 px-5">
                                    <form method="post" action="Funciones/validacion.php" class="row g-4">
                                        <div class="col-12">
                                            <p class="alert alert-success   " style="text-align: justify;">
                                            SOLO ÁREA ADMINISTRATIVA
                                            </p>
                                            <p class="alert alert-primary" style="text-align: justify;">
                                                Si eres estudiante, puede ingresar al sitio oficial del <a href="https://inadeapopa.webcindario.com/"><b>INA</b></a> para obtener más información de la institución.
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <label>Correo electronico<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                                <input type="text" name="correo" id="correo" required class="form-control" placeholder="Introduzca Correo">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label>Contraseña<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" name="contrasena" class="form-control" placeholder="Introduzca Contraseña">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">Recordar mis credenciales</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <p class="float-end text-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Solicitar recuperación en el área de coordinación.">¿Olvidó su contraseña?</p>
                                            <button type="submit" class="btn btn-primary px-4 float-end mt-4" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Es importante diferenciar entre Mayusculas y minisculas.">
                                                ACCEDER
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 ps-0 d-none d-md-block">
                                <div class="form-right h-100 bg-primary text-white text-center pt-1 ">
                                    <h3> BIENVENIDO DE NUEVO</h3>
                                    <div class="h-10">
                                        <img class="img-fluid" src="imagenes/Logo.png">
                                    </div>
                                    <p class="text-center text-white mt-3"><?php echo $tiempo ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <p class="text-end text-secondary mt-3">Prueba v0.3</p> -->
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br>
    <?php
    require_once('plantillas/Footer.php');
    ?>
</body>

</html>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>