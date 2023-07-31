<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contrasena'];

include_once '../../modelo/conexionlogin.php';

$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$resultado = mysqli_query($conn, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    $row = mysqli_fetch_assoc($resultado);
    $contraseña = $row['contrasena'];

    if (password_verify($contraseña, $contraseña)) {
        session_start();
        $_SESSION['nombredelusuario'] = $usuario;
        header("location:../inicio.php");
    } else {
        echo "<script> alert('Contraseña incorrecta. Por favor, intenta nuevamente.');
        location.href = '../../index2.html';</script>";
    }
} else {
    echo "<script> alert('Error en la autenticación. Por favor, verifica tus datos.');
    location.href = '../../index2.html';</script>";
}

mysqli_free_result($resultado);
mysqli_close($conn);
?>