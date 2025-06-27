<?php
session_start();
require_once __DIR__ . '/../controllers/UserController.php';

$userController = new UserController(); // 🔥 SIN $pdo porque ya se instancia solo

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($userController->deleteUser($id)) {
        $_SESSION['message'] = "✅ Usuario eliminado correctamente.";
    } else {
        $_SESSION['message'] = "❌ Error al eliminar el usuario.";
    }
} else {
    $_SESSION['message'] = "⚠️ ID no válido.";
}

header("Location: usersList.php");
exit();
?>
