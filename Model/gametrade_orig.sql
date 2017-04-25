-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2017 a las 02:39:35
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gametrade_orig`
--
CREATE DATABASE IF NOT EXISTS `gametrade_orig` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `gametrade_orig`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bono`
--

CREATE TABLE `tbl_bono` (
  `bono_cod` int(11) NOT NULL,
  `cat_bono_cod` int(11) NOT NULL,
  `pto_cod` int(11) NOT NULL,
  `bono_desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `bono_cant` int(11) NOT NULL,
  `bono_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_bono`
--

CREATE TABLE `tbl_categoria_bono` (
  `cat_bono_cod` int(11) NOT NULL,
  `cat_bono_nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `cat_bono_fech` date NOT NULL,
  `cat_bono_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_juego`
--

CREATE TABLE `tbl_categoria_juego` (
  `cat_cod` int(11) NOT NULL,
  `cat_nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `cat_desc` varchar(100) COLLATE utf8_bin NOT NULL,
  `cat_estado` int(11) NOT NULL,
  `cat_fech` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ciudad`
--

CREATE TABLE `tbl_ciudad` (
  `ciu_cod` int(11) NOT NULL,
  `ciu_nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `depar_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consola`
--

CREATE TABLE `tbl_consola` (
  `cons_cod` int(11) NOT NULL,
  `cons_nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `cons_imagen` varchar(255) COLLATE utf8_bin NOT NULL,
  `cons_refe` varchar(50) COLLATE utf8_bin NOT NULL,
  `cons_estado` int(11) NOT NULL,
  `cons_fech` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consola_x_juego`
--

CREATE TABLE `tbl_consola_x_juego` (
  `jue_cod` int(11) NOT NULL,
  `cons_cod` int(11) NOT NULL,
  `cons_desc` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_departamento`
--

CREATE TABLE `tbl_departamento` (
  `depar_cod` int(11) NOT NULL,
  `depar_nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `pais_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_encuesta`
--

CREATE TABLE `tbl_encuesta` (
  `enc_cod` int(11) NOT NULL,
  `enc_nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `enc_calif` varchar(10) COLLATE utf8_bin NOT NULL,
  `enc_fecha` date NOT NULL,
  `enc_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hoja_usuario`
--

CREATE TABLE `tbl_hoja_usuario` (
  `hoja_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_juego`
--

CREATE TABLE `tbl_juego` (
  `jue_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `cons_cod` int(11) NOT NULL,
  `cat_jue_cod` int(11) NOT NULL,
  `jue_desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `jue_cant` int(11) NOT NULL,
  `jue_trailer` text COLLATE utf8_bin NOT NULL,
  `jue_fech_public` date NOT NULL,
  `jue_imagen` varchar(255) COLLATE utf8_bin NOT NULL,
  `jue_pal_claves` varchar(255) COLLATE utf8_bin NOT NULL,
  `jue_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticias`
--

CREATE TABLE `tbl_noticias` (
  `noti_cod` int(11) NOT NULL,
  `noti_nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `noti_desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `noti_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pack_punto`
--

CREATE TABLE `tbl_pack_punto` (
  `pto_cod` int(11) NOT NULL,
  `pto_moneda` int(11) NOT NULL,
  `pto_desc` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pais`
--

CREATE TABLE `tbl_pais` (
  `pais_cod` int(11) NOT NULL,
  `pais_nom` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `rol_cod` int(11) NOT NULL,
  `rol_nom` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sancion`
--

CREATE TABLE `tbl_sancion` (
  `san_cod` int(11) NOT NULL,
  `san_nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `san_desc` varchar(255) COLLATE utf8_bin NOT NULL,
  `san_estado` int(11) NOT NULL,
  `hoja_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usu_cod` int(11) NOT NULL,
  `tip_documento` int(11) NOT NULL,
  `num_documento` varchar(20) COLLATE utf8_bin NOT NULL,
  `usu_photo` varchar(100) COLLATE utf8_bin NOT NULL,
  `usu_nick` varchar(100) COLLATE utf8_bin NOT NULL,
  `usu_pass` varchar(100) COLLATE utf8_bin NOT NULL,
  `usu_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `usu_apell` varchar(80) COLLATE utf8_bin NOT NULL,
  `usu_naci` varchar(100) COLLATE utf8_bin NOT NULL,
  `usu_tel` int(11) NOT NULL,
  `usu_cel` varchar(15) COLLATE utf8_bin NOT NULL,
  `usu_dir` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `rol_cod` int(11) NOT NULL,
  `ciu_cod` int(11) NOT NULL,
  `usu_estado` int(11) NOT NULL,
  `usu_fech` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_encuesta`
--

CREATE TABLE `tbl_usuario_x_encuesta` (
  `usu_cod` int(11) NOT NULL,
  `enc_cod` int(11) NOT NULL,
  `enc_desc` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_juego`
--

CREATE TABLE `tbl_usuario_x_juego` (
  `usu_cod` int(11) NOT NULL,
  `usu_jue_cod` int(11) NOT NULL,
  `usu_jue_desc` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_punto`
--

CREATE TABLE `tbl_usuario_x_punto` (
  `pto_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_bono`
--
ALTER TABLE `tbl_bono`
  ADD PRIMARY KEY (`bono_cod`),
  ADD KEY `cat_bono_cod` (`cat_bono_cod`),
  ADD KEY `pto_cod` (`pto_cod`);

--
-- Indices de la tabla `tbl_categoria_bono`
--
ALTER TABLE `tbl_categoria_bono`
  ADD PRIMARY KEY (`cat_bono_cod`);

--
-- Indices de la tabla `tbl_categoria_juego`
--
ALTER TABLE `tbl_categoria_juego`
  ADD PRIMARY KEY (`cat_cod`);

--
-- Indices de la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  ADD KEY `depar_cod` (`depar_cod`);

--
-- Indices de la tabla `tbl_consola`
--
ALTER TABLE `tbl_consola`
  ADD PRIMARY KEY (`cons_cod`);

--
-- Indices de la tabla `tbl_consola_x_juego`
--
ALTER TABLE `tbl_consola_x_juego`
  ADD KEY `jue_cod` (`jue_cod`),
  ADD KEY `cons_cod` (`cons_cod`);

--
-- Indices de la tabla `tbl_departamento`
--
ALTER TABLE `tbl_departamento`
  ADD KEY `indes` (`pais_cod`);

--
-- Indices de la tabla `tbl_encuesta`
--
ALTER TABLE `tbl_encuesta`
  ADD PRIMARY KEY (`enc_cod`);

--
-- Indices de la tabla `tbl_hoja_usuario`
--
ALTER TABLE `tbl_hoja_usuario`
  ADD PRIMARY KEY (`hoja_cod`);

--
-- Indices de la tabla `tbl_juego`
--
ALTER TABLE `tbl_juego`
  ADD PRIMARY KEY (`jue_cod`),
  ADD KEY `usu_cod` (`usu_cod`),
  ADD KEY `cons_cod` (`cons_cod`),
  ADD KEY `cat_jue_cod` (`cat_jue_cod`);

--
-- Indices de la tabla `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  ADD PRIMARY KEY (`noti_cod`);

--
-- Indices de la tabla `tbl_pack_punto`
--
ALTER TABLE `tbl_pack_punto`
  ADD PRIMARY KEY (`pto_cod`);

--
-- Indices de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`rol_cod`);

--
-- Indices de la tabla `tbl_sancion`
--
ALTER TABLE `tbl_sancion`
  ADD KEY `hoja_cod` (`hoja_cod`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_cod`);

--
-- Indices de la tabla `tbl_usuario_x_juego`
--
ALTER TABLE `tbl_usuario_x_juego`
  ADD KEY `usu_cod` (`usu_cod`),
  ADD KEY `usu_jue_cod` (`usu_jue_cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bono`
--
ALTER TABLE `tbl_bono`
  MODIFY `bono_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_categoria_bono`
--
ALTER TABLE `tbl_categoria_bono`
  MODIFY `cat_bono_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_categoria_juego`
--
ALTER TABLE `tbl_categoria_juego`
  MODIFY `cat_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_consola`
--
ALTER TABLE `tbl_consola`
  MODIFY `cons_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_encuesta`
--
ALTER TABLE `tbl_encuesta`
  MODIFY `enc_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_hoja_usuario`
--
ALTER TABLE `tbl_hoja_usuario`
  MODIFY `hoja_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  MODIFY `noti_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_pack_punto`
--
ALTER TABLE `tbl_pack_punto`
  MODIFY `pto_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  MODIFY `rol_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_cod` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
