<?php
include_once("Connector_bdd.php");
echo "";
//Recibir datos del formulario
$usuario = isset($_POST['correo']) ? $_POST['correo'] : "";
$contraseña = isset($_POST['contrasena']) ? $_POST['contrasena'] : "";


$SQL = "SELECT * FROM usuario U WHERE U.codigo_usuario = '" . $usuario . "'";
$objeto = $BDD_DSS->query($SQL);

$filas=mysqli_num_rows($objeto);
$hash = "";
while ($password = $objeto->fetch_assoc()) {
    $hash = $password['contrasena_usuario'];
}

if(password_verify($contraseña, $hash)){
    //Inicio la variable session_start
    session_start();
    //Aqui redirigimos hacia el archivo de la pagina principal del usuario 
    $_SESSION['usuario'] = $usuario;
    $_SESSION['contraseña'] = $contraseña;
    header("location:../web/Maestros/index.php");
} 
else {

    echo "Error en la autentificacion";
}
?>
