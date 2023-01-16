
<style>
    .social-part .fa {
        padding-right: 20px;
    }

    ul li a {
        margin-right: 20px;
    }
</style>
<nav class="navbar navbar-expand-sm   navbar-light bg-light border">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li></li>
            <li class="nav-item">
                <a class="nav-link" href="../Plantillas/form.login.php">LOGIN</span></a>
            </li>
            <li class="nav-item dropdown dmenu">
                <a class="nav-link dropdown-toggle text-white" href="../Maestros/Index.php" id="navbardrop" data-toggle="dropdown">
                    AULAS
                </a>
                <div class="dropdown-menu sm-menu">
                    <a class="dropdown-item" href="../Maestros/Index.php">Listado de aulas.</a>
                    <a class="dropdown-item" href="#">Agregar una nueva area.</a>
                </div>
            </li>
            <li class="nav-item dropdown dmenu">
                <a class="nav-link dropdown-toggle" href="../Maestros/Index.php" id="navbardrop" data-toggle="dropdown">
                    DOCENTES
                </a>
                <div class="dropdown-menu sm-menu">
                    <a class="dropdown-item" href="../Maestros/Index.php">Listado docente.</a>
                    <a class="dropdown-item" href="../Maestros/Maestro_crear.php">Agregar nuevo docente.</a>
                </div>
            </li>
            <li class="nav-item dropdown dmenu">
                <a class="nav-link dropdown-toggle" href="../Maestros/Index.php" id="navbardrop" data-toggle="dropdown">
                    ALUMNOS
                </a>
                <div class="dropdown-menu sm-menu">
                    <a class="dropdown-item" href="../Alumnos/Index.php">Listado de alumnos.</a>
                    <a class="dropdown-item" href="../Alumnos/Alumno_crear.php">Agregar nuevo alumno.</a>
                </div>
            </li>
            <li class="nav-item dropdown dmenu">
                <a class="nav-link dropdown-toggle" href="../Maestros/Index.php" id="navbardrop" data-toggle="dropdown">
                    ASIGNATURAS
                </a>
                <div class="dropdown-menu sm-menu">
                    <a class="dropdown-item" href="../materias/index.php">Listado de asignaturas</a>
                    <!-- <a class="dropdown-item" href="#">Agregar nueva seccion.</a> -->
                </div>
            </li>
            <li class="nav-item dropdown dmenu">
                <a class="nav-link dropdown-toggle" href="../Maestros/Index.php" id="navbardrop" data-toggle="dropdown">
                    SECCIONES
                </a>
                <div class="dropdown-menu sm-menu">
                    <a class="dropdown-item" href="../crudSecciones/index.php">Listado de secciones.</a>
                    <a class="dropdown-item" href="#">Agregar nueva seccion.</a>
                </div>
            </li>
        </ul>
        <!-- <form action="Funciones/Login/CerrarSesion.php" method="post">
            <button type="submit" class="btn btn-dark shadow-sm gap-3">Cerrar Sesión</button>
        </form> -->
    </div>
</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.navbar-light .dmenu').hover(function() {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function() {
            $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
        });
    });
</script>