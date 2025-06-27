<?php
// view: home.php

if (!isset($_SESSION['id'])) {
    header("Location: ../index.php?action=login_usuario");
    exit();
}

require_once __DIR__ . '/../controllers/EditProfileController.php';

$controller = new EditProfileController();

// Recargar datos del usuario desde la base de datos
$usuario = $controller->getUserById($_SESSION['id']);

if ($usuario) {
    // Actualizar sesión con los datos más recientes
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['apellido'] = $usuario['apellido'];
    $_SESSION['email'] = $usuario['email'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Meta para responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="shortcut icon" href="img/logito.ico" type="image/x-icon">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: 
                linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('../img/fondohome.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            color: #fff;
        }

        .container {
            max-width: 90%;
            width: 90%;
            margin: 40px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h1 {
            font-size: 28px;
            color: #d4a373;
        }

        h2 {
            font-size: 20px;
            color: #d4a373;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
        }

        a {
            display: block;
            padding: 12px;
            background: #d4a373;
            color: #222;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
            font-size: 16px;
            margin: 10px auto;
            width: 100%;
        }

        a:hover {
            background: #f4a261;
            color: #fff;
        }

        footer {
            margin-top: 20px;
            padding: 10px;
            background: rgba(212, 163, 115, 0.8);
            color: #222;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Responsive */
        @media (min-width: 768px) {
            .container {
                max-width: 600px;
                padding: 30px;
            }

            h1 {
                font-size: 32px;
            }

            h2 {
                font-size: 22px;
            }

            p {
                font-size: 18px;
            }

            a {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Bienvenido</h1>
    <h2><?= htmlspecialchars($_SESSION['nombre'] ?? 'Usuario') ?> <?= htmlspecialchars($_SESSION['apellido'] ?? '') ?></h2>
    <p><strong>Email:</strong> <?= htmlspecialchars($_SESSION['email'] ?? 'No disponible') ?></p>

    <a href="./index.php?action=edit_profile">✏️ Editar Perfil</a>
    <a href="./views/usuario.php">➡️ Ir al Blog</a>
    <a href="https://www.canva.com/design/DAGgDU3JEqs/LB41nyer3XbR8rHgxd1-Fg/edit?utm_content=DAGgDU3JEqs&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" target="_blank">👤 Manual del usuario</a>
    <a href="./index.php?action=cerrarSesion">❌ Cerrar sesión</a>
</div>

</body>
</html>