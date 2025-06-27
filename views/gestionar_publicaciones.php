<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Publicaciones</title>
    <link rel="stylesheet" href="css/admin.css">
            <link rel="shortcut icon" href="../img/logito.ico" type="image/x-icon">

    <style>
        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') 
                        no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: #d4a373;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            text-align: left;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #d4a373;
            background: #2a2a2a;
            color: #fff;
            font-size: 16px;
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
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            background: #d4a373;
            color: #222;
        }

        .btn-back:hover {
            background: #f4a261;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inseta un nuevo anuncio</h1>

        <form action="index.php?action=crear_publicacion" method="post" enctype="multipart/form-data">
            <label>Título:</label>
            <input type="text" name="titulo" required>

            <label>Descripción:</label>
            <textarea name="descripcion" rows="4" required></textarea>

            <label>Imagen:</label> <!-- ✅ Se guardará en `img/` en lugar de `uploads/` -->
            <input type="file" name="imagen" accept="image/*" required> 

            <button type="submit" class="btn">Crear anuncio</button>
        </form>

        <a href="index.php?action=Home_administrador" class="btn-back">🏠 Volver al Inicio</a>
    </div>
</body>
</html>
