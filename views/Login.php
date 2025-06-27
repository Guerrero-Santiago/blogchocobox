<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogChocoBox - Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="shortcut icon" href="img/logito.ico" type="image/x-icon">

   <style>
    :root {
        --primary-color: #d4a373;
        --primary-dark: #b38a5f;
        --secondary-color: #fefae0;
        --dark-color: #2a2a2a;
        --light-color: #ffffff;
        --error-color: #e63946;
        --success-color: #2a9d8f;
        --text-light: rgba(255, 255, 255, 0.85);
        --bg-overlay: rgba(0, 0, 0, 0.88);
        --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: url('img/bg.jpg') no-repeat center center fixed;
        background-size: cover;
        color: var(--light-color);
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        line-height: 1.6;
    }
    .navbar {
        background-color: var(--bg-overlay);
        padding: 15px 5%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.3);
        position: relative;
        z-index: 1000;
    }
    .logo-container {
        display: flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        transition: var(--transition);
    }
    .logo-container:hover {
        transform: translateY(-2px);
    }
    .logo__img {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--primary-color);
        transition: var(--transition);
    }
    .logo__nombre {
        color: var(--light-color);
        font-size: 1.5rem;
        margin: 0;
        font-weight: 600;
        background: linear-gradient(to right, var(--light-color) 60%, var(--primary-color) 40%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .logo__bold {
        font-weight: 700;
    }
    .auth-buttons {
        display: flex;
        gap: 15px;
        align-items: center;
    }
    .auth-btn {
        padding: 0.7rem 1.2rem;
        border-radius: 8px;
        font-size: 0.9rem;
        font-weight: 500;
        text-decoration: none;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }
    .login-btn {
        background-color: transparent;
        color: var(--primary-color);
        border: 2px solid var(--primary-color);
    }
    .login-btn:hover {
        background-color: rgba(212, 163, 115, 0.1);
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(212, 163, 115, 0.3);
    }
    .register-btn {
        background-color: var(--primary-color);
        color: var(--light-color);
        border: 2px solid var(--primary-color);
    }
    .register-btn:hover {
        background-color: var(--primary-dark);
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(212, 163, 115, 0.4);
    }
    .container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        position: relative;
    }
    .login-card {
        background-color: var(--bg-overlay);
        border-radius: 12px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        width: 100%;
        max-width: 480px;
        padding: 2.5rem;
        animation: fadeInUp 0.6s ease;
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        position: relative;
        overflow: hidden;
    }
    .login-card:before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(212, 163, 115, 0.1) 0%, transparent 70%);
        z-index: -1;
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .login-header {
        text-align: center;
        margin-bottom: 2.2rem;
    }
    .login-subtitle {
        color: var(--text-light);
        margin-top: 0;
        font-size: 0.9rem;
        font-weight: 300;
    }
    .form-group {
        margin-bottom: 1.5rem;
        position: relative;
    }
    .form-label {
        display: block;
        margin-bottom: 0.6rem;
        color: var(--text-light);
        font-weight: 400;
        font-size: 0.95rem;
    }
    .input-with-icon {
        position: relative;
    }
    .form-control {
    width: 100%;
    padding: 0.9rem 1rem 0.9rem 2.8rem;
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 8px;
    background-color: rgba(255, 255, 255, 0.05);
    color: #ffffff; /* ← Cambiado a blanco */
    font-size: 0.95rem;
    transition: var(--transition);
    font-family: 'Poppins', sans-serif;
}
/* Estilo para el placeholder */
.form-control::placeholder {
    color: var(--primary-color); /* ← Beige (#d4a373) */
    opacity: 1; /* Para asegurar que se vea bien en todos los navegadores */
}
    .form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(212, 163, 115, 0.2);
        background-color: rgba(255, 255, 255, 0.08);
    }
    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary-color);
        font-size: 1rem;
        transition: var(--transition);
    }
    .form-control:focus + .input-icon {
        color: var(--light-color);
        transform: translateY(-50%) scale(1.1);
    }
    .password-toggle {
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-light);
        cursor: pointer;
        transition: var(--transition);
        font-size: 1rem;
    }
    .password-toggle:hover {
        color: var(--primary-color);
    }
    .btn {
        width: 100%;
        padding: 0.9rem;
        border: none;
        border-radius: 8px;
        background-color: var(--primary-color);
        color: var(--light-color);
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        margin-top: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-family: 'Poppins', sans-serif;
        box-shadow: 0 4px 15px rgba(212, 163, 115, 0.3);
    }
    .btn:hover {
        background-color: var(--primary-dark);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(212, 163, 115, 0.4);
    }
    .btn:active {
        transform: translateY(0);
    }
    .btn i {
        font-size: 0.9rem;
    }
    .message {
        padding: 0.9rem 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        text-align: center;
        font-size: 0.9rem;
        font-weight: 400;
        animation: fadeIn 0.4s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .error-message {
        background-color: rgba(230, 57, 70, 0.15);
        border-left: 4px solid var(--error-color);
        color: var(--error-color);
    }
    .success-message {
        background-color: rgba(42, 157, 143, 0.15);
        border-left: 4px solid var(--success-color);
        color: var(--success-color);
    }
    .login-footer {
        text-align: center;
        margin-top: 1.8rem;
        font-size: 0.85rem;
        color: var(--text-light);
    }
    .login-link {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
        transition: var(--transition);
        position: relative;
    }
    .login-link:after {
        content: '';
        position: absolute;
        width: 0;
        height: 1px;
        bottom: -2px;
        left: 0;
        background-color: var(--primary-color);
        transition: var(--transition);
    }
    .login-link:hover {
        color: var(--light-color);
    }
    .login-link:hover:after {
        width: 100%;
    }
    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
        }
        .auth-buttons {
            width: 100%;
            justify-content: center;
            margin-top: 1rem;
        }
        .login-card {
            padding: 1.5rem;
        }
    }
    @media (max-width: 480px) {
        .logo-container {
            flex-direction: column;
            text-align: center;
        }
        .auth-buttons {
            flex-direction: column;
            gap: 10px;
            width: 100%;
        }
        .auth-btn {
            width: 100%;
            justify-content: center;
            padding: 0.8rem;
        }
        .login-card {
            padding: 1.2rem;
        }
    }
    .loader {
        display: none;
        width: 20px;
        height: 20px;
        border: 3px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        border-top-color: var(--light-color);
        animation: spin 1s ease-in-out infinite;
        margin-left: 8px;
    }
    @keyframes spin {
        to { transform: rotate(360deg); }
    }
    .btn.disabled {
        background-color: #a09b8c !important;
        cursor: not-allowed;
        opacity: 0.6;
        box-shadow: none;
    }
    .error-message-inline {
        color: var(--error-color);
        font-size: 0.85rem;
        margin-top: 5px;
        display: none;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="login-header">
                <h2 class="logo__nombre">Blog<span class="logo__bold">ChocoBox</span></h2>
                <p class="login-subtitle">disfruta de informacion y recetas de chocolate</p>
            </div>
            <?php if (isset($_SESSION['message'])): ?>
                <div class="message <?= strpos($_SESSION['message'], 'éxito') !== false ? 'success-message' : 'error-message' ?>">
                    <i class="fas <?= strpos($_SESSION['message'], 'éxito') !== false ? 'fa-check-circle' : 'fa-exclamation-circle' ?>"></i>
                    <?= $_SESSION['message'] ?>
                </div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            <form action="index.php?action=login_usuario" method="post" id="loginForm">
                <div class="form-group">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-control" name="email" id="email" placeholder="tucorreo@ejemplo.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" name="password" id="password" placeholder="••••••••" required minlength="6">
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                    <small id="passwordError" class="error-message-inline">La contraseña debe tener al menos 8 caracteres.</small>
                </div>
                <button type="submit" class="btn" id="loginBtn">
                    <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                    <div class="loader" id="loginLoader"></div>
                </button>
            </form>
            <div class="login-footer">
                <p><a href="#" id="recuperarPasswordLink" class="login-link">¿Olvidaste tu contraseña?</a></p>
                <p>¿No tienes una cuenta? <a href="index.php?action=registrar_usuario" class="login-link">Regístrate aquí</a></p>
            </div>
        </div>
    </div>

    <!-- Modal Recuperación de Contraseña -->
    <div id="modalRecuperar" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Recuperar Contraseña</h3>
            <!-- Paso 1: Ingresar correo -->
            <div id="stepCorreo">
                <label for="correo_recuperar" class="form-label">Ingresa tu correo electrónico:</label>
                <input type="email" id="correo_recuperar" class="form-control" placeholder="tucorreo@ejemplo.com" required>
                <button id="btnVerificarCorreo" class="btn" style="margin-top: 15px;">Siguiente</button>
            </div>
            <!-- Paso 2: Mostrar preguntas -->
            <div id="stepPreguntas" style="display:none;">
                <p>Responde tus preguntas de seguridad:</p>
                <input type="hidden" id="id_usuario_recuperar">
                <label id="pregunta1_label"></label>
                <input type="text" id="respuesta1" class="form-control" required>
                <label id="pregunta2_label"></label>
                <input type="text" id="respuesta2" class="form-control" required>
                <button id="btnVerificarRespuestas" class="btn" style="margin-top: 15px;">Verificar</button>
            </div>
            <!-- Paso 3: Cambiar contraseña -->
            <div id="stepCambiarPass" style="display:none;">
                <label for="nueva_contrasena" class="form-label">Escribe tu nueva contraseña:</label>
                <input type="password" id="nueva_contrasena" class="form-control" placeholder="••••••••" required minlength="6">
                <label for="confirmar_contrasena" class="form-label">Confirma tu nueva contraseña:</label>
                <input type="password" id="confirmar_contrasena" class="form-control" placeholder="••••••••" required minlength="6">
                <button id="btnCambiarContrasena" class="btn" style="margin-top: 15px;">Cambiar Contraseña</button>
            </div>
        </div>
    </div>

    <style>
        /* Estilos del modal */
        .modal {
            display: none; /* Oculto por defecto */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);
        }
        .modal-content {
            background-color: var(--bg-overlay);
            margin: 5% auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            width: 90%;
            max-width: 400px;
            position: relative;
            animation: fadeInUp 0.3s ease;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 15px;
        }
        .close:hover,
        .close:focus {
            color: #fff;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <script>
        // Mostrar u ocultar contraseña
        const togglePassword = document.querySelector('#togglePassword'); 
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });

        // Efectos en los inputs
        document.addEventListener('DOMContentLoaded', () => {
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    input.parentNode.querySelector('.input-icon').style.color = 'var(--light-color)';
                    input.parentNode.querySelector('.input-icon').style.transform = 'translateY(-50%) scale(1.1)';
                });
                input.addEventListener('blur', () => {
                    input.parentNode.querySelector('.input-icon').style.color = 'var(--primary-color)';
                    input.parentNode.querySelector('.input-icon').style.transform = 'translateY(-50%) scale(1)';
                });
            });
        });

        // Validación en tiempo real de longitud de contraseña
        document.addEventListener("DOMContentLoaded", function () {
            const passwordInput = document.getElementById('password');
            const loginBtn = document.getElementById('loginBtn');
            const passwordError = document.getElementById('passwordError');

            function validatePassword() {
                const passValue = passwordInput.value.trim();
                if (passValue.length < 8) {
                    loginBtn.disabled = true;
                    loginBtn.classList.add("disabled");
                    passwordError.style.display = "block";
                } else {
                    loginBtn.disabled = false;
                    loginBtn.classList.remove("disabled");
                    passwordError.style.display = "none";
                }
            }

            passwordInput.addEventListener('input', validatePassword);
        });

        // Manejo del formulario de login
        const loginForm = document.getElementById('loginForm');
        const loginBtn = document.getElementById('loginBtn');
        const loginLoader = document.getElementById('loginLoader');
        if (loginForm) {
            loginForm.addEventListener('submit', function(e) {
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (password.length < 8) {
                    e.preventDefault();
                    alert('La contraseña debe tener al menos 8 caracteres');
                    return;
                }
                // Mostrar loader
                loginBtn.disabled = true;
                loginLoader.style.display = 'block';
            });
        }

        // Modal de recuperación de contraseña
        document.addEventListener("DOMContentLoaded", function () {
            const modal = document.getElementById("modalRecuperar");
            const linkRecuperar = document.getElementById("recuperarPasswordLink");
            const closeModal = document.querySelector(".modal .close");

            linkRecuperar.addEventListener("click", function (e) {
                e.preventDefault();
                modal.style.display = "block";
                document.getElementById("stepCorreo").style.display = "block";
                document.getElementById("stepPreguntas").style.display = "none";
                document.getElementById("stepCambiarPass").style.display = "none";
            });

            closeModal.addEventListener("click", function () {
                modal.style.display = "none";
            });

            document.getElementById("btnVerificarCorreo").addEventListener("click", async function () {
                const correo = document.getElementById("correo_recuperar").value;
                const response = await fetch('index.php?action=obtener_preguntas_seguridad', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email: correo })
                });
                const data = await response.json();
                if (data.success) {
                    document.getElementById("id_usuario_recuperar").value = data.usuario_id;
                    document.getElementById("pregunta1_label").textContent = data.pregunta1;
                    document.getElementById("pregunta2_label").textContent = data.pregunta2;
                    document.getElementById("stepCorreo").style.display = "none";
                    document.getElementById("stepPreguntas").style.display = "block";
                } else {
                    alert(data.message || "Correo no encontrado");
                }
            });

            document.getElementById("btnVerificarRespuestas").addEventListener("click", async function () {
                const idUsuario = document.getElementById("id_usuario_recuperar").value;
                const respuesta1 = document.getElementById("respuesta1").value.toLowerCase();
                const respuesta2 = document.getElementById("respuesta2").value.toLowerCase();
                const response = await fetch('index.php?action=verificar_respuestas_seguridad', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id_usuario: idUsuario, respuesta1, respuesta2 })
                });
                const data = await response.json();
                if (data.success) {
                    document.getElementById("stepPreguntas").style.display = "none";
                    document.getElementById("stepCambiarPass").style.display = "block";
                } else {
                    alert("Respuestas incorrectas");
                }
            });

            document.getElementById("btnCambiarContrasena").addEventListener("click", async function () {
                const idUsuario = document.getElementById("id_usuario_recuperar").value;
                const nuevaContrasena = document.getElementById("nueva_contrasena").value;
                const confirmarContrasena = document.getElementById("confirmar_contrasena").value;
                if (nuevaContrasena !== confirmarContrasena) {
                    alert("Las contraseñas no coinciden");
                    return;
                }
                const response = await fetch('index.php?action=cambiar_contrasena', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id_usuario: idUsuario, nueva_contrasena: nuevaContrasena })
                });
                const data = await response.json();
                if (data.success) {
                    alert("Contraseña actualizada exitosamente");
                    modal.style.display = "none";
                } else {
                    alert("Error al actualizar la contraseña");
                }
            });
        });
    </script>
</body>
</html>