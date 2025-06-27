<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChocoBox - Recetas y más sobre chocolate</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
            <link rel="shortcut icon" href="../img/logito.ico" type="image/x-icon">

    <style>
    :root {
        --chocolate-dark: #3A2514;
        --chocolate-medium: #6B4423;
        --chocolate-light: #D4A373;
        --cream: #FAEDCD;
        --white: #FFFFFF;
        --black: #2A2A2A;
        --text-light: #5a4a3a;
        --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    body {
        font-family: 'Raleway', sans-serif;
        background-color: var(--cream);
        color: var(--black);
        line-height: 1.8;
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        color: var(--chocolate-dark);
    }

    /* Header */
    .nuevo-header {
        background: url('../img/loco.jpg') no-repeat center center/cover;
        color: #fff;
        min-height: 80vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        position: relative;
        padding: 2rem;
    }

    .nuevo-header::before {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 0;
    }

    .contenido-header {
        position: relative;
        z-index: 1;
        max-width: 900px;
        margin: 0 auto;
    }

    .titulo-principal {
        font-size: 4rem;
        margin-bottom: 1.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        line-height: 1.2;
    }

    .choco {
        color: var(--chocolate-light);
        font-style: italic;
        display: inline-block;
        transform: rotate(-3deg);
    }

    .subtitulo {
        font-size: 1.8rem;
        margin-bottom: 1.5rem;
        font-style: italic;
        letter-spacing: 1px;
        color: var(--white);
    }

    .descripcion {
        font-size: 1.3rem;
        margin-bottom: 3rem;
        color: var(--white);
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.7;
    }

    .botones-header {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1.5rem;
    }

    .botones-header a {
        padding: 14px 28px;
        font-size: 1.1rem;
        background-color: transparent;
        border: 2px solid var(--chocolate-light);
        color: #fff;
        text-decoration: none;
        border-radius: 30px;
        font-weight: 600;
        transition: var(--transition);
        letter-spacing: 0.5px;
    }

    .botones-header a:hover {
        background-color: var(--chocolate-light);
        color: #000;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .cerrar-sesion {
        position: absolute;
        top: 30px;
        right: 40px;
        z-index: 2;
    }

    .cerrar-sesion a {
        padding: 12px 24px;
        font-size: 1.1rem;
        background-color: var(--chocolate-light);
        color: #000;
        font-weight: 600;
        border-radius: 25px;
        text-decoration: none;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .cerrar-sesion a:hover {
        background-color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Secciones */
    .section {
        padding: 5rem 0;
    }

    .section-title {
        font-size: 2.5rem;
        margin-bottom: 3rem;
        position: relative;
        text-align: center;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, var(--chocolate-dark), var(--chocolate-light));
        border-radius: 2px;
    }

    .bg-light {
        background-color: var(--white);
    }

    /* Cards de recetas */
    .card-custom {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: var(--transition);
        height: 100%;
        background-color: var(--white);
    }

    .card-custom:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .card-img-custom {
        height: 220px;
        object-fit: cover;
        border-bottom: 4px solid var(--chocolate-light);
    }

    .card-body-custom {
        padding: 1.5rem;
    }

    .card-title-custom {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--chocolate-dark);
        margin-bottom: 1rem;
    }

    /* Meta info en recetas */
    .recipe-meta {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
        font-size: 0.9rem;
        color: var(--text-light);
    }

    .recipe-meta span {
        display: flex;
        align-items: center;
    }

    .recipe-meta i {
        margin-right: 5px;
        color: var(--chocolate-medium);
    }

    /* Dificultad */
    .difficulty {
        display: flex;
        gap: 3px;
    }

    .difficulty-icon {
        color: var(--chocolate-medium);
    }

    .difficulty-icon-empty {
        color: #ddd;
    }

    /* Botones */
    .btn-custom {
        background-color: var(--chocolate-medium);
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 30px;
        transition: var(--transition);
    }

    .btn-custom:hover {
        background-color: var(--chocolate-dark);
        transform: translateY(-2px);
    }

    /* Tipos de chocolate */
    .chocolate-type {
        background-color: var(--white);
        padding: 2rem;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: var(--transition);
        height: 100%;
    }

    .chocolate-type:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .chocolate-type i {
        font-size: 2.5rem;
        color: var(--chocolate-light);
        margin-bottom: 1.5rem;
    }

    .chocolate-type h4 {
        margin-bottom: 1rem;
        color: var(--chocolate-dark);
    }

    /* Beneficios */
    .benefit-card {
        background-color: var(--white);
        padding: 2rem;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: var(--transition);
        height: 100%;
    }

    .benefit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .benefit-card i {
        font-size: 2.5rem;
        color: var(--chocolate-light);
        margin-bottom: 1.5rem;
    }

    /* Historia */
    /* Historia - Sección mejorada */
    .history-section {
        background: linear-gradient(135deg, var(--chocolate-light) 0%, var(--chocolate-medium) 100%);
        color: var(--cream);
        padding: 6rem 0;
        position: relative;
        overflow: hidden;
    }

    .history-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('') center/cover;
        opacity: 0.1;
        z-index: 0;
    }

    .history-content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .history-container {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 20px;
        padding: 3rem;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .history-title {
        color: var(--chocolate-dark);
        font-size: 2.8rem;
        margin-bottom: 2rem;
        text-align: center;
        position: relative;
    }

    .history-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, var(--chocolate-dark), var(--chocolate-light));
        border-radius: 2px;
    }

    .history-text {
        color: var(--chocolate-dark);
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 2rem;
    }

    .history-timeline {
        position: relative;
        padding-left: 30px;
        margin: 3rem 0;
    }

    .history-timeline::before {
        content: '';
        position: absolute;
        left: 7px;
        top: 0;
        bottom: 0;
        width: 3px;
        background: var(--chocolate-light);
    }

    /* Listas de recetas */
    .recipe-list {
        list-style-type: none;
        padding-left: 0;
    }

    .recipe-list li {
        position: relative;
        padding-left: 1.5rem;
        margin-bottom: 0.75rem;
    }

    .recipe-list li::before {
        content: '•';
        color: var(--chocolate-light);
        font-size: 1.5rem;
        position: absolute;
        left: 0;
        top: -3px;
    }

    .highlight-tip {
        background-color: rgba(212, 163, 115, 0.1);
        border-left: 3px solid var(--chocolate-light);
        padding: 1rem;
        margin-top: 1.5rem;
        border-radius: 0 5px 5px 0;
        font-style: italic;
    }

    /* Footer */
    .footer {
        background-color: var(--chocolate-dark);
        color: #f8f9fa;
        padding: 4rem 0 2rem;
        border-top: 4px solid var(--chocolate-light);
    }
    
    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 30px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
    }
    
    .footer-title {
        color: var(--chocolate-light);
        margin-bottom: 1.8rem;
        position: relative;
    }
    
    .footer-title::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        width: 50px;
        height: 3px;
        background: var(--chocolate-light);
        border-radius: 3px;
    }
    
    .footer-description {
        color: rgba(255, 255, 255, 0.7);
        line-height: 1.8;
        margin-bottom: 1.8rem;
    }
    
    .footer-links {
        padding-left: 0;
    }
    
    .footer-links li {
        margin-bottom: 1rem;
        list-style: none;
    }
    
    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: var(--transition);
        display: inline-block;
    }
    
    .footer-links a:hover {
        color: var(--chocolate-light);
        transform: translateX(5px);
    }
    
    .contact-info {
        padding-left: 0;
    }
    
    .contact-info li {
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 1.2rem;
        display: flex;
        align-items: flex-start;
        line-height: 1.6;
    }
    
    .contact-info i {
        color: var(--chocolate-light);
        margin-right: 12px;
        margin-top: 5px;
    }
    
    .footer-bottom {
        max-width: 1200px;
        margin: 0 auto;
        padding: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .copyright {
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }
    
    .legal-links {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }
    
    .legal-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: color 0.3s;
        font-size: 0.9rem;
    }
    
    .legal-links a:hover {
        color: var(--chocolate-light);
    }
    
    .footer-divider {
        border-top: 1px solid rgba(224, 169, 109, 0.2);
        margin: 2rem 0;
        width: 100%;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .container {
            padding: 0 25px;
        }
    }

    @media (max-width: 992px) {
        .titulo-principal {
            font-size: 3.2rem;
        }
    }

    @media (max-width: 768px) {
        .nuevo-header {
            padding: 100px 20px;
        }

        .titulo-principal {
            font-size: 2.8rem;
        }
        
        .subtitulo {
            font-size: 1.5rem;
        }
        
        .descripcion {
            font-size: 1.1rem;
        }

        .cerrar-sesion {
            top: 20px;
            right: 20px;
        }

        .cerrar-sesion a {
            padding: 10px 18px;
            font-size: 1rem;
        }

        .section {
            padding: 3rem 0;
        }

        .section-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 576px) {
        .nuevo-header {
            padding: 80px 15px;
        }

        .titulo-principal {
            font-size: 2.2rem;
        }
        
        .subtitulo {
            font-size: 1.2rem;
        }
        
        .botones-header a {
            padding: 12px 20px;
            font-size: 1rem;
        }

        .section-title {
            font-size: 1.8rem;
        }
    }

/* Botón principal */
.btn-opciones {
    background-color: var(--gold);
    color: #000;
    font-weight: 600;
    padding: 12px 24px;
    font-size: 1rem;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    position: relative;
    transition: all 0.3s ease;
}

.btn-opciones:hover {
    background-color: #fff;
    color: #000;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.btn-opciones .icono-desplegar {
    font-size: 0.9rem;
    transition: transform 0.3s ease;
}

.btn-opciones:hover .icono-desplegar {
    transform: rotate(180deg);
}

/* Menú desplegable */
.dropdown-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 50px;
    background-color: #2a2118; /* Color oscuro como fondo del dropdown */
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    z-index: 1000;
    min-width: 180px;
    overflow: hidden;
    animation: fadeInDown 0.3s ease forwards;
}

/* Enlaces dentro del dropdown */
.dropdown-menu a {
    display: block;
    padding: 12px 20px;
    color: var(--gold); /* Color del texto */
    text-decoration: none;
    font-weight: 500;
    font-size: 1rem;
    transition: background-color 0.3s ease, color 0.3s ease;
    background-color: #2a2118; /* Fondo igual al menú */
}

/* Hover en los enlaces */
.dropdown-menu a:hover {
    background-color: #44372c; /* Color más claro al pasar el mouse */
    color: #fff;
}
    </style>
</head>
<body>
    <header class="nuevo-header">
    <!-- Botón desplegable de Opciones -->
    <div class="cerrar-sesion">
        <button id="opcionesBtn" class="btn-opciones">
            <i class="fas fa-cog"></i> Opciones <i class="fas fa-chevron-down icono-desplegar"></i>
        </button>
        <div id="dropdownMenu" class="dropdown-menu">
            <a href="../index.php?action=Home_usuario"><i class="fas fa-user"></i> Perfil</a>
            <a href="../index.php?action=logout"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
    </div>

    <!-- Contenido del header -->
    <div class="contenido-header">
        <h1 class="titulo-principal">Blog<span class="choco">ChocoBox</span></h1>
        <h2 class="subtitulo">Blog: Noticias, Recetas e Información</h2>
        <p class="descripcion">A COCINAR</p>
        <div class="botones-header">
                        <a href="usuario.php">Inicio</a>

            <a href="nosotros.php">Nosotros</a>
            <a href="../index.php?action=publicaciones">Anuncios</a>
        </div>
    </div>
</header>


          

<section id="recetas" class="section bg-light">
    <div class="container">
<h2 class="section-title" style="font-weight: bold; color: #3B2F2F;">Recetas con Chocolate</h2>        <div class="row g-4">
            <!-- Receta 1 - Malteada -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <img src="../img/receta8.jpeg" class="card-img-top card-img-custom" alt="Malteada">
                    <div class="card-body card-body-custom">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-info text-dark">Bebidas</span>
                            <div class="recipe-meta">
                                <span><i class="fas fa-clock"></i> 15 min</span>
                            </div>
                        </div>
                        <h3 class="card-title card-title-custom">Malteada de Chocolate</h3>
                        <p class="card-text">Una refrescante malteada cremosa con sabor intenso a chocolate.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="difficulty">
<p><span style="font-weight: bold; color: #654321;">Dificultad:</span> basica</p>                            </div>
                            <button class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target="#recipeModal1">Ver Receta</button> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Receta 2 - Helado -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <img src="../img/receta6.jpeg" class="card-img-top card-img-custom" alt="Helado">
                    <div class="card-body card-body-custom">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary text-white">Postres frios</span>
                            <div class="recipe-meta">
                                <span><i class="fas fa-clock"></i> 4 h</span>
                            </div>
                        </div>
                        <h3 class="card-title card-title-custom">Helado de Chocolate</h3>
                        <p class="card-text">Helado casero con sabor intenso a cacao y una textura suave y cremosa.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="difficulty">
                                <p><span style="font-weight: bold; color: #654321;">Dificultad:</span> Basica</p> 
                            </div>
                            <button class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target="#recipeModal2">Ver Receta</button> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Receta 3 - Brownie -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <img src="../img/receta1.jpeg" class="card-img-top card-img-custom" alt="Brownies">
                    <div class="card-body card-body-custom">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-danger text-white">Postres calientes</span>
                            <div class="recipe-meta">
                                <span><i class="fas fa-clock"></i> 35 min</span>
                            </div>
                        </div>
                        <h3 class="card-title card-title-custom">Brownies de Chocolate</h3>
                        <p class="card-text">Brownies caseros con textura perfecta: crujientes por fuera y suaves por dentro.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="difficulty">
                                <p><span style="font-weight: bold; color: #654321;">Dificultad:</span> Basica</p> 
                            </div>
                            <button class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target="#recipeModal3">Ver Receta</button> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Receta 4 - Champurrado -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <img src="../img/champu.jpg" class="card-img-top card-img-custom" alt="Champurrado">
                    <div class="card-body card-body-custom">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-info text-dark">Bebidas</span>
                            <div class="recipe-meta">
                                <span><i class="fas fa-clock"></i> 20 min</span>
                            </div>
                        </div>
                        <h3 class="card-title card-title-custom">Champurrado</h3>
                        <p class="card-text">Bebida tradicional mexicana espesa y reconfortante con chocolate y maíz.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="difficulty">
                               <p><span style="font-weight: bold; color: #654321;">Dificultad:</span> Moderada</p> 
                            </div>
                            <button class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target="#recipeModal4">Ver Receta</button> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Receta 5 - Cupcakes -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <img src="../img/receta4.jpeg" class="card-img-top card-img-custom" alt="Cupcakes">
                    <div class="card-body card-body-custom">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary text-whote">Postres frios</span>
                            <div class="recipe-meta">
                                <span><i class="fas fa-clock"></i> 45 min</span>
                            </div>
                        </div>
                        <h3 class="card-title card-title-custom">Cupcakes de Chocolate</h3>
                        <p class="card-text">Mini pasteles de chocolate decorados con frosting cremoso.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="difficulty">
                                <p><span style="font-weight: bold; color: #654321;">Dificultad:</span> Moderada</p>
                            </div>
                            <button class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target="#recipeModal5">Ver Receta</button> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Receta 6 - Donas -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <img src="../img/receta3.jpeg" class="card-img-top card-img-custom" alt="Donas">
                    <div class="card-body card-body-custom">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-danger text-white">Postres Calientes</span>
                            <div class="recipe-meta">
                                <span><i class="fas fa-clock"></i> 1 h</span>
                            </div>
                        </div>
                        <h3 class="card-title card-title-custom">Donas de Chocolate</h3>
                        <p class="card-text">Donas esponjosas cubiertas con glaseado de chocolate.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="difficulty">
                                <p><span style="font-weight: bold; color: #654321;">Dificultad:</span> Moderada</p>
                            </div>
                            <button class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target="#recipeModal6">Ver Receta</button> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Receta 7 - Cóctel -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <img src="../img/receta9.jpeg" class="card-img-top card-img-custom" alt="Cóctel">
                    <div class="card-body card-body-custom">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-info text-dark">Bebidas</span>
                            <div class="recipe-meta">
                                <span><i class="fas fa-clock"></i> 10 min</span>
                            </div>
                        </div>
                        <h3 class="card-title card-title-custom">Cóctel de Chocolate</h3>
                        <p class="card-text">Un cóctel dulce y elegante ideal para ocasiones especiales.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="difficulty">
                                <p><span style="font-weight: bold; color: #654321;">Dificultad:</span> Alta</p>
                            </div>
                            <button class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target="#recipeModal7">Ver Receta</button> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Receta 8 - Flan -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <img src="../img/receta5.jpeg" class="card-img-top card-img-custom" alt="Flan">
                    <div class="card-body card-body-custom">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary text-white">Postres frios</span>
                            <div class="recipe-meta">
                                <span><i class="fas fa-clock"></i> 1 h + reposo</span>
                            </div>
                        </div>
                        <h3 class="card-title card-title-custom">Flan de Chocolate</h3>
                        <p class="card-text">Un flan suave y cremoso con sabor a chocolate y caramelo.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="difficulty">
<p><span style="font-weight: bold; color: #654321;">Dificultad:</span> Alta</p>
                            </div>
                            <button class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target="#recipeModal8">Ver Receta</button> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Receta 9 - Pastel -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom">
                    <img src="../img/torta.jpg" class="card-img-top card-img-custom" alt="Pastel">
                    <div class="card-body card-body-custom">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-danger text-white">Postres calientes</span>
                            <div class="recipe-meta">
                                <span><i class="fas fa-clock"></i> 1 h</span>
                            </div>
                        </div>
                        <h3 class="card-title card-title-custom">Pastel de Chocolate</h3>
                        <p class="card-text">Un pastel de chocolate húmedo y rico, ideal para celebraciones.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="difficulty">
                                <p><span style="font-weight: bold; color: #654321;">Dificultad:</span> Alta</p>
                            </div>
                            <button class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target="#recipeModal9">Ver Receta</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modales de Recetas -->

<!-- Modal 1 - Malteada -->
<div class="modal fade" id="recipeModal1" tabindex="-1" aria-labelledby="recipeModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel1">Malteada de Chocolate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../img/receta8.jpeg" class="img-fluid rounded mb-3" alt="Malteada">
                    </div>
                    <div class="col-md-6">
                        <div class="recipe-meta mb-3">
                            <span><i class="fas fa-clock"></i> 15 min</span>
                            <span><i class="fas fa-utensils"></i> 2 porciones</span>
                        </div>
                        <h6>Ingredientes:</h6>
                        <ul class="recipe-list">
                            <li>2 bolas de helado de chocolate</li>
                            <li>1 taza de leche fría</li>
                            <li>2 cucharadas de jarabe de chocolate</li>
                            <li>Hielo al gusto</li>
                            <li>Crema batida (opcional)</li>
                            <li>Chispas de chocolate (opcional)</li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-4">Preparación:</h6>
                <ol class="recipe-list">
                    <li>Coloca en la licuadora las bolas de helado, la leche y el jarabe de chocolate.</li>
                    <li>Agrega el hielo hasta llenar tres cuartos de la licuadora.</li>
                    <li>Licúa hasta que esté completamente mezclado y tenga una textura cremosa.</li>
                    <li>Sirve en vasos altos y agrega crema batida y chispas de chocolate si lo deseas.</li>
                </ol>
                <div class="highlight-tip">
                    <strong>Consejo del chef:</strong> Usa helado de buena calidad para obtener una malteada más cremosa y con mejor sabor.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 - Helado -->
<div class="modal fade" id="recipeModal2" tabindex="-1" aria-labelledby="recipeModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel2">Helado de Chocolate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../img/receta6.jpeg" class="img-fluid rounded mb-3" alt="Helado">
                    </div>
                    <div class="col-md-6">
                        <div class="recipe-meta mb-3">
                            <span><i class="fas fa-clock"></i> 4 h</span>
                            <span><i class="fas fa-utensils"></i> 6 porciones</span>
                        </div>
                        <h6>Ingredientes:</h6>
                        <ul class="recipe-list">
                            <li>2 tazas de crema para batir</li>
                            <li>1 taza de leche entera</li>
                            <li>1/2 taza de cacao en polvo sin azúcar</li>
                            <li>1/4 taza de azúcar</li>
                            <li>1 cucharadita de vainilla</li>
                            <li>Pizca de sal</li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-4">Preparación:</h6>
                <ol class="recipe-list">
                    <li>Bate la crema hasta punto de chantilly firme.</li>
                    <li>En otro recipiente, mezcla la leche, el cacao, el azúcar, la vainilla y la sal hasta disolver bien.</li>
                    <li>Incorpora la crema batida a la mezcla de cacao con movimientos envolventes.</li>
                    <li>Vierte en un recipiente apto para congelador y congela durante 4 horas o hasta que esté firme.</li>
                </ol>
                <div class="highlight-tip">
                    <strong>Consejo del chef:</strong> Agrega trozos de chocolate picado antes de congelar para darle una textura crujiente.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 - Brownie -->
<div class="modal fade" id="recipeModal3" tabindex="-1" aria-labelledby="recipeModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel3">Brownies de Chocolate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../img/receta1.jpeg" class="img-fluid rounded mb-3" alt="Brownies">
                    </div>
                    <div class="col-md-6">
                        <div class="recipe-meta mb-3">
                            <span><i class="fas fa-clock"></i> 35 min</span>
                            <span><i class="fas fa-utensils"></i> 12 porciones</span>
                        </div>
                        <h6>Ingredientes:</h6>
                        <ul class="recipe-list">
                            <li>200g de chocolate negro</li>
                            <li>150g de mantequilla</li>
                            <li>200g de azúcar</li>
                            <li>3 huevos</li>
                            <li>100g de harina</li>
                            <li>50g de nueces picadas (opcional)</li>
                            <li>1 pizca de sal</li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-4">Preparación:</h6>
                <ol class="recipe-list">
                    <li>Precalienta el horno a 180°C (350°F) y forra un molde cuadrado con papel pergamino.</li>
                    <li>Derrite el chocolate con la mantequilla a baño María o en microondas, removiendo hasta que esté suave.</li>
                    <li>En otro bowl, bate los huevos con el azúcar hasta que estén espumosos.</li>
                    <li>Incorpora la mezcla de chocolate derretido a los huevos, mezclando bien.</li>
                    <li>Añade la harina y la sal, mezclando solo hasta integrar. Agrega las nueces si las usas.</li>
                    <li>Vierte en el molde preparado y hornea por 25-30 minutos.</li>
                    <li>Deja enfriar antes de cortar en cuadrados.</li>
                </ol>
                <div class="highlight-tip">
                    <strong>Consejo del chef:</strong> Para brownies más densos, hornea menos tiempo. Para más esponjosos, bate más los huevos con el azúcar y hornea un poco más.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 - Champurrado -->
<div class="modal fade" id="recipeModal4" tabindex="-1" aria-labelledby="recipeModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel4">Champurrado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../img/champu.jpg" class="img-fluid rounded mb-3" alt="Champurrado">
                    </div>
                    <div class="col-md-6">
                        <div class="recipe-meta mb-3">
                            <span><i class="fas fa-clock"></i> 20 min</span>
                            <span><i class="fas fa-utensils"></i> 4 porciones</span>
                        </div>
                        <h6>Ingredientes:</h6>
                        <ul class="recipe-list">
                            <li>4 tabletas de chocolate Ibarra o similar</li>
                            <li>6 tazas de agua</li>
                            <li>1/4 taza de arroz cocido (opcional)</li>
                            <li>1 rama de canela</li>
                            <li>1 pizca de clavo molido</li>
                            <li>Azúcar al gusto</li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-4">Preparación:</h6>
                <ol class="recipe-list">
                    <li>En una olla grande, calienta el agua con la canela y el clavo.</li>
                    <li>Agarra dos tabletas de chocolate y móllalas con agua fría para hacer una pasta.</li>
                    <li>Vierte esta pasta en el agua caliente y agrega las tabletas restantes, molidas previamente.</li>
                    <li>Deja hervir a fuego bajo, revolviendo constantemente hasta que espese.</li>
                    <li>Agrega el arroz cocido y el azúcar al gusto. Mezcla bien y sirve caliente.</li>
                </ol>
                <div class="highlight-tip">
                    <strong>Consejo del chef:</strong> Sirve tu champurrado en jícaras tradicionales para una experiencia auténtica.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5 - Cupcakes -->
<div class="modal fade" id="recipeModal5" tabindex="-1" aria-labelledby="recipeModalLabel5" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel5">Cupcakes de Chocolate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../img/receta6.jpeg" class="img-fluid rounded mb-3" alt="Cupcakes">
                    </div>
                    <div class="col-md-6">
                        <div class="recipe-meta mb-3">
                            <span><i class="fas fa-clock"></i> 45 min</span>
                            <span><i class="fas fa-utensils"></i> 12 cupcakes</span>
                        </div>
                        <h6>Ingredientes:</h6>
                        <ul class="recipe-list">
                            <li>1 1/2 tazas de harina</li>
                            <li>3/4 taza de cacao en polvo</li>
                            <li>1 1/2 tazas de azúcar</li>
                            <li>1 1/2 cucharaditas de levadura química</li>
                            <li>1 1/2 cucharaditas de bicarbonato de sodio</li>
                            <li>1 huevo</li>
                            <li>2/3 taza de aceite vegetal</li>
                            <li>2/3 taza de leche</li>
                            <li>1 cucharadita de vainilla</li>
                            <li>1/2 taza de agua caliente</li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-4">Preparación:</h6>
                <ol class="recipe-list">
                    <li>Precalienta el horno a 175°C (350°F) e inserta cápsulas de papel en una charola para cupcakes.</li>
                    <li>En un bol, mezcla la harina, el cacao, el azúcar, la levadura y el bicarbonato.</li>
                    <li>Agrega el huevo, el aceite, la leche y la vainilla. Mezcla hasta combinar.</li>
                    <li>Añade el agua caliente y mezcla hasta obtener una masa homogénea.</li>
                    <li>Llena cada cápsula hasta 2/3 partes y hornea por 18-20 minutos.</li>
                    <li>Deja enfriar y decora con frosting de chocolate.</li>
                </ol>
                <div class="highlight-tip">
                    <strong>Consejo del chef:</strong> Decora tus cupcakes con virutas de chocolate, sprinkles o flores comestibles para una presentación profesional.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 6 - Donas -->
<div class="modal fade" id="recipeModal6" tabindex="-1" aria-labelledby="recipeModalLabel6" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel6">Donas de Chocolate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../img/receta3.jpeg" class="img-fluid rounded mb-3" alt="Donas">
                    </div>
                    <div class="col-md-6">
                        <div class="recipe-meta mb-3">
                            <span><i class="fas fa-clock"></i> 1 h</span>
                            <span><i class="fas fa-utensils"></i> 12 donas</span>
                        </div>
                        <h6>Ingredientes:</h6>
                        <ul class="recipe-list">
                            <li>2 tazas de harina</li>
                            <li>1/2 taza de cacao en polvo</li>
                            <li>1/2 taza de azúcar</li>
                            <li>1 huevo</li>
                            <li>1/2 taza de leche</li>
                            <li>1/3 taza de aceite</li>
                            <li>1 cucharadita de vainilla</li>
                            <li>1 cucharadita de levadura en polvo</li>
                            <li>1/2 cucharadita de bicarbonato de sodio</li>
                            <li>1/4 cucharadita de sal</li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-4">Preparación:</h6>
                <ol class="recipe-list">
                    <li>Mezcla todos los ingredientes secos en un recipiente grande.</li>
                    <li>Agrega los ingredientes húmedos y mezcla hasta obtener una masa suave pero no pegajosa.</li>
                    <li>Estira la masa y corta con un molde redondo para donas.</li>
                    <li>Fríe en aceite caliente hasta dorar ambos lados.</li>
                    <li>Glasea con chocolate derretido y deja enfriar.</li>
                </ol>
                <div class="highlight-tip">
                    <strong>Consejo del chef:</strong> Si prefieres donas horneadas, hornea a 180°C durante 15 minutos y luego glasea.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 7 - Cóctel -->
<div class="modal fade" id="recipeModal7" tabindex="-1" aria-labelledby="recipeModalLabel7" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel7">Cóctel de Chocolate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../img/receta9.jpeg" class="img-fluid rounded mb-3" alt="Cóctel">
                    </div>
                    <div class="col-md-6">
                        <div class="recipe-meta mb-3">
                            <span><i class="fas fa-clock"></i> 10 min</span>
                            <span><i class="fas fa-utensils"></i> 2 porciones</span>
                        </div>
                        <h6>Ingredientes:</h6>
                        <ul class="recipe-list">
                            <li>45 ml de vodka de chocolate</li>
                            <li>30 ml de crema de cacao blanca</li>
                            <li>15 ml de licor de café</li>
                            <li>10 ml de sirope de chocolate</li>
                            <li>Cubos de hielo</li>
                            <li>Chocolate rallado (para decorar)</li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-4">Preparación:</h6>
                <ol class="recipe-list">
                    <li>En una coctelera, mezcla todos los ingredientes con hielo.</li>
                    <li>Agita vigorosamente durante unos segundos.</li>
                    <li>Cuela directamente en copas para cóctel previamente enfriadas.</li>
                    <li>Decora con chocolate rallado y sirve inmediatamente.</li>
                </ol>
                <div class="highlight-tip">
                    <strong>Consejo del chef:</strong> Sirve este cóctel en copas martini frías para mantener su temperatura y sabor óptimos.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 8 - Flan -->
<div class="modal fade" id="recipeModal8" tabindex="-1" aria-labelledby="recipeModalLabel8" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel8">Flan de Chocolate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../img/receta5.jpeg" class="img-fluid rounded mb-3" alt="Flan">
                    </div>
                    <div class="col-md-6">
                        <div class="recipe-meta mb-3">
                            <span><i class="fas fa-clock"></i> 1 h + reposo</span>
                            <span><i class="fas fa-utensils"></i> 8 porciones</span>
                        </div>
                        <h6>Ingredientes:</h6>
                        <ul class="recipe-list">
                            <li>1 lata de leche condensada</li>
                            <li>2 huevos</li>
                            <li>200 ml de leche evaporada</li>
                            <li>1/4 taza de cacao en polvo</li>
                            <li>1/2 taza de azúcar para el caramelo</li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-4">Preparación:</h6>
                <ol class="recipe-list">
                    <li>Calienta el azúcar en una olla hasta obtener un caramelo dorado.</li>
                    <li>Vierte el caramelo en un molde para flan y reserva.</li>
                    <li>En una licuadora, procesa la leche condensada, los huevos, la leche evaporada y el cacao hasta que esté suave.</li>
                    <li>Vierta la mezcla en el molde con el caramelo.</li>
                    <li>Cocina al baño maría en el horno precalentado a 170°C durante 45 minutos.</li>
                    <li>Refrigera durante al menos 4 horas antes de desmoldar.</li>
                </ol>
                <div class="highlight-tip">
                    <strong>Consejo del chef:</strong> Cubre con plástico transparente y refrigera toda la noche para un resultado aún más cremoso.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 9 - Pastel -->
<div class="modal fade" id="recipeModal9" tabindex="-1" aria-labelledby="recipeModalLabel9" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModalLabel9">Pastel de Chocolate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../img/torta.jpg" class="img-fluid rounded mb-3" alt="Pastel">
                    </div>
                    <div class="col-md-6">
                        <div class="recipe-meta mb-3">
                            <span><i class="fas fa-clock"></i> 1 h</span>
                            <span><i class="fas fa-utensils"></i> 8 porciones</span>
                            <span><i class="fas fa-candy-cane"></i> Alta</span>
                        </div>
                        <h6>Ingredientes:</h6>
                        <ul class="recipe-list">
                            <li>2 tazas de harina</li>
                            <li>1 3/4 tazas de azúcar</li>
                            <li>3/4 taza de cacao en polvo</li>
                            <li>1 1/2 cucharaditas de bicarbonato de sodio</li>
                            <li>1 1/2 cucharaditas de levadura en polvo</li>
                            <li>1 huevo</li>
                            <li>1 taza de leche</li>
                            <li>1/2 taza de aceite vegetal</li>
                            <li>2 huevos</li>
                            <li>1 cucharadita de vainilla</li>
                            <li>1/2 taza de agua caliente</li>
                        </ul>
                    </div>
                </div>
                <h6 class="mt-4">Preparación:</h6>
                <ol class="recipe-list">
                    <li>Precalienta el horno a 180°C y engrasa un molde redondo.</li>
                    <li>Mezcla los ingredientes secos en un recipiente grande.</li>
                    <li>Agrega los ingredientes húmedos y mezcla hasta obtener una masa suave.</li>
                    <li>Vierte la masa en el molde y hornea durante 30-35 minutos.</li>
                    <li>Deja enfriar y decora con ganache de chocolate.</li>
                </ol>
                <div class="highlight-tip">
                    <strong>Consejo del chef:</strong> Corta el pastel horizontalmente y rellena con crema de chocolate para una versión aún más especial.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-about">
                <h3 class="footer-title">Sobre ChocoBox</h3>
                <p class="footer-description">ChocoBox es tu fuente confiable de información, recetas y noticias sobre el fascinante mundo del chocolate. Compartimos nuestra pasión por este delicioso ingrediente desde 2010.</p>
            </div>
            
            <div class="footer-links">
                <h3 class="footer-title">Enlaces Rápidos</h3>
                <ul class="footer-links">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="Recetas.php">Recetas</a></li>
                    <li><a href="../index.php?action=publicaciones">Publicaciones</a></li>
                    <li><a href="../index.php?action=Home_usuario">Tu perfil</a></li>
                </ul>
            </div>
            
            <div class="footer-contact">
                <h3 class="footer-title">Contacto</h3>
                <ul class="contact-info">
                    <li><i class="fas fa-envelope"></i> info@chocobox.com</li>
                </ul>
            </div>
        </div>
        
        <div class="footer-divider"></div>
        
        <div class="footer-bottom">
            <p class="copyright">© 2023 ChocoBox. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>  
  
    <script>
    // Script para activar el menú desplegable del botón "Opciones"
    document.addEventListener('DOMContentLoaded', function () {
        const opcionesBtn = document.getElementById('opcionesBtn');
        const dropdownMenu = document.getElementById('dropdownMenu');

        if (opcionesBtn && dropdownMenu) {
            // Alternar menú al hacer clic en el botón
            opcionesBtn.addEventListener('click', function () {
                const isVisible = dropdownMenu.style.display === 'block';
                dropdownMenu.style.display = isVisible ? 'none' : 'block';
            });

            // Cerrar menú si se hace clic fuera de él
            window.addEventListener('click', function (e) {
                if (!opcionesBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownMenu.style.display = 'none';
                }
            });
        } else {
            console.warn("Botón o menú desplegable no encontrado.");
        }
    });
</script>
</body>
</html>