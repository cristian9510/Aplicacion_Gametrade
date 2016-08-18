-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2016 a las 03:58:13
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

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
-- Estructura de tabla para la tabla `tbbl_usuario_x_pto`
--

CREATE TABLE `tbbl_usuario_x_pto` (
  `pto_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `audi_desc` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_bono`
--

CREATE TABLE `tbl_categoria_bono` (
  `cat_bono_cod` int(11) NOT NULL,
  `cat_bono_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `cat_bono_fech` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_jue`
--

CREATE TABLE `tbl_categoria_jue` (
  `cat_cod` int(11) NOT NULL,
  `cat_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `cat_desc` blob NOT NULL,
  `cat_estado` int(1) NOT NULL,
  `cat_fech` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_categoria_jue`
--

INSERT INTO `tbl_categoria_jue` (`cat_cod`, `cat_nom`, `cat_desc`, `cat_estado`, `cat_fech`) VALUES
(200, 'futbol', '', 1, '2016-05-02'),
(201, 'aventura', '', 1, '2016-05-04'),
(33, 'ss', 0x73777373, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ciudad`
--

CREATE TABLE `tbl_ciudad` (
  `ciu_cod` int(11) NOT NULL,
  `ciu_nom` varchar(70) COLLATE utf8_bin NOT NULL,
  `depar_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_ciudad`
--

INSERT INTO `tbl_ciudad` (`ciu_cod`, `ciu_nom`, `depar_cod`) VALUES
(1, 'medellin', 1),
(2, 'cali', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentario`
--

CREATE TABLE `tbl_comentario` (
  `coment_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_cod` int(11) NOT NULL,
  `coment_asunt` varchar(255) COLLATE utf8_bin NOT NULL,
  `comet_desc` blob NOT NULL,
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
(100, 'play station', 1, 2, ''),
(101, 'play station', 1, 3, ''),
(102, 'xbox', 1, 3, ''),
(201, 'aaaaaa', 0, 0, 'asasa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consola_x_juego`
--

CREATE TABLE `tbl_consola_x_juego` (
  `jue_cod` int(11) NOT NULL,
  `cons_cod` int(11) NOT NULL,
  `desc` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_departamento`
--

CREATE TABLE `tbl_departamento` (
  `depar_cod` int(11) NOT NULL,
  `depar_nom` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_departamento`
--

INSERT INTO `tbl_departamento` (`depar_cod`, `depar_nom`) VALUES
(1, 'antioquia');

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
-- Estructura de tabla para la tabla `tbl_noticia`
--

CREATE TABLE `tbl_noticia` (
  `noti_cod` int(11) NOT NULL,
  `noti_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `noti_desc` blob NOT NULL,
  `noti_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pack_punto`
--

CREATE TABLE `tbl_pack_punto` (
  `pto_cod` int(11) NOT NULL,
  `pto_moneda` int(11) NOT NULL,
  `pto_desc` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_pack_punto`
--

INSERT INTO `tbl_pack_punto` (`pto_cod`, `pto_moneda`, `pto_desc`) VALUES
(243, 42423, 0x736461646173);

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
  `usu_tip_docum` int(11) NOT NULL,
  `usu_num_docum` varchar(20) COLLATE utf8_bin NOT NULL,
  `usu_pass` varchar(30) COLLATE utf8_bin NOT NULL,
  `usu_nick` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_nom` varchar(80) COLLATE utf8_bin NOT NULL,
  `usu_apell` varchar(80) COLLATE utf8_bin NOT NULL,
  `rol_cod` int(11) NOT NULL,
  `usu_tel` int(11) NOT NULL,
  `usu_naci` int(11) NOT NULL,
  `usu_cel` int(11) NOT NULL,
  `usu_dir` varchar(100) COLLATE utf8_bin NOT NULL,
  `usu_mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `ciu_cod` int(11) NOT NULL,
  `usu_estado` int(1) NOT NULL,
  `usu_fech` date NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_cod`, `usu_tip_docum`, `usu_num_docum`, `usu_pass`, `usu_nick`, `usu_nom`, `usu_apell`, `rol_cod`, `usu_tel`, `usu_naci`, `usu_cel`, `usu_dir`, `usu_mail`, `ciu_cod`, `usu_estado`, `usu_fech`, `photo`) VALUES
(1, 1, '1035231400', '1234', 'cristian', 'cristian camilo', 'echavarria zapata', 1, 4071474, 1233, 320855561, 'barbosa', 'cristian095@hotmail.es', 1, 1, '2016-06-07', 'C:\\xampp1\\htdocs\\GameTrade_aplicacion\\Views\\Imagen\\fotosUsercristian.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_encuesta`
--

CREATE TABLE `tbl_usuario_x_encuesta` (
  `usu_cod` int(11) NOT NULL,
  `enc_cod` int(11) NOT NULL,
  `enc_des` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_x_videojuego`
--

CREATE TABLE `tbl_usuario_x_videojuego` (
  `usu_cod` int(11) NOT NULL,
  `jue_cod` int(11) NOT NULL,
  `desc` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_videojuego`
--

CREATE TABLE `tbl_videojuego` (
  `jue_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `jue_nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `cons_cod` int(11) NOT NULL,
  `cat_cod` int(11) NOT NULL,
  `jue_desc` blob NOT NULL,
  `jue_cant` int(11) NOT NULL,
  `jue_trailer` text COLLATE utf8_bin NOT NULL,
  `jue_fech_public` date NOT NULL,
  `jue_imagen` varchar(100) COLLATE utf8_bin NOT NULL,
  `jue_pal_clave` varchar(50) COLLATE utf8_bin NOT NULL,
  `jue_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_videojuego`
--

INSERT INTO `tbl_videojuego` (`jue_cod`, `usu_cod`, `jue_nom`, `cons_cod`, `cat_cod`, `jue_desc`, `jue_cant`, `jue_trailer`, `jue_fech_public`, `jue_imagen`, `jue_pal_clave`, `jue_estado`) VALUES
(1, 1035231400, 'fifa', 1, 1, 0x6573746f20657320756e20656e7361796f, 3, 'asdasad', '2016-05-05', 'asadsa', 'futbol', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_bono`
--

CREATE TABLE `tb_bono` (
  `bono_cod` int(11) NOT NULL,
  `cat_bono_cod` int(11) NOT NULL,
  `pto_cod` int(11) NOT NULL,
  `bono_desc` blob NOT NULL,
  `bono_cant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbbl_usuario_x_pto`
--
ALTER TABLE `tbbl_usuario_x_pto`
  ADD PRIMARY KEY (`pto_cod`,`usu_cod`);

--
-- Indices de la tabla `tbl_auditoria`
--
ALTER TABLE `tbl_auditoria`
  ADD PRIMARY KEY (`audi_cod`),
  ADD KEY `usu_cod` (`usu_cod`);

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
  ADD PRIMARY KEY (`coment_cod`),
  ADD KEY `usu_cod` (`usu_cod`),
  ADD KEY `jue_cod` (`jue_cod`);

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
  ADD PRIMARY KEY (`depar_cod`);

--
-- Indices de la tabla `tbl_encuesta`
--
ALTER TABLE `tbl_encuesta`
  ADD PRIMARY KEY (`enc_cod`);

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
  ADD PRIMARY KEY (`usu_cod`);

--
-- Indices de la tabla `tbl_usuario_x_encuesta`
--
ALTER TABLE `tbl_usuario_x_encuesta`
  ADD PRIMARY KEY (`enc_cod`,`usu_cod`);

--
-- Indices de la tabla `tbl_usuario_x_videojuego`
--
ALTER TABLE `tbl_usuario_x_videojuego`
  ADD PRIMARY KEY (`usu_cod`,`jue_cod`);

--
-- Indices de la tabla `tbl_videojuego`
--
ALTER TABLE `tbl_videojuego`
  ADD PRIMARY KEY (`jue_cod`),
  ADD UNIQUE KEY `cat_cod` (`cat_cod`),
  ADD KEY `usu_cod` (`usu_cod`),
  ADD KEY `cons_cod` (`cons_cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_auditoria`
--
ALTER TABLE `tbl_auditoria`
  MODIFY `audi_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_categoria_bono`
--
ALTER TABLE `tbl_categoria_bono`
  MODIFY `cat_bono_cod` int(11) NOT NULL AUTO_INCREMENT;
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
