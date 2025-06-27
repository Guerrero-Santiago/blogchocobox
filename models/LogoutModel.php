<?php
class LogoutModel {
    public function logoutUser() {
        session_start();
        $_SESSION = array();
        session_unset();
        session_destroy();
        setcookie(session_name(), '', time() - 3600, '/'); // 🔹 Borra la cookie de sesión
    }
}
?>
