-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2016 a las 00:04:05
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gametrade`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_auditoria`
--

CREATE TABLE `tbl_auditoria` (
  `audi_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `audi_accion` varchar(200) COLLATE utf8_bin NOT NULL,
  `audi_fech` date NOT NULL,
  `audi_estado` int(1) NOT NULL,
  `audi_desc` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bono`
--

CREATE TABLE `tbl_bono` (
  `bono_cod` int(11) NOT NULL,
  `cat_bono_cod` int(11) NOT NULL,
  `pto_cod` int(11) NOT NULL,
  `bono_desc` int(11) NOT NULL,
  `bono_cant` int(11) NOT NULL,
  `bono_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_bono`
--

INSERT INTO `tbl_bono` (`bono_cod`, `cat_bono_cod`, `pto_cod`, `bono_desc`, `bono_cant`, `bono_estado`) VALUES
(2147483647, 2, 0, 0, 32, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_bono`
--

CREATE TABLE `tbl_categoria_bono` (
  `cat_bono_cod` int(11) NOT NULL,
  `cat_bono_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `cat_bono_fech` date NOT NULL,
  `cat_bono_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_categoria_bono`
--

INSERT INTO `tbl_categoria_bono` (`cat_bono_cod`, `cat_bono_nom`, `cat_bono_fech`, `cat_bono_estado`) VALUES
(1, 'asdfasff', '2016-06-19', 0),
(2, 'aaaaa', '2016-06-06', 0),
(3, 'uuuuu', '2016-06-23', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_juego`
--

CREATE TABLE `tbl_categoria_juego` (
  `cat_jue_cod` int(11) NOT NULL,
  `cat_jue_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `cat_jue_desc` text COLLATE utf8_bin NOT NULL,
  `cat_jue_estado` int(1) NOT NULL,
  `cat_jue_fech` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_categoria_juego`
--

INSERT INTO `tbl_categoria_juego` (`cat_jue_cod`, `cat_jue_nom`, `cat_jue_desc`, `cat_jue_estado`, `cat_jue_fech`) VALUES
(12312, 'dasdasd', 'asdasdasdasd', 1, '2016-06-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ciudad`
--

CREATE TABLE `tbl_ciudad` (
  `ciu_cod` int(11) NOT NULL,
  `ciu_nom` varchar(70) COLLATE utf8_bin NOT NULL,
  `depar_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentario`
--

CREATE TABLE `tbl_comentario` (
  `coment_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_cod` int(11) NOT NULL,
  `coment_asunt` varchar(255) COLLATE utf8_bin NOT NULL,
  `coment_desc` text COLLATE utf8_bin NOT NULL,
  `coment_fech` date NOT NULL,
  `coment_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consola`
--

CREATE TABLE `tbl_consola` (
  `cons_cod` int(11) NOT NULL,
  `cons_nom` varchar(20) COLLATE utf8_bin NOT NULL,
  `cons_estado` int(1) NOT NULL,
  `cons_refer` int(11) NOT NULL,
  `cons_imagen` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_consola`
--

INSERT INTO `tbl_consola` (`cons_cod`, `cons_nom`, `cons_estado`, `cons_refer`, `cons_imagen`) VALUES
(200, 'play station', 1, 2, 'adasdsdsd'),
(2147483647, 'xbox', 1, 360, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consola_x_juego`
--

CREATE TABLE `tbl_consola_x_juego` (
  `jue_cod` int(11) NOT NULL,
  `cons_cod` int(11) NOT NULL,
  `cons_jue_desc` text COLLATE utf8_bin NOT NULL
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
  `enc_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `enc_calif` int(11) NOT NULL,
  `enc_fech` date NOT NULL,
  `enc_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_juego`
--

CREATE TABLE `tbl_juego` (
  `jue_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `cons_cod` int(11) NOT NULL,
  `cat_jue_cod` int(11) NOT NULL,
  `jue_desc` text COLLATE utf8_bin NOT NULL,
  `jue_cant` int(11) NOT NULL,
  `jue_trailer` text COLLATE utf8_bin NOT NULL,
  `jue_fech_public` date NOT NULL,
  `jue_imagen` varchar(100) COLLATE utf8_bin NOT NULL,
  `jue_pal_clave` varchar(50) COLLATE utf8_bin NOT NULL,
  `jue_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_juego`
--

INSERT INTO `tbl_juego` (`jue_cod`, `usu_cod`, `jue_nom`, `cons_cod`, `cat_jue_cod`, `jue_desc`, `jue_cant`, `jue_trailer`, `jue_fech_public`, `jue_imagen`, `jue_pal_clave`, `jue_estado`) VALUES
(200, 2, 'sdgsdfgfdgs', 200, 0, 'sdgdsfg', 34, 'adfas', '2016-06-23', 'afaf', 'asdfas', 1),
(201, 5, 'sgdsfg', 200, 0, 'sfdgdsf', 23, 'safdsfa', '2016-06-15', 'asdfasf', 'asfasdf', 1),
(202, 4, 'sgsdfgfds', 200, 0, 'sfgdf', 12, 'asfasdf', '2016-06-29', 'afasdf', 'adsad', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticia`
--

CREATE TABLE `tbl_noticia` (
  `noti_cod` int(11) NOT NULL,
  `noti_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `noti_desc` text COLLATE utf8_bin NOT NULL,
  `noti_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pack_punto`
--

CREATE TABLE `tbl_pack_punto` (
  `pto_cod` int(11) NOT NULL,
  `pto_moneda` int(11) NOT NULL,
  `pto_desc` text COLLATE utf8_bin NOT NULL
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
-- Estructura de tabla para la tabla `tbl_ranking`
--

CREATE TABLE `tbl_ranking` (
  `rank_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_cod` int(11) NOT NULL,
  `rank_vlr` float NOT NULL,
  `rank_estado` int(1) NOT NULL,
  `rank_fech` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usu_cod` int(11) NOT NULL,
  `usu_tip_docum` int(1) NOT NULL,
  `usu_num_docum` varchar(20) COLLATE utf8_bin NOT NULL,
  `usu_photo` varchar(255) COLLATE utf8_bin NOT NULL,
  `usu_pass` varchar(30) COLLATE utf8_bin NOT NULL,
  `usu_nick` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `usu_apell` varchar(80) COLLATE utf8_bin NOT NULL,
  `rol_cod` int(11) NOT NULL,
  `usu_tel` int(11) NOT NULL,
  `usu_naci` date NOT NULL,
  `usu_cel` varchar(20) COLLATE utf8_bin NOT NULL,
  `usu_dir` varchar(100) COLLATE utf8_bin NOT NULL,
  `usu_mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `ciu_cod` int(11) NOT NULL,
  `usu_estado` int(1) NOT NULL,
  `usu_fech` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_cod`, `usu_tip_docum`, `usu_num_docum`, `usu_photo`, `usu_pass`, `usu_nick`, `usu_nom`, `usu_apell`, `rol_cod`, `usu_tel`, `usu_naci`, `usu_cel`, `usu_dir`, `usu_mail`, `ciu_cod`, `usu_estado`, `usu_fech`) VALUES
(1, 0, '', '', '1234', 'cristian', '', '', 0, 0, '0000-00-00', '', '', '', 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_encuesta`
--

CREATE TABLE `tbl_usuario_x_encuesta` (
  `usu_cod` int(11) NOT NULL,
  `enc_cod` int(11) NOT NULL,
  `enc_desc` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_juego`
--

CREATE TABLE `tbl_usuario_x_juego` (
  `usu_cod` int(11) NOT NULL,
  `jue_cod` int(11) NOT NULL,
  `usu_jue_desc` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_pto`
--

CREATE TABLE `tbl_usuario_x_pto` (
  `pto_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_auditoria`
--
ALTER TABLE `tbl_auditoria`
  ADD PRIMARY KEY (`audi_cod`);

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
-- Indices de la tabla `tbl_ciudad`
--
ALTER TABLE `tbl_ciudad`
  ADD PRIMARY KEY (`ciu_cod`),
  ADD KEY `depar_cod` (`depar_cod`);

--
-- Indices de la tabla `tbl_comentario`
--
ALTER TABLE `tbl_comentario`
  ADD PRIMARY KEY (`coment_cod`);

--
-- Indices de la tabla `tbl_consola`
--
ALTER TABLE `tbl_consola`
  ADD PRIMARY KEY (`cons_cod`);

--
-- Indices de la tabla `tbl_consola_x_juego`
--
ALTER TABLE `tbl_consola_x_juego`
  ADD PRIMARY KEY (`jue_cod`,`cons_cod`);

--
-- Indices de la tabla `tbl_departamento`
--
ALTER TABLE `tbl_departamento`
  ADD PRIMARY KEY (`depar_cod`),
  ADD KEY `pais_cod` (`pais_cod`);

--
-- Indices de la tabla `tbl_encuesta`
--
ALTER TABLE `tbl_encuesta`
  ADD PRIMARY KEY (`enc_cod`);

--
-- Indices de la tabla `tbl_juego`
--
ALTER TABLE `tbl_juego`
  ADD PRIMARY KEY (`jue_cod`),
  ADD KEY `usu_cod` (`usu_cod`),
  ADD KEY `cons_cod` (`cons_cod`),
  ADD KEY `cat_jue_cod` (`cat_jue_cod`);

--
-- Indices de la tabla `tbl_noticia`
--
ALTER TABLE `tbl_noticia`
  ADD PRIMARY KEY (`noti_cod`);

--
-- Indices de la tabla `tbl_pack_punto`
--
ALTER TABLE `tbl_pack_punto`
  ADD PRIMARY KEY (`pto_cod`);

--
-- Indices de la tabla `tbl_pais`
--
ALTER TABLE `tbl_pais`
  ADD PRIMARY KEY (`pais_cod`);

--
-- Indices de la tabla `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  ADD PRIMARY KEY (`rank_cod`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_cod`),
  ADD KEY `rol_cod` (`rol_cod`),
  ADD KEY `usu_tip_docum` (`usu_tip_docum`);

--
-- Indices de la tabla `tbl_usuario_x_encuesta`
--
ALTER TABLE `tbl_usuario_x_encuesta`
  ADD PRIMARY KEY (`usu_cod`,`enc_cod`);

--
-- Indices de la tabla `tbl_usuario_x_juego`
--
ALTER TABLE `tbl_usuario_x_juego`
  ADD PRIMARY KEY (`usu_cod`,`jue_cod`);

--
-- Indices de la tabla `tbl_usuario_x_pto`
--
ALTER TABLE `tbl_usuario_x_pto`
  ADD PRIMARY KEY (`pto_cod`,`usu_cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_auditoria`
--
ALTER TABLE `tbl_auditoria`
  MODIFY `audi_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_bono`
--
ALTER TABLE `tbl_bono`
  MODIFY `bono_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT de la tabla `tbl_categoria_bono`
--
ALTER TABLE `tbl_categoria_bono`
  MODIFY `cat_bono_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_comentario`
--
ALTER TABLE `tbl_comentario`
  MODIFY `coment_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_encuesta`
--
ALTER TABLE `tbl_encuesta`
  MODIFY `enc_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_noticia`
--
ALTER TABLE `tbl_noticia`
  MODIFY `noti_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  MODIFY `rank_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
