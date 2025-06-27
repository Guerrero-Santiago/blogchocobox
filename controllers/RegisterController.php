<?php

require_once('./config/database.php');
require_once('./models/RegisterModel.php');

class RegisterController
{
    private $pdo;
    private $RegisterModel;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection();
        $this->RegisterModel = new RegisterModel($this->pdo);
    }

    public function registerUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $pregunta1 = trim($_POST['pregunta1']);
            $respuesta1 = strtolower(trim($_POST['respuesta1']));
            $pregunta2 = trim($_POST['pregunta2']);
            $respuesta2 = strtolower(trim($_POST['respuesta2']));

            // Validaciones
            if (empty($nombre) || empty($apellido) || empty($fecha_nacimiento) || empty($email) || empty($password) || empty($confirm_password)) {
                $_SESSION['error'] = "Todos los campos son obligatorios.";
                header("Location: index.php?action=registro");
                exit();
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error'] = "El correo electrónico no es válido.";
                header("Location: index.php?action=registro");
                exit();
            }

            if (strlen($password) < 8) {
                $_SESSION['error'] = "La contraseña debe tener al menos 8 caracteres.";
                header("Location: index.php?action=registro");
                exit();
            }

            if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>]).{8,}$/', $password)) {
                $_SESSION['error'] = "La contraseña debe contener al menos una letra mayúscula, una minúscula, un número y un carácter especial.";
                header("Location: index.php?action=registro");
                exit();
            }

            if ($password !== $confirm_password) {
                $_SESSION['error'] = "Las contraseñas no coinciden.";
                header("Location: index.php?action=registro");
                exit();
            }

            if ($this->RegisterModel->existeEmail($email)) {
                $_SESSION['error'] = "El correo ya está registrado.";
                header("Location: index.php?action=registro");
                exit();
            }

            try {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $id_usuario = $this->RegisterModel->register($nombre, $apellido, $fecha_nacimiento, $email, $hashedPassword);

                $this->RegisterModel->guardarPreguntaYRespuesta($id_usuario, $pregunta1, $respuesta1);
                $this->RegisterModel->guardarPreguntaYRespuesta($id_usuario, $pregunta2, $respuesta2);

                $_SESSION['message'] = "✅ Registro exitoso. Ahora puedes iniciar sesión.";
                header("Location: index.php?action=login_usuario");
                exit();
            } catch (Exception $e) {
                $_SESSION['error'] = "Error al registrar el usuario: " . $e->getMessage();
                header("Location: index.php?action=registro");
                exit();
            }
        } else {
            $_SESSION['error'] = "Método de solicitud incorrecto.";
            header("Location: index.php?action=registro");
            exit();
        }
    }
}