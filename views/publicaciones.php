<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicaciones - BlogChocoBox</title>
    <link rel="stylesheet" href="css/style.css">
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

        .publicacion {
            border-bottom: 1px solid #d4a373;
            padding: 15px;
            margin-bottom: 15px;
        }

        .publicacion img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .publicacion h2 {
            color: #f4a261;
        }

        .publicacion p {
            font-size: 18px;
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
        <h1>ANUNCIOS</h1>

        <?php
        require_once __DIR__ . '/../controllers/PublicationController.php'; // ✅ Ajuste de ruta
        $PublicationController = new PublicationController();
        $publicaciones = $PublicationController->listPublications();

        if (!empty($publicaciones)):
            foreach ($publicaciones as $publicacion): ?>
                <div class="publicacion">
                    <img src="<?= !empty($publicacion['imagen']) ? 'img/' . htmlspecialchars($publicacion['imagen']) : 'img/arto.jpg'; ?>" alt="Imagen de publicación"> <!-- ✅ Se ajustó la ruta -->
                    <h2><?= htmlspecialchars($publicacion['titulo']); ?></h2>
                    <p><?= htmlspecialchars($publicacion['descripcion']); ?></p>
                    <small>Fecha: <?= !empty($publicacion['fecha']) ? $publicacion['fecha'] : 'Fecha desconocida'; ?></small>
                </div>
            <?php endforeach; 
        else: ?>
            <p>No hay publicaciones disponibles.</p>
        <?php endif; ?>

        <a href="index.php?action=Home_usuario" class="btn-back">🏠 Volver al Inicio</a>
    </div>
</body>
</html>
