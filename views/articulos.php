<!DOCTYPE html>
<!-- se tiene que ver igual aqui que en el archivo usuario.php -->

<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BlogChocoBox</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com"  />
    <link rel="preconnect" href="https://fonts.gstatic.com"  crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
            <link rel="shortcut icon" href="../img/logito.ico" type="image/x-icon">

    <style>
        :root {
            --primary: #6D4C3D; 
            --secondary: #D4A373;
            --light: #FAEDCD;
            --dark: #2A2A2A;
            --white: #FFFFFF;
            --gray: #F5F5F5;
            --text: #333333;
            --text-light: #777777;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text);
            background-color: var(--gray);
            overflow-x: hidden;
        }
        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            color: var(--dark);
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .nuevo-header {
            background: url('../img/otro2.jpg') no-repeat center center/cover;
            color: #fff;
            padding: 100px 20px;
            text-align: center;
            position: relative;
        }
        .nuevo-header::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 0;
        }
        .contenido-header {
            position: relative;
            z-index: 1;
            max-width: 900px;
            margin: 0 auto;
        }
        .titulo-principal {
            font-size: 3.5rem;
            font-family: 'Georgia', serif;
            margin-bottom: 10px;
        }
        .choco {
            color: #e0a96d;
            font-style: italic;
        }
        .subtitulo {
            font-size: 1.8rem;
            font-weight: 300;
            margin-bottom: 10px;
            font-style: italic;
        }
        .descripcion {
            font-size: 1.3rem;
            margin-bottom: 30px;
            color: #ccc;
        }
        .botones-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }
        .botones-header a {
            padding: 12px 24px;
            font-size: 1.1rem;
            background-color: transparent;
            border: 2px solid #e0a96d;
            color: #fff;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .botones-header a:hover {
            background-color: #e0a96d;
            color: #000;
        }
        .cerrar-sesion {
            position: absolute;
            top: 20px;
            right: 30px;
            z-index: 2;
        }
        .cerrar-sesion a {
            padding: 10px 20px;
            font-size: 1.1rem;
            background-color: #e0a96d;
            color: #000;
            font-weight: bold;
            border-radius: 20px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .cerrar-sesion a:hover {
            background-color: #fff;
            color: #000;
        }

        /* Main Content */
        .main-content {
            margin-top: 60px;
        }
        .article-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
            transition: transform 0.3s ease;
        }
        .article-card:hover {
            transform: translateY(-5px);
        }
        .article-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .article-content {
            padding: 30px;
        }
        .article-title {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        .article-excerpt {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 20px;
        }
        .read-more {
            color: var(--secondary);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        .read-more i {
            transition: transform 0.3s ease;
        }
        .read-more:hover i {
            transform: translateX(5px);
        }

        /* Footer */
        .footer {
            background-color: var(--dark);
            color: var(--white);
            padding: 50px 0 20px;
            margin-top: 60px;
        }
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        .footer-widget h4 {
            color: var(--white);
            margin-bottom: 20px;
            font-size: 1.3rem;
            position: relative;
            padding-bottom: 10px;
        }
        .footer-widget h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--secondary);
        }
        .footer-widget p {
            color: #aaa;
            margin-bottom: 15px;
        }
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: var(--white);
            transition: all 0.3s ease;
        }
        .social-links a:hover {
            background-color: var(--secondary);
            transform: translateY(-3px);
        }
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #aaa;
            font-size: 0.9rem;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 700px;
            color: #333;
        }
        .close-modal {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        .close-modal:hover,
        .close-modal:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
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
            background: url('../img/otro2.jpg') no-repeat center center/cover;
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
            background: url('../img/otro2.jpg') center/cover fixed;
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

.dropdown-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 50px;
    background-color: #2a2118;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    z-index: 1000; /* Muy importante */
    min-width: 180px;
    overflow: hidden;
}

.modal {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1000;
    background-color: rgba(0, 0, 0, 0.9);
    padding: 20px;
    border-radius: 10px;
    max-width: 80%;
    width: 500px;
    color: white;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.article-card {
    position: relative; /* Necesario para posicionamiento absoluto dentro */
}

.modal {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1000;
    background-color: rgba(0, 0, 0, 0.9);
    padding: 20px;
    border-radius: 10px;
    width: 90%;
    max-width: 500px;
    color: white;
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
        <p class="descripcion">Aprende sobre la ciencia y descrubre los secretos del chocolate</p>
        <div class="botones-header">
                        <a href="usuario.php">Inicio</a>

            <a href="nosotros.php">Nosotros</a>
            <a href="Recetas.php">Recetas</a>
            <a href="../index.php?action=publicaciones">Anuncios</a>
        </div>
    </div>
</header>
<!-- MAIN CONTENT -->
<div class="container main-content">
    <!-- Artículo 1 -->
    <article class="article-card">
        <img src="../img/ciencia3.jpg" alt="El Cacao y el Cerebro" class="article-image">
        <div class="article-content">
            <h2 class="article-title">El Cacao y el Cerebro: ¿Cómo afecta el chocolate a nuestra salud mental?</h2>
            <p class="article-excerpt">Los compuestos bioactivos del cacao pueden mejorar la memoria, la concentración y el estado de ánimo al estimular la liberación de neurotransmisores como la serotonina y la dopamina.</p>
            <a href="#" class="read-more" id="openModalCerebro">Leer más <i class="fas fa-arrow-right"></i></a>
        </div>
    </article>

    <!-- Artículo 2 -->
    <article class="article-card">
        <img src="../img/ciencia2.jpg" alt="Fermentación del Cacao" class="article-image">
        <div class="article-content">
            <h2 class="article-title">De la Semilla al Sabor: La Fermentación y el Perfil Sensorial del Chocolate</h2>
            <p class="article-excerpt">La fermentación del cacao es crucial para desarrollar los sabores complejos del chocolate. Este proceso biológico transforma azúcares en ácidos orgánicos, sentando las bases del perfil aromático final.</p>
            <a href="#" class="read-more" id="openModalFermentacion">Leer más <i class="fas fa-arrow-right"></i></a>
        </div>
    </article>

    <!-- Artículo 3 -->
    <article class="article-card">
        <img src="../img/ciencia1.jpg" alt="Genética del Cacao" class="article-image">
        <div class="article-content">
            <h2 class="article-title">Genética del Cacao: ¿Puede la ingeniería genética salvar al chocolate del cambio climático?</h2>
            <p class="article-excerpt">Con el aumento de temperaturas, muchas plantaciones de cacao están en riesgo. Investigadores trabajan en variedades resistentes mediante técnicas de edición genética como CRISPR.</p>
            <a href="#" class="read-more" id="openModalGenetica">Leer más <i class="fas fa-arrow-right"></i></a>
        </div>
    </article>
</div>

<!-- MODALES -->
<!-- Modal 1: El Cacao y el Cerebro -->
<div id="infoModalCerebro" class="modal">
    <div class="modal-content">
        <span class="close-modal" id="closeModalCerebro">&times;</span>
        <h2>El Cacao y el Cerebro</h2>
        <p><strong>Los flavonoides presentes en el cacao mejoran la función cognitiva y reducen el estrés oxidativo.</strong></p>
        <p>Estudios muestran que consumir chocolate negro puede aumentar el flujo sanguíneo al cerebro, mejorar la atención y ayudar a combatir el deterioro cognitivo relacionado con la edad.</p>
        <p>Fuente: Harvard T.H. Chan School of Public Health, Frontiers in Nutrition.</p>
    </div>
</div>

<!-- Modal 2: Fermentación del Cacao -->
<div id="infoModalFermentacion" class="modal">
    <div class="modal-content">
        <span class="close-modal" id="closeModalFermentacion">&times;</span>
        <h2>De la Semilla al Sabor</h2>
        <p><strong>La fermentación es un paso crítico en la producción del chocolate.</strong></p>
        <p>Durante este proceso, bacterias y levaduras transforman los azúcares del mucílago del cacao en alcohol y ácidos orgánicos, lo cual define el perfil sensorial del chocolate final.</p>
        <p>Un control adecuado de temperatura y tiempo asegura una calidad superior del producto.</p>
        <p>Fuente: International Cocoa Organization, Scientific American.</p>
    </div>
</div>

<!-- Modal 3: Genética del Cacao -->
<div id="infoModalGenetica" class="modal">
    <div class="modal-content">
        <span class="close-modal" id="closeModalGenetica">&times;</span>
        <h2>Genética del Cacao</h2>
        <p><strong>La ingeniería genética podría proteger al cacao del cambio climático.</strong></p>
        <p>Científicos están utilizando herramientas como CRISPR para desarrollar plantas de cacao más resistentes a enfermedades, sequías y plagas. Esto garantizaría su producción sostenible en el futuro.</p>
        <p>Fuente: Nature Biotechnology, The World Cocoa Foundation.</p>
    </div>
</div>

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
    // === MODALES ===
    function setupModal(openId, modalId, closeClass) {
        const openBtn = document.getElementById(openId);
        const modal = document.getElementById(modalId);
        const closeBtn = modal ? modal.querySelector(closeClass) : null;

        if (openBtn && modal) {
            openBtn.addEventListener("click", function(e) {
                e.preventDefault();
                modal.style.display = "block";
            });

            if (closeBtn) {
                closeBtn.addEventListener("click", function() {
                    modal.style.display = "none";
                });
            }

            window.addEventListener("click", function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        }
    }

    // Configurar solo los modales que existen en tu HTML
    setupModal("openModalCerebro", "infoModalCerebro", ".close-modal");
    setupModal("openModalFermentacion", "infoModalFermentacion", ".close-modal");
    setupModal("openModalGenetica", "infoModalGenetica", ".close-modal");

    // === CARRUSELES ===
    document.addEventListener('DOMContentLoaded', function () {
        const carouselChocoEl = document.getElementById('carouselChoco');
        const carouselGaleriaEl = document.getElementById('carouselGaleria');

        if (carouselChocoEl) {
            new bootstrap.Carousel(carouselChocoEl, {
                interval: 5000,
                wrap: true
            });
        }

        if (carouselGaleriaEl) {
            new bootstrap.Carousel(carouselGaleriaEl, {
                interval: 4500,
                wrap: true
            });
        }
    });

    // === MENÚ DESPLEGABLE OPCIONES ===
    const opcionesBtn = document.getElementById('opcionesBtn');
    const dropdownMenu = document.getElementById('dropdownMenu');

    if (opcionesBtn && dropdownMenu) {
        opcionesBtn.addEventListener('click', () => {
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        window.addEventListener('click', (e) => {
            if (!opcionesBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.style.display = 'none';
            }
        });
    }
</script>

</body>
</html>