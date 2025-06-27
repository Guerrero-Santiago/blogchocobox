<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - BlogChocoBox</title>
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
            color: var(--dark-gray);
            letter-spacing: 0.5px;
            margin-bottom: 1.2rem;
        }

        /* Header */
        .nuevo-header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../img/us.jpg') no-repeat center center/cover;
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

        /* Contenedor principal */
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
        }

        /* Sección Sobre Nosotros */
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--chocolate), var(--gold));
            border-radius: 2px;
        }

        .about-container {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            margin-bottom: 80px;
        }

        .about-image {
            flex: 1;
            min-width: 300px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        .about-content {
            flex: 1;
            min-width: 300px;
        }

        .about-content p {
            font-size: 1.15rem;
            line-height: 1.8;
            margin-bottom: 25px;
            color: var(--text-gray);
        }

        /* Nuestra Historia */
        .history-section {
            background-color: var(--gold);
            padding: 60px;
            border-radius: 12px;
            margin-bottom: 80px;
            color: var(--dark-gray);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .history-section h3 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 40px;
            color: var(--dark-gray);
        }

        .history-section p {
            font-size: 1.15rem;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto 25px;
        }

        /* Valores */
        .values-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 80px;
        }

        .value-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: var(--transition);
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .value-icon {
            font-size: 2.8rem;
            color: var(--gold);
            margin-bottom: 20px;
        }

        .value-card h4 {
            font-size: 1.5rem;
            color: var(--dark-gray);
            margin-bottom: 15px;
        }

        .value-card p {
            color: var(--text-gray);
            font-size: 1rem;
            line-height: 1.7;
        }

        /* Footer */
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

        .about-container, .history-section, .value-card {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .about-container { animation-delay: 0.1s; }
        .history-section { animation-delay: 0.2s; }
        .value-card:nth-child(1) { animation-delay: 0.3s; }
        .value-card:nth-child(2) { animation-delay: 0.4s; }
        .value-card:nth-child(3) { animation-delay: 0.5s; }
        .value-card:nth-child(4) { animation-delay: 0.6s; }

        /* Responsive */
        @media (max-width: 1200px) {
            .main-container {
                padding: 0 25px;
            }
        }

        @media (max-width: 992px) {
            .about-container {
                flex-direction: column;
                gap: 40px;
            }
            
            .about-image {
                max-height: 500px;
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
            
            .history-section {
                padding: 40px;
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
            
            .botones-header a {
                padding: 12px 20px;
                font-size: 1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .history-section {
                padding: 30px 20px;
            }

            .history-section h3 {
                font-size: 1.8rem;
            }
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
            background: url('../img/us.jpg') no-repeat center center/cover;
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
            background: url('../img/us.jpg') center/cover fixed;
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
        <p class="descripcion">Chocolate con propósito y alma</p>
        <div class="botones-header">
            <a href="usuario.php">Inicio</a>
            <a href="Recetas.php">Recetas</a>
            <a href="../index.php?action=publicaciones">Anuncios</a>
        </div>
    </div>
</header>

    <!-- Contenido Principal -->
    <div class="main-container">
        <!-- Sobre Nosotros -->
<h2 class="section-title" style="color: #4B2E2A !important;">Sobre Nosotros</h2>        
        <div class="about-container">
            <div class="about-image">
                <img src="../img/logo.jpeg" alt="Equipo ChocoBox">
            </div>
            <div class="about-content">
                <p>
                    En ChocoBox Express, nos apasiona el chocolate en todas sus formas. hemos estado creando experiencias dulces e inolvidables para nuestros clientes. Utilizamos materias primas 100% naturales, sin conservantes ni químicos artificiales, para ofrecerte el auténtico sabor del chocolate.
                </p>
                <p>
                    Somos una empresa colombiana dedicada a la fabricación, de chocolates. Cada producto que creamos es una obra maestra de sabor y textura, elaborada con altos estándares de calidad y con cacao de buena calidad.
                </p>
                <p>
                    Nuestra misión es llevar alegría a través del chocolate, innovando constantemente mientras mantenemos las tradiciones artesanales que hacen de nuestros productos algo especial.
                </p>
            </div>
        </div>

        <!-- Nuestra Historia -->
        <div class="history-section">
            <h3>Quiénes Somos</h3>
            <p>
                En ChocoBox Express, nacimos del deseo de crear experiencias únicas a través del chocolate. Inspirados por la tradición artesanal y el amor por los sabores auténticos, nos dedicamos a ofrecer productos que despiertan emociones y crean momentos memorables.
            </p>
            <p>
               Más que una marca, somos un equipo apasionado por innovar sin perder la esencia de lo hecho a mano. Cada creación refleja nuestro compromiso con la calidad, el detalle y la satisfacción de quienes nos eligen.

Creemos que el chocolate es más que un antojo: es un lenguaje universal de cariño, celebración y creatividad. Por eso trabajamos día a día para que cada bocado hable por sí solo.
            </p>
        </div>

        <!-- Nuestros Valores -->
<h2 class="section-title" style="color: #4B2E2A !important;">Nuestros Valores</h2>        <div class="values-container">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-seedling"></i>
                </div>
                <h4>Ingredientes Naturales</h4>
                <p>Utilizamos solo ingredientes 100% naturales, sin conservantes ni aditivos artificiales.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h4>Pasión por el Chocolate</h4>
                <p>Amamos lo que hacemos y eso se refleja en la calidad de nuestros productos.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h4>Calidad Premium</h4>
                <p>Cada producto pasa por rigurosos controles de calidad para garantizar la excelencia.</p>
            </div>
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h4>Sostenibilidad</h4>
                <p>Trabajamos con cacao de comercio justo y prácticas ambientalmente responsables.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
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
    // === Animaciones al hacer scroll ===
    document.addEventListener('DOMContentLoaded', function () {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.about-container, .history-section, .value-card').forEach(el => {
            observer.observe(el);
        });
    });

    // === Menú desplegable de Opciones ===
    document.addEventListener('DOMContentLoaded', function () {
        const opcionesBtn = document.getElementById('opcionesBtn');
        const dropdownMenu = document.getElementById('dropdownMenu');

        if (opcionesBtn && dropdownMenu) {
            opcionesBtn.addEventListener('click', () => {
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });

            // Cerrar menú si se hace clic fuera
            window.addEventListener('click', (e) => {
                if (!opcionesBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownMenu.style.display = 'none';
                }
            });
        }
    });
</script>
</body>
</html>