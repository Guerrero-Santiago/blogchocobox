<?php
require_once __DIR__ . '/../config/database.php';

class UserCrud {
    private $pdo;

    public function __construct() {
        $database = new Database(); // Instancia la conexión
        $this->pdo = $database->getConnection(); // Asignamos la conexión
    }

    public function getAllUsers() {
        $stmt = $this->pdo->query("SELECT id, nombre, apellido, email, IFNULL(role, 'user') AS role FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id) {
        $stmt = $this->pdo->prepare("SELECT id, nombre, apellido, email, IFNULL(role, 'user') AS role FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $nombre, $apellido, $email, $role, $password = null) { // ✅ Corrección en el orden de los parámetros
        if ($password) {
            $passwordHash = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $this->pdo->prepare("UPDATE users SET nombre = ?, apellido = ?, email = ?, role = ?, password = ? WHERE id = ?");
            return $stmt->execute([$nombre, $apellido, $email, $role, $passwordHash, $id]);
        } else {
            $stmt = $this->pdo->prepare("UPDATE users SET nombre = ?, apellido = ?, email = ?, role = ? WHERE id = ?");
            return $stmt->execute([$nombre, $apellido, $email, $role, $id]);
        }
    }

    public function deleteUser($id) {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
