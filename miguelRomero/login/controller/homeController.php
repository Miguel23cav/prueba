<?php
class homeController {
    private $MODEL;

    public function __construct() {
        require_once("c://xampp/htdocs/login/model/homeModel.php");
        $this->MODEL = new homeModel();
    }

    public function guardarUsuario($correo, $contraseña) {
        $correo = $this->limpiarcorreo($correo);
        $contraseña = $this->encriptarcontraseña($this->limpiarcadena($contraseña));
        return $this->MODEL->agregarNuevoUsuario($correo, $contraseña);
    }

    public function limpiarcadena($campo) {
        return htmlspecialchars(strip_tags($campo));
    }

    public function limpiarcorreo($campo) {
        return filter_var(trim($campo), FILTER_SANITIZE_EMAIL);
    }

    public function encriptarcontraseña($contraseña) {
        return password_hash($contraseña, PASSWORD_DEFAULT);
    }

    public function verificarusuario($correo, $contraseña) {
        $keydb = $this->MODEL->obtenerclave($correo);
        return $keydb && password_verify($contraseña, $keydb);
    }
}
?>