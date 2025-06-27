<?php


// ✅ Verificación de sesión del administrador
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php?action=login_usuario");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador - Chocobox</title>
    <link rel="stylesheet" href="css/admin.css">
            <link rel="shortcut icon" href="../img/logito.ico" type="image/x-icon">

    <style>
        /* ✅ Fondo con la misma imagen de antes */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: 
                linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') 
                no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            color: #fff;      
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h1 {
            font-size: 30px;
            color: #d4a373;
        }

        h2 {
            font-size: 22px;
            color: #d4a373;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin: 10px 0;
        }

        nav ul li a {
            display: block;
            padding: 12px;
            background: #d4a373;
            color: #222;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
            font-size: 18px;
        }

        nav ul li a:hover {
            background: #f4a261;
        }

        .btn-description {
            font-size: 14px;
            color: #ccc;
            margin-top: 5px;
        }

        footer {
            margin-top: 20px;
            padding: 10px;
            background: rgba(212, 163, 115, 0.8);
            color: #222;
            border-radius: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Panel de Administración</h1>
        <nav>
            <ul>
                <li>
                    <a href="index.php?action=gestionar_usuarios">Gestionar Usuarios</a>
                    <p class="btn-description">Permite ver, editar o eliminar cuentas de usuarios registrados.</p>
                </li>
                <li>
                    <a href="index.php?action=gestionar_publicaciones">Nuevo Anuncio</a>
                    <p class="btn-description">Administra los anuncios o cambios en el blog.</p>
                </li>
                <li>
                    <a href="index.php?action=exportar_usuarios_pdf" target="_blank">📄 Exportar Usuarios en PDF</a>
                    <p class="btn-description">Descarga una lista de todos los usuarios en formato PDF.</p>
                </li>
                
                <li>
                    <a href="index.php?action=cerrarSesion">Cerrar Sesión</a>
                    <p class="btn-description">Finaliza tu sesión actual y vuelve a la página de inicio de sesión.</p>
                </li>
            </ul>
        </nav>

        
    </div>
</body>
</html>