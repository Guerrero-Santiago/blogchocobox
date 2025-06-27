<!DOCTYPE html>
<!-- quiero que coja el header de aqui de este archivo usuario.php con todo y diseño imagenes colores tiene que ser igual para el archivo de  articulos.php al igual que el footer tiene que ser igual todo el diseño -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogChocoBox</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logito.ico" type="image/x-icon">

    <style>
        :root {
            --chocolate: #6B4423;
            --gold: #D4A373;
            --cream: #FAEDCD;
            --light-gray: #f8f5f2;
            --dark-gray: #2a2118;
            --text-gray: #5a4a3a;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Raleway', sans-serif;
            background-color: var(--light-gray);
            color: var(--text-gray);
            line-height: 1.8;
            font-weight: 400;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            color: #f8f9fa;
            letter-spacing: 0.5px;
            margin-bottom: 1.2rem;
        }

        /* Header mejorado pero conservando estructura */
        .nuevo-header {
            background: url('../img/baner.jpg') no-repeat center center/cover;
            color: #fff;
            padding: 120px 20px;
            text-align: center;
            position: relative;
            margin-bottom: 60px;
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
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
        }

        .choco {
            color: var(--gold);
            font-style: italic;
            display: inline-block;
            transform: rotate(-2deg);
        }

        .subtitulo {
            font-size: 1.8rem;
            font-weight: 300;
            margin-bottom: 20px;
            font-style: italic;
            letter-spacing: 1px;
        }

        .descripcion {
            font-size: 1.3rem;
            margin-bottom: 40px;
            color: rgba(255, 255, 255, 0.85);
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .botones-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .botones-header a {
            padding: 14px 28px;
            font-size: 1.1rem;
            background-color: transparent;
            border: 2px solid var(--gold);
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: var(--transition);
            letter-spacing: 0.5px;
        }

        .botones-header a:hover {
            background-color: var(--gold);
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
            background-color: var(--gold);
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

        /* Contenedor principal mejorado */
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
        }

        .blog-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 50px;
            margin-bottom: 80px;
        }

        /* Artículos mejorados */
        .article-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 50px;
            transition: var(--transition);
            border: none;
        }

        .article-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .article-image-container {
            width: 100%;
            height: 450px;
            overflow: hidden;
        }

        .article-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .article-card:hover .article-image {
            transform: scale(1.05);
        }

        .article-video {
            width: 100%;
            height: 450px;
            object-fit: cover;
            background-color: #000;
        }

        .article-content {
            padding: 30px;
        }

        .article-title {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--dark-gray);
            line-height: 1.3;
        }

        .article-excerpt {
            color: var(--text-gray);
            margin-bottom: 25px;
            font-size: 1.15rem;
            line-height: 1.8;
        }

        .article-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--text-gray);
            font-size: 0.95rem;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
            padding-top: 20px;
            margin-top: 20px;
        }

        .read-more {
            color: var(--gold);
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: var(--transition);
            font-size: 1rem;
        }

        .read-more i {
            margin-left: 8px;
            transition: var(--transition);
        }

        .read-more:hover {
            color: var(--chocolate);
        }

        .read-more:hover i {
            transform: translateX(5px);
        }

        /* Sidebar mejorado */
        .sidebar {
            position: sticky;
            top: 30px;
            height: fit-content;
        }

        .sidebar-widget {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            border: none;
        }

        .widget-title {
            color: var(--dark-gray);
            margin-bottom: 25px;
            font-size: 1.6rem;
            position: relative;
            padding-bottom: 12px;
        }

        .widget-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--gold);
            border-radius: 3px;
        }

        .suggested-posts {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .suggested-post {
            display: flex;
            gap: 18px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            transition: var(--transition);
        }

        .suggested-post:hover {
            transform: translateX(8px);
        }

        .suggested-post:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .suggested-post-img {
            width: 110px;
            height: 110px;
            object-fit: cover;
            border-radius: 8px;
            transition: var(--transition);
            flex-shrink: 0;
        }

        .suggested-post:hover .suggested-post-img {
            transform: scale(1.08);
        }

        .suggested-post-content h4 {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: var(--dark-gray);
            transition: var(--transition);
            line-height: 1.4;
        }

        .suggested-post:hover h4 {
            color: var(--gold);
        }

        .suggested-post-content p {
            font-size: 0.95rem;
            color: var(--text-gray);
            line-height: 1.6;
        }

        .btn-ver-mas {
            display: inline-block;
            padding: 12px 24px;
            background: var(--gold);
            color: #000;
            font-weight: 600;
            text-decoration: none;
            border-radius: 30px;
            transition: var(--transition);
            margin-top: 20px;
            font-size: 1rem;
            text-align: center;
            width: 100%;
            border: none;
            letter-spacing: 0.5px;
        }

        .btn-ver-mas:hover {
            background: var(--chocolate);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Banner separador mejorado */
        .banner-separator {
            height: 350px;
            background: url('../img/bg.jpg') center/cover fixed;
            position: relative;
            margin: 80px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            border-radius: 12px;
            overflow: hidden;
        }

        .banner-separator::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .banner-content h2 {
            font-size: 3rem;
            margin-bottom: 25px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 1;
            line-height: 1.3;
        }

        /* Carrusel mejorado */
        .carousel-choco {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .carousel-item img, .carousel-item video {
            max-height: 550px;
            width: auto;
            margin: 0 auto;
            display: block;
            object-fit: contain;
            background-color: #000;
        }

        .carousel-control-prev, .carousel-control-next {
            width: 5%;
            opacity: 0.8;
            transition: var(--transition);
        }

        .carousel-control-prev:hover, 
        .carousel-control-next:hover {
            opacity: 1;
        }

        .carousel-control-prev-icon, 
        .carousel-control-next-icon {
            background-color: rgba(212, 163, 115, 0.9);
            border-radius: 50%;
            width: 45px;
            height: 45px;
            background-size: 50%;
        }

        /* Footer mejorado */
        .footer {
            background-color: #2a1a0f;
            color: #f8f9fa;
            padding: 4rem 0 2rem;
            border-top: 4px solid var(--gold);
            font-family: 'Raleway', sans-serif;
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
            color: var(--gold);
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            margin-bottom: 1.8rem;
            position: relative;
            font-size: 1.6rem;
        }
        
        .footer-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 3px;
            background: var(--gold);
            border-radius: 3px;
        }
        
        .footer-description {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.8;
            margin-bottom: 1.8rem;
            font-size: 1rem;
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
            font-size: 1rem;
        }
        
        .footer-links a:hover {
            color: var(--gold);
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
            font-size: 1rem;
        }
        
        .contact-info i {
            color: var(--gold);
            margin-right: 12px;
            margin-top: 5px;
            font-size: 1.1rem;
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
            color: var(--gold);
        }
        
        .footer-divider {
            border-top: 1px solid rgba(224, 169, 109, 0.2);
            margin: 2rem 0;
            width: 100%;
        }

        /* Efectos y animaciones */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .article-card, .sidebar-widget {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .article-card:nth-child(1) { animation-delay: 0.1s; }
        .article-card:nth-child(2) { animation-delay: 0.2s; }
        .article-card:nth-child(3) { animation-delay: 0.3s; }
        .sidebar-widget:nth-child(1) { animation-delay: 0.15s; }
        .sidebar-widget:nth-child(2) { animation-delay: 0.25s; }

        /* Responsive */
        @media (max-width: 1200px) {
            .main-container {
                padding: 0 25px;
            }
        }

        @media (max-width: 992px) {
            .blog-layout {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .sidebar {
                position: static;
                margin-top: 40px;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
            
            .sidebar-widget {
                margin-bottom: 0;
            }
            
            .article-image-container, .article-video {
                height: 400px;
            }

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
            
            .article-image-container, .article-video {
                height: 350px;
            }
            
            .banner-separator {
                height: 280px;
                margin: 60px 0;
            }
            
            .banner-content h2 {
                font-size: 2.2rem;
            }

            .sidebar {
                grid-template-columns: 1fr;
            }

            .cerrar-sesion {
                top: 20px;
                right: 20px;
            }

            .cerrar-sesion a {
                padding: 10px 18px;
                font-size: 1rem;
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
            
            .article-image-container, .article-video {
                height: 280px;
            }
            
            .article-content {
                padding: 20px;
            }
            
            .article-title {
                font-size: 1.6rem;
            }
            
            .botones-header a {
                padding: 12px 20px;
                font-size: 1rem;
            }

            .banner-content h2 {
                font-size: 1.8rem;
            }

            .widget-title {
                font-size: 1.4rem;
            }

            .suggested-post {
                flex-direction: column;
            }

            .suggested-post-img {
                width: 100%;
                height: 150px;
            }
        }
        
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
    background-color: rgba(0, 0, 0, 0.8); /* Fondo oscuro semi-transparente */
}

.modal-content {
    background-color: rgba(0, 0, 0, 0.85); /* Fondo oscuro con transparencia */
    margin: 5% auto; /* Centrado vertical y horizontal */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    width: 90%;
    max-width: 400px;
    position: relative;
    animation: fadeInUp 0.3s ease;
    color: #ffffff; /* Color del texto blanco */
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
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
        <p class="descripcion">Aprende las mejores recetas y consejos</p>
        <div class="botones-header">
            <a href="nosotros.php">Nosotros</a>
            <a href="Recetas.php">Recetas</a>
            <a href="../index.php?action=publicaciones">Anuncios</a>
        </div>
    </div>
</header>

    <!-- Contenido Principal -->
    <div class="main-container">
        <div class="blog-layout">
            <!-- Contenido Principal -->
            <main class="main-content">
                <!-- Artículo 1 -->
                <article class="article-card">
                    <div class="article-image-container">
                        <img src="../img/Procesochocolate.jpg" alt="Proceso del chocolate" class="article-image">
                    </div>
                    <div class="article-content">
    <h2 class="article-title">¿Cuándo se crearon los chocolates?</h2>
    <p class="article-excerpt">El chocolate, que comenzó como una bebida amarga en la antigüedad, ha evolucionado a lo largo del tiempo. Lo que antes era una preparación simple, se transformó al añadirle azúcar, convirtiéndose en el delicioso dulce que hoy disfrutamos en todo el mundo. ¡Un verdadero viaje de sabor y tradición!</p>
    <div class="article-meta">
        <a href="#" class="read-more" id="openModalBtn">Leer más <i class="fas fa-arrow-right"></i></a>
    </div>
</div>

<!-- Modal -->
<div id="infoModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="modal-header">
            <h2 class="modal-title">Origen y Evolución del Chocolate</h2>
        </div>
        <div class="modal-body">
            <p><strong>El chocolate tiene sus raíces en Mesoamérica, donde civilizaciones antiguas como los olmecas (alrededor del 1500 a.C.) y más tarde los mayas y aztecas usaban el cacao.</strong></p>

            <p>Los mayas preparaban una bebida espumosa hecha de granos de cacao molidos, agua y especias, utilizada principalmente en rituales religiosos y por las clases altas. Los aztecas, por su parte, valoraban tanto el cacao que lo usaban como moneda de cambio.</p>

            <p>El chocolate llegó a Europa tras el descubrimiento de América. Fue Hernán Cortés quien llevó las semillas de cacao a España en el siglo XVI. Allí se le agregó azúcar caña, dando lugar al primer chocolate dulce.</p>

            <p>A mediados del siglo XIX, empresas como Cadbury y Nestlé desarrollaron técnicas para hacer chocolate sólido comestible, marcando el inicio de la popularidad mundial del producto tal como lo conocemos hoy.</p>

            <p>Fuente: <em>National Geographic, Historia National Geographic, Museo del Chocolate (Barcelona), Enciclopedia Británica.</em></p>
        </div>
    </div>
</div>
                </article>
                
                <!-- Artículo 2 -->
                <article class="article-card">
                    <video class="article-video" autoplay muted loop>
                        <source src="../img/Corazon.mp4" type="video/mp4">
                        Tu navegador no soporta la reproducción de video.
                    </video>
                    <div class="article-content">
                       <h2 class="article-title">¿Por qué a los niños les encanta el chocolate?</h2>
<p class="article-excerpt">El chocolate es uno de los sabores más apreciados por los niños debido a su dulzura natural y textura suave. Estudios indican que el sabor dulce activa centros de placer en el cerebro, generando una sensación de bienestar. Además, los dulces de chocolate suelen estar asociados con recompensas, celebraciones y momentos felices, lo que refuerza su atractivo desde temprana edad.</p>
<div class="article-meta">
    <a href="#" class="read-more" id="openModalNinos">Leer más <i class="fas fa-arrow-right"></i></a>
</div>
                    </div>
                    <!-- Modal Niños -->
<div id="infoModalNinos" class="modal">
    <div class="modal-content">
        <span class="close-modal-ninos">&times;</span>
        <div class="modal-header">
            <h2 class="modal-title">¿Por qué a los niños les encanta el chocolate?</h2>
        </div>
        <div class="modal-body">
            <p><strong>El gusto por el chocolate comienza desde edades muy tempranas.</strong></p>
            <p>Estudios científicos muestran que el cerebro humano está programado para disfrutar de sabores dulces, ya que históricamente se asociaban con alimentos energéticos y seguros para consumir. El chocolate combina azúcar, grasa y pequeñas cantidades de cafeína y teobromina, sustancias que estimulan el sistema nervioso central y liberan endorfinas, produciendo sensaciones placenteras.</p>
            <p>Además, en muchos países, el chocolate se asocia a eventos como cumpleaños, navidad o recompensas escolares, lo cual refuerza emocionalmente su consumo entre los más pequeños.</p>
            <p>Fuente: <em>Universidad de Cambridge, Revista de Psicología Alimentaria, National Geographic Kids.</em></p>
        </div>
    </div>
</div>
                </article>
                
                
                <!-- Artículo 3 -->
                <article class="article-card">
                    <div class="article-image-container">
                        <img src="../img/dogs-lying-floor.jpg" alt="Chocolate y perros" class="article-image">
                    </div>
                    <div class="article-content">
                        <h2 class="article-title">Por qué el chocolate es peligroso para los perros</h2>
                        <p class="article-excerpt">El chocolate contiene una sustancia llamada teobromina, que los perros no pueden metabolizar adecuadamente. Esto puede provocar serios problemas de salud en los perros, como problemas cardíacos y nerviosos, e incluso puede ser fatal en grandes cantidades.</p>
                        <div class="article-meta">
<a href="#" class="read-more" id="openModalPerros">Leer más <i class="fas fa-arrow-right"></i></a>                        </div>
                    </div>
                    <div id="infoModalPerros" class="modal">
    <div class="modal-content">
        <span class="close-modal-perros">&times;</span>
        <div class="modal-header">
            <h2 class="modal-title">¿Por qué el chocolate es peligroso para los perros?</h2>
        </div>
        <div class="modal-body">
            <p><strong>El chocolate contiene teobromina y cafeína, sustancias tóxicas para los perros.</strong></p>
            <p>Los perros metabolizan estos compuestos mucho más lentamente que los humanos, lo que puede causar intoxicación con síntomas como vómitos, diarrea, aumento de la frecuencia cardíaca, convulsiones e incluso la muerte. La cantidad de teobromina varía según el tipo de chocolate: el chocolate negro tiene más concentración que el con leche o el blanco.</p>
            <p>Un perro de 20 kg podría intoxicarse con tan solo 50 g de chocolate negro. Si tu mascota consume chocolate, contacta inmediatamente a tu veterinario.</p>
            <p>Fuente: <em>Veterinary Emergency and Critical Care Society, ASPCA, PetMD.</em></p>
        </div>
    </div>
</div>
                </article>
                
                
                <!-- Artículo 4 con carrusel -->
                <article class="article-card">
                    <div style="background-color: white; padding: 20px;">
                        <div id="carouselChoco" class="carousel slide carousel-choco" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <video class="d-block w-100" autoplay muted loop>
                                        <source src="../img/NiñosChocolate.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-content">
                        <h2 class="article-title">Chocolate como Medio Artístico: Pinturas, Esculturas y Arte Comestible</h2>
                        <p class="article-excerpt">El chocolate ha superado su papel como simple postre para convertirse en un recurso creativo. En manos de artistas, se transforma en esculturas, murales y diseños comestibles que combinan sabor y expresión visual. Usado en eventos y exposiciones, su textura y fragilidad plantean retos únicos que enriquecen el arte efímero con un ingrediente tan delicioso como simbólico.</p>
                        <div class="article-meta">
<a href="#" class="read-more" id="openModalArte">Leer más <i class="fas fa-arrow-right"></i></a>                        </div>
                    </div>
                    <!-- Modal Artículo: Chocolate como Medio Artístico -->
<div id="infoModalArte" class="modal">
    <div class="modal-content">
        <span class="close-modal-arte">&times;</span>
        <div class="modal-header">
            <h2 class="modal-title">Chocolate como Medio Artístico: Pinturas, Esculturas y Arte Comestible</h2>
        </div>
        <div class="modal-body">
            <p><strong>El chocolate no solo es una delicia para el paladar, también es una herramienta poderosa para artistas creativos.</strong></p>
            <p>Desde esculturas monumentales hechas de chocolate hasta pinturas elaboradas con cacao fundido, este material versátil permite crear obras efímeras pero impactantes. En festivales internacionales como el Salon du Chocolat de París, artistas y chocolateros exhiben verdaderas obras maestras comestibles.</p>
            <p>Además, algunos diseñadores usan el chocolate como medio para expresar ideas culturales, sociales y ambientales. Ejemplos notables incluyen murales de chocolate que simbolizan la decadencia moderna o esculturas que representan figuras históricas, totalmente comestibles.</p>
            <p>El desafío está en trabajar rápido, ya que el chocolate se derrite fácilmente, lo que añade una dimensión única al arte temporal.</p>
            <p>Fuente: <em>Salon du Chocolat, Museum of Food and Drink (MOFAD), Artsy.net, The Guardian Culture.</em></p>
        </div>
    </div>
</div>
                </article>
                
                <!-- Artículo 5 -->
                <article class="article-card">
                    <div class="article-image-container">
                        <img src="../img/TipodChocolates.jpg" alt="Tipos de chocolate" class="article-image">
                    </div>
                    <div class="article-content">
                        <h2 class="article-title">¿Qué diferencia tiene el chocolate blanco del chocolate negro y el chocolate con leche?</h2>
                        <p class="article-excerpt">A diferencia del chocolate negro o con leche, el chocolate blanco no contiene sólidos de cacao, que es lo que le da color y sabor a los otros tipos de chocolate. El chocolate blanco está hecho solo con manteca de cacao, azúcar y leche, lo que le da su color claro y sabor dulce.</p>
                        <div class="article-meta">
                            <span>Por: Autor</span>
                            <a href="#" class="read-more">Leer más <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
            </main>

            <!-- Barra Lateral -->
            <aside class="sidebar">
                <div class="sidebar-widget">
                    <h3 class="widget-title">Para los amantes de la ciencia</h3>
                    <div class="suggested-posts">
                        <div class="suggested-post">
                            <img src="../img/ciencia3.jpg" alt="Historia del Chocolate" class="suggested-post-img">
                            <div class="suggested-post-content">
                                <h4>El Cacao y el Cerebro: ¿Cómo afecta el chocolate a nuestra salud mental?</h4>
                                <p>Descubre cómo el consumo moderado de chocolate puede estimular el ánimo, reducir el estrés y favorecer funciones cognitivas clave del cerebro.</p>
                            </div>
                        </div>

                        <div class="suggested-post">
                            <img src="../img/ciencia2.jpg" alt="Tipos de Chocolate" class="suggested-post-img">
                            <div class="suggested-post-content">
                                <h4>De la Semilla al Sabor: La Fermentación y el Perfil Sensorial del Chocolate</h4>
                                <p>Conozca cómo la fermentación del cacao transforma compuestos naturales, definiendo los aromas, sabores y calidad que caracterizan al chocolate artesanal y gourmet.</p>
                            </div>
                        </div>

                        <div class="suggested-post">
                            <img src="../img/ciencia1.jpg" alt="Recetas con Chocolate" class="suggested-post-img">
                            <div class="suggested-post-content">
                                <h4>Genética del Cacao: ¿Puede la ingeniería genética salvar al chocolate del cambio climático?</h4>
                                <p>Científicos desarrollan variedades resistentes al calor y enfermedades, asegurando el futuro del cacao frente a las amenazas del clima cambiante.</p>
                            </div>
                        </div>
                    </div>
                    <a href="articulos.php" class="btn-ver-mas">🔍 Mas info</a>
                </div>

                <div class="sidebar-widget">
                    <h3 class="widget-title">Datos Curiosos</h3>
                    <div class="suggested-posts">
                        <div class="suggested-post">
                            <img src="../img/istockphoto-503259445-612x612.jpg" alt="Chocolate Negro" class="suggested-post-img">
                            <div class="suggested-post-content">
                                <h4>El chocolate fue una bebida mucho antes de ser dulce</h4>
                                <p>Los antiguos pueblos mesoamericanos como los mayas y los aztecas consumían el cacao en forma de bebida amarga y picante, mezclada con especias como chile y sin azúcar.</p>
                            </div>
                        </div>
                        <div class="suggested-post">
                            <img src="../img/close-up-of-white-chocolate-chunks-royalty-free-image-157582140-1547653961.jpg" alt="Chocolate con Leche" class="suggested-post-img">
                            <div class="suggested-post-content">
                                <h4>El chocolate blanco no es técnicamente chocolate</h4>
                                <p>A diferencia del chocolate negro o con leche, el chocolate blanco no contiene sólidos de cacao, solo manteca de cacao, leche y azúcar. Por eso muchos puristas no lo consideran "verdadero chocolate".</p>
                            </div>
                        </div>
                        <div class="suggested-post">
                            <img src="../img/9082772-pila-de-monedas-chocolate-envuelto-en-estaño-oro-brillante.jpg" alt="Chocolate Blanco" class="suggested-post-img">
                            <div class="suggested-post-content">
                                <h4>Fue usado como moneda</h4>
                                <p>Los aztecas valoraban tanto el cacao que usaban los granos como moneda. Por ejemplo, un conejo podía costar unos 10 granos de cacao. ¡Literalmente te podías comer tu dinero!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

        <!-- Banner Separador mejorado -->
        <div class="banner-separator">
            <div class="banner-content">
                <h2>El sabor no termina aquí… descubre más del dulce mundo que tenemos para ti.</h2>
            </div>
        </div>

        <!-- Más Artículos -->
        <div class="blog-layout">
            <main class="main-content">
                <!-- Artículo 6 -->
                <article class="article-card">
                    <div class="article-image-container">
                        <img src="../img/Malteada.jpg" alt="Malteada de chocolate" class="article-image">
                    </div>
                    <div class="article-content">
                        <h2 class="article-title">¿Qué hace que una malteada de chocolate casera sea realmente deliciosa?</h2>
                        <p class="article-excerpt">La clave para una malteada deliciosa está en el uso de ingredientes frescos y de calidad. El cacao en polvo, la leche y el helado de chocolate bien combinados crean una mezcla cremosa y sabrosa que complacerá tus papilas gustativas.</p>
                        <div class="article-meta">
<a href="#" class="read-more" id="openModalMalteada">Leer más <i class="fas fa-arrow-right"></i></a>                        </div>
                    </div>
                    <div id="infoModalMalteada" class="modal">
    <div class="modal-content">
        <span class="close-modal-malteada">&times;</span>
        <div class="modal-header">
            <h2 class="modal-title">La ciencia detrás de la perfecta malteada de chocolate</h2>
        </div>
        <div class="modal-body">
            <p><strong>Una malteada ideal combina tres factores fundamentales: temperatura, textura y equilibrio de sabores.</strong></p>
            <p>Usar helado de alta calidad y leche fría ayuda a mantener la cremosidad sin diluir demasiado el sabor. El cacao en polvo sin azúcar permite controlar el nivel de dulzura, mientras que añadir una pizca de sal realza todos los sabores.</p>
            <p>Algunos chefs recomiendan batir la mezcla con hielo para lograr esa textura espumosa característica.</p>
            <p>Fuente: <em>Cook's Illustrated, Food Network Kitchen Science.</em></p>
        </div>
    </div>
</div>
                </article>
                
                <!-- Artículo 7 -->
                <article class="article-card">
                    <video class="article-video" autoplay muted loop>
                        <source src="../img/Chocolatefooter.mp4" type="video/mp4">
                        Tu navegador no soporta la reproducción de video.
                    </video>
                    <div class="article-content">
                        <h2 class="article-title">¿Son todos los dulces de chocolate iguales?</h2>
                        <p class="article-excerpt">No. Hay muchas diferencias según el tipo de chocolate, los ingredientes usados y el proceso de elaboración. Algunos dulces industriales contienen más azúcar, grasas y aditivos, mientras que otros, como los artesanales o de chocolaterías gourmet, usan cacao de alta calidad y menos conservantes. Leer las etiquetas puede ayudarte a elegir opciones más saludables o naturales.</p>
                        <div class="article-meta">
                            <span>Por: Autor</span>
                            <a href="#" class="read-more">Leer más <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
                
                <!-- Artículo 8 -->
                <article class="article-card">
                    <div class="article-image-container">
                        <img src="../img/ChocoTentacion.jpg" alt="Chocolate Tentación" class="article-image">
                    </div>
                    <div class="article-content">
<h2 class="article-title">El Arte de Crear Chocolate Gourmet en Casa</h2>                        <p class="article-excerpt">El truco para hacer el Chocolate  está en usar una combinación especial de chocolates gourmet y un toque de especias sofisticadas. La clave es derretir el chocolate lentamente, añadiendo una pizca de esencia de vainilla y una ligera infusión de canela.</p>
                        <div class="article-meta">
<a href="#" class="read-more" id="openModalGourmet">Leer más <i class="fas fa-arrow-right"></i></a>                        </div>
                    </div>
                    <div id="infoModalGourmet" class="modal">
    <div class="modal-content">
        <span class="close-modal-gourmet">&times;</span>
        <div class="modal-header">
            <h2 class="modal-title">El Arte de Crear Chocolate Gourmet en Casa</h2>
        </div>
        <div class="modal-body">
            <p><strong>Crear chocolates gourmet en casa requiere precisión y paciencia.</strong></p>
            <p>Se debe trabajar con temperaturas específicas durante el templado del chocolate para evitar que quede mate o grumoso. Se recomienda usar cacao de origen único y combinarlo con ingredientes naturales como frutas deshidratadas, nueces o especias exóticas como cardamomo o flor de sal.</p>
            <p>El arte del chocolate también incluye técnicas como moldeado, rellenos líquidos y decoración con spray de cacao.</p>
            <p>Fuente: <em>Academia Internacional de Chocolate, ChefSteps, Fine Cooking.</em></p>
        </div>
    </div>
</div>
                </article>
                
                <!-- Artículo 9 con video -->
                <article class="article-card">
                    <video class="article-video" autoplay muted loop>
                        <source src="../img/Malteadafooter.mp4" type="video/mp4">
                        Tu navegador no soporta la reproducción de video.
                    </video>
                    <div class="article-content">
                        <h2 class="article-title">¿Sabías que cada tipo de dulce de chocolate tiene una historia diferente?</h2>
                        <p class="article-excerpt">Cada dulce tiene su origen. Por ejemplo, los bombones nacieron en Francia en el siglo XVII como un lujo de la realeza. Las trufas fueron creadas en Bélgica y están inspiradas en el hongo del mismo nombre por su forma. Las barras de chocolate rellenas surgieron en EE.UU. en el siglo XX para ofrecer energía y sabor en un solo bocado. Cada uno refleja una época, una cultura y un estilo de vida diferente.</p>
                        <div class="article-meta">
<a href="#" class="read-more" id="openModalHistoriaDulces">Leer más <i class="fas fa-arrow-right"></i></a>                        </div>
                    </div>
                    <!-- Modal Artículo: Historias detrás de los dulces de chocolate -->
<div id="infoModalHistoriaDulces" class="modal">
    <div class="modal-content">
        <span class="close-modal-historia-dulces">&times;</span>
        <div class="modal-header">
            <h2 class="modal-title">Historias detrás de los dulces de chocolate</h2>
        </div>
        <div class="modal-body">
            <p><strong>Cada dulce de chocolate tiene su propia historia cultural y evolutiva.</strong></p>
            <p>Los bombones surgieron en Francia en el siglo XVII como un lujo reservado para la realeza. Las trufas, originarias de Bélgica, reciben su nombre por su similitud con el hongo trufa. En Estados Unidos, las barras de chocolate rellenas nacieron en el siglo XX como snack energético para soldados y trabajadores.</p>
            <p>En México, el chocolate sigue siendo parte importante de la cultura, especialmente en fiestas tradicionales como Día de Muertos y Navidad.</p>
            <p>¡Cada bocado de chocolate cuenta una historia!</p>
            <p>Fuente: <em>Enciclopedia Británica, Museo del Chocolate (México), Food Network.</em></p>
        </div>
    </div>
</div>
                </article>
                
                <!-- Artículo 10 con carrusel -->
                <article class="article-card">
                    <div style="background-color: white; padding: 20px;">
                        <div id="carouselGaleria" class="carousel slide carousel-choco" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <video class="d-block w-100" autoplay muted loop>
                                        <source src="../img/Chocolatefooter.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                    <div class="article-content">
                        <h2 class="article-title">El Chocolate en el Espacio: ¿Es posible comerlo en la órbita terrestre?</h2>
                        <p class="article-excerpt">Aunque el espacio presenta desafíos únicos para la alimentación, la ciencia y la tecnología han permitido que incluso los placeres más terrenales lleguen más allá de nuestro planeta. A continuación, descubrirá cómo el chocolate ha encontrado su lugar entre las estrellas y qué papel cumple en las misiones espaciales modernas.</p>
                        <div class="article-meta">
<a href="#" class="read-more" id="openModalEspacio">Leer más <i class="fas fa-arrow-right"></i></a>
</div>
                    </div>
                    <!-- Modal Artículo: El Chocolate en el Espacio -->
<div id="infoModalEspacio" class="modal">
    <div class="modal-content">
        <span class="close-modal-espacio">&times;</span>
        <div class="modal-header">
            <h2 class="modal-title">El Chocolate en el Espacio: ¿Es posible comerlo en la órbita terrestre?</h2>
        </div>
        <div class="modal-body">
            <p><strong>Comer chocolate en el espacio no solo es posible… ¡sino que ya se ha hecho!</strong></p>
            <p>En condiciones de microgravedad, muchos alimentos deben modificarse para evitar migas o líquidos que puedan dañar equipos sensibles. Por eso, las versiones del chocolate utilizadas en misiones espaciales son generalmente en tabletas compactas o como parte de barras energéticas.</p>
            <p>La NASA incluye chocolates pequeños en algunas raciones por su alto contenido calórico y capacidad para mejorar el estado de ánimo de los astronautas. Además, estudios sugieren que los flavonoides presentes en el cacao podrían ayudar a combatir el estrés oxidativo causado por la radiación cósmica.</p>
            <p>Algunas empresas privadas como SpaceX han trabajado en versiones especiales de chocolate resistente al vacío y sin envoltorios tradicionales, pensando en viajes espaciales comerciales del futuro.</p>
            <p>Fuente: <em>NASA, European Space Agency (ESA), BBC Ciencia, Smithsonian Magazine.</em></p>
        </div>
    </div>
</div>
                </article>
            </main>
            
            <!-- Barra Lateral -->
            <aside class="sidebar">
                <div class="sidebar-widget">
                    <h3 class="widget-title">Primeros Sabores: Recetas Fáciles para Empezar en la Cocina</h3>
                    <div class="suggested-posts">
                        <div class="suggested-post">
                            <img src="../img/receta8.jpeg" alt="Brownie" class="suggested-post-img">
                            <div class="suggested-post-content">
                                <h4>Malteada de Chocolate</h4>
                                <p>Una refrescante malteada cremosa con sabor intenso a chocolate.</p>
                            </div>
                        </div>
                        <div class="suggested-post">
                            <img src="../img/receta6.jpeg" alt="Trufas" class="suggested-post-img">
                            <div class="suggested-post-content">
                                <h4>Helado de Chocolate</h4>
                                <p>Helado casero con sabor intenso a cacao y una textura suave y cremosa.</p>
                            </div>
                        </div>
                        <div class="suggested-post">
                            <img src="../img/receta1.jpeg" alt="Mousse" class="suggested-post-img">
                            <div class="suggested-post-content">
                                <h4>Brownies de Chocolate</h4>
                                <p>Brownies caseros con textura perfecta: crujientes por fuera y suaves por dentro.</p>
                            </div>
                        </div>
                    </div>
                    <a href="Recetas.php" class="btn-ver-mas">🍫 Ver más recetas</a>
                </div>

                
            </aside>
                </div>
            </div>

    <!-- Footer mejorado -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-about">
                <h3 class="footer-title">Sobre ChocoBox</h3>
                <p class="footer-description">BlogChocoBox es tu fuente confiable de información, recetas y noticias sobre el fascinante mundo del chocolate. Compartimos nuestra pasión por este delicioso ingrediente desde 2010.</p>
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
                    <li><i class="fas fa-envelope"></i> info@blogchocobox.com</li>
                </ul>
            </div>
        </div>
        
        <div class="footer-divider"></div>
        
        <div class="footer-bottom">
            <p class="copyright">© 2023 BlogChocoBox. Todos los derechos reservados.</p>
           
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Inicializar carruseles
        document.addEventListener('DOMContentLoaded', function() {
            var carouselChoco = new bootstrap.Carousel(document.getElementById('carouselChoco'), {
                interval: 5000,
                wrap: true
            });
            
            var carouselGaleria = new bootstrap.Carousel(document.getElementById('carouselGaleria'), {
                interval: 4500,
                wrap: true
            });
        });
        
        // Abrir modal
    document.getElementById("openModalBtn").addEventListener("click", function (e) {
        e.preventDefault();
        document.getElementById("infoModal").style.display = "block";
    });

    // Cerrar modal al hacer clic en la X
    document.querySelector(".close-modal").addEventListener("click", function () {
        document.getElementById("infoModal").style.display = "none";
    });

    // Cerrar modal al hacer clic fuera del contenido
    window.addEventListener("click", function (event) {
        const modal = document.getElementById("infoModal");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
    
    const opcionesBtn = document.getElementById('opcionesBtn');
    const dropdownMenu = document.getElementById('dropdownMenu');

    opcionesBtn.addEventListener('click', () => {
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });

    // Cerrar menú si se hace clic fuera
    window.addEventListener('click', (e) => {
        if (!opcionesBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.style.display = 'none';
        }
    });
    
    // Modal niños
document.getElementById("openModalNinos").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("infoModalNinos").style.display = "block";
});
document.querySelector(".close-modal-ninos").addEventListener("click", function() {
    document.getElementById("infoModalNinos").style.display = "none";
});
window.addEventListener("click", function(event) {
    const modal = document.getElementById("infoModalNinos");
    if (event.target === modal) {
        modal.style.display = "none";
    }
});
document.getElementById("openModalPerros").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("infoModalPerros").style.display = "block";
});
document.querySelector(".close-modal-perros").addEventListener("click", function() {
    document.getElementById("infoModalPerros").style.display = "none";
});

document.getElementById("openModalMalteada").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("infoModalMalteada").style.display = "block";
});
document.querySelector(".close-modal-malteada").addEventListener("click", function() {
    document.getElementById("infoModalMalteada").style.display = "none";
});

document.getElementById("openModalGourmet").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("infoModalGourmet").style.display = "block";
});
document.querySelector(".close-modal-gourmet").addEventListener("click", function() {
    document.getElementById("infoModalGourmet").style.display = "none";
});

// Modal historia de dulces
document.getElementById("openModalHistoriaDulces").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("infoModalHistoriaDulces").style.display = "block";
});
document.querySelector(".close-modal-historia-dulces").addEventListener("click", function() {
    document.getElementById("infoModalHistoriaDulces").style.display = "none";
});
window.addEventListener("click", function(event) {
    const modal = document.getElementById("infoModalHistoriaDulces");
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

// Modal chocolate en el espacio
document.getElementById("openModalEspacio").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("infoModalEspacio").style.display = "block";
});
document.querySelector(".close-modal-espacio").addEventListener("click", function() {
    document.getElementById("infoModalEspacio").style.display = "none";
});
window.addEventListener("click", function(event) {
    const modal = document.getElementById("infoModalEspacio");
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

// Modal chocolate como arte
document.getElementById("openModalArte").addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("infoModalArte").style.display = "block";
});
document.querySelector(".close-modal-arte").addEventListener("click", function() {
    document.getElementById("infoModalArte").style.display = "none";
});
window.addEventListener("click", function(event) {
    const modal = document.getElementById("infoModalArte");
    if (event.target === modal) {
        modal.style.display = "none";
    }
});
    </script>
</body>
</html>