<?php
// Iniciar sesión
session_start();

// Evitar caché en páginas protegidas
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

// Definición de acciones públicas (no requieren sesión)
$public_actions = [
    'login_usuario', 
    'registrar_usuario', 
    'recetas', 
    'nosotros', 
    'ayuda', 
    'articulos', 
    'publicaciones',
    
    // Acciones para recuperación de contraseña
    'obtener_preguntas_seguridad',
    'verificar_respuestas_seguridad',
    'cambiar_contrasena',
    'verificar_contrasena_actual'
];

$action = $_GET['action'] ?? 'login_usuario';

// Verificar si requiere sesión activa
if (!in_array($action, $public_actions) && !isset($_SESSION['usuario'])) {
    header("Location: index.php?action=login_usuario");
    exit();
}

// Variables para controladores
$LoginControllerusers = null;
$RegisterControllerusers = null;
$UserController = null;
$ExportUsersPDFController = null;
$EditProfileController = null;
$PublicationController = null;
$logoutController = null;

// Cargar controladores solo si se va a usar la acción
switch ($action) {
    case 'registrar_usuario':
        require_once __DIR__ . '/controllers/RegisterController.php';
        $RegisterControllerusers = new RegisterController();
        break;

    case 'login_usuario':
        require_once __DIR__ . '/controllers/LoginController.php';
        $LoginControllerusers = new LoginController();
        break;

    case 'gestionar_usuarios':
    case 'editar_usuario':
    case 'actualizar_usuario':
    case 'eliminar_usuario':
        require_once __DIR__ . '/controllers/UserController.php';
        $UserController = new UserController();
        break;

    case 'exportar_usuarios_pdf':
        require_once __DIR__ . '/controllers/ExportUsersPDFController.php';
        $ExportUsersPDFController = new ExportUsersPDFController();
        break;

    case 'edit_profile':
        require_once __DIR__ . '/controllers/EditProfileController.php';
        $EditProfileController = new EditProfileController();
        break;

    case 'obtener_preguntas_seguridad':
    case 'verificar_respuestas_seguridad':
    case 'cambiar_contrasena':
    case 'verificar_contrasena_actual':
        require_once __DIR__ . '/controllers/LoginController.php';
        $loginController = new LoginController();

        if ($action === 'obtener_preguntas_seguridad') {
            $loginController->obtenerPreguntasSeguridad();
        } elseif ($action === 'verificar_respuestas_seguridad') {
            $loginController->verificarRespuestasSeguridad();
        } elseif ($action === 'cambiar_contrasena') {
            $loginController->cambiarContrasena();
        } elseif ($action === 'verificar_contrasena_actual') {
            $data = json_decode(file_get_contents('php://input'), true);
            $id_usuario = $data['id_usuario'] ?? null;
            $password = $data['password'] ?? null;

            if ($id_usuario && $password) {
                $result = $loginController->checkPassword($id_usuario, $password);
                echo json_encode(['success' => $result]);
            } else {
                echo json_encode(['success' => false, 'error' => 'Datos incompletos']);
            }
            exit();
        }
        exit(); // Terminar ejecución después de procesar JSON

    case 'cerrarSesion':
        require_once __DIR__ . '/controllers/LogoutController.php';
        $logoutController = new LogoutController();
        $logoutController->cerrarSesion();
        exit(); // Asegúrate de terminar después del redirect

    case 'gestionar_publicaciones':
    case 'crear_publicacion':
    case 'publicaciones':
        require_once __DIR__ . '/controllers/PublicationController.php';
        $PublicationController = new PublicationController();
        break;

    default:
        // Para acciones como Home, recetas, etc.
        break;
}
?>

<?php
switch ($action) {
    case 'registrar_usuario':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $RegisterControllerusers->registerUser();
        } else {
            include('./views/registro.php');
        }
        break;

    case 'login_usuario':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $LoginControllerusers->Loginusers();
        } else {
            include('./views/Login.php');
        }
        break;

    case 'Home_usuario':
        include('./views/home.php');
        break;

    case 'Home_administrador':
        include('./views/HomeAdministrador.php');
        break;

    case 'exportar_usuarios_pdf':
        $ExportUsersPDFController->export();
        exit();

    case 'gestionar_usuarios':
        if ($UserController !== null) {
            $usuarios = $UserController->listUsers();
            include('./views/gestionar_usuarios.php');
        } else {
            die("Error: Controlador de usuarios no inicializado.");
        }
        break;

    case 'editar_usuario':
        if (!isset($_GET['id'])) {
            header("Location: index.php?action=gestionar_usuarios");
            exit();
        }

        if ($UserController !== null) {
            $usuario = $UserController->getUserById($_GET['id']);
            include('./views/editadminuser.php');
        } else {
            die("Error: Controlador de usuarios no inicializado.");
        }
        break;

    case 'actualizar_usuario':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $email = trim($_POST['email']);
            $role = $_POST['role'];

            if ($UserController->editUser($id, $nombre, $apellido, $email, $role, null)) {
                $_SESSION['message'] = "✅ Usuario actualizado correctamente.";
            } else {
                $_SESSION['message'] = "❌ Error al actualizar usuario.";
            }
        }
        header("Location: index.php?action=gestionar_usuarios");
        exit();

    case 'eliminar_usuario':
        if (isset($_GET['id'])) {
            if ($UserController->deleteUser($_GET['id'])) {
                $_SESSION['message'] = "✅ Usuario eliminado correctamente.";
            } else {
                $_SESSION['message'] = "❌ Error al eliminar usuario.";
            }
        }
        header("Location: index.php?action=gestionar_usuarios");
        exit();

    case 'edit_profile':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $email = trim($_POST['email']);
            $password = !empty($_POST['password']) ? $_POST['password'] : null;

            if ($EditProfileController->editUser($_SESSION['id'], $nombre, $apellido, $email, $password)) {
                $_SESSION['message'] = "";
                header("Location: index.php?action=" . ($_SESSION['role'] === 'admin' ? 'Home_administrador' : 'Home_usuario'));
                exit();
            } else {
                $_SESSION['message'] = "❌ Error al actualizar.";
            }
        } else {
            include('./views/EditProfile.php');
        }
        break;

    case 'gestionar_publicaciones':
        if ($PublicationController !== null) {
            $publicaciones = $PublicationController->listPublications();
            include(__DIR__ . '/views/gestionar_publicaciones.php');
        } else {
            die("Error: Controlador de publicaciones no inicializado.");
        }
        break;

    case 'crear_publicacion':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $titulo = trim($_POST['titulo']);
            $descripcion = trim($_POST['descripcion']);
            $imagen_url = '';

            if (!empty($_FILES['imagen']['name'])) {
                $upload_dir = "img/";
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }

                $imagen_nombre = time() . "_" . basename($_FILES['imagen']['name']);
                $imagen_path = $upload_dir . $imagen_nombre;

                if (move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen_path)) {
                    $imagen_url = $imagen_nombre;
                }
            }

            if (!empty($titulo) && !empty($descripcion) && !empty($imagen_url)) {
                if ($PublicationController->createPublication($titulo, $descripcion, $imagen_url)) {
                    $_SESSION['message'] = "";
                } else {
                    $_SESSION['message'] = "❌ Error al crear la publicación.";
                }
            } else {
                $_SESSION['message'] = "❌ Los campos no pueden estar vacíos.";
            }
        }
        header("Location: index.php?action=gestionar_publicaciones");
        exit();

    case 'publicaciones':
        if ($PublicationController !== null) {
            $publicaciones = $PublicationController->listPublications();
            include(__DIR__ . '/views/publicaciones.php');
        } else {
            die("Error: Controlador de publicaciones no inicializado.");
        }
        break;

    case 'cerrarSesion':
        // Este caso ya fue manejado antes
        break;

    case 'recetas':
        include('./views/recetas.php');
        break;

    case 'nosotros':
        include('./views/nosotros.php');
        break;

    case 'ayuda':
        include('./views/ayuda.php');
        break;

    case 'articulos':
        include('./views/articulos.php');
        break;

    default:
        include('./views/Login.php');
        break;
}

if (isset($_GET['logout'])) {
    echo "<p class='text-center text-success'>Has cerrado sesión correctamente.</p>";
}
?>