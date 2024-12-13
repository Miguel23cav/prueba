<?php
require_once("c://xampp/htdocs/login/controller/homeController.php");
session_start();

$obj = new homeController();
$correo = $obj->limpiarcorreo($_POST['correo']);
$contraseña = $obj->limpiarcadena($_POST['password']);
$bandera = $obj->verificarusuario($correo, $contraseña);

if ($bandera) {
    $_SESSION['usuario'] = $correo;
    header("Location: panel_control.php");
} else {
    $error = "<li>Las claves son incorrectas</li>";
    header("Location: login.php?error=" . urlencode($error));
}

function validarRut($rut) {
    // Eliminar puntos y guiones
    $rut = str_replace(['.', '-'], '', $rut);
    
    // Validar longitud
    if (strlen($rut) < 8 || strlen($rut) > 9) {
        return false;
    }

    // Lógica de validación del RUT
    $dv = substr($rut, -1);
    $numero = substr($rut, 0, -1);
    $suma = 0;
    $multiplicador = 2;

    for ($i = strlen($numero) - 1; $i >= 0; $i--) {
        $suma += $numero[$i] * $multiplicador;
        $multiplicador = $multiplicador == 7 ? 2 : $multiplicador + 1;
    }

    $dvCalculado = 11 - ($suma % 11);
    if ($dvCalculado == 11) {
        $dvCalculado = 0;
    } elseif ($dvCalculado == 10) {
        $dvCalculado = 'K';
    }

    return strtoupper($dv) == strtoupper($dvCalculado);
}

// Ejemplo de uso
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rut = $_POST['rut'];
    if (!validarRut($rut)) {
        echo "RUT inválido.";
    } else {
        echo "RUT válido.";
    }
}
