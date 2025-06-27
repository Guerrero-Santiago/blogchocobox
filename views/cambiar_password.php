<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogChocoBox - Cambiar Contraseña</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Usa los mismos estilos que en loginnn.php */
        /* Copia todo el bloque :root y los estilos necesarios */
        /* ... */
    </style>
</head>
<body>
    <div class="navbar">
        <h2 class="logo__nombre">
            Blog<span class="logo__bold">ChocoBox</span>
        </h2>
        
        <div class="auth-buttons">
            <a href="index.php" class="auth-btn home-btn">
                <i class="fas fa-home"></i> Inicio
            </a>
        </div>
    </div>
    
    <div class="container">
        <div class="login-card">
            <div class="login-header">
                <img src="img/logo.jpeg" alt="ChocoBox Logo" class="login-logo">
                <h1 class="login-title">Cambiar Contraseña</h1>
                <p class="login-subtitle">Ingresa tu nueva contraseña</p>
            </div>
            
            <?php if (isset($_SESSION['message'])): ?>
                <div class="message <?php echo strpos($_SESSION['message'], '❌') !== false ? 'error-message' : 'success-message'; ?>">
                    <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
                </div>
            <?php endif; ?>
            
            <form action="index.php?action=cambiar_password" method="post">
                <input type="hidden" name="token" value="<?php echo $_GET['token'] ?? ''; ?>">
                
                <div class="form-group">
                    <label for="current_password" class="form-label">Contraseña Actual</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" name="current_password" id="current_password" placeholder="••••••••" required>
                        <i class="fas fa-eye password-toggle" id="toggleCurrentPassword"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="new_password" class="form-label">Nueva Contraseña</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" name="new_password" id="new_password" placeholder="••••••••" required>
                        <i class="fas fa-eye password-toggle" id="toggleNewPassword"></i>
                    </div>
                    <div class="password-strength">
                        <div class="strength-meter" id="strengthMeter"></div>
                    </div>
                    <small id="strengthText" style="color: var(--secondary-color); display: block; margin-top: 5px;"></small>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password" class="form-label">Confirmar Nueva Contraseña</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="••••••••" required>
                        <i class="fas fa-eye password-toggle" id="toggleConfirmPassword"></i>
                    </div>
                </div>
                
                <button type="submit" class="btn">
                    <i class="fas fa-sync-alt"></i> Cambiar Contraseña
                </button>
            </form>
        </div>
    </div>
    
    <footer>
        <p>Contacto: info@chocobox.com | Tel: 3205968181</p>
        <p>&copy; 2025 Chocobox. Todos los derechos reservados.</p>
    </footer>
    
    <script>
        // Mostrar/ocultar contraseñas
        const toggleCurrentPassword = document.querySelector('#toggleCurrentPassword');
        const currentPassword = document.querySelector('#current_password');
        const toggleNewPassword = document.querySelector('#toggleNewPassword');
        const newPassword = document.querySelector('#new_password');
        const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
        const confirmPassword = document.querySelector('#confirm_password');
        
        toggleCurrentPassword.addEventListener('click', function() {
            const type = currentPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            currentPassword.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
        
        toggleNewPassword.addEventListener('click', function() {
            const type = newPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            newPassword.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
        
        toggleConfirmPassword.addEventListener('click', function() {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
        
        // Validación de fortaleza de contraseña (usa la misma función de registro.php)
        newPassword.addEventListener('input', function() {
            const strengthMeter = document.getElementById('strengthMeter');
            const strength = calculatePasswordStrength(this.value);
            
            strengthMeter.style.width = strength.percentage + '%';
            strengthMeter.style.backgroundColor = strength.color;
        });
        
        // Copia aquí la función calculatePasswordStrength del registro.php
    </script>
</body>
</html>