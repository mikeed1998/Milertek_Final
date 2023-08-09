-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2023 a las 07:14:22
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `milertek_final2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `menu_display` tinyint(1) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `user`, `email`, `password`, `role`, `menu_display`, `activo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@wozial.com', '$2a$10$4RkbKKmavc66IzEvXM6Ek.gH9H.aqsX9F4HWL75ts0ydOChZWvSKy', 1, 1, 1, '7bcbWneSubNyaE2pGrIcVCozYm8yAXH4dmNiQyaBOYKJuQxNGFQQdNWIMgQU', '2020-10-14 23:24:37', '2020-10-14 23:24:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusels`
--

CREATE TABLE `carrusels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrusels`
--

INSERT INTO `carrusels` (`id`, `titulo`, `subtitulo`, `image`, `url`, `video`, `orden`) VALUES
(3, NULL, NULL, '0jAcePKvAJNI5EFoIBkK2qwfvUcn9o.jpg', NULL, NULL, 13),
(20, NULL, NULL, 'DDgpC337KkEdhwKWyOeOs38n2UAfDI.jpg', NULL, NULL, 1),
(21, NULL, NULL, 'nxIsKMKwxuYr1VvoQfdvVP3dd4odSO.jpg', NULL, NULL, 11),
(22, NULL, NULL, 'jEJGrG9uL528X1WIc48YDcpKA84wfH.jpg', NULL, NULL, 7),
(23, NULL, NULL, 'FNDudXjjW6ttl7oKiDKHXJMHune8zn.jpg', NULL, NULL, 6),
(26, NULL, NULL, 'BtKIGsTIsfun3dE9J3w2ySQixmMhuq.jpg', NULL, NULL, 12),
(27, NULL, NULL, 'DdhoTTR3XF4X86b2xhq2zjiEOBsIEL.jpg', NULL, NULL, 10),
(28, NULL, NULL, 'LzGPME0sAI8WxnfFlpHvaPV7hC6EHt.jpg', NULL, NULL, 0),
(29, NULL, NULL, '65GySGByw7v10eWxveTEgsnMZ32879.jpg', NULL, NULL, 3),
(30, NULL, NULL, 'A3MyLsvZRd4RB1JI4jcPRJyLfkA95y.jpg', NULL, NULL, 4),
(31, NULL, NULL, 'naUwApZyzCgDCbM72eOUUBSYfx42l3.jpg', NULL, NULL, 2),
(32, NULL, NULL, '2t6FMflHrUtmrSSEIrkUGhd8dt0BLd.jpg', NULL, NULL, 5),
(35, NULL, NULL, 'PXkFO6vRwMfDvJeY4NxHZckAXVarbN.png', NULL, NULL, 0),
(37, NULL, NULL, 'ScZZfJXdbmQ0De67h3gmwwSHWTQm4h.png', NULL, NULL, 6),
(39, NULL, NULL, 'Kbu9Oolrpwjzry7PCytuqQzfqY5bHU.png', NULL, NULL, 1),
(40, NULL, NULL, '4NDnSgSm8ZsLN7DxXAQ6TEtyeVr9k2.png', NULL, NULL, 4),
(41, NULL, NULL, 'aBc4Gn9XOC4vwKxob3vskEo7v6aQlM.png', NULL, NULL, 2),
(42, NULL, NULL, '2REJC23RKVXgHsJRaOiVRSRfgVKbKU.png', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `slug`, `parent`, `activo`, `orden`) VALUES
(1, 'Fianzas', 'fianzas', 0, 1, 666),
(2, 'Seguros', 'seguros', 0, 1, 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracions`
--

CREATE TABLE `configuracions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodspag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypalemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitentepass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitentehost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitenteport` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitenteseguridad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `envio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `envioglobal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iva` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incremento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configuracions`
--

INSERT INTO `configuracions` (`id`, `title`, `description`, `prodspag`, `paypalemail`, `destinatario`, `destinatario2`, `remitente`, `remitentepass`, `remitentehost`, `remitenteport`, `remitenteseguridad`, `telefono`, `whatsapp`, `whatsapp2`, `facebook`, `instagram`, `youtube`, `linkedin`, `envio`, `envioglobal`, `iva`, `incremento`, `mapa`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'Milertek', '', NULL, NULL, 'michaelwozial@gmail.com', 'michaelwozial@outlook.com', 'michael@wozial.com', 'zCmfxQEz&wTM', 'host.hddpool.net', '465', NULL, '3331884040, 3331883180', '3318940000', '', 'https://www.facebook.com/sektoralarmas', '', NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.84572216016!2d-103.3837752!3d20.675854700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae6d6d5fd08d%3A0x439d71abb16f0dda!2sSektor!5e0!3m2!1ses-419!2smx!4v1668797393100!5m2!1ses-419!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Calzada de los Cipreses 7164 Zapopan, México', NULL, '2023-07-25 23:09:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numext` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numint` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrecalles` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colonia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Mexico',
  `favorito` tinyint(1) DEFAULT NULL,
  `user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos`
--

CREATE TABLE `elementos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `elemento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenido` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `seccion` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `elementos`
--

INSERT INTO `elementos` (`id`, `elemento`, `texto`, `imagen`, `url`, `contenido`, `activo`, `orden`, `seccion`) VALUES
(2, 'texto ', 'Sectores de Especialidad', NULL, NULL, 0, 1, 666, 1),
(3, 'Nosotros titulo', 'Nosotros', NULL, NULL, 0, 1, 666, 1),
(4, 'Nosotros descripcion', 'Empresa con más de 12 años de experiencia en Diseño, Desarrollo, Fabricación e Innovación Tecnológica aglutinada por una empresa profesional de suministro y mantenimiento de equipos', NULL, NULL, 0, 1, 666, 1),
(5, 'Nosotros Imagen', '', 'CdJn909dT6K4mX1JIx2Mc5WCgAWugQ.png', NULL, 1, 1, 666, 1),
(6, 'Servicios titulo', 'Servicios', NULL, NULL, 0, 1, 666, 1),
(7, 'Servicios fondo', NULL, NULL, NULL, 1, 1, 666, 1),
(8, 'Servicios descripción', 'Somos Milertek, una empresa mexicana con más de 12 años de experiencia en Diseño, Desarrollo, Manufactura e Innovación Tecnológica aglutinada por una empresa profesional de suministro y mantenimiento de equipos.\n\nEn 2010, una empresa de CM, ahora transformada en una empresa de soluciones llave en mano. Hemos ido aumentando capacidades, sumando experiencia a lo largo de los años a través de la fusión de empresas para diferentes áreas de especialización en la Industria Electrónica.', NULL, NULL, 0, 1, 666, 1),
(9, 'Imagen grande', NULL, 'KkX8kaJhrkNeKh80Xjak72hLNxjRs6.png', NULL, 1, 1, 666, 1),
(10, 'Productos Texto', 'Empresa con más de 12 años de experiencia en Diseño, Desarrollo, Fabricación e Innovación Tecnológica aglutinada por una empresa profesional de suministro y mantenimiento de equipos', NULL, NULL, 0, 1, 666, 4),
(11, 'Servicios Titulo', 'Servicios', NULL, NULL, 0, 1, 666, 2),
(12, 'Servicio Texto', 'Una empresa mexicana con más de 12 años de experiencia en Diseño, Desarrollo, Manufactura e Innovación Tecnológica sumada a una empresa profesional de suministro y mantenimiento de equipos', NULL, NULL, 0, 1, 666, 2),
(13, 'Servicio Imágen', NULL, '76mzRQrSjytt73EQ0dZIv7LgSUypJt.png', NULL, 1, 1, 666, 2),
(14, 'Sectores', 'Sectores de Especialidad', NULL, NULL, 0, 1, 666, 2),
(15, 'Experiencia', '12 años de experiencia', NULL, NULL, 0, 1, 666, 5),
(16, 'Titulo Historia', 'Historia', NULL, NULL, 0, 1, 666, 5),
(17, 'Descripción Historia', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio maiores aliquid, ipsam assumenda quisquam ipsum? Earum consequuntur delectus esse necessitatibus saepe odit ullam blanditiis hic. Dolor perspiciatis nobis voluptates exercitationem molestiae sed dolorem non consequatur autem eveniet vero excepturi optio labore fugiat nesciunt enim maxime, reiciendis vel debitis! Totam odio omnis facere cum officia. Delectus provident et nisi natus non accusamus aliquam soluta deserunt illum perspiciatis blanditiis ratione veritatis eveniet architecto iusto, dolores assumenda doloribus nesciunt ea eos eum accusantium officia tempora. Cumque, architecto illum ullam ex quibusdam magni, deleniti laborum, eos assumenda animi alias consequuntur ipsum! Pariatur reprehenderit repellendus necessitatibus fuga, nesciunt ipsa fugiat inventore animi quisquam dolorem, repudiandae minima aspernatur ducimus saepe similique, molestias hic dolorum eius suscipit voluptates perferendis voluptatem delectus facere dignissimos. Dicta, soluta odit? Temporibus mollitia nostrum veniam, perspiciatis quasi aliquid molestiae quidem nam vero laborum asperiores eaque inventore velit eveniet nemo voluptates suscipit, corrupti et voluptatibus molestias dignissimos aspernatur libero. Iste cum labore in quae maiores dolorem, eligendi totam similique at sequi magni vel esse, error doloribus magnam commodi. Quia explicabo cupiditate, maxime, cum tempora blanditiis consequatur nesciunt suscipit molestias, deserunt rem harum quas quod! Ea obcaecati dolore fugiat soluta sapiente, laborum aliquid illum!', NULL, NULL, 0, 1, 666, 5),
(18, 'Imagen Nosotros', NULL, 'VBUP5jOMD7N7RWFam7pssnVLWPLZRn.png', NULL, 1, 1, 666, 5),
(19, 'texto linea tiempo', 'Proyecto Conjunto', NULL, NULL, 0, 1, 666, 5),
(20, 'Icono Mision', NULL, 'TVtKCabbVQ0FB5qGHelSzW7eZlFLHw.png', NULL, 1, 1, 666, 5),
(21, 'Titulo Mision', 'Misión', NULL, NULL, 0, 1, 666, 5),
(22, 'Descripcion Mision', 'Atraer y retener clientes a través de productos y servicios con los mejores estándares de Calidad, Costo, Entrega a tiempo y Servicio al Cliente.', NULL, NULL, 0, 1, 666, 5),
(23, 'Icono Vision', NULL, 'xHtIKLT0UJFastaMLznzUsLK0Fb6AP.png', NULL, 1, 1, 666, 5),
(24, 'Titulo Vision', 'Visión', NULL, NULL, 0, 1, 666, 5),
(25, 'Descripcion Vision', 'Solución \"One-Stop Shop\", para ser la empresa mexicana #1 en la industria Electrónica, exitosa y respetada en I+D+i y servicios de Manufactura.', NULL, NULL, 0, 1, 666, 5),
(26, 'Icono Values', NULL, 'x5WGEjhm0bZfSmD5QhXY4ZRuCFkvEU.png', NULL, 1, 1, 666, 5),
(27, 'Titulo Values', 'Valores', NULL, NULL, 0, 1, 666, 5),
(28, 'Descripcion Values', 'Responsabilidad, Empatía y Honestidad Asumimos compromisos y cumplimos los objetivos respetando a nuestros empleados, a nuestros clientes, al medio ambiente y al entorno social.', NULL, NULL, 0, 1, 666, 5),
(29, 'Contacto Texto', 'Empresa con más de 12 años de experiencia en Diseño, Desarrollo, Manufactura e Innovación Tecnológica unida a una empresa profesional de suministro y mantenimiento de equipos', NULL, NULL, 0, 1, 666, 6),
(30, 'EN Nosotros descripcion', 'Company with over 12 years experience Design, Development, Manufacturing and Tech Innovation cuopled by a professional equipment supply and maintenance company', NULL, NULL, 0, 1, 666, 7),
(31, 'EN Servicios descripción', 'We are Milertek, a Mexican company with over 12 years experience Design, Development, Manufacturing and Tech Innovation cuopled by a professional equipment supply and maintenance company.\n\nBack in 2010 a CM company, now transformed into a Turn-Key solution company. We have been increasing capabilities, adding experience along the years through the merger of companies for different areas of specialization int the Electronic Industry.', NULL, NULL, 0, 1, 666, 7),
(32, 'Productos Texto', 'Company with over 12 years experience Design, Development, Manufacturing and Tech Innovation cuopled by a professional equipment supply and maintenance company', NULL, NULL, 0, 1, 666, 9),
(33, 'EN Servicios Titulo', 'Services', NULL, NULL, 0, 1, 666, 8),
(34, 'EN Servicios Texto', 'A Mexican company with over 12 years experience in Design, Development, Manufacturing and Tech Innovation coupled by a professional equipment supply and maintenance company', NULL, NULL, 0, 1, 666, 8),
(35, 'EN Experiencia', '12 years experience', NULL, NULL, 0, 1, 666, 10),
(36, 'EN Titulo Historia', 'History', NULL, NULL, 0, 1, 666, 11),
(37, 'EN Descripción Historia', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio maiores aliquid, ipsam assumenda quisquam ipsum? Earum consequuntur delectus esse necessitatibus saepe odit ullam blanditiis hic. Dolor perspiciatis nobis voluptates exercitationem molestiae sed dolorem non consequatur autem eveniet vero excepturi optio labore fugiat nesciunt enim maxime, reiciendis vel debitis! Totam odio omnis facere cum officia. Delectus provident et nisi natus non accusamus aliquam soluta deserunt illum perspiciatis blanditiis ratione veritatis eveniet architecto iusto, dolores assumenda doloribus nesciunt ea eos eum accusantium officia tempora. Cumque, architecto illum ullam ex quibusdam magni, deleniti laborum, eos assumenda animi alias consequuntur ipsum! Pariatur reprehenderit repellendus necessitatibus fuga, nesciunt ipsa fugiat inventore animi quisquam dolorem, repudiandae minima aspernatur ducimus saepe similique, molestias hic dolorum eius suscipit voluptates perferendis voluptatem delectus facere dignissimos. Dicta, soluta odit? Temporibus mollitia nostrum veniam, perspiciatis quasi aliquid molestiae quidem nam vero laborum asperiores eaque inventore velit eveniet nemo voluptates suscipit, corrupti et voluptatibus molestias dignissimos aspernatur libero. Iste cum labore in quae maiores dolorem, eligendi totam similique at sequi magni vel esse, error doloribus magnam commodi. Quia explicabo cupiditate, maxime, cum tempora blanditiis consequatur nesciunt suscipit molestias, deserunt rem harum quas quod! Ea obcaecati dolore fugiat soluta sapiente, laborum aliquid illum!', NULL, NULL, 0, 1, 666, 10),
(38, 'EN Texto Linea tiempo', 'Joint Venture', NULL, NULL, 0, 1, 666, 10),
(39, 'EN Misión', 'Mission', NULL, NULL, 0, 1, 666, 10),
(40, 'EN Misión Texto', 'Attract and retain customers through products and services with the best standards of Quality, Cost, On-time Delivery and Customer Service.', NULL, NULL, 0, 1, 666, 10),
(41, 'EN Visión', 'Vission', NULL, NULL, 0, 1, 666, 10),
(42, 'EN Visión Texto', '\"One-Stop Shop\" solution, to be the #1 Mexican company in the Electronics industry, successful and respected in R+D+i and Manufacturing services.', NULL, NULL, 0, 1, 666, 10),
(43, 'EN Values ', 'Values', NULL, NULL, 0, 1, 666, 10),
(44, 'EN Values Texto', 'Responsibility, Empathy and Honesty We assume commitments and meet the objectives showing respect for our employees, for our customers, for the enviroment and the social enviroments.', NULL, NULL, 0, 1, 666, 10),
(45, 'EN Contacto Texto', 'Company with over 12 years experience in Design, Development, Manufacturing and Tech innovation coupled by a professional equipment supply and maintenance company', NULL, NULL, 0, 1, 666, 11),
(46, 'ES Contacto Texto', 'Empresa con más de 12 años de experiencia en Diseño, Desarrollo, Manufactura e Innovación Tecnológica unida a una empresa profesional de suministro y mantenimiento de equipos', NULL, NULL, 0, 1, 666, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `razon_social` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numint` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colonia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pregunta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respuesta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_13_163806_create_admins_table', 1),
(5, '2020_10_14_181530_create_configuracions_table', 1),
(6, '2020_12_08_170359_create_carrusels_table', 1),
(7, '2020_12_09_193424_create_politicas_table', 1),
(8, '2020_12_16_000636_create_faqs_table', 1),
(9, '2021_02_02_175759_create_seccions_table', 1),
(10, '2021_02_02_175823_create_elementos_table', 1),
(13, '2021_10_27_064531_create_categorias_table', 2),
(19, '2021_04_01_184932_create_productos_table', 3),
(20, '2021_04_02_200200_create_productos_photos_table', 3),
(24, '2022_07_18_203052_create_vacantes_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_caracteristica_productos`
--

CREATE TABLE `m_caracteristica_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` int(11) NOT NULL,
  `caracteristica` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caracteristica_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `m_caracteristica_productos`
--

INSERT INTO `m_caracteristica_productos` (`id`, `producto`, `caracteristica`, `caracteristica_en`, `created_at`, `updated_at`) VALUES
(44, 15, 'hgj', '', '2023-07-14 22:25:12', '2023-07-14 22:25:12'),
(46, 15, 'jhg', '', '2023-07-14 22:25:12', '2023-07-14 22:25:12'),
(50, 15, 'gffdsg', '', '2023-07-17 22:20:24', '2023-07-17 22:20:24'),
(51, 16, 'Característica 1', '', '2023-07-17 22:21:26', '2023-07-18 04:19:28'),
(52, 16, 'Característica 2', '', '2023-07-17 22:21:26', '2023-07-18 04:16:53'),
(53, 16, 'Característica 3', '', '2023-07-17 22:21:26', '2023-07-18 04:16:56'),
(54, 16, 'Característica 4', '', '2023-07-17 22:21:26', '2023-07-18 04:19:50'),
(55, 17, 'caracteristica 1', '', '2023-07-18 00:33:00', '2023-07-18 00:33:00'),
(56, 17, 'caracteristica 2', '', '2023-07-18 00:33:00', '2023-07-18 00:33:00'),
(57, 17, 'caracteristica 3', '', '2023-07-18 00:33:01', '2023-07-18 00:33:01'),
(58, 17, 'caracteristica 4', '', '2023-07-18 00:33:01', '2023-07-18 00:33:01'),
(59, 17, 'caracteristica 5', '', '2023-07-18 00:33:01', '2023-07-18 00:33:01'),
(60, 17, 'caracteristica 6', '', '2023-07-18 00:33:01', '2023-07-18 00:33:01'),
(61, 16, 'Característica 5', '', '2023-07-18 04:34:46', '2023-07-18 04:34:46'),
(62, 16, 'Característica 6', '', '2023-07-18 04:34:46', '2023-07-18 04:34:46'),
(63, 16, 'Característica 7', '', '2023-07-18 04:34:46', '2023-07-18 04:34:46'),
(64, 16, 'Característica 8', '', '2023-07-18 04:34:46', '2023-07-18 04:34:46'),
(65, 16, 'Característica 9', '', '2023-07-18 04:34:47', '2023-07-18 04:34:47'),
(66, 16, 'Característica 10', '', '2023-07-18 04:34:47', '2023-07-18 04:34:47'),
(67, 16, 'Característica 11', '', '2023-07-18 04:34:47', '2023-07-18 04:34:47'),
(68, 16, 'Característica 12', '', '2023-07-18 04:35:00', '2023-07-18 04:35:00'),
(69, 18, 'caracteristica 11', 'characteristic 1', '2023-07-26 00:30:14', '2023-07-26 00:44:41'),
(70, 18, 'caracteristica 22', 'characteristic 2', '2023-07-26 00:30:14', '2023-07-26 00:44:39'),
(72, 18, 'caracteristica 4', 'characteristic 43', '2023-07-26 00:30:14', '2023-07-26 00:45:46'),
(73, 19, 'caracteristica 1', 'characteristic 1', '2023-07-26 02:20:46', '2023-07-26 02:20:46'),
(74, 19, 'caracteristica 2', 'characteristic 2', '2023-07-26 02:20:47', '2023-07-26 02:20:47'),
(75, 19, 'caracteristica 3', 'characteristic 3', '2023-07-26 02:20:47', '2023-07-26 02:20:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_categorias`
--

CREATE TABLE `m_categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `m_categorias`
--

INSERT INTO `m_categorias` (`id`, `categoria`, `categoria_en`, `icono`, `created_at`, `updated_at`) VALUES
(3, 'Industria Electrónica', 'Electronic Industry', 'cF6X3WWrOW2dcQDbRvIrxBGfGfkaNS.png', '2023-07-13 00:43:12', '2023-07-25 23:41:14'),
(4, 'IoT', 'IoT', 'BZCZ5LHBBta5mnekAoBD0t6BkPZO86.png', '2023-07-13 00:43:22', '2023-07-13 00:47:31'),
(5, 'Automotriz', 'automotive\n', 'UfONZsIEDjqizuGxPusyOID1Vpeu1X.png', '2023-07-13 00:43:32', '2023-07-13 00:47:42'),
(6, 'Industrial', 'Industrial', 'EtV41pX91E0ZeByGgUUhWGYIgntQw3.png', '2023-07-13 00:44:03', '2023-07-13 00:47:52'),
(7, 'Comunicaciones', 'Comunications', 'TYG96FUMGrikGN3iy5s6rwqNuFtExq.png', '2023-07-13 00:44:16', '2023-07-13 00:47:59'),
(8, 'Aeroespacial', 'Aeroespacial', 'zsbovFODfG2h0CRwEmDZecTSiBa8CE.png', '2023-07-13 00:44:26', '2023-07-13 00:48:06'),
(9, 'Productos de consumo', 'Consumer Products\n', 'kpZjGdlPBX5GduaJBWC4sKLXw2SOqu.png', '2023-07-13 00:44:32', '2023-07-13 00:48:13'),
(10, 'Médico', 'Medicine', 'V9SnAdE8EvEMhcZ85FbiuhEh6BLCCu.png', '2023-07-13 00:44:46', '2023-07-25 23:43:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_certificacions`
--

CREATE TABLE `m_certificacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `m_certificacions`
--

INSERT INTO `m_certificacions` (`id`, `titulo`, `descripcion`, `descripcion_en`, `icono`, `created_at`, `updated_at`) VALUES
(1, 'ULFileE361996-vOL6', 'Party Site - 2884895', NULL, NULL, '2023-07-14 00:58:50', '2023-07-14 00:58:50'),
(2, 'ISO9001:2008', 'In process - Following and meeting requirements', NULL, NULL, '2023-07-14 03:39:51', '2023-07-14 03:39:51'),
(3, 'IATF16949', 'Following and meeting requirements (APQP)', NULL, NULL, '2023-07-14 03:40:18', '2023-07-14 03:40:18'),
(4, 'IPC-A-610H', 'Acceptability of Electronic Assemblies', NULL, NULL, '2023-07-14 03:41:52', '2023-07-14 03:41:52'),
(5, 'IPC7711/21C1', 'Reword, Modification and Repair of Electronic Assemblies', NULL, NULL, '2023-07-14 03:42:14', '2023-07-14 03:42:14'),
(6, 'IPCJ-STD001H', 'Requirements for Soldered Electrical and Electronic Assembles', NULL, NULL, '2023-07-14 03:42:31', '2023-07-14 03:42:31'),
(7, 'IPC/WHMA-A-620', 'Acceptance for Cable and Wire Harness Aseembles', NULL, NULL, '2023-07-14 03:42:48', '2023-07-14 03:42:48'),
(8, 'IPC/WHMA-A-620', 'Acceptance for Cable and Wire Harness Aseembles', NULL, NULL, '2023-07-14 03:43:02', '2023-07-14 03:43:02'),
(9, 'gfdgfdg', 'gfdgfg', NULL, NULL, '2023-07-19 23:49:19', '2023-07-19 23:49:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_clientes`
--

CREATE TABLE `m_clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `m_clientes`
--

INSERT INTO `m_clientes` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, '4M8uo8IVKSoJeyc6Zj0FY2Cc7t5djO.png', '2023-07-13 00:00:58', '2023-07-13 00:00:58'),
(2, 'Mh5xpqZxMZbiILCi4YjKTObRByoYXD.png', '2023-07-13 00:01:12', '2023-07-13 00:01:12'),
(3, 'qEHZYPZNiOAeDvg1PeByv07INfE8S0.png', '2023-07-13 00:01:22', '2023-07-13 00:01:22'),
(5, 'BoEzSUCLnEYS6vwKTXAGyCd8uoSGM1.png', '2023-07-13 00:07:56', '2023-07-13 00:07:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_fechas`
--

CREATE TABLE `m_fechas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anio` int(11) NOT NULL,
  `texto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `m_fechas`
--

INSERT INTO `m_fechas` (`id`, `anio`, `texto`, `texto_en`, `created_at`, `updated_at`) VALUES
(1, 2010, 'Born the first OEMS Electronics for Manufacturing Services', NULL, '2023-07-14 01:01:08', '2023-07-14 04:07:22'),
(2, 2013, 'New facility start-up for Manufacturing Services (SMT+PTH)', NULL, NULL, NULL),
(3, 2015, 'Team increased based in customer necessity for Product Design and Development, adding capacity', NULL, NULL, NULL),
(4, 2021, 'Company rebranded to Milertek in a joint venture between OEMS Electronics and HENGI', NULL, NULL, NULL),
(5, 2021, 'Company rebranded to Milertek in a joint venture between OEMS Electronics and HENGI', NULL, NULL, NULL),
(6, 2021, 'Company rebranded to Milertek in a joint venture between OEMS Electronics and HENGI', NULL, NULL, NULL),
(7, 2034, 'dssfdf', NULL, '2023-07-24 22:03:56', '2023-07-24 22:03:56'),
(8, 2045, 'terterte', NULL, '2023-07-24 22:04:13', '2023-07-24 22:04:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_galeria_productos`
--

CREATE TABLE `m_galeria_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` int(11) NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `m_galeria_productos`
--

INSERT INTO `m_galeria_productos` (`id`, `producto`, `foto`, `created_at`, `updated_at`) VALUES
(1, 16, 'zg6KeKWJ7X9evPoA8SBSR7tA18KaMp.png', '2023-07-14 23:49:03', '2023-07-14 23:49:03'),
(3, 16, 'pC1jwYjN6mEK4pjTgnDqbM03Q7BoLL.png', '2023-07-15 03:59:40', '2023-07-15 03:59:40'),
(4, 16, 'eUJgksKV6ZxxO1vIrhZtru2CIwJlpQ.png', '2023-07-15 03:59:57', '2023-07-15 03:59:57'),
(5, 16, 'yCaPnGhvUnv99tYVeo3Yo9wx9Fizyf.png', '2023-07-15 04:00:14', '2023-07-15 04:00:14'),
(6, 16, 'xF5UUc9Vxucr8uRTPJmUsFXQUX6W6r.png', '2023-07-15 04:00:27', '2023-07-15 04:00:27'),
(8, 17, '1px2mbUpJxwD3i73TDRljWFSyLoThS.png', '2023-07-18 00:33:32', '2023-07-18 00:33:32'),
(9, 17, 'JbBzJKw97j1krDSK1rS57fVcJvGOid.png', '2023-07-18 00:33:53', '2023-07-18 00:33:53'),
(10, 17, '6CjxJyLgM3VXX8wfQHJTXBtLnMyCcL.png', '2023-07-18 00:34:08', '2023-07-18 00:34:08'),
(11, 17, 'IkMG2cF9ahUhUK8wjO3WwyyRo5lv2S.png', '2023-07-18 00:34:41', '2023-07-18 00:34:41'),
(12, 17, 'EidciXRrMMMwri07qSSRYN8mAEO6jW.png', '2023-07-18 00:34:54', '2023-07-18 00:34:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_orders`
--

CREATE TABLE `m_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `m_orders`
--

INSERT INTO `m_orders` (`id`, `user_id`, `cart`, `address`, `name`, `payment_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'O:11:\"App\\Carrito\":29:{s:5:\"items\";a:3:{i:15;a:3:{s:3:\"qty\";i:1;s:5:\"price\";d:111;s:4:\"item\";O:14:\"App\\MProductos\":26:{s:11:\"\0*\0fillable\";a:9:{i:0;s:9:\"categoria\";i:1;s:6:\"nombre\";i:2;s:11:\"descripcion\";i:3;s:9:\"nombre_en\";i:4;s:14:\"descripcion_en\";i:5;s:10:\"precio_mxn\";i:6;s:10:\"precio_usd\";i:7;s:13:\"ficha_tecnica\";i:8;s:14:\"foto_principal\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:11:\"m_productos\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:15;s:9:\"categoria\";i:3;s:6:\"nombre\";s:10:\"Producto 1\";s:11:\"descripcion\";s:747:\"Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.\";s:9:\"nombre_en\";s:9:\"Product 1\";s:14:\"descripcion_en\";s:11:\"Description\";s:10:\"precio_mxn\";d:111;s:10:\"precio_usd\";d:22;s:13:\"ficha_tecnica\";s:34:\"9MhpX5b2qh1cLUMwFdHVSgfXjsUdvp.pdf\";s:14:\"foto_principal\";s:34:\"K41dYccqPjTfE4xf7FRMUO90hAdG0M.png\";s:10:\"created_at\";s:19:\"2023-07-14 16:25:12\";s:10:\"updated_at\";s:19:\"2023-07-17 21:51:51\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:15;s:9:\"categoria\";i:3;s:6:\"nombre\";s:10:\"Producto 1\";s:11:\"descripcion\";s:747:\"Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.\";s:9:\"nombre_en\";s:9:\"Product 1\";s:14:\"descripcion_en\";s:11:\"Description\";s:10:\"precio_mxn\";d:111;s:10:\"precio_usd\";d:22;s:13:\"ficha_tecnica\";s:34:\"9MhpX5b2qh1cLUMwFdHVSgfXjsUdvp.pdf\";s:14:\"foto_principal\";s:34:\"K41dYccqPjTfE4xf7FRMUO90hAdG0M.png\";s:10:\"created_at\";s:19:\"2023-07-14 16:25:12\";s:10:\"updated_at\";s:19:\"2023-07-17 21:51:51\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:19;a:3:{s:3:\"qty\";i:1;s:5:\"price\";d:22;s:4:\"item\";O:14:\"App\\MProductos\":26:{s:11:\"\0*\0fillable\";a:9:{i:0;s:9:\"categoria\";i:1;s:6:\"nombre\";i:2;s:11:\"descripcion\";i:3;s:9:\"nombre_en\";i:4;s:14:\"descripcion_en\";i:5;s:10:\"precio_mxn\";i:6;s:10:\"precio_usd\";i:7;s:13:\"ficha_tecnica\";i:8;s:14:\"foto_principal\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:11:\"m_productos\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:19;s:9:\"categoria\";i:3;s:6:\"nombre\";s:3:\"esp\";s:11:\"descripcion\";s:3:\"esp\";s:9:\"nombre_en\";s:4:\"test\";s:14:\"descripcion_en\";s:4:\"test\";s:10:\"precio_mxn\";d:22;s:10:\"precio_usd\";d:33;s:13:\"ficha_tecnica\";s:34:\"9SYFqdz8mHzcoiyXpa08qbuq7fj6Ru.pdf\";s:14:\"foto_principal\";s:34:\"HpwYEtvpboerb4KVjfjDGlCX4ysv65.png\";s:10:\"created_at\";s:19:\"2023-07-25 20:20:46\";s:10:\"updated_at\";s:19:\"2023-07-25 20:20:47\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:19;s:9:\"categoria\";i:3;s:6:\"nombre\";s:3:\"esp\";s:11:\"descripcion\";s:3:\"esp\";s:9:\"nombre_en\";s:4:\"test\";s:14:\"descripcion_en\";s:4:\"test\";s:10:\"precio_mxn\";d:22;s:10:\"precio_usd\";d:33;s:13:\"ficha_tecnica\";s:34:\"9SYFqdz8mHzcoiyXpa08qbuq7fj6Ru.pdf\";s:14:\"foto_principal\";s:34:\"HpwYEtvpboerb4KVjfjDGlCX4ysv65.png\";s:10:\"created_at\";s:19:\"2023-07-25 20:20:46\";s:10:\"updated_at\";s:19:\"2023-07-25 20:20:47\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:17;a:3:{s:3:\"qty\";i:1;s:5:\"price\";d:555;s:4:\"item\";O:14:\"App\\MProductos\":26:{s:11:\"\0*\0fillable\";a:9:{i:0;s:9:\"categoria\";i:1;s:6:\"nombre\";i:2;s:11:\"descripcion\";i:3;s:9:\"nombre_en\";i:4;s:14:\"descripcion_en\";i:5;s:10:\"precio_mxn\";i:6;s:10:\"precio_usd\";i:7;s:13:\"ficha_tecnica\";i:8;s:14:\"foto_principal\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:11:\"m_productos\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:17;s:9:\"categoria\";i:3;s:6:\"nombre\";s:17:\"Producto metalico\";s:11:\"descripcion\";s:339:\"El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.\";s:9:\"nombre_en\";s:0:\"\";s:14:\"descripcion_en\";s:0:\"\";s:10:\"precio_mxn\";d:555;s:10:\"precio_usd\";d:26;s:13:\"ficha_tecnica\";s:34:\"CGxqqFoHeDrG5zSfMkao168N7dRnAP.pdf\";s:14:\"foto_principal\";s:34:\"x7GAts2yYmogUac8s9DCi3hHtqakLa.png\";s:10:\"created_at\";s:19:\"2023-07-17 18:33:00\";s:10:\"updated_at\";s:19:\"2023-07-17 21:52:12\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:17;s:9:\"categoria\";i:3;s:6:\"nombre\";s:17:\"Producto metalico\";s:11:\"descripcion\";s:339:\"El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.\";s:9:\"nombre_en\";s:0:\"\";s:14:\"descripcion_en\";s:0:\"\";s:10:\"precio_mxn\";d:555;s:10:\"precio_usd\";d:26;s:13:\"ficha_tecnica\";s:34:\"CGxqqFoHeDrG5zSfMkao168N7dRnAP.pdf\";s:14:\"foto_principal\";s:34:\"x7GAts2yYmogUac8s9DCi3hHtqakLa.png\";s:10:\"created_at\";s:19:\"2023-07-17 18:33:00\";s:10:\"updated_at\";s:19:\"2023-07-17 21:52:12\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";d:688;s:13:\"\0*\0connection\";N;s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:0;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:0:{}s:11:\"\0*\0original\";a:0:{}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}', 'Avenida siempre viva', 'Michael Eduardo Sandoval Pérez', 'ch_3NcxHsKuq6E1vXOy11yLQBfq', '2023-08-09 03:18:03', '2023-08-09 03:18:03'),
(2, 2, 'O:11:\"App\\Carrito\":29:{s:5:\"items\";a:2:{i:15;a:3:{s:3:\"qty\";i:2;s:5:\"price\";d:222;s:4:\"item\";O:14:\"App\\MProductos\":26:{s:11:\"\0*\0fillable\";a:9:{i:0;s:9:\"categoria\";i:1;s:6:\"nombre\";i:2;s:11:\"descripcion\";i:3;s:9:\"nombre_en\";i:4;s:14:\"descripcion_en\";i:5;s:10:\"precio_mxn\";i:6;s:10:\"precio_usd\";i:7;s:13:\"ficha_tecnica\";i:8;s:14:\"foto_principal\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:11:\"m_productos\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:15;s:9:\"categoria\";i:3;s:6:\"nombre\";s:10:\"Producto 1\";s:11:\"descripcion\";s:747:\"Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.\";s:9:\"nombre_en\";s:9:\"Product 1\";s:14:\"descripcion_en\";s:11:\"Description\";s:10:\"precio_mxn\";d:111;s:10:\"precio_usd\";d:22;s:13:\"ficha_tecnica\";s:34:\"9MhpX5b2qh1cLUMwFdHVSgfXjsUdvp.pdf\";s:14:\"foto_principal\";s:34:\"K41dYccqPjTfE4xf7FRMUO90hAdG0M.png\";s:10:\"created_at\";s:19:\"2023-07-14 16:25:12\";s:10:\"updated_at\";s:19:\"2023-07-17 21:51:51\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:15;s:9:\"categoria\";i:3;s:6:\"nombre\";s:10:\"Producto 1\";s:11:\"descripcion\";s:747:\"Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.\";s:9:\"nombre_en\";s:9:\"Product 1\";s:14:\"descripcion_en\";s:11:\"Description\";s:10:\"precio_mxn\";d:111;s:10:\"precio_usd\";d:22;s:13:\"ficha_tecnica\";s:34:\"9MhpX5b2qh1cLUMwFdHVSgfXjsUdvp.pdf\";s:14:\"foto_principal\";s:34:\"K41dYccqPjTfE4xf7FRMUO90hAdG0M.png\";s:10:\"created_at\";s:19:\"2023-07-14 16:25:12\";s:10:\"updated_at\";s:19:\"2023-07-17 21:51:51\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:19;a:3:{s:3:\"qty\";i:1;s:5:\"price\";d:22;s:4:\"item\";O:14:\"App\\MProductos\":26:{s:11:\"\0*\0fillable\";a:9:{i:0;s:9:\"categoria\";i:1;s:6:\"nombre\";i:2;s:11:\"descripcion\";i:3;s:9:\"nombre_en\";i:4;s:14:\"descripcion_en\";i:5;s:10:\"precio_mxn\";i:6;s:10:\"precio_usd\";i:7;s:13:\"ficha_tecnica\";i:8;s:14:\"foto_principal\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:11:\"m_productos\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:19;s:9:\"categoria\";i:3;s:6:\"nombre\";s:3:\"esp\";s:11:\"descripcion\";s:3:\"esp\";s:9:\"nombre_en\";s:4:\"test\";s:14:\"descripcion_en\";s:4:\"test\";s:10:\"precio_mxn\";d:22;s:10:\"precio_usd\";d:33;s:13:\"ficha_tecnica\";s:34:\"9SYFqdz8mHzcoiyXpa08qbuq7fj6Ru.pdf\";s:14:\"foto_principal\";s:34:\"HpwYEtvpboerb4KVjfjDGlCX4ysv65.png\";s:10:\"created_at\";s:19:\"2023-07-25 20:20:46\";s:10:\"updated_at\";s:19:\"2023-07-25 20:20:47\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:19;s:9:\"categoria\";i:3;s:6:\"nombre\";s:3:\"esp\";s:11:\"descripcion\";s:3:\"esp\";s:9:\"nombre_en\";s:4:\"test\";s:14:\"descripcion_en\";s:4:\"test\";s:10:\"precio_mxn\";d:22;s:10:\"precio_usd\";d:33;s:13:\"ficha_tecnica\";s:34:\"9SYFqdz8mHzcoiyXpa08qbuq7fj6Ru.pdf\";s:14:\"foto_principal\";s:34:\"HpwYEtvpboerb4KVjfjDGlCX4ysv65.png\";s:10:\"created_at\";s:19:\"2023-07-25 20:20:46\";s:10:\"updated_at\";s:19:\"2023-07-25 20:20:47\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";d:244;s:13:\"\0*\0connection\";N;s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:0;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:0:{}s:11:\"\0*\0original\";a:0:{}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}', 'Avenida siempre viva', 'Michael Eduardo Sandoval Pérez', 'ch_3Ncxi2Kuq6E1vXOy05hloRcV', '2023-08-09 03:45:04', '2023-08-09 03:45:04'),
(3, 5, 'O:11:\"App\\Carrito\":29:{s:5:\"items\";a:1:{i:15;a:3:{s:3:\"qty\";i:1;s:5:\"price\";d:111;s:4:\"item\";O:14:\"App\\MProductos\":26:{s:11:\"\0*\0fillable\";a:9:{i:0;s:9:\"categoria\";i:1;s:6:\"nombre\";i:2;s:11:\"descripcion\";i:3;s:9:\"nombre_en\";i:4;s:14:\"descripcion_en\";i:5;s:10:\"precio_mxn\";i:6;s:10:\"precio_usd\";i:7;s:13:\"ficha_tecnica\";i:8;s:14:\"foto_principal\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:11:\"m_productos\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:12:{s:2:\"id\";i:15;s:9:\"categoria\";i:3;s:6:\"nombre\";s:10:\"Producto 1\";s:11:\"descripcion\";s:747:\"Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.\";s:9:\"nombre_en\";s:9:\"Product 1\";s:14:\"descripcion_en\";s:11:\"Description\";s:10:\"precio_mxn\";d:111;s:10:\"precio_usd\";d:22;s:13:\"ficha_tecnica\";s:34:\"9MhpX5b2qh1cLUMwFdHVSgfXjsUdvp.pdf\";s:14:\"foto_principal\";s:34:\"K41dYccqPjTfE4xf7FRMUO90hAdG0M.png\";s:10:\"created_at\";s:19:\"2023-07-14 16:25:12\";s:10:\"updated_at\";s:19:\"2023-07-17 21:51:51\";}s:11:\"\0*\0original\";a:12:{s:2:\"id\";i:15;s:9:\"categoria\";i:3;s:6:\"nombre\";s:10:\"Producto 1\";s:11:\"descripcion\";s:747:\"Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.\";s:9:\"nombre_en\";s:9:\"Product 1\";s:14:\"descripcion_en\";s:11:\"Description\";s:10:\"precio_mxn\";d:111;s:10:\"precio_usd\";d:22;s:13:\"ficha_tecnica\";s:34:\"9MhpX5b2qh1cLUMwFdHVSgfXjsUdvp.pdf\";s:14:\"foto_principal\";s:34:\"K41dYccqPjTfE4xf7FRMUO90hAdG0M.png\";s:10:\"created_at\";s:19:\"2023-07-14 16:25:12\";s:10:\"updated_at\";s:19:\"2023-07-17 21:51:51\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:111;s:13:\"\0*\0connection\";N;s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:0;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:0:{}s:11:\"\0*\0original\";a:0:{}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}', 'Avenida siempre viva', 'Michael Eduardo Sandoval Pérez', 'ch_3NcxnTKuq6E1vXOy1hF2cpqT', '2023-08-09 03:50:42', '2023-08-09 03:50:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_productos`
--

CREATE TABLE `m_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_mxn` float DEFAULT NULL,
  `precio_usd` float DEFAULT NULL,
  `ficha_tecnica` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_principal` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `m_productos`
--

INSERT INTO `m_productos` (`id`, `categoria`, `nombre`, `descripcion`, `nombre_en`, `descripcion_en`, `precio_mxn`, `precio_usd`, `ficha_tecnica`, `foto_principal`, `created_at`, `updated_at`) VALUES
(15, 3, 'Producto 1', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'Product 1', 'Description', 111, 22, '9MhpX5b2qh1cLUMwFdHVSgfXjsUdvp.pdf', 'K41dYccqPjTfE4xf7FRMUO90hAdG0M.png', '2023-07-14 22:25:12', '2023-07-18 03:51:51'),
(16, 6, 'rwrewr', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', '', '', 33, 33, 'hMolMP38rsYgEwvVWGCOVP1ezRxgVl.pdf', 'qYEedNsmMkA3ObwWSA3C6rRwstcjP8.png', '2023-07-14 22:52:33', '2023-07-18 03:05:19'),
(17, 3, 'Producto metalico', 'El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.', '', '', 555, 26, 'CGxqqFoHeDrG5zSfMkao168N7dRnAP.pdf', 'x7GAts2yYmogUac8s9DCi3hHtqakLa.png', '2023-07-18 00:33:00', '2023-07-18 03:52:12'),
(18, 3, 'esp', 'esp', 'eng', 'eng', 11, 22, 'PszYVtRCnAhsR77v7wgmPGKAowG8cZ.pdf', 'a24vyk1lihRn79dkYWtLU5WTeR1k6s.png', '2023-07-26 00:30:14', '2023-07-26 00:30:14'),
(19, 3, 'esp', 'esp', 'test', 'test', 22, 33, '9SYFqdz8mHzcoiyXpa08qbuq7fj6Ru.pdf', 'HpwYEtvpboerb4KVjfjDGlCX4ysv65.png', '2023-07-26 02:20:46', '2023-07-26 02:20:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_servicios`
--

CREATE TABLE `m_servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacto` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `m_servicios`
--

INSERT INTO `m_servicios` (`id`, `nombre`, `descripcion`, `nombre_en`, `descripcion_en`, `foto`, `contacto`, `created_at`, `updated_at`) VALUES
(1, 'welcome', '323232El -----------trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum quia facilis numquam pariatur repellendus repudiandae fuga omnis illum, culpa placeat explicabo corrupti ipsum, reprehenderit, dolorum molestiae id nisi incidunt inventore rem quo esse! Quam fugiat accusamus nulla qui tempora voluptatem quibusdam totam inventore, omnis esse cum ut, ab, nobis aliquid. Eaque magni fugit placeat dolor cupiditate vel iusto. Enim, odit libero optio ab saepe possimus quas rerum voluptas cumque consequuntur accusantium eveniet temporibus est animi? Explicabo provident dolores ea alias. Dolorum ipsam iste odio dicta deserunt nihil aspernatur quam laborum beatae veritatis.', NULL, NULL, 'BqvB9Z26sUIVN7TN72MWMHGrGRJXNH.png', NULL, '2023-07-13 21:32:21', '2023-07-25 04:22:39'),
(2, 'Servicio 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum quia facilis numquam pariatur repellendus repudiandae fuga omnis illum, culpa placeat explicabo corrupti ipsum, reprehenderit, dolorum molestiae id nisi incidunt inventore rem quo esse! Quam fugiat accusamus nulla qui tempora voluptatem quibusdam totam inventore, omnis esse cum ut, ab, nobis aliquid. Eaque magni fugit placeat dolor cupiditate vel iusto. Enim, odit libero optio ab saepe possimus quas rerum voluptas cumque consequuntur accusantium eveniet temporibus est animi? Explicabo provident dolores ea alias. Dolorum ipsam iste odio dicta deserunt nihil aspernatur quam laborum beatae veritatis.', NULL, NULL, 'QjkjfUBlgzV2JKvDf6VN2yD7z4CNRP.png', NULL, '2023-07-13 21:35:03', '2023-07-13 22:53:47'),
(5, 'Servicio 3', 'El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.', NULL, NULL, 'veLR0o3uk7Rnjz6SWVaFubGItfjsVs.png', NULL, '2023-07-13 23:05:41', '2023-07-13 23:05:41'),
(6, 'Servicio 4', 'El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.', NULL, NULL, 'YwHg8bs8hIxAYoaVcBZaM4W5A9fcyD.png', NULL, '2023-07-13 23:06:06', '2023-07-13 23:06:06'),
(7, 'Servicios en nube', 'tetwete', 'cloud services', 'description', 'PKYQQ8VGDJWc1go4vS6xLkYVdqTyjU.png', NULL, '2023-07-25 21:57:13', '2023-07-25 22:00:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_slider_principals`
--

CREATE TABLE `m_slider_principals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `m_slider_principals`
--

INSERT INTO `m_slider_principals` (`id`, `titulo`, `descripcion`, `titulo_en`, `descripcion_en`, `imagen`, `created_at`, `updated_at`) VALUES
(6, 'Somos Milertek', 'Una empresa mexicana con más de 12 años de experiencia en Diseño, Desarrollo, Manufactura e Innovación Tecnológica sumada a una empresa profesional de suministro y mantenimiento de equipos', 'We are Milertek', 'A mexican company with over 12 years experience in Design, Development, Manufacturing and Tech innovation coupled by a professional equipment supply and maintenance company', 'N01uLKHRK8mUzl25dP2606hqcpb90t.png', '2023-07-15 02:46:51', '2023-08-09 10:33:59'),
(7, 'slider 2', 'El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de \"de Finibus Bonorum et Malorum\" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.', NULL, NULL, 'dl5dgg6aASXDVgXON9RImW4GTH0YCk.png', '2023-07-18 00:55:59', '2023-07-18 00:56:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` int(11) DEFAULT NULL,
  `guia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkguia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicilio` bigint(20) UNSIGNED NOT NULL,
  `factura` tinyint(1) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `importe` double(9,2) NOT NULL,
  `iva` double(9,2) NOT NULL,
  `total` double(9,2) NOT NULL,
  `envio` double(9,2) DEFAULT NULL,
  `comprobante` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancelado` tinyint(1) DEFAULT 0,
  `usuario` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `envia_resp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_detalles`
--

CREATE TABLE `pedido_detalles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double(9,2) NOT NULL,
  `importe` double(9,2) NOT NULL,
  `total` double(9,2) NOT NULL,
  `pedido` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `color` bigint(20) UNSIGNED DEFAULT NULL,
  `log` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--

CREATE TABLE `politicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `archivo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `politicas`
--

INSERT INTO `politicas` (`id`, `titulo`, `descripcion`, `archivo`, `created_at`, `updated_at`) VALUES
(1, 'aviso de privacidad', NULL, NULL, NULL, '2022-03-31 17:19:19'),
(2, 'metodos de pago', NULL, NULL, NULL, NULL),
(3, 'devoluciones', NULL, NULL, NULL, NULL),
(4, 'terminos y condiciones', NULL, NULL, NULL, NULL),
(5, 'garantias', NULL, NULL, NULL, NULL),
(6, 'politicas de envio', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria`, `portada`, `pdf`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(19, 'Guardias especializados', '<p>Nuestros guardias de seguridad son producto de un estricto proceso, iniciando con est&aacute;ndares de selecci&oacute;n que supera los marcados por certificaciones internacionales como BASC e ISO, garantizando as&iacute; que los elementos contratados cuenten con las caracter&iacute;sticas &nbsp;necesarias para cubrir las necesidades de todos nuestros clientes.</p>\r\n<p>Para SEKTOR la capacitaci&oacute;n es esencial, por ello todos nuestros guardias de seguridad son capacitados desde el primer d&iacute;a que ingresan, reciben adem&aacute;s, revisiones y actualizaciones constantemente para cumplir siempre con las necesidades m&aacute;s estrictas de cada servicio.</p>\r\n<p>Nuestros elementos son reevaluados constante y peri&oacute;dicamente para verificar que no presenten desviaciones y se mantengan alineados con las pol&iacute;ticas y lineamientos internos establecidos para cada servicio.</p>\r\n<p>Todos nuestros guardias cuentan con soporte por medios tecnol&oacute;gicos, monitoreo dedicado y diversos tipos de controles aplicados, sabemos que cada cliente tiene necesidades espec&iacute;ficas por lo que nuestros especialistas ser&aacute;n de gran ayuda para identificar la mejor manera de proteger el patrimonio de nuestros clientes.</p>', NULL, NULL, NULL, 1, 1, 666, '2022-07-19 23:43:45', '2022-11-17 03:49:09'),
(21, 'Custodias de mercancía', '<p style=\"text-align: justify;\">Pasa SEKTOR custodiar el traslado de tu mercanc&iacute;as significa mucho m&aacute;s que simplemente \"acompa&ntilde;arlas\" durante el trayecto.</p>\r\n<p style=\"text-align: justify;\">Sabemos el valor, no s&oacute;lo econ&oacute;mico, sino estrat&eacute;gico y de oportunidad que tiene cada embarque; teniendo esto en cuenta desarrollamos estrategias de acuerdo a las caracter&iacute;sticas de cada servicio, implementando procesos operativos detallados para mantener la trazabilidad de la mercanc&iacute;a en todo momento, para ello contamos con sistemas tecnol&oacute;gicos de punta para el rastreo y monitoreo detallado de cada embarque.</p>\r\n<p style=\"text-align: justify;\">Mantenemos un monitoreo dedicado de cada custodia para detectar situaciones de riesgo y actuar de manera oportuna ante cada incidencia, manteniendo una constante comunicaci&oacute;n con clientes y autoridades desde nuestra central de monitoreo de &uacute;ltima generaci&oacute;n.</p>', NULL, NULL, NULL, 1, 1, 666, '2022-08-04 20:55:44', '2022-10-21 21:27:39'),
(22, 'Servicio de seguridad moviles', '<div>Nuestro servicio de seguridad m&oacute;vil es una excelente opci&oacute;n para peque&ntilde;os y medianos negocios, en este servicio un guardia de seguridad realiza patrullajes a un n&uacute;mero limitado de clientes, el guardia puede realizar m&uacute;ltiples consignas, desde prevenir el robo, verificar cierre de instalaciones y apagar sistemas de energ&iacute;a.</div>', NULL, NULL, NULL, 1, 1, 666, '2022-08-08 18:49:27', '2022-11-17 00:29:51'),
(23, 'Monitore de alarmas', '<p style=\"text-align: justify;\">Sektor es una empresa seria, comprometida y dedicada a la seguridad integral. Siete a&ntilde;os de experiencia nos respaldan.</p>\r\n<p style=\"text-align: justify;\">Pregunta por nuestros paquetes de monitoreo<br /><strong>Aproveche los beneficios que sektor le ofrece:</strong></p>\r\n<ul>\r\n<li style=\"text-align: justify;\">Contrataci&oacute;n de monitoreo de alarmas SIN plazos forzosos.&nbsp;</li>\r\n<li style=\"text-align: justify;\">Nuestra central de monitoreo se encuentra en <strong>GUADALAJARA</strong></li>\r\n<li style=\"text-align: justify;\">Contamos con la mejor y m&aacute;s avanzada tecnolog&iacute;a.</li>\r\n<li style=\"text-align: justify;\">Contamos con equipo de patrullaje propio.</li>\r\n<li style=\"text-align: justify;\">Ofrecemos equipos de alarma en comodato</li>\r\n<li style=\"text-align: justify;\">Nuestros sistemas de monitoreo trabajan bajo est&aacute;ndares de clase mundial.</li>\r\n</ul>', NULL, NULL, NULL, 1, 1, 666, '2022-08-08 23:51:20', '2022-11-17 00:33:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_photos`
--

CREATE TABLE `productos_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos_photos`
--

INSERT INTO `productos_photos` (`id`, `producto`, `titulo`, `image`, `orden`) VALUES
(14, 19, NULL, '1vzHMEiCSrMSk9poMBXWxxTZKqVmrC.jpg', 666),
(16, 22, NULL, '8n55vmjIzHKpoWOcUux35afingnqZA.jpg', 666),
(17, 23, NULL, 'QlbB541AxzCEQt3GtQVcTSZHxNNPKR.jpg', 666),
(18, 21, NULL, 'Tmbn4wocnxS6vAFCYSxNqN1oqQY4WS.jpg', 666),
(19, 24, NULL, 'ZeUHxn65A5vq1liG0RIiyQEK9wnK33.jpg', 666),
(21, 25, NULL, 'v7CdsDroB49bSYSdblRHp3BSPmLyxP.jpg', 666),
(33, 19, NULL, 'QvQdPyE4TWADyZSdrbnbhObvNM47a4.jpg', 666),
(34, 19, NULL, 'ZIgHbxUkoMyJyGMYoIXK79dbdbF9Xc.jpg', 666),
(35, 19, NULL, '9BhI8hIA7BxH1YBtxKF5ijfFCPqwGU.jpg', 666),
(37, 21, NULL, 'V9rAxFS5QRUMcrqEYjmOLtiLRhH8JA.jpg', 666),
(38, 21, NULL, 'eD8yaW3whet2nlV2jOU42bo8gDhQgZ.jpg', 666),
(39, 21, NULL, 'WD4Pg42xTwCA6b1BBl3Urs2LlC2b0Q.jpg', 666),
(40, 22, NULL, 'cxGoJDtLDN9opAA1IQl9JrQGuYO9p0.jpg', 666),
(41, 22, NULL, 'v024JOAh6VvceMvasBui6BIS2lHgcK.jpg', 666),
(42, 23, NULL, 'YMy765RMsN2sCvJN9hFl3WFoxlJGZ7.jpg', 666),
(43, 23, NULL, 'gl9mEfOqg7VvjIqyvaE8QRPiejjVyM.jpg', 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_presentacions`
--

CREATE TABLE `producto_presentacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tamanio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_relacions`
--

CREATE TABLE `producto_relacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `otroProducto` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_relacions`
--

INSERT INTO `producto_relacions` (`id`, `producto`, `otroProducto`) VALUES
(1, 24, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_sizes`
--

CREATE TABLE `producto_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tamanio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_variantes`
--

CREATE TABLE `producto_variantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` bigint(20) UNSIGNED NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `presentacion` bigint(20) UNSIGNED NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descuento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `tipo_envio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `largo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ancho` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccions`
--

CREATE TABLE `seccions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seccions`
--

INSERT INTO `seccions` (`id`, `seccion`, `portada`, `slug`, `icon`) VALUES
(1, 'inicio [ES]', NULL, 'home', 'fas fa-home'),
(2, 'servicios [ES]', NULL, 'services', 'fab fa-servicestack'),
(4, 'productos [ES]', NULL, 'products', 'fas fa-box-open'),
(5, 'nosotros [ES]', NULL, 'about-us', 'fas fa-info'),
(6, 'contacto [ES]', NULL, 'contact', 'fas fa-mail-bulk'),
(7, 'Home [EN]', NULL, 'home_en', 'fas fa-home'),
(8, 'Services [EN]', NULL, 'services_en', 'fab fa-servicestack'),
(9, 'Products [EN]', NULL, 'products_en', 'fas fa-box-open'),
(10, 'About us [EN]', NULL, 'about-us_en', 'fas fa-info'),
(11, 'Contact [EN]', NULL, 'contact_en', 'fas fa-mail-bulk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_photos`
--

CREATE TABLE `servicios_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `servicio` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nivel` tinyint(4) DEFAULT 0,
  `puntos` int(11) DEFAULT NULL,
  `distr_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referido_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distribuidor` tinyint(1) DEFAULT 0,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `role` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `email`, `email_verified_at`, `telefono`, `facebook`, `empresa`, `avatar`, `rfc`, `nivel`, `puntos`, `distr_code`, `referido_by`, `distribuidor`, `profile`, `activo`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'yahir', 'lopez', '', 'yahir@wozial.com', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '', NULL, 0, NULL, 1, NULL, '$2y$10$ixFvI1ajnMzpjT8EhK0KsOzC/I8X5prS5vUZLKCsh2eOf7zllQPim', NULL, '2022-02-28 18:49:39', '2022-02-28 23:10:39', NULL),
(2, NULL, NULL, NULL, 'michaelwozial@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 1, NULL, '$2y$10$k6ASXxra76Jdk7u7Lkzw/O5yXmDg7GQQ8Ki3wV/MxJoS419jzE.Gu', NULL, '2023-08-09 00:04:33', '2023-08-09 00:04:33', NULL),
(3, NULL, NULL, NULL, 'michelitos@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 1, NULL, '$2y$10$cNwEkuK9x640z4yj8B5tSuUydpoTkRYtPLOP8rEqUMb3yFUtJqK7K', NULL, '2023-08-09 00:46:22', '2023-08-09 00:46:22', NULL),
(4, NULL, NULL, NULL, 'otro@correo.com', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 1, NULL, '$2y$10$EwzKo8sCEgN/tv4gVa/8s.EXvX6BQytp8mkf7VHriKk2tbK32wIPK', NULL, '2023-08-09 00:46:50', '2023-08-09 00:46:50', NULL),
(5, 'Michael Eduardo', 'Sandoval Pérez', 'Mike_EDD', 'test1@gmail.com', NULL, '3322932239', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 1, NULL, '$2y$10$veWouqxxqL3DjxNQ1Kc1suJXk6lPR0u/sh61dW7OqQvs08bCmABny', NULL, '2023-08-09 03:50:07', '2023-08-09 11:08:19', NULL),
(6, NULL, NULL, NULL, 'red@example.com', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, NULL, 1, NULL, '$2y$10$fXI3NfW6pUtXh73fGhdrnO3yuKjz8OJ0rkHgvzmN8ebC/5TpMNI1O', NULL, '2023-08-09 03:53:13', '2023-08-09 03:53:13', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes`
--

CREATE TABLE `vacantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oferta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requisitos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacantesdisp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio` tinyint(1) NOT NULL DEFAULT 0,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `orden` int(11) NOT NULL DEFAULT 666,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vacantes`
--

INSERT INTO `vacantes` (`id`, `portada`, `titulo`, `subtitulo`, `oferta`, `requisitos`, `vacantesdisp`, `salario`, `inicio`, `activo`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'zlidnodXw0kt1bD9KLmjVE4uyZGl9d.jpg', 'Guardia de Seguridad', 'Excelente oportunidad', '<ul>\r\n<li>TURNOS DE 8HRS</li>\r\n<li>TRANSPORTE Y COMEDOR</li>\r\n<li>PAGO QUINCENAL BANORTE</li>\r\n<li>UNIFORMES SIN COSTO</li>\r\n<li>SEGURO SOCIAL DESDE EL PRIMER DIA</li>\r\n<li>PRESTACIONES DE LEY</li>\r\n</ul>', '20 a 55 años; Secundaria terminada; Disponibilidad de horario; Documentación básica', '5', '$8,000 a $9,500', 0, 1, 666, NULL, '2022-11-17 23:13:41'),
(2, 'vCxiroFkU4gNJrjoVNoY2nRkfdZmIN.jpg', 'Custodio Carretero', 'Sueldo base mas comisiones', '<div>\r\n<p><strong>PAGO: SUELDO BASE MAS COMISIONES POR KM. BANORTE.</strong><strong>&nbsp;<br /></strong><strong>PRESTACIONES DE LEY </strong></p>\r\n</div>', '24 a 45 años; Secundaria o preparatoria terminada; Conocimiento en carreteras federales; Licencia de chofer vigente; Manejar STD ; Cartilla o Pre cartilla; Disponibilidad de horario; Estable', '5', 'Base mas comisiones', 0, 1, 666, '2022-07-21 00:04:40', '2022-10-21 21:49:28'),
(4, 'xtuLYDKWRo8Hgq0wBohEV0IyEhN2e6.jpg', 'Monitoristas', '$9000 - $10000000 libres', '<div>\r\n<p><strong>PAGO QUINCENAL NOMINA BANORTE<br /></strong><strong>ESTABILIDAD LABORAL.<br /></strong><strong>PRESTACIONES DE LEY<br /></strong><strong>$9,000 MENSUAL</strong></p>\r\n</div>', '24 a 45 años; Preparatoria terminada; Disponibilidad de horarias; Experiencia CCTV y/o GPS; Atención al cliente; Estable', '5', '$9,000', 0, 1, 666, '2022-07-21 00:06:48', '2022-10-21 21:50:13'),
(5, 'byftULI9aK8jZqwU2p8fqjvpFF9r0u.jpg', 'Técnico Instalador', '$9000 - $10000000 libres', '<div>\r\n<p><strong>*BASE MAS COMISIONES </strong></p>\r\n<p><strong>*PAGO QUINCENAL NOMINA BANORTE</strong></p>\r\n<p><strong>*PRESTACIONES DE LEY</strong></p>\r\n<p><strong>*CONOCIMIENTO DE LA CIUDAD </strong></p>\r\n<p><strong>*LIC. DE CHOFER VIGENTE, MANEJAR STD</strong></p>\r\n</div>', '24 a 45 años; Preparatoria y/o carrera técnica  en electrónica y/o a fin; Experiencia comprobable; Manejo de herramientas manuales; Manejo de computadora', '5', 'Sueldo base más comisiones', 0, 1, 666, '2022-07-21 00:08:12', '2022-10-21 21:53:57'),
(6, 'x8DstmATXRfYZIFzSJZjYNmA3JeQOy.jpg', 'Supervisor de guardias', 'Sueldo atractivo', '<div>\r\n<p><strong>SUELDO COMPETITIVO<br /></strong><strong>PAGO QUINCENAL NOMINA BANORTE<br /></strong><strong>PRESTACIONES DE LEY<br /></strong><strong>BONOS POR DESEMPE&Ntilde;O</strong></p>\r\n</div>', '25 a 48 años; Preparatoria terminada; Disponibilidad de horario; Paquete office; Licencia de chofer vigente; Manejo de STD; Cursos básicos de seguridad privada; Experiencia en manejo de personal', '5', 'Sueldo atractivo', 0, 1, 666, '2022-08-08 18:55:52', '2022-10-21 21:54:33'),
(9, 'JRtZYCWEpzphBCdtnpYGKUmqfV3bQp.jpg', 'Asesor Comercial', 'Excelente esquema de comisiones', '<div>turno de 8 Horas</div>\r\n<div>Comisiones por ventas</div>\r\n<div>&nbsp;</div>', 'Excelente presentación; Pro activo; Vehículo Propio', '3', '$8000 a $20000', 0, 0, 666, '2022-11-17 23:06:01', '2022-11-17 23:06:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrusels`
--
ALTER TABLE `carrusels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `domicilios_user_foreign` (`user`);

--
-- Indices de la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `elementos_seccion_foreign` (`seccion`);

--
-- Indices de la tabla `m_caracteristica_productos`
--
ALTER TABLE `m_caracteristica_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `m_categorias`
--
ALTER TABLE `m_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `m_certificacions`
--
ALTER TABLE `m_certificacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `m_clientes`
--
ALTER TABLE `m_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `m_fechas`
--
ALTER TABLE `m_fechas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `m_galeria_productos`
--
ALTER TABLE `m_galeria_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `m_orders`
--
ALTER TABLE `m_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `m_productos`
--
ALTER TABLE `m_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `m_servicios`
--
ALTER TABLE `m_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `m_slider_principals`
--
ALTER TABLE `m_slider_principals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_photos`
--
ALTER TABLE `productos_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto_relacions`
--
ALTER TABLE `producto_relacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccions`
--
ALTER TABLE `seccions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `elementos`
--
ALTER TABLE `elementos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `m_caracteristica_productos`
--
ALTER TABLE `m_caracteristica_productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `m_categorias`
--
ALTER TABLE `m_categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `m_certificacions`
--
ALTER TABLE `m_certificacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `m_clientes`
--
ALTER TABLE `m_clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `m_fechas`
--
ALTER TABLE `m_fechas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `m_galeria_productos`
--
ALTER TABLE `m_galeria_productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `m_orders`
--
ALTER TABLE `m_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `m_productos`
--
ALTER TABLE `m_productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `m_servicios`
--
ALTER TABLE `m_servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `m_slider_principals`
--
ALTER TABLE `m_slider_principals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `productos_photos`
--
ALTER TABLE `productos_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `producto_relacions`
--
ALTER TABLE `producto_relacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vacantes`
--
ALTER TABLE `vacantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
