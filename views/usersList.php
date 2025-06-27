<?php
session_start();
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../controllers/UserController.php';

$database = new Database();
$pdo = $database->getConnection();
$userController = new UserController($pdo);
$usuarios = $userController->listUsers();

if (isset($_GET['buscar']) && isset($_GET['filtro'])) {
    $busqueda = trim($_GET['buscar']);
    $filtro = $_GET['filtro'];

    if (!empty($busqueda)) {
        $usuarios = array_filter($usuarios, function ($usuario) use ($busqueda, $filtro) {
            return stripos($usuario[$filtro], $busqueda) !== false;
        });

        // Aquí está el truco 🔥🔥
        $usuarios = array_map("unserialize", array_unique(array_map("serialize", $usuarios)));
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
        <link rel="shortcut icon" href="../img/logito.ico" type="image/x-icon">

    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        a { text-decoration: none; padding: 5px 10px; border-radius: 5px; }
        .edit { background-color: #f0ad4e; color: white; }
        .delete { background-color: #d9534f; color: white; }
        input[type="text"] { padding: 10px; width: 40%; margin-bottom: 10px; }
        select { padding: 10px; width: 20%; margin-bottom: 10px; }
        button { padding: 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>

<h2>Lista de Usuarios</h2>

<?php if (isset($_SESSION['message'])): ?>
    <p style="color: green; font-weight: bold;"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
<?php endif; ?>

<form method="GET">
    <select name="filtro" required>
        <option value="">Selecciona Filtro</option>
        <option value="id" <?= (isset($_GET['filtro']) && $_GET['filtro'] == 'id') ? 'selected' : '' ?>>ID</option>
        <option value="nombre" <?= (isset($_GET['filtro']) && $_GET['filtro'] == 'nombre') ? 'selected' : '' ?>>Nombre</option>
        <option value="email" <?= (isset($_GET['filtro']) && $_GET['filtro'] == 'email') ? 'selected' : '' ?>>Email</option>
    </select>

    <input type="text" name="buscar" placeholder="Buscar Usuario" value="<?= isset($_GET['buscar']) ? htmlspecialchars($_GET['buscar']) : '' ?>" required>
    <button type="submit">Buscar</button>
</form>

<table>
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    <?php if (!empty($usuarios)): ?>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= htmlspecialchars($usuario['id']) ?></td>
                <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                <td><?= htmlspecialchars($usuario['email']) ?></td>
                <td>
                    <a href="editUser.php?id=<?= $usuario['id'] ?>" class="edit">Editar</a>
                    <a href="deleteUser.php?id=<?= $usuario['id'] ?>" class="delete" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4" style="text-align: center; color: red;">No se encontraron resultados</td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>
