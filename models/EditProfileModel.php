<?php

// EditProfileModel.php

require_once __DIR__ . '/../config/database.php';

class EditProfileModel {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    // Obtener datos del usuario por ID
    public function getUserById($id) {
        $sql = "SELECT id, nombre, apellido, email FROM users WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Actualizar datos del usuario
    public function updateUser($id, $nombre, $apellido, $email, $password = null) {
        try {
            if ($password) {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $sql = "UPDATE users SET nombre = :nombre, apellido = :apellido, email = :email, password = :password WHERE id = :id";
            } else {
                $sql = "UPDATE users SET nombre = :nombre, apellido = :apellido, email = :email WHERE id = :id";
            }

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            if ($password) {
                $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
            }

            return $stmt->execute();

        } catch (PDOException $e) {
            error_log("Error al actualizar perfil: " . $e->getMessage());
            return false;
        }
    }

    // Verificar contraseña actual
    public function checkPassword(int $id_usuario, string $password): bool {
        $stmt = $this->db->prepare("SELECT password FROM users WHERE id = ?");
        $stmt->execute([$id_usuario]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) return false;

        return password_verify($password, $user['password']);
    }

    // Obtener preguntas de seguridad para el usuario
    public function getSecurityQuestionsForUser(int $id_usuario) {
        $sql = "
            SELECT 
                ps.id AS id_pregunta, ps.pregunta, rs.respuesta
            FROM respuestas_seguridad rs
            JOIN preguntas_seguridad ps ON rs.id_pregunta = ps.id
            WHERE rs.id_usuario = ?
            ORDER BY ps.id
            LIMIT 2;
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id_usuario]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($result) >= 2) {
            return [
                'pregunta1' => $result[0]['pregunta'],
                'respuesta1' => strtolower($result[0]['respuesta']),
                'pregunta2' => $result[1]['pregunta'],
                'respuesta2' => strtolower($result[1]['respuesta'])
            ];
        }

        return [];
    }

    // Verificar respuestas de seguridad
    public function verifySecurityAnswers(int $id_usuario, string $respuesta1, string $respuesta2): bool {
        $sql = "
            SELECT COUNT(*) as count 
            FROM respuestas_seguridad rs
            JOIN preguntas_seguridad pr ON rs.id_pregunta = pr.id
            WHERE rs.id_usuario = ? AND (
                (rs.id_pregunta = 1 AND rs.respuesta = ?) OR
                (rs.id_pregunta = 2 AND rs.respuesta = ?)
            )
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $id_usuario,
            strtolower($respuesta1),
            strtolower($respuesta2)
        ]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row['count'] == 2;
    }
}