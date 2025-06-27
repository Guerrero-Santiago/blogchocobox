-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-06-2025 a las 15:07:24
-- Versión del servidor: 9.1.0
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin') DEFAULT 'admin',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `email`, `password`, `role`) VALUES
(1, 'ADMINISTRADOR', 'admin@chocobox', '1234567890', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exportar_usuarios_pdf`
--

DROP TABLE IF EXISTS `exportar_usuarios_pdf`;
CREATE TABLE IF NOT EXISTS `exportar_usuarios_pdf` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_seguridad`
--

DROP TABLE IF EXISTS `preguntas_seguridad`;
CREATE TABLE IF NOT EXISTS `preguntas_seguridad` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `preguntas_seguridad`
--

INSERT INTO `preguntas_seguridad` (`id`, `pregunta`) VALUES
(1, 'como se llama mi gato'),
(2, 'como se llama mi mama'),
(3, '1'),
(4, 'que fecha es navidad'),
(5, 'que fecha es año nuevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `descripcion`, `fecha`, `imagen`) VALUES
(14, 'Barra de chocolate', 'El chocolate en barras es una de las formas más populares y versátiles de disfrutar el cacao. Se presenta en tabletas rectangulares fácilmente divididas en porciones, lo que lo hace práctico para consumir, compartir o utilizar en repostería.', '2025-05-27 01:13:58', '1748308438_Captura de pantalla 2025-05-26 201300.png'),
(15, 'Fondue de chocolate', 'El fondue de chocolate es una experiencia dulce, cálida y compartida que convierte el acto de comer en un momento especial. Consiste en chocolate derretido y suave, servido caliente en un recipiente (tradicionalmente llamado fondue) que mantiene su temperatura, ideal para sumergir una variedad de bocados.', '2025-05-27 01:21:48', '1748308908_IN_wFkZHk_1256x620__2.jpg'),
(8, 'Chocolates', 'Los chocolates son mucho más que un dulce: son una experiencia de sabor, textura y aroma que despierta los sentidos. Elaborados con el más fino cacao, nuestros chocolates combinan calidad, pasión y tradición en cada presentación.', '2025-05-27 00:04:43', '1748304283_Captura de pantalla 2025-05-26 190418.png'),
(9, 'Huevos de chocolates', 'Los primeros huevos eran sólidos y bastante duros, pero con los avances en técnicas de moldeado, pronto se popularizaron los huevos huecos rellenos de dulces o sorpresas. Grandes marcas como Cadbury impulsaron esta costumbre en el Reino Unido durante la era victoriana, haciendo de los huevos de chocolate un clásico de la Pascua que se ha extendido a nivel mundial.', '2025-05-27 00:09:47', '1748304587_WhatsApp Image 2025-05-26 at 7.07.19 PM.jpeg'),
(10, 'Chocolate negro', 'El chocolate negro es una variedad de chocolate conocida por su sabor intenso y su alto contenido de cacao, que generalmente oscila entre el 50% y el 90%. A diferencia del chocolate con leche, el chocolate negro no contiene leche añadida, lo que le otorga un perfil más puro, amargo y sofisticado.', '2025-05-27 00:32:51', '1748305971_Captura de pantalla 2025-05-26 193235.png'),
(11, 'Galletas de chocolates', 'Las galletas de chocolate son un clásico irresistible de la repostería, combinando la suavidad o crocancia de una masa horneada con el delicioso sabor del chocolate en cada bocado. Pueden presentarse en distintas formas: con chispas de chocolate, rellenas, cubiertas o completamente hechas con cacao en su base.', '2025-05-27 00:39:52', '1748306392_Captura de pantalla 2025-05-26 193535.png'),
(13, 'Chocolate Cake', 'El pastel de chocolate es un postre clásico y decadente que conquista paladares en todo el mundo. Suave, húmedo y lleno de sabor, se elabora con cacao o chocolate derretido, lo que le da una textura esponjosa y un sabor profundo y reconfortante.', '2025-05-27 01:06:19', '1748307979_Captura de pantalla 2025-05-26 200303.png'),
(16, 'Helado de chocolate', 'El helado de chocolate es un clásico irresistible entre los postres fríos, conocido por su sabor profundo, cremosidad y frescura. Elaborado con cacao o chocolate derretido, leche, crema y azúcar, esta delicia combina la intensidad del chocolate con una textura suave y refrescante que encanta a personas de todas las edades.', '2025-05-27 01:34:15', '1748309655_28f24bb45f5dac798445dbbce991b794.avif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas_seguridad`
--

DROP TABLE IF EXISTS `respuestas_seguridad`;
CREATE TABLE IF NOT EXISTS `respuestas_seguridad` (
  `id_usuario` int DEFAULT NULL,
  `id_pregunta` int DEFAULT NULL,
  `respuesta` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  KEY `id_usuario` (`id_usuario`),
  KEY `id_pregunta` (`id_pregunta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `respuestas_seguridad`
--

INSERT INTO `respuestas_seguridad` (`id_usuario`, `id_pregunta`, `respuesta`) VALUES
(20, 1, 'wos'),
(20, 2, 'rocio'),
(21, 3, '1'),
(21, 3, '1'),
(22, 4, '24'),
(22, 5, '31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role` enum('admin','moderator','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `fecha_nacimiento`, `email`, `password`, `fecha_registro`, `role`, `created_at`) VALUES
(22, 'Usuario', 'User', '2025-06-01', 'usuario@chocobox.com', '$2y$10$VNhRyoN8XajjwQWXSmh5zeGhlYVfJ7rUzaFvkNloviJks.Wh1ikAa', '2025-06-27 14:58:09', 'user', '2025-06-27 14:58:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
