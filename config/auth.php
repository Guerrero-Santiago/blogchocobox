<?php
session_start(); // Iniciar sesión si no está iniciada

if (!isset($_SESSION['user_id'])) {
    // Si el usuario no está autenticado, lo redirige al login
    header("Location: views/loginForm.php");
    exit();
}
?>
