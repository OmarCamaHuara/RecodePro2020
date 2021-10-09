-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2020 a las 02:28:50
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--
CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sistema`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postagens`
--

CREATE TABLE `postagens` (
  `id_postagens` int(11) NOT NULL,
  `conteudo` varchar(400) NOT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `postagens`
--

INSERT INTO `postagens` (`id_postagens`, `conteudo`, `fk_usuario`) VALUES
(1, 'Hola mundo', 3),
(2, 'Hola mundo', 14),
(3, 'Ola Omar que tal, unas Chelitas', 14),
(4, 'Un nuevo postagem test', 14),
(5, 'Otro postagem test', 14),
(6, 'hola test', 14),
(7, 'nuevamente', 14),
(8, 'Otro nuevo postagem para mi amigo Omar', 14),
(9, 'Un nuevo postagem test edik', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `imagem` varchar(150) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `senha` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `imagem`, `email`, `senha`) VALUES
(1, 'omar', NULL, 'robotito.ocho.10101011@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Maya', NULL, 'radiomar.maya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'omar', '', 'omar.js2023@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Yhermaya', '', 'Yhermaya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Yhermaya2', '', 'Yhermaya2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Yhermaya3', '', 'Yhermaya3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'Felipe', 'https://avatars2.githubusercontent.com/u/66935801?s=460&u=97d3f65271bb9d4cc97bedacb15ae3fb14c12421&v=4', 'feeeeeeeee@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 'Anna', 'https://images.pexels.com/photos/3310693/pexels-photo-3310693.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'anna@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'Anahi', 'https://images.pexels.com/photos/1800456/pexels-photo-1800456.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'anahi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'Amanda', 'https://images.pexels.com/photos/1092219/pexels-photo-1092219.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'amanda@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 'Edik', 'https://avatars3.githubusercontent.com/u/70915476?s=460&u=6976351261be57cf81cf375a1159b3db98237204&v=4', 'edik@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`id_postagens`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `postagens`
--
ALTER TABLE `postagens`
  MODIFY `id_postagens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `postagens`
--
ALTER TABLE `postagens`
  ADD CONSTRAINT `postagens_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
