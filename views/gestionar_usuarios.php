<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Usuarios</title>
    <link rel="stylesheet" href="css/admin.css">
            <link rel="shortcut icon" href="../img/logito.ico" type="image/x-icon">

    <style>
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
            max-width: 900px;
            margin: 20px auto;
            padding: 15px;
            background: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 15px;
            color: #d4a373;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 8px;
            width: 100%;
            max-width: 400px;
            border-radius: 5px;
            border: none;
            margin: 0 auto;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 8px;
            overflow: hidden;
            min-width: 600px;
        }

        th, td {
            padding: 10px 12px;
            text-align: center;
            border-bottom: 1px solid #555;
            white-space: nowrap;
        }

        th {
            background: rgba(212, 163, 115, 0.8);
            color: #222;
        }

        tr:hover {
            background: rgba(212, 163, 115, 0.3);
        }

        .btn {
            display: inline-block;
            padding: 6px 10px;
            margin: 3px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-edit {
            background-color: #4CAF50;
            color: #fff;
        }

        .btn-edit:hover {
            background-color: #3e8e41;
        }

        .btn-delete {
            background-color: #d9534f;
            color: #fff;
        }

        .btn-delete:hover {
            background-color: #c9302c;
        }

        .btn-back, .btn-home {
            display: block;
            text-align: center;
            width: 100%;
            background: #d4a373;
            color: #222;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            text-decoration: none;
            font-size: 16px;
        }

        .btn-home:hover {
            background: #f4a261;
        }

        /* Estilos responsivos */
        @media (max-width: 600px) {
            h1 {
                font-size: 20px;
            }

            input[type="text"] {
                width: 100%;
                max-width: 100%;
            }

            .btn {
                font-size: 12px;
                padding: 4px 8px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Usuarios</h1>

        <!-- ✅ Formulario de búsqueda -->
        <form method="GET" action="index.php">
            <input type="hidden" name="action" value="gestionar_usuarios">
            <input type="text" name="busqueda" placeholder="Buscar por nombre, apellido o email..." value="<?= isset($_GET['busqueda']) ? htmlspecialchars($_GET['busqueda']) : '' ?>">
            <button type="submit" class="btn btn-edit">🔍 Buscar</button>
        </form>

        <div class="table-responsive">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
                <?php
                // ✅ Lógica PHP de filtrado
                $usuarios_filtrados = $usuarios;
                if (!empty($_GET['busqueda'])) {
                    $busqueda = strtolower(trim($_GET['busqueda']));
                    $usuarios_filtrados = array_filter($usuarios, function($usuario) use ($busqueda) {
                        return strpos(strtolower($usuario['nombre']), $busqueda) !== false ||
                               strpos(strtolower($usuario['apellido']), $busqueda) !== false ||
                               strpos(strtolower($usuario['email']), $busqueda) !== false;
                    });
                }

                // ✅ Mostrar los resultados filtrados
                if (count($usuarios_filtrados) > 0): foreach ($usuarios_filtrados as $usuario): ?>
                    <tr>
                        <td><?= htmlspecialchars($usuario['id']) ?></td>
                        <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                        <td><?= htmlspecialchars($usuario['apellido']) ?></td>
                        <td><?= htmlspecialchars($usuario['email']) ?></td>
                        <td><?= htmlspecialchars($usuario['role']) ?></td>
                        <td>
                            <a href="index.php?action=editar_usuario&id=<?= $usuario['id'] ?>" class="btn btn-edit">✏️ Editar</a>
                            <a href="index.php?action=eliminar_usuario&id=<?= $usuario['id'] ?>" class="btn btn-delete" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">🗑️ Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; else: ?>
                    <tr>
                        <td colspan="6">No se encontraron usuarios.</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>

        <a href="index.php?action=Home_administrador" class="btn-home">🏠 Volver al Inicio</a>
    </div>
</body>
</html>