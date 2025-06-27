<?php
// este archivo se llama: LogoutController.php


class LogoutController {
    public function cerrarSesion() {
        // Verificar si la sesión está activa
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Eliminar todas las variables de sesión
        $_SESSION = [];

        // Destruir la sesión
        session_unset();
        session_destroy();

        // Eliminar la cookie de sesión
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 3600,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        // Redirigir al inicio
        header("Location: ./index.php");
        exit();
    }
}