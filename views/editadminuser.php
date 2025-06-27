<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="css/admin.css">
            <link rel="shortcut icon" href="../img/logito.ico" type="image/x-icon">

    <style>
        /* ✅ Fondo elegante */
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
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        h2 {
            text-align: center;
            font-size: 26px;
            margin-bottom: 20px;
            color: #d4a373;
        }

        .message {
            background: #dff0d8;
            color: #3c763d;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            color: #d4a373;
        }

        input, select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #d4a373;
            background: #2a2a2a;
            color: #fff;
            font-size: 16px;
            width: 100%;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #f4a261;
        }

        .btn {
            padding: 10px;
            background: #d4a373;
            color: #fff;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #f4a261;
        }

        .btn-back {
            display: block;
            text-align: center;
            margin-top: 20px;
            background: #d4a373;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            color: #222;
            font-size: 16px;
        }

        .btn-back:hover {
            background: #f4a261;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Editar Usuario</h2>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="message"><?= htmlspecialchars($_SESSION['message']); unset($_SESSION['message']); ?></div>
        <?php endif; ?>

        <form action="index.php?action=actualizar_usuario" method="post">
            <input type="hidden" name="id" value="<?= htmlspecialchars($usuario['id']) ?>">

            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>

            <label>Apellido:</label>
            <input type="text" name="apellido" value="<?= htmlspecialchars($usuario['apellido']) ?>" required>

            <label>Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" required>

            

            <button type="submit" class="btn">Guardar Cambios</button>
        </form>

        <a href="index.php?action=gestionar_usuarios" class="btn-back">Volver a la lista</a>
    </div>
</body>
</html>
