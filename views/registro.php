<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogChocoBox - Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <link rel="shortcut icon" href="img/logito.ico" type="image/x-icon">

    <style>
        :root {
            --primary-color: #d4a373;
            --secondary-color: #fefae0;
            --light-color: #ffffff;
            --info-bg: rgba(212, 163, 115, 0.1);
            --info-border: #d4a373;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('img/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: var(--light-color);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .register-card {
            background-color: rgba(0, 0, 0, 0.85);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 500px;
            padding: 30px;
            animation: fadeIn 0.5s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo__bold {
            color: var(--primary-color);
            font-weight: bold;
        }
        .register-subtitle {
            color: var(--secondary-color);
            margin: 5px 0 0;
            font-size: 14px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-row {
            display: flex;
            gap: 15px;
        }
        .form-col {
            flex: 1;
        }
        .form-label {
            display: block;
            margin-bottom: 8px;
            color: var(--primary-color);
            font-weight: 500;
        }
        .input-with-icon {
            position: relative;
        }
        .form-control {
            width: 100%;
            padding: 12px 15px 12px 40px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            background-color: rgba(255, 255, 255, 0.05);
            color: var(--light-color);
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .form-control::placeholder {
            color: var(--primary-color);
            opacity: 1;
        }
        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(212, 163, 115, 0.3);
            background-color: rgba(255, 255, 255, 0.1);
        }
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
        }
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-color);
            cursor: pointer;
        }
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background-color: var(--primary-color);
            color: var(--light-color);
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #c08d5f;
            transform: translateY(-2px);
        }
        .message {
            padding: 10px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: center;
        }
        .error-message {
            background-color: rgba(230, 57, 70, 0.2);
            border-left: 4px solid #e63946;
            color: #e63946;
        }
        .success-message {
            background-color: rgba(56, 176, 0, 0.2);
            border-left: 4px solid #38b000;
            color: #38b000;
        }
        .password-strength {
            height: 5px;
            background-color: #ddd;
            border-radius: 5px;
            margin-top: 5px;
            overflow: hidden;
        }
        .strength-meter {
            height: 100%;
            width: 0;
            transition: width 0.3s ease, background-color 0.3s ease;
        }
        .password-hint {
            color: var(--secondary-color);
            display: block;
            margin-top: 5px;
        }

        /* Nuevo estilo para el mensaje de preguntas de seguridad */
        .security-info {
            background-color: var(--info-bg);
            border-left: 4px solid var(--info-border);
            padding: 15px;
            border-radius: 6px;
            font-size: 14px;
            margin-bottom: 20px;
            color: var(--primary-color);
            line-height: 1.4;
        }

        /* Estilo del enlace final */
        .register-footer {
            margin-top: 25px;
            text-align: center;
            font-size: 14px;
        }
        .register-link {
            display: inline-block;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: color 0.3s ease;
        }
        .register-link i {
            margin-right: 6px;
        }
        .register-link:hover {
            color: var(--light-color);
        }
        .register-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }
        .register-link:hover::after {
            width: 100%;
        }

        @media (max-width: 576px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            .register-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-card">
            <div class="register-header">
                Blog<span class="logo__bold">ChocoBox</span>
                <p class="register-subtitle">Únete a nuestra comunidad</p>
            </div>

            <?php if (isset($_SESSION['errors'])): ?>
                <div class="message error-message">
                    <?php 
                        foreach ($_SESSION['errors'] as $error) {
                            echo "<p>$error</p>";
                        }
                        unset($_SESSION['errors']); 
                    ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['message'])): ?>
                <div class="message success-message">
                    <?= $_SESSION['message']; unset($_SESSION['message']); ?>
                </div>
            <?php endif; ?>

            <form action="index.php?action=registrar_usuario" method="post" id="registerForm">
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Tu nombre" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="apellido" class="form-label">Apellido</label>
                            <div class="input-with-icon">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" id="apellido" class="form-control" name="apellido" placeholder="Tu apellido" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <div class="input-with-icon">
                        <i class="fas fa-calendar-alt input-icon"></i>
                        <input type="date" id="fecha_nacimiento" class="form-control" name="fecha_nacimiento" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" id="email" class="form-control" name="email" placeholder="tucorreo@ejemplo.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" id="password" class="form-control" name="password" placeholder="••••••••" required minlength="8">
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                    <div class="password-strength">
                        <div class="strength-meter" id="strengthMeter"></div>
                    </div>
                    <small class="password-hint">
                        La contraseña debe tener al menos 8 caracteres, una mayúscula, un número y un carácter especial.
                    </small>
                </div>

                <div class="form-group">
                    <label for="confirm_password" class="form-label">Confirmar Contraseña</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="••••••••" required minlength="8">
                        <i class="fas fa-eye password-toggle" id="toggleConfirmPassword"></i>
                    </div>
                </div>

                <!-- Mensaje explicativo sobre preguntas de seguridad -->
                <div class="security-info">
                    <strong>Importante:</strong><br>
                    Las preguntas de seguridad se usarán para ayudarte a recuperar tu cuenta si olvidas tu contraseña. Elige respuestas fáciles de recordar pero difíciles de adivinar.
                </div>

                <!-- PREGUNTAS DE SEGURIDAD - Personalizadas -->
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="pregunta1" class="form-label">Pregunta de Seguridad 1</label>
                            <div class="input-with-icon">
                                <i class="fas fa-question-circle input-icon"></i>
                                <input type="text" id="pregunta1" class="form-control" name="pregunta1" placeholder="Ej: ¿Cuál es tu comida favorita?" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="respuesta1" placeholder="Tu respuesta 1" required>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="pregunta2" class="form-label">Pregunta de Seguridad 2</label>
                            <div class="input-with-icon">
                                <i class="fas fa-question-circle input-icon"></i>
                                <input type="text" id="pregunta2" class="form-control" name="pregunta2" placeholder="Ej: ¿En qué ciudad nació tu abuela?" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="respuesta2" placeholder="Tu respuesta 2" required>
                        </div>
                    </div>
                </div>

                <!-- Botón de registro -->
                <button type="submit" class="btn">
                    <i class="fas fa-user-plus"></i> Registrarse
                </button>
            </form>

            <!-- Enlace a login con diseño mejorado -->
            <div class="register-footer">
                <p>
                    <i class="fas fa-sign-in-alt"></i>
                    <a href="index.php?action=login_usuario" class="register-link">¿Ya tienes una cuenta? Inicia sesión aquí</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Mostrar u ocultar contraseñas
        function toggleVisibility(inputId, buttonId) {
            const input = document.getElementById(inputId);
            const btn = document.getElementById(buttonId);
            btn.addEventListener('click', () => {
                const type = input.type === 'password' ? 'text' : 'password';
                input.type = type;
                btn.classList.toggle('fa-eye-slash');
            });
        }
        toggleVisibility('password', 'togglePassword');
        toggleVisibility('confirm_password', 'toggleConfirmPassword');

        // Validación de fortaleza de contraseña
        const strengthMeter = document.getElementById('strengthMeter');
        const passwordInput = document.getElementById('password');
        passwordInput.addEventListener('input', function () {
            const strength = calculatePasswordStrength(this.value);
            strengthMeter.style.width = strength.percentage + '%';
            strengthMeter.style.backgroundColor = strength.color;
        });

        function calculatePasswordStrength(password) {
            let strength = 0;
            if (password.length >= 8) strength += 20;
            if (/[A-Z]/.test(password)) strength += 20;
            if (/[0-9]/.test(password)) strength += 20;
            if (/[^A-Za-z0-9]/.test(password)) strength += 30;
            let color = '#e63946'; // Débil
            if (strength > 60) color = '#f4a261'; // Media
            if (strength > 80) color = '#2a9d8f'; // Fuerte
            return { percentage: strength, color };
        }

        // Validaciones adicionales antes de enviar formulario
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("registerForm");
            const passwordInput = document.getElementById("password");
            const confirmPasswordInput = document.getElementById("confirm_password");

            // Regex para validar contraseña segura
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>]).{8,}$/;

            function validatePasswords() {
                const password = passwordInput.value;
                const confirm_password = confirmPasswordInput.value;

                if (!passwordRegex.test(password)) {
                    alert("La contraseña debe tener:\n- Mínimo 8 caracteres\n- Al menos una letra mayúscula\n- Una minúscula\n- Un número\n- Un carácter especial (!@#$%^&*(),.?\":{}|<>)");
                    return false;
                }

                if (password !== confirm_password) {
                    alert("Las contraseñas no coinciden.");
                    return false;
                }

                return true;
            }

            form.addEventListener("submit", function (e) {
                if (!validatePasswords()) {
                    e.preventDefault(); // Evita el envío si hay errores
                }
            });

            confirmPasswordInput.addEventListener("input", function () {
                if (passwordInput.value && confirmPasswordInput.value && passwordInput.value !== confirmPasswordInput.value) {
                    confirmPasswordInput.setCustomValidity("Las contraseñas no coinciden.");
                } else {
                    confirmPasswordInput.setCustomValidity("");
                }
            });
        });
    </script>
</body>
</html>