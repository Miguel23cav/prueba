<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/login/asset/css/estilos.css">
</head>
<body>
    <?php require_once("c://xampp/htdocs/login/view/head/head.php"); ?>

    <div class="fondo_menu">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Inicio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php if(empty($_SESSION['usuario'])): ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Productos</a>
                            </li>
 <li class="nav-item">
                                <a class="nav-link" href="#">Precios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contactanos</a>
                            </li>
                        </ul>
                        <a href="/login/view/home/login.php" class="boton">Inicia Sesión</a>
                        <a href="/login/view/home/signup.php" class="boton">Registrate</a>
                    </div>
                    <?php else: ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Agregar información</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Editar perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sesión de recursos</a>
                            </li>
                        </ul>
                        <a href="/login/view/home/logout.php" class="boton">Cerrar Sesión</a>
                    </div>
                    <?php endif ?>
                </div>
            </nav>
        </div>
    </div>
    <div class="fondo">
        <!-- Aquí puedes agregar más contenido -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="/login/asset/js/main.js"></script>
</body>
</html>
<?php
    require_once("c://xampp/htdocs/login/view/head/header.php");
?>






<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>