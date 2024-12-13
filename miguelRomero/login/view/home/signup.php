<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Cuenta - DogCom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/login/asset/css/estilos.css">
</head>
<body>
    <?php require_once("c://xampp/htdocs/login/view/head/head.php"); ?>
    
    <div class="fondo-login">
        <div class="icon">
            <a href="/login/index.php">
                <i class="fa-solid fa-shield-dog dog-icon"></i>
            </a>
        </div>
        <div class="titulo">Crea una cuenta aquí</div>
        <form action="store.php" method="POST" class="col-3 login" autocomplete="off">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="correo" value="<?= htmlspecialchars(!empty($_GET['correo']) ? $_GET['correo'] : "") ?>" class="form-control" id="exampleInputEmail1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class="box-eye">
                    <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                        <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                    </button>
                </div>
                <input type="password" name="contraseña" value="<?= htmlspecialchars(!empty($_GET['contraseña']) ? $_GET['contraseña'] : "") ?>" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Repite la contraseña</label>
                <div class="box-eye">
                    <button type="button" onclick="mostrarContraseña('password2','eyepassword2')">
                        <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                    </button>
                </div>
                <input type="password" name="confirmarContraseña" value="<?= htmlspecialchars(!empty($_GET['confirmarContraseña']) ? $_GET['confirmarContraseña'] : "") ?>" class="form-control" id="password2" required>
            </div>
            <?php if(!empty($_GET['error'])): ?>
                <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                    <?= htmlspecialchars($_GET['error']) ?>
                </div>
            <?php endif; ?>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">CREAR CUENTA</button>
            </div>
        </form>
        <div class="login col-3 mt-3">
            ¿Tienes una cuenta? <a href="login.php" style="text-decoration: none;">Inicia Sesión</a>
        </div>
    </div>

    <?php require_once("c://xampp/htdocs/login/view/head/footer.php"); ?>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="/login/asset/js/main.js"></script>
</body>
</html>

<div class="mb-3">
    <label for="rut" class="form-label">Rut</label>
    <input type="text" name="rut" class="form-control" id="rut" placeholder="Ej: 12345678-9" required>
</div>