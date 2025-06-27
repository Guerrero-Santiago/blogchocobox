<?php
require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../config/database.php';

class UserController {
    private $userCrud;

    public function __construct() {
        $database = new Database(); // Creamos el objeto de conexión
        $pdo = $database->getConnection(); // Obtenemos la conexión
        $this->userCrud = new UserCrud($pdo); // Enviamos la conexión al modelo
    }

    public function listUsers() {
        return $this->userCrud->getAllUsers(); // Obtener todos los usuarios
    }

    public function getUserById($id) {
        return $this->userCrud->getUserById($id);
    }

    public function editUser($id, $nombre, $apellido, $email, $role, $password = null) {
        return $this->userCrud->updateUser($id, $nombre, $apellido, $email, $role, $password);
    }

    public function deleteUser($id) {
        return $this->userCrud->deleteUser($id);
    }
}
