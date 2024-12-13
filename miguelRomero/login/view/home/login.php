<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión - DogCom</title>
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
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Productos</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Precios</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contáctanos</a></li>
                        </ul>
                        <a href="/login/view/home/login.php" class="boton">Inicia Sesión</a>
                        <a href="/login/view/home/signup.php" class="boton">Regístrate</a>
                    </div>
                    <?php else: ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Agregar información</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Editar perfil</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Sesión de recursos</a></li>
                        </ul>
                        <a href="/login/view/home/logout.php" class="boton">Cerrar Sesión</a>
                    </div>
                    <?php endif ?>
                </div>
            </nav>
        </div>
    </div>

    <div class="fondo-login">
        <div class="icon">
            <a href="/login/index.php">
                <i class="fa-solid fa-shield-dog dog-icon"></i>
            </a>
        </div>
        <div class="titulo">Inicia sesión en DogCom</div>
        <form action="verificar.php" method="POST" class="col-3 login" autocomplete="off">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class="box-eye">
                    <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                        <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                    </button>
                </div>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <?php if(!empty($_GET['error'])): ?>
                <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                    <?= htmlspecialchars($_GET['error']) ?>
                </div>
            <?php endif; ?>
            <div class="d-grid gap-2 <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        <div class="login col-3 mt-3">
            Nuevo aquí? <a href="signup.php" style="text-decoration: none;">Crea una cuenta</a>
        </div>
    </div>

    <?php require_once("c://xampp/htdocs/login/view/head/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="/login/asset/js/main.js"></script>
</body>
</html>