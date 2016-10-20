-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2016 a las 01:06:09
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_residencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `numero_control` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `seguridad_social` varchar(10) NOT NULL,
  `especifique` varchar(30) NOT NULL,
  `numero_social` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`numero_control`, `nombre`, `apellido_paterno`, `apellido_materno`, `carrera`, `domicilio`, `email`, `ciudad`, `telefono`, `seguridad_social`, `especifique`, `numero_social`) VALUES
('114q0254', 'sa', 'sa', 'Sa', 'contador', 'das', 'das@dsa.cd', 'sd', 'fsd', 'ISSTE', '0', 'fd'),
('115q0254', 'das', 'dsa', 'das', 'sistemas', 'ds', 'as@fd.co', 'fds', 'fds', 'ISSTE', '0', 'fds'),
('115q0255', 'das', 'dsa', 'dsa', 'sistemas', 'asd', 'da@d.c', 'das', 'dsa', 'ISSTE', '0', 'das'),
('dsa', '115q0254', 'lk', 'l', 'contador', 'das', 'dsa@sds.gfg', 'das', 'fds', 'ISSTE', '0', 'dfs'),
('fs', '115q0254', 'dssak', 'os', 'informatica', 'fds', 'as@d.fd', 'd', 'fd', 'ISSTE', '0', 'fd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `no_control` varchar(15) NOT NULL,
  `nombre_empresa` varchar(50) NOT NULL,
  `giro_ramo_sector` varchar(12) NOT NULL,
  `RFC` varchar(15) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `mision_empresa` text NOT NULL,
  `nombre_titular` varchar(50) NOT NULL,
  `puesto_titular` varchar(30) NOT NULL,
  `asesor_externo` varchar(50) NOT NULL,
  `puesto_asesor` varchar(30) NOT NULL,
  `nombre_acuerdo_trabajo` varchar(50) NOT NULL,
  `puesto_acuerdo_trabajo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_carrera`
--

CREATE TABLE `jefe_carrera` (
  `clave_acceso` varchar(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `carrera` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jefe_carrera`
--

INSERT INTO `jefe_carrera` (`clave_acceso`, `nombre`, `apellido_paterno`, `apellido_materno`, `carrera`, `email`, `telefono`) VALUES
('jefe125', 'Javier', 'Castro', 'Lagunes', 'sistemas', 'fsidh@das.co', '36994');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` varchar(25) NOT NULL,
  `no_control` varchar(10) NOT NULL,
  `lugar` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `jefe_division` varchar(50) NOT NULL,
  `nombre_proyecto` varchar(50) NOT NULL,
  `opcion_proyecto` varchar(15) NOT NULL,
  `periodo` varchar(25) NOT NULL,
  `numero_residentes` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `no_control` varchar(20) NOT NULL,
  `pass_usuario` varchar(50) NOT NULL,
  `tipo_usuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `no_control`, `pass_usuario`, `tipo_usuario`) VALUES
(2, '115q0253', '21232f297a57a5a743894a0e4a801fc3', 'Alumno'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(4, '115q0254', '21232f297a57a5a743894a0e4a801fc3', 'Alumno'),
(5, 'jefe125', 'e00cf25ad42683b3df678c61f42c6bda', 'Jefe'),
(6, 'fs', '21232f297a57a5a743894a0e4a801fc3', 'Alumno'),
(7, 'dsa', '523af537946b79c4f8369ed39ba78605', 'Alumno'),
(8, '114q0254', 'f970e2767d0cfe75876ea857f92e319b', 'Alumno'),
(9, '115q0255', 'c12e01f2a13ff5587e1e9e4aedb8242d', 'Alumno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`numero_control`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `jefe_carrera`
--
ALTER TABLE `jefe_carrera`
  ADD PRIMARY KEY (`clave_acceso`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
