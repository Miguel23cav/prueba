<?php
class db {
    private $host = "localhost/miguelRomero";
    private $dbname = "login";
    private $user = "root";
    private $password = "";

    public function conexion() {
        try {
            $PDO = new PDO("mysql:host=localhost;dbname= usuario" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Manejo de errores
            return $PDO;
        } catch (PDOException $e) {
            error_log($e->getMessage()); // Log de errores
            return null; // Retorna null en caso de error
        }
    }
}
?>