<?php 
// view: EditProfile.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../controllers/EditProfileController.php';
if (!isset($_SESSION['id'])) {
    header("Location: loginForm.php");
    exit();
}
$editProfileController = new EditProfileController();
$usuario = $editProfileController->getUserById($_SESSION['id']);
// Obtener preguntas de seguridad si existen
$preguntas_seguridad = [];
if ($usuario && isset($usuario['id'])) {
    $preguntas_seguridad = $editProfileController->getSecurityQuestionsForUser($_SESSION['id']);
}
if (!$usuario || !is_array($usuario)) {
    header("Location: index.php?action=Home_usuario");
    exit();
}
?>
<?php
if (isset($_POST['update'])) {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $email = trim($_POST['email']);
    $password = null;
    // Manejo de cambio de contraseña
    if (!empty($_POST['new_password'])) {
        $current_password = trim($_POST['current_password']);
        $use_security_questions = isset($_POST['use_security_questions']) && $_POST['use_security_questions'] == 'yes';
        if (!$use_security_questions) {
            if (!$editProfileController->checkPassword($_SESSION['id'], $current_password)) {
                header("Location: index.php?action=EditProfile");
                exit();
            }
        } else {
            $respuesta1 = trim($_POST['security_answer1']);
            $respuesta2 = trim($_POST['security_answer2']);
            if (!$editProfileController->verifySecurityAnswers($_SESSION['id'], $respuesta1, $respuesta2)) {
                header("Location: index.php?action=EditProfile");
                exit();
            }
        }
        $password = $_POST['new_password'];
    }
    // Actualizar usuario
    if ($editProfileController->editUser($_SESSION['id'], $nombre, $apellido, $email, $password)) {
        // Actualizar sesión
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['email'] = $email;
        // Redirigir sin mensaje
        header("Location: index.php?action=Home_usuario");
        exit();
    } else {
        header("Location: index.php?action=EditProfile");
        exit();
    }
}
?>
<head>
    <meta charset="UTF-8">
    <!-- Meta para responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"  rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"  crossorigin="anonymous"></script>
            <link rel="shortcut icon" href="../img/logito.ico" type="image/x-icon">

    <style>
        body {
            background: url('img/bg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            font-size: 16px;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.85);
            padding: 30px 20px;
            border-radius: 15px;
            color: #fff;
            width: 95%;
            max-width: 650px;
            margin: auto;
            margin-top: 50px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.6);
        }

        label {
            color: #ffcc99;
            font-size: 14px;
        }

        .form-control {
            font-size: 14px;
            padding: 8px 12px;
            border: 2px solid #000;
        }

        .btn-choco {
            background-color: #d49252;
            border: none;
            color: white;
            font-size: 15px;
            padding: 10px 0;
            width: 100%;
            margin-bottom: 10px;
        }

        .btn-choco:hover {
            background-color: #bb7c41;
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
            color: #ffcc99;
            font-size: 20px;
        }

        .back-link {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
        }

        /* Diseño en dos columnas responsivo */
        .profile-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        @media (min-width: 768px) {
            .profile-section {
                flex-direction: row;
            }

            .section-left,
            .section-right {
                flex: 1;
            }

            .btn-choco {
                font-size: 16px;
            }
        }

        .position-relative {
            position: relative;
        }

        .toggle-password {
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 10px;
            color: #aaa;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal-content {
            background-color: rgba(0, 0, 0, 0.9);
            margin: 10% auto;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #fff;
        }

        .forgot-password-link {
            color: #ffcc99;
            font-size: 13px;
            text-decoration: underline;
            cursor: pointer;
        }

        .forgot-password-link:hover {
            color: #d49252;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h3 class="form-title"><i class="fas fa-user-edit"></i> Editar Perfil</h3>
    <!-- Formulario completo -->
    <form method="post" action="" id="formularioPerfil">
        <div class="profile-section">
            <!-- Sección izquierda: Nombre, Apellido, Email -->
            <div class="section-left">
                <!-- Nombre -->
                <div class="mb-3">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="<?= htmlspecialchars($usuario['nombre'] ?? '') ?>" required>
                </div>
                <!-- Apellido -->
                <div class="mb-3">
                    <label>Apellido:</label>
                    <input type="text" class="form-control" name="apellido" value="<?= htmlspecialchars($usuario['apellido'] ?? '') ?>" required>
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($usuario['email'] ?? '') ?>" required>
                </div>
                <!-- Botón de actualización -->
                <button type="submit" name="update" class="btn btn-choco w-100">
                    <i class="fas fa-save"></i> Actualizar
                </button>
            </div>
            <!-- Sección derecha: Cambiar contraseña -->
            <div class="section-right">
                <!-- Contraseña actual -->
                <div class="mb-3 position-relative">
                    <label>Ingresa tu contraseña actual:</label>
                    <input type="password" class="form-control" name="current_password" id="current_password">
                    <span class="toggle-password" onclick="togglePassword('current_password')">
                        <i class="far fa-eye" id="eye-current"></i>
                    </span>
                </div>
                <!-- Botón Verificar -->
                <button type="button" id="btnVerificar" class="btn btn-choco w-100">Verificar</button>
                <!-- Enlace para olvidar contraseña -->
                <div class="mt-3 text-end">
                    <a href="#" id="linkSeguridad" class="forgot-password-link">¿No recuerdas tu contraseña?</a>
                </div>
            </div>
        </div>
        <!-- Campo oculto para usar preguntas de seguridad -->
        <input type="hidden" name="use_security_questions" id="use_security_questions" value="no">
    </form>
    <div class="back-link">
        <a href="index.php?action=Home_usuario" class="text-decoration-none text-light">
            <i class="fas fa-arrow-left"></i> Volver
        </a>
    </div>
</div>

<!-- Modal de Preguntas de Seguridad -->
<div id="modalSeguridad" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h5>Responde tus preguntas de seguridad</h5>
        <form id="formSeguridad">
            <input type="hidden" id="id_usuario_modal" value="<?= $_SESSION['id'] ?>">
            <?php if (!empty($preguntas_seguridad)): ?>
                <div class="mb-3 position-relative">
                    <label><?= htmlspecialchars($preguntas_seguridad['pregunta1'] ?? '') ?></label>
                    <input type="password" id="respuesta1_modal" class="form-control" required>
                    <span class="toggle-password" onclick="togglePassword('respuesta1_modal')">
                        <i class="far fa-eye" id="eye-respuesta1"></i>
                    </span>
                </div>
                <div class="mb-3 position-relative">
                    <label><?= htmlspecialchars($preguntas_seguridad['pregunta2'] ?? '') ?></label>
                    <input type="password" id="respuesta2_modal" class="form-control" required>
                    <span class="toggle-password" onclick="togglePassword('respuesta2_modal')">
                        <i class="far fa-eye" id="eye-respuesta2"></i>
                    </span>
                </div>
            <?php else: ?>
                <p>No tienes preguntas de seguridad configuradas.</p>
            <?php endif; ?>
            <button type="button" id="btnVerificarModal" class="btn btn-choco w-100">Verificar</button>
        </form>
    </div>
</div>

<!-- Nuevo Modal: Cambio de Contraseña -->
<div id="modalCambiarContrasena" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h5>Cambia tu contraseña</h5>
        <form id="formCambiarContrasena">
            <div class="mb-3 position-relative">
                <label>Nueva Contraseña:</label>
                <input type="password" id="new_password" class="form-control" required>
                <span class="toggle-password" onclick="togglePassword('new_password')">
                    <i class="far fa-eye" id="eye-new"></i>
                </span>
            </div>
            <div class="mb-3 position-relative">
                <label>Confirmar Contraseña:</label>
                <input type="password" id="confirm_password" class="form-control" required>
                <span class="toggle-password" onclick="togglePassword('confirm_password')">
                    <i class="far fa-eye" id="eye-confirm"></i>
                </span>
            </div>
            <button type="button" id="btnGuardarContrasena" class="btn btn-choco w-100">Guardar Contraseña</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
<script>
    function togglePassword(inputId) {
        const input = document.getElementById(inputId);
        const eye = document.getElementById("eye-" + inputId);
        if (input.type === "password") {
            input.type = "text";
            eye.classList.remove("fa-eye");
            eye.classList.add("fa-eye-slash");
        } else {
            input.type = "password";
            eye.classList.remove("fa-eye-slash");
            eye.classList.add("fa-eye");
        }
    }

    document.getElementById('btnVerificar').addEventListener('click', function () {
        const currentPassword = document.getElementById('current_password').value.trim();
        fetch('index.php?action=verificar_contrasena_actual', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ id_usuario: <?= $_SESSION['id'] ?>, password: currentPassword })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Contraseña actual correcta.');
                document.getElementById('modalCambiarContrasena').style.display = 'block';
            } else {
                alert('Contraseña actual incorrecta.');
            }
        });
    });

    document.getElementById('btnVerificarModal').addEventListener('click', function () {
        const idUsuario = document.getElementById('id_usuario_modal').value;
        const respuesta1 = document.getElementById('respuesta1_modal').value.trim().toLowerCase();
        const respuesta2 = document.getElementById('respuesta2_modal').value.trim().toLowerCase();
        fetch('index.php?action=verificar_respuestas_seguridad', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ id_usuario: idUsuario, respuesta1, respuesta2 })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Respuestas correctas. Ahora puedes cambiar tu contraseña.');
                document.getElementById('modalSeguridad').style.display = 'none';
                document.getElementById('use_security_questions').value = 'yes'; // Marca el campo oculto
                document.getElementById('modalCambiarContrasena').style.display = 'block';
            } else {
                alert('Respuestas incorrectas. Inténtalo nuevamente.');
            }
        });
    });

    document.getElementById('btnGuardarContrasena').addEventListener('click', function () {
        const newPassword = document.getElementById('new_password').value.trim();
        const confirmPassword = document.getElementById('confirm_password').value.trim();

        if (newPassword !== confirmPassword) {
            alert("Las contraseñas no coinciden.");
            return;
        }

        // Agregar campo oculto de nueva contraseña
        const form = document.getElementById("formularioPerfil");
        let inputPass = document.querySelector("input[name='new_password']");
        if (!inputPass) {
            inputPass = document.createElement("input");
            inputPass.type = "hidden";
            inputPass.name = "new_password";
            form.appendChild(inputPass);
        }
        inputPass.value = newPassword;

        // Cerrar modal y enviar formulario
        document.getElementById('modalCambiarContrasena').style.display = 'none';
        form.submit();
    });

    document.querySelectorAll('.modal .close').forEach(el => {
        el.addEventListener('click', function () {
            document.getElementById('modalCambiarContrasena').style.display = 'none';
            document.getElementById('modalSeguridad').style.display = 'none';
        });
    });

    document.getElementById('linkSeguridad').addEventListener('click', function (e) {
        e.preventDefault();
        document.getElementById('modalSeguridad').style.display = 'block';
    });
</script>
</body>
</html>