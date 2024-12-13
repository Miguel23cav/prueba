<?php
require_once("c://xampp/htdocs/login/controller/homeController.php");
session_start();

$obj = new homeController();
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$confirmarContraseña = $_POST['confirmarContraseña'];
$error = "";

if (empty($correo) || empty($contraseña) || empty($confirmarContraseña)) {
    $error .= "<li>Todos los campos son obligatorios</li>";
    header("Location: signup.php?error=" . urlencode($error) . "&correo=" . urlencode($correo));
} else if ($contraseña !== $confirmarContraseña) {
    $error .= "<li>Las contraseñas no coinciden</li>";
    header("Location: signup.php?error=" . urlencode($error) . "&correo=" . urlencode($correo));
} else {
    if ($obj->guardarUsuario($correo, $contraseña) === false) {
        $error .= "<li>El correo ya está registrado</li>";
        header("Location: signup.php?error=" . urlencode($error) . "&correo=" . urlencode($correo));
    } else {
        header("Location: login.php");
    }
}
?>