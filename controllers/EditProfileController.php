<?php

// EditProfileController.php

require_once __DIR__ . '/../models/EditProfileModel.php';

class EditProfileController {
    private $model;

    public function __construct() {
        $this->model = new EditProfileModel();
    }

    // Obtener datos del usuario por ID
    public function getUserById($id) {
        return $this->model->getUserById($id);
    }

    // Actualizar datos del usuario
    public function editUser($id, $nombre, $apellido, $email, $password = null) {
        return $this->model->updateUser($id, $nombre, $apellido, $email, $password);
    }

    // Verificar contraseña actual
    public function checkPassword(int $id_usuario, string $password): bool {
        return $this->model->checkPassword($id_usuario, $password);
    }

    // Obtener preguntas de seguridad para el usuario
    public function getSecurityQuestionsForUser(int $id_usuario) {
        return $this->model->getSecurityQuestionsForUser($id_usuario);
    }

    // Verificar respuestas de seguridad
    public function verifySecurityAnswers(int $id_usuario, string $respuesta1, string $respuesta2): bool {
        return $this->model->verifySecurityAnswers($id_usuario, $respuesta1, $respuesta2);
    }
}