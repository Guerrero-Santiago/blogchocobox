<?php
require_once './models/LoginModel.php'; 
require_once './config/database.php'; 

// Evitar caché en páginas protegidas
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

class LoginController {
    private $pdo;
    private $LoginModel;

    public function __construct() {
        $database = new Database();
        $this->pdo = $database->getConnection();
        $this->LoginModel = new LoginModel($this->pdo);
    }

    public function Loginusers() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
            $password = $_POST['password'] ?? '';

            if (empty($email) || empty($password)) {
                $_SESSION['message'] = "❌ Por favor, completa todos los campos.";
                header("Location: index.php?action=login_usuario");
                exit();
            }

            $user = $this->LoginModel->checkLogin($email, $password);

            if ($user) {
                $_SESSION['usuario'] = htmlspecialchars($user['nombre']);
                $_SESSION['id'] = (int)$user['id'];
                $_SESSION['email'] = htmlspecialchars($user['email']);

                // Corrección: Verificar si el usuario pertenece a la tabla 'admin' o 'users'
                $_SESSION['role'] = isset($user['role']) ? htmlspecialchars($user['role']) : 'user';

                // Redirigir correctamente según el rol del usuario
                if ($_SESSION['role'] === 'admin') {
                    header("Location: index.php?action=Home_administrador");
                } else {
                    header("Location: index.php?action=Home_usuario");
                }
                exit();
            } else {
                $_SESSION['message'] = "❌ Usuario o contraseña incorrectos.";
                header("Location: index.php?action=login_usuario");
                exit();
            }
        }
    }

    // ✅ Nuevas funciones para recuperación de contraseña

    /**
     * Obtiene las preguntas de seguridad del usuario por su correo
     */
    public function obtenerPreguntasSeguridad() {
        $data = json_decode(file_get_contents('php://input'), true);
        $email = $data['email'];

        $stmt = $this->pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if (!$usuario = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo json_encode(['success' => false, 'message' => 'Correo no encontrado']);
            exit;
        }

        $stmt = $this->pdo->prepare("
            SELECT ps.id_pregunta, pr.pregunta 
            FROM respuestas_seguridad ps
            JOIN preguntas_seguridad pr ON ps.id_pregunta = pr.id
            WHERE ps.id_usuario = ?
            ORDER BY ps.id_pregunta
            LIMIT 2
        ");
        $stmt->execute([$usuario['id']]);
        $preguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($preguntas) < 2) {
            echo json_encode(['success' => false, 'message' => 'No hay preguntas guardadas']);
            exit;
        }

        echo json_encode([
            'success' => true,
            'usuario_id' => $usuario['id'],
            'pregunta1' => $preguntas[0]['pregunta'],
            'pregunta2' => $preguntas[1]['pregunta']
        ]);
    }

    /**
     * Verifica que las respuestas sean correctas
     */
    public function verificarRespuestasSeguridad() {
        $data = json_decode(file_get_contents('php://input'), true);
        $id_usuario = $data['id_usuario'];
        $respuesta1 = strtolower(trim($data['respuesta1']));
        $respuesta2 = strtolower(trim($data['respuesta2']));

        $stmt = $this->pdo->prepare("SELECT respuesta FROM respuestas_seguridad WHERE id_usuario = ? ORDER BY id_pregunta LIMIT 1");
        $stmt->execute([$id_usuario]);
        $correcta1 = strtolower($stmt->fetchColumn());

        $stmt = $this->pdo->prepare("SELECT respuesta FROM respuestas_seguridad WHERE id_usuario = ? ORDER BY id_pregunta LIMIT 1,1");
        $stmt->execute([$id_usuario]);
        $correcta2 = strtolower($stmt->fetchColumn());

        if ($respuesta1 === $correcta1 && $respuesta2 === $correcta2) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Respuestas incorrectas']);
        }
    }

    /**
     * Actualiza la contraseña del usuario
     */
    public function cambiarContrasena() {
        $data = json_decode(file_get_contents('php://input'), true);
        $id_usuario = $data['id_usuario'];
        $nueva_contrasena = password_hash($data['nueva_contrasena'], PASSWORD_DEFAULT);

        $stmt = $this->pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
        if ($stmt->execute([$nueva_contrasena, $id_usuario])) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al actualizar la contraseña']);
        }
    }
}