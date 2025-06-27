<?php

// Evitar caché en páginas protegidas
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

class LoginModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function checkLogin($email, $password) {
        // ✅ Verificar si el usuario es administrador en la tabla 'admin'
        $query = "SELECT * FROM admin WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        // ✅ Ajuste: Comparación directa si la contraseña no está cifrada
        if ($admin && $password === $admin['password']) {
            $admin['role'] = 'admin';
            return $admin;
        }

        // ✅ Si no es administrador, buscar en la tabla 'users'
        $query = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $user['role'] = 'user';
            return $user;
        }

        return false;
    }
}
