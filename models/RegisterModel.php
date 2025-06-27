<?php

class RegisterModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function existeEmail($email) {
        $query = "SELECT id FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$email]);
        return $stmt->rowCount() > 0;
    }

    public function register($nombre, $apellido, $fecha_nacimiento, $email, $password) {
        try {
            $this->conn->beginTransaction();

            $query = "INSERT INTO users (nombre, apellido, fecha_nacimiento, email, password) 
                      VALUES (?, ?, ?, ?, ?)";
            
            $stmt = $this->conn->prepare($query);
            $result = $stmt->execute([
                $nombre,
                $apellido,
                $fecha_nacimiento,
                $email,
                $password
            ]);

            if (!$result) {
                throw new Exception("Error al registrar el usuario.");
            }

            $id_usuario = $this->conn->lastInsertId();
            $this->conn->commit();
            return $id_usuario;

        } catch (Exception $e) {
            $this->conn->rollBack();
            $_SESSION['error'] = $e->getMessage();
            return false;
        }
    }

    public function getPreguntaId($pregunta) {
        $stmt = $this->conn->prepare("SELECT id FROM preguntas_seguridad WHERE pregunta = ?");
        $stmt->execute([$pregunta]);

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $row['id'];
        } else {
            $stmt = $this->conn->prepare("INSERT INTO preguntas_seguridad (pregunta) VALUES (?)");
            $stmt->execute([$pregunta]);
            return $this->conn->lastInsertId();
        }
    }

    public function guardarRespuesta($id_usuario, $id_pregunta, $respuesta) {
        $stmt = $this->conn->prepare("
            INSERT INTO respuestas_seguridad (id_usuario, id_pregunta, respuesta)
            VALUES (?, ?, ?)
        ");
        return $stmt->execute([$id_usuario, $id_pregunta, strtolower($respuesta)]);
    }

    public function guardarPreguntaYRespuesta($id_usuario, $pregunta, $respuesta) {
        try {
            $id_pregunta = $this->getPreguntaId($pregunta);
            $result = $this->guardarRespuesta($id_usuario, $id_pregunta, $respuesta);

            if (!$result) {
                throw new Exception("Error al guardar la respuesta de seguridad.");
            }

            return true;

        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            return false;
        }
    }
}