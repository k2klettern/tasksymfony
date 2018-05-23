-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-05-2018 a las 23:09:23
-- Versión del servidor: 10.2.14-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tasksymfony`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `s_artcat_relationships`
--

CREATE TABLE `s_artcat_relationships` (
  `id` int(11) UNSIGNED NOT NULL,
  `article_id` int(11) UNSIGNED DEFAULT NULL,
  `category_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `s_artcat_relationships`
--

INSERT INTO `s_artcat_relationships` (`id`, `article_id`, `category_id`) VALUES
(3, 5, 7),
(4, 6, 7),
(5, 7, 8),
(6, 7, 9),
(7, 8, 9),
(8, 9, 9),
(9, 10, 7),
(10, 10, 8),
(11, 11, 9),
(12, 11, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `s_articles`
--

CREATE TABLE `s_articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `shippingtime` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `active` int(10) UNSIGNED NOT NULL,
  `topseller` int(10) UNSIGNED NOT NULL,
  `changetime` datetime NOT NULL,
  `price` double DEFAULT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `s_articles`
--

INSERT INTO `s_articles` (`id`, `name`, `description`, `shippingtime`, `datum`, `active`, `topseller`, `changetime`, `price`, `stock`) VALUES
(5, 'Artikle 1', 'Lorem Ipsum Artikle 1', '12', '2018-05-23', 1, 1, '2018-05-23 22:50:52', 23, 12),
(6, 'Artikle 2', 'Lorem Ipsum Artikle 2', '34', '2018-05-23', 1, 1, '2018-05-23 22:51:20', 11, 2),
(7, 'Artikle 3', 'Lorem Ipsum Artikle 3', '23', '2018-05-23', 1, 1, '2018-05-23 22:51:47', 15, 4),
(8, 'Artikle 4', 'Lorem Ipsum Artikle 4', '15', '2018-05-23', 1, 1, '2018-05-23 22:52:25', 65, 4),
(9, 'Artikle 5', 'Lorem Ipsum Artikle 5', '45', '2018-05-23', 1, 1, '2018-05-23 22:52:53', 23, 8),
(10, 'Artikle 6', 'Lorem Ipsum 6', '87', '2018-05-23', 1, 1, '2018-05-23 22:53:23', 12, 23),
(11, 'Artikle 7', 'Lorem Ipsum Art 7', '87', '2018-05-23', 1, 1, '2018-05-23 22:53:50', 56, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `s_categories`
--

CREATE TABLE `s_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `parent` int(11) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `s_categories`
--

INSERT INTO `s_categories` (`id`, `parent`, `image`, `description`, `active`) VALUES
(7, NULL, 'e119e0f6a08ce941982f9f1edda6dfed.png', 'Category 1', 1),
(8, NULL, 'a1a0fc012244c68ad251be754bbcfd14.png', 'Category 2', 1),
(9, NULL, 'a462a1082a2b005011c7ac19029a1116.png', 'Category 3', 1),
(10, 9, 'f89b629d379f8ca0c5f4a16ea3f607bd.png', 'Category 3 Child 1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `email`, `password`, `roles`) VALUES
(1, 'Eric Zeidan', 'ezeidan', 'k2klettern@gmail.com', '$2y$13$1w/NDIti6Vj8tvqsXTbiOOK/gL/hbe/uafa.WNxr16icITLnQMvRC', '[\"ROLE_ADMIN\"]'),
(2, 'An User', 'an_user', 'an_user@symfony.com', '$2y$13$slYMOhZwZGT3JV8fUA8Vwu4lg2qpU6kyO2wTz5302GX3tsdUMGNyS', '[\"ROLE_USER\"]');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `s_artcat_relationships`
--
ALTER TABLE `s_artcat_relationships`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `s_articles`
--
ALTER TABLE `s_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `s_categories`
--
ALTER TABLE `s_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `s_artcat_relationships`
--
ALTER TABLE `s_artcat_relationships`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `s_articles`
--
ALTER TABLE `s_articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `s_categories`
--
ALTER TABLE `s_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
