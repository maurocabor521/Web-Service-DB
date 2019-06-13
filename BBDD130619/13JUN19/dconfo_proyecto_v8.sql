-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2019 a las 16:00:19
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dconfo_proyecto_v8`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `idActividad` int(11) NOT NULL,
  `nombreActividad` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`idActividad`, `nombreActividad`) VALUES
(1, 'Conciencia Fon'),
(2, 'Conciencia Lex'),
(3, 'Conciencia Sil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminstrador`
--

CREATE TABLE `adminstrador` (
  `idAdminstrador` int(11) NOT NULL,
  `nameAdminstrador` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `emailAdminstrador` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `passwork_Adminstrador` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `adminstrador`
--

INSERT INTO `adminstrador` (`idAdminstrador`, `nameAdminstrador`, `emailAdminstrador`, `passwork_Adminstrador`) VALUES
(444, 'Camilo Lopez', 'clemail', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `idGrupoAsignacion` int(11) NOT NULL,
  `nameGrupoAsignacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `docente_iddocente` int(11) NOT NULL,
  `grupo_idgrupo` int(11) NOT NULL,
  `Actividad_idActividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`idGrupoAsignacion`, `nameGrupoAsignacion`, `docente_iddocente`, `grupo_idgrupo`, `Actividad_idActividad`) VALUES
(1, 'ejercicios lex 1', 220, 5, 2),
(2, 'ejercicios fon 1', 220, 5, 1),
(3, 'ejercicios sil 1', 220, 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_has_ejerciciog2`
--

CREATE TABLE `asignacion_has_ejerciciog2` (
  `Asignacion_idGrupoAsignacion` int(11) NOT NULL,
  `EjercicioG2_idEjercicioG2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asignacion_has_ejerciciog2`
--

INSERT INTO `asignacion_has_ejerciciog2` (`Asignacion_idGrupoAsignacion`, `EjercicioG2_idEjercicioG2`) VALUES
(1, 1),
(1, 2),
(2, 72),
(2, 74),
(3, 95),
(3, 97);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `Instituto_idInstituto` int(11) NOT NULL,
  `namecurso` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `periodocurso` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `Instituto_idInstituto`, `namecurso`, `periodocurso`) VALUES
(1, 777, 'Curso 1', '20191'),
(2, 777, 'Curso 2', '20191'),
(3, 777, 'Curso 3', '20191');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `iddocente` int(11) NOT NULL,
  `namedocente` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `dnidocente` int(11) NOT NULL,
  `email_docente` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `passwork_docente` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`iddocente`, `namedocente`, `dnidocente`, `email_docente`, `passwork_docente`) VALUES
(111, 'Juan Varela', 5555, 'jemail', '123'),
(220, 'Juan Velez', 220, 'j', '1'),
(221, 'Maria Lopez', 221, 'memail', '123'),
(222, 'Helena Saldarriaga', 222, 'hemail', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejerciciog2`
--

CREATE TABLE `ejerciciog2` (
  `idEjercicioG2` int(11) NOT NULL,
  `nameEjercicioG2` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `docente_iddocente` int(11) NOT NULL,
  `Tipo_idTipo` int(11) NOT NULL,
  `Tipo_Actividad_idActividad` int(11) NOT NULL,
  `letra_inicial_EjercicioG2` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `letra_final_EjercicioG2` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rutaImagen_Ejercicio` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cantidadValidadEjercicio` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `oracionEjercicio` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ejerciciog2`
--

INSERT INTO `ejerciciog2` (`idEjercicioG2`, `nameEjercicioG2`, `docente_iddocente`, `Tipo_idTipo`, `Tipo_Actividad_idActividad`, `letra_inicial_EjercicioG2`, `letra_final_EjercicioG2`, `rutaImagen_Ejercicio`, `cantidadValidadEjercicio`, `oracionEjercicio`) VALUES
(1, 'lexico1', 111, 3, 2, NULL, NULL, NULL, '2', NULL),
(2, 'lexico2', 111, 4, 2, NULL, NULL, NULL, '3', NULL),
(4, 'lexico3', 111, 3, 2, NULL, NULL, NULL, '2', NULL),
(12, 'EL1', 220, 3, 2, NULL, NULL, 'imagenes/EL1.jpg', '2', 'pera linda'),
(13, 'EL2', 220, 3, 2, NULL, NULL, 'imagenes/EL2.jpg', '2', 'osito lindo'),
(14, 'EL3', 220, 3, 2, NULL, NULL, 'imagenes/EL3.jpg', '2', 'patico muy lindo'),
(15, 'EL4', 220, 3, 2, NULL, NULL, 'imagenes/EL4.jpg', '2', 'oso lindo'),
(16, 'EJ5', 220, 3, 2, NULL, NULL, 'imagenes/EJ5.jpg', '2', 'el arroz'),
(17, 'EJ6', 220, 3, 2, NULL, NULL, 'imagenes/EJ6.jpg', '2', 'la pera amarilla'),
(18, 'EJER FT2 BPPP', 221, 2, 1, 's', 'n', NULL, NULL, NULL),
(20, 'EJ7', 220, 3, 2, NULL, NULL, 'imagenes/ej7.jpg', '2', 'la pera'),
(21, '', 220, 3, 2, NULL, NULL, 'imagenes/.jpg', '2', 'la pera'),
(22, 'elf', 220, 3, 2, NULL, NULL, 'imagenes/elf.jpg', '2', 'osito lindo'),
(23, 'lext2_2', 220, 4, 2, NULL, NULL, NULL, '2', 'oso polar'),
(24, 'lunanueva', 220, 4, 2, NULL, NULL, NULL, '3', 'la luna bella'),
(25, 'EJER LEX T1', 220, 3, 2, NULL, NULL, 'imagenes/EJER LEX T1.jpg', '2', 'oso panda'),
(72, 'EJER FON T1 C', 220, 1, 1, 'c', '', NULL, NULL, NULL),
(73, 'EJER FON T2 BCPP', 220, 2, 1, 's', 'n', NULL, NULL, NULL),
(74, 'EJER FT2 BPPP', 221, 2, 1, 's', 'n', NULL, NULL, NULL),
(75, 'Prueba fon', 220, 1, 1, 'P', 'A', 'imagenes/Prueba fon.jpg', '', ''),
(76, 'Prueba fon 2', 220, 2, 1, 'B', 'S', NULL, '', ''),
(77, 'lex pato pico', 220, 3, 2, NULL, NULL, 'imagenes/lex pato pico.jpg', '3', 'el pato amarillo'),
(78, 'lex panda negro', 220, 3, 2, NULL, NULL, 'imagenes/lex panda negro.jpg', '2', 'panda negro'),
(79, 'lex panda blanco', 220, 3, 2, NULL, NULL, 'imagenes/lex panda blanco.jpg', '2', 'panda blanco'),
(80, 'lex duck', 220, 3, 2, NULL, NULL, 'imagenes/lex duck.jpg', '2', 'mi pato'),
(81, 'lex rice', 220, 3, 2, NULL, NULL, 'imagenes/lex rice.jpg', '3', 'el arroz blanco'),
(82, 'lex pato t1', 220, 3, 2, NULL, NULL, 'imagenes/lex pato t1.jpg', '2', 'pato pato'),
(83, 'Prueba fon 2', 220, 2, 1, 'B', 'S', NULL, '', ''),
(84, 'Prueba fon 2', 220, 2, 1, 'B', 'S', NULL, '', ''),
(85, 'el pato lex', 220, 3, 2, '', '', 'imagenes/el pato lex.jpg', '3', 'el pato lex'),
(86, 'Prueba fon 2', 220, 2, 1, 'B', 'S', NULL, '', ''),
(87, 'Prueba fon 2', 220, 2, 1, 'B', 'S', NULL, '', ''),
(88, 'la nena', 220, 4, 2, '', '', NULL, '2', 'la nena'),
(89, 'eje fon H', 220, 1, 1, 'H', '', NULL, '', ''),
(90, 'fon t1 new', 220, 2, 1, 'n', 's', NULL, '', ''),
(91, 'ejer fon t2pcbh', 220, 2, 1, 's', 'n', NULL, '', ''),
(92, 'eje fon bhbh', 220, 2, 1, 's', 'n', NULL, '', ''),
(93, 'ejer sila la pera', 220, 5, 3, '', '', 'imagenes/pera.jpg', '5', 'la pera dulce'),
(94, 'eje sil hipo', 220, 5, 3, '', '', 'imagenes/hipopotamo.png', '7', 'el hipopotamo gris'),
(95, 'eje sil el buho', 220, 5, 3, '', '', 'imagenes/buho.png', '5', 'el buho loco'),
(96, 'ejer sila el panda', 220, 5, 3, '', '', 'imagenes/.jpg', '5', 'el panda loco'),
(97, 'eje sil arroz', 220, 5, 3, '', '', 'imagenes/eje sil arroz.jpg', '5', 'mi plato arroz'),
(98, 'eje sil t2 ppbh', 220, 6, 3, 's', 'n', NULL, '', ''),
(99, 'eje sil t2 cbbt', 220, 6, 3, 's', 'n', NULL, '', ''),
(100, 'ejer t2 lex', 220, 4, 2, '', '', NULL, '2', 'la cama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejerciciog2_has_imagen`
--

CREATE TABLE `ejerciciog2_has_imagen` (
  `EjercicioG2_idEjercicioG2` int(11) NOT NULL,
  `Imagen_idImagen_Ejercicio` int(11) NOT NULL,
  `fila_E_h_I` int(11) NOT NULL,
  `columna_E_H_I` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ejerciciog2_has_imagen`
--

INSERT INTO `ejerciciog2_has_imagen` (`EjercicioG2_idEjercicioG2`, `Imagen_idImagen_Ejercicio`, `fila_E_h_I`, `columna_E_H_I`) VALUES
(72, 6, 1, 1),
(72, 1, 1, 2),
(72, 2, 1, 3),
(72, 4, 1, 4),
(73, 1, 1, 1),
(73, 2, 2, 1),
(73, 6, 3, 1),
(73, 7, 4, 1),
(74, 1, 1, 1),
(74, 2, 2, 1),
(74, 3, 3, 1),
(74, 5, 4, 1),
(89, 1, 1, 1),
(89, 2, 1, 2),
(89, 3, 1, 3),
(89, 4, 1, 4),
(90, 1, 1, 1),
(90, 4, 2, 1),
(90, 5, 3, 1),
(90, 6, 4, 1),
(91, 4, 1, 1),
(91, 5, 2, 1),
(91, 6, 3, 1),
(91, 3, 4, 1),
(92, 4, 1, 1),
(92, 5, 2, 1),
(92, 4, 3, 1),
(92, 5, 4, 1),
(98, 1, 1, 1),
(98, 2, 2, 1),
(98, 5, 3, 1),
(98, 4, 4, 1),
(98, 4, 1, 2),
(98, 5, 2, 2),
(98, 2, 3, 2),
(98, 1, 4, 2),
(99, 6, 1, 1),
(99, 7, 2, 1),
(99, 5, 3, 1),
(99, 8, 4, 1),
(99, 8, 1, 2),
(99, 7, 2, 2),
(99, 6, 3, 2),
(99, 5, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejerciciog2_has_letrag2`
--

CREATE TABLE `ejerciciog2_has_letrag2` (
  `id_EjercicioG2_has_LetraG2` int(11) NOT NULL,
  `EjercicioG2_idEjercicioG2` int(11) NOT NULL,
  `Letra` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `fila_Eg2H_Lg2` int(11) NOT NULL,
  `col_Eg2H_Lge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ejerciciog2_has_letrag2`
--

INSERT INTO `ejerciciog2_has_letrag2` (`id_EjercicioG2_has_LetraG2`, `EjercicioG2_idEjercicioG2`, `Letra`, `fila_Eg2H_Lg2`, `col_Eg2H_Lge`) VALUES
(1, 73, 'B', 1, 1),
(2, 73, 'C', 2, 1),
(3, 73, 'P', 3, 1),
(4, 73, 'P', 4, 1),
(5, 74, 'B', 1, 1),
(6, 74, 'P', 2, 1),
(7, 74, 'P', 3, 1),
(8, 74, 'P', 4, 1),
(9, 90, 'r', 1, 1),
(10, 91, 'P', 1, 1),
(11, 91, 'C', 2, 1),
(12, 91, 'B', 3, 1),
(13, 91, 'H', 4, 1),
(14, 92, 'B', 1, 1),
(15, 92, 'H', 2, 1),
(16, 92, 'B', 3, 1),
(17, 92, 'H', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `idestudiante` int(11) NOT NULL,
  `nameestudiante` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `dniestudiante` int(11) NOT NULL,
  `acudienteestudiante` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `emailAcudienteestudiante` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `passwork_estudiante` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idestudiante`, `nameestudiante`, `dniestudiante`, `acudienteestudiante`, `emailAcudienteestudiante`, `passwork_estudiante`) VALUES
(222, 'Ana Rojas', 6666, 'Patricia Diaz', 'pemail', '123'),
(223, 'Mariana Juarez', 5566, 'Raquel Gomez', 'rgemail', '123'),
(331, 'Ana Duarte', 331, 'Leonardo Torres', 'i', '1'),
(332, 'Mariana Juarez', 332, 'Raquel Gomez', 'remail', '123'),
(333, 'Helen Botero', 333, 'Carlos Botero', 'cbemail', '123'),
(334, 'Liliana Perez', 334, 'Catalina Velez', 'cemail', '123'),
(335, 'Juana Duarte', 335, 'Karime Torres', 'kemail', '123'),
(336, 'Andrea Jimenez', 336, 'Yolanda Munoz', 'yemail', '123'),
(337, 'Anabelle Pabon', 337, 'Marta Palacios', 'memail', '123'),
(338, 'Melissa Cifuentes', 338, 'Teresa Alvarez', 'temail', '123'),
(339, 'Lina Restrepo', 339, 'Olga Lopez', 'oemail', '123'),
(340, 'Valeria Arias', 340, 'Georgina Otero', 'gemail', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_has_deber`
--

CREATE TABLE `estudiante_has_deber` (
  `id_estudiante_has_Debercol` int(11) NOT NULL,
  `estudiante_idestudiante` int(11) NOT NULL,
  `docente_iddocente` int(11) NOT NULL,
  `EjercicioG2_idEjercicioG2` int(11) DEFAULT NULL,
  `grupo_estudiante_has_deber_id_GE_H_D` int(11) DEFAULT NULL,
  `Asignacion_idGrupoAsignacion` int(11) DEFAULT NULL,
  `grupo_idgrupo` int(11) DEFAULT NULL,
  `fechaestudiante_has_Deber` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tipoDeber` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `calificacionestudiante_has_Deber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiante_has_deber`
--

INSERT INTO `estudiante_has_deber` (`id_estudiante_has_Debercol`, `estudiante_idestudiante`, `docente_iddocente`, `EjercicioG2_idEjercicioG2`, `grupo_estudiante_has_deber_id_GE_H_D`, `Asignacion_idGrupoAsignacion`, `grupo_idgrupo`, `fechaestudiante_has_Deber`, `tipoDeber`, `calificacionestudiante_has_Deber`) VALUES
(3732, 331, 220, 12, NULL, NULL, 5, '11/06/2019', 'EJERCICIO', NULL),
(3733, 222, 220, 13, 44, NULL, 5, '11/06/2019', 'EVALUAR', NULL),
(3734, 336, 220, 13, 44, NULL, 5, '11/06/2019', 'EVALUAR', NULL),
(3735, 333, 220, 95, NULL, 3, 5, '11/06/2019', 'PRUEBA', NULL),
(3736, 333, 220, 97, NULL, 3, 5, '11/06/2019', 'PRUEBA', NULL),
(3737, 331, 220, 95, 45, 3, 5, '11/06/2019', 'EJERCICIO', NULL),
(3738, 331, 220, 97, 45, 3, 5, '11/06/2019', 'EJERCICIO', NULL),
(3739, 333, 220, 95, 45, 3, 5, '11/06/2019', 'EJERCICIO', NULL),
(3740, 333, 220, 97, 45, 3, 5, '11/06/2019', 'EJERCICIO', NULL),
(3741, 334, 220, 95, 45, 3, 5, '11/06/2019', 'EJERCICIO', NULL),
(3742, 334, 220, 97, 45, 3, 5, '11/06/2019', 'EJERCICIO', NULL),
(3743, 336, 220, 95, 45, 3, 5, '11/06/2019', 'EJERCICIO', NULL),
(3744, 336, 220, 97, 45, 3, 5, '11/06/2019', 'EJERCICIO', NULL),
(3745, 337, 220, 95, 45, 3, 5, '11/06/2019', 'EJERCICIO', NULL),
(3746, 337, 220, 97, 45, 3, 5, '11/06/2019', 'EJERCICIO', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `idgrupo` int(11) NOT NULL,
  `namegrupo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `curso_idcurso` int(11) NOT NULL,
  `curso_Instituto_idInstituto` int(11) NOT NULL,
  `docente_iddocente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `namegrupo`, `curso_idcurso`, `curso_Instituto_idInstituto`, `docente_iddocente`) VALUES
(1, 'grupo1 c1', 1, 777, 111),
(2, 'grupo2 c1', 1, 777, 222),
(3, 'grupo1 c2', 2, 777, 221),
(4, 'grupo2 c2', 2, 777, 222),
(5, 'grupo1 c3', 3, 777, 220),
(6, 'grupo2 c3', 3, 777, 111),
(7, 'grupo3 c3', 3, 777, 220);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_estudiante`
--

CREATE TABLE `grupo_estudiante` (
  `idgrupo_estudiante` int(11) NOT NULL,
  `name_grupo_estudiante` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `docente_iddocente` int(11) NOT NULL,
  `grupo_idgrupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupo_estudiante`
--

INSERT INTO `grupo_estudiante` (`idgrupo_estudiante`, `name_grupo_estudiante`, `docente_iddocente`, `grupo_idgrupo`) VALUES
(1, 'grupo clase', 220, 5),
(2, 'grupo tortugas', 220, 5),
(3, 'grupo liebre', 220, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_estudiante_has_deber`
--

CREATE TABLE `grupo_estudiante_has_deber` (
  `id_GE_H_D` int(11) NOT NULL,
  `grupo_estudiante_idgrupo_estudiante` int(11) NOT NULL,
  `EjercicioG2_idEjercicioG2` int(11) DEFAULT NULL,
  `Asignacion_idGrupoAsignacion` int(11) DEFAULT NULL,
  `fecha_gehd` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_gehd` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupo_estudiante_has_deber`
--

INSERT INTO `grupo_estudiante_has_deber` (`id_GE_H_D`, `grupo_estudiante_idgrupo_estudiante`, `EjercicioG2_idEjercicioG2`, `Asignacion_idGrupoAsignacion`, `fecha_gehd`, `tipo_gehd`) VALUES
(15, 1, 13, NULL, '08/06/2019', 'PRUEBA'),
(16, 1, 21, NULL, '08/06/2019', 'EVALUAR'),
(17, 2, 15, NULL, '08/06/2019', 'EVALUAR'),
(22, 3, NULL, 3, '11/06/2019', 'EVALUAR'),
(23, 2, NULL, 3, '11/06/2019', 'EVALUAR'),
(24, 1, NULL, 3, '11/06/2019', 'EVALUAR'),
(25, 2, NULL, 3, '11/06/2019', 'EVALUAR'),
(26, 3, NULL, 3, '11/06/2019', 'EVALUAR'),
(27, 3, NULL, 3, '11/06/2019', 'EJERCICIO'),
(28, 2, NULL, 3, '11/06/2019', 'EVALUAR'),
(29, 2, NULL, 3, '11/06/2019', 'EJERCICIO'),
(30, 2, NULL, 3, '11/06/2019', 'PRUEBA'),
(31, 3, NULL, 3, '11/06/2019', 'EVALUAR'),
(32, 3, NULL, 3, '11/06/2019', 'EJERCICIO'),
(33, 2, NULL, 3, '11/06/2019', 'EJERCICIO'),
(34, 1, 12, NULL, '11/06/2019', 'PRUEBA'),
(35, 1, 14, NULL, '11/06/2019', 'EJERCICIO'),
(36, 1, 14, NULL, '11/06/2019', 'EJERCICIO'),
(37, 1, NULL, 3, '11/06/2019', 'EJERCICIO'),
(38, 2, NULL, 3, '11/06/2019', 'EJERCICIO'),
(39, 1, NULL, 3, '11/06/2019', 'PRUEBA'),
(40, 1, NULL, 3, '11/06/2019', 'PRUEBA'),
(41, 1, 13, NULL, '11/06/2019', 'EVALUAR'),
(42, 1, 12, NULL, '11/06/2019', 'EJERCICIO'),
(43, 1, NULL, 3, '11/06/2019', 'EVALUAR'),
(44, 2, 13, NULL, '11/06/2019', 'EVALUAR'),
(45, 1, NULL, 3, '11/06/2019', 'EJERCICIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_estudiante_has_estudiante`
--

CREATE TABLE `grupo_estudiante_has_estudiante` (
  `grupo_estudiante_idgrupo_estudiante` int(11) NOT NULL,
  `estudiante_idestudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupo_estudiante_has_estudiante`
--

INSERT INTO `grupo_estudiante_has_estudiante` (`grupo_estudiante_idgrupo_estudiante`, `estudiante_idestudiante`) VALUES
(1, 331),
(1, 333),
(1, 334),
(1, 336),
(1, 337),
(2, 222),
(2, 336),
(3, 331),
(3, 337);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_has_ejercicio`
--

CREATE TABLE `grupo_has_ejercicio` (
  `grupo_idgrupo` int(11) NOT NULL,
  `EjercicioG1_idEjercicioG1` int(11) DEFAULT NULL,
  `EjercicioG2_idEjercicioG2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_has_estudiante`
--

CREATE TABLE `grupo_has_estudiante` (
  `grupo_idgrupo` int(11) NOT NULL,
  `estudiante_idestudiante` int(11) NOT NULL,
  `nameEstudiante` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupo_has_estudiante`
--

INSERT INTO `grupo_has_estudiante` (`grupo_idgrupo`, `estudiante_idestudiante`, `nameEstudiante`) VALUES
(1, 222, 'Ana Rojas'),
(1, 223, 'Mariana Juarez'),
(1, 331, 'Ana Duarte'),
(1, 333, 'Helen Botero'),
(1, 335, 'Juana Duarte'),
(1, 337, 'Anabelle Pabon'),
(1, 339, 'Lina Restrepo'),
(2, 332, 'Mariana Juarez'),
(2, 334, 'Liliana Perez'),
(2, 336, 'Andrea Jimenez'),
(2, 338, 'Melissa Cifuentes'),
(2, 340, 'Valeria Arias'),
(3, 331, 'Ana Duarte'),
(3, 334, 'Liliana Perez'),
(3, 337, 'Anabelle Pabon'),
(3, 340, 'Valeria Arias'),
(4, 332, 'Mariana Juarez'),
(4, 335, 'Juana Duarte'),
(4, 338, 'Melissa Cifuentes'),
(4, 339, 'Lina Restrepo'),
(5, 331, 'Ana Duarte'),
(5, 333, 'Helen Botero'),
(5, 334, 'Liliana Perez'),
(5, 336, 'Andrea Jimenez'),
(5, 337, 'Anabelle Pabon'),
(5, 339, 'Lina Restrepo'),
(5, 340, 'Valeria Arias'),
(6, 332, 'Mariana Juarez'),
(6, 335, 'Juana Duarte'),
(6, 338, 'Melissa Cifuentes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `idImagen_Ejercicio` int(11) NOT NULL,
  `name_Imagen_Ejercicio` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ruta_Imagen_Ejercicio` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `letra_inicial_Imagen` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `letra_final_Imagen` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `cant_silabas_Imagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`idImagen_Ejercicio`, `name_Imagen_Ejercicio`, `ruta_Imagen_Ejercicio`, `letra_inicial_Imagen`, `letra_final_Imagen`, `cant_silabas_Imagen`) VALUES
(1, 'panda', 'imagenes/panda.jpg', 'P', 'A', 2),
(2, 'pera', 'imagenes/pera.jpg', 'P', 'A', 2),
(3, 'pato', 'imagenes/pato.jpg', 'P', 'O', 2),
(4, 'hipopotamo', 'imagenes/hipopotamo.png', 'H', 'O', 5),
(5, 'buho', 'imagenes/buho.png', 'B', 'O', 2),
(6, 'castor', 'imagenes/castor.jpg', 'C', 'R', 2),
(7, 'bus', 'imagenes/bus.jpg', 'B', 'S', 1),
(8, 'tren', 'imagenes/tren.jpg', 'T', 'N', 1),
(9, 'avion', 'imagenes/avion.jpg', 'A', 'N', 2),
(10, 'carro', 'imagenes/carro.jpg', 'C', 'O', 2),
(11, 'elefante', 'imagenes/elefante.jpg', 'E', 'E', 4),
(12, 'fresa', 'imagenes/fresa.jpg', 'F', 'A', 2),
(13, 'gato', 'imagenes/gato.jpg', 'G', 'O', 2),
(14, 'dinosaurio', 'imagenes/dinosaurio.jpg', 'D', 'O', 4),
(15, 'iguana', 'imagenes/iguana.jpg', 'I', 'A', 3),
(16, 'jirafa', 'imagenes/jirafa.jpg', 'J', 'A', 3),
(17, 'karateka', 'imagenes/karateka.jpg', 'K', 'A', 4),
(18, 'llave', 'imagenes/llave.jpg', 'I', 'E', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituto`
--

CREATE TABLE `instituto` (
  `idInstituto` int(11) NOT NULL,
  `Adminstrador_idAdminstrador` int(11) NOT NULL,
  `nameInstituto` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `instituto`
--

INSERT INTO `instituto` (`idInstituto`, `Adminstrador_idAdminstrador`, `nameInstituto`) VALUES
(777, 444, 'Instituto Nacional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(11) NOT NULL,
  `name_Tipo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Actividad_idActividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idTipo`, `name_Tipo`, `Actividad_idActividad`) VALUES
(1, 'tipo1', 1),
(2, 'tipo2', 1),
(3, 'tipo1', 2),
(4, 'tipo2', 2),
(5, 'tipo1', 3),
(6, 'tipo2', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`idActividad`);

--
-- Indices de la tabla `adminstrador`
--
ALTER TABLE `adminstrador`
  ADD PRIMARY KEY (`idAdminstrador`,`nameAdminstrador`);

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`idGrupoAsignacion`),
  ADD KEY `fk_GrupoActividad_docente1_idx` (`docente_iddocente`),
  ADD KEY `fk_Asignacion_Actividad1_idx` (`Actividad_idActividad`),
  ADD KEY `fk_Asignacion_grupo1_idx` (`grupo_idgrupo`);

--
-- Indices de la tabla `asignacion_has_ejerciciog2`
--
ALTER TABLE `asignacion_has_ejerciciog2`
  ADD PRIMARY KEY (`Asignacion_idGrupoAsignacion`,`EjercicioG2_idEjercicioG2`),
  ADD KEY `fk_Asignacion_has_EjercicioG2_EjercicioG21_idx` (`EjercicioG2_idEjercicioG2`),
  ADD KEY `fk_Asignacion_has_EjercicioG2_Asignacion1_idx` (`Asignacion_idGrupoAsignacion`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`,`Instituto_idInstituto`),
  ADD UNIQUE KEY `idcurso_UNIQUE` (`idcurso`),
  ADD KEY `fk_curso_Instituto1_idx` (`Instituto_idInstituto`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`iddocente`);

--
-- Indices de la tabla `ejerciciog2`
--
ALTER TABLE `ejerciciog2`
  ADD PRIMARY KEY (`idEjercicioG2`),
  ADD KEY `fk_EjercicioGrupo2_Tipo1_idx` (`Tipo_idTipo`,`Tipo_Actividad_idActividad`),
  ADD KEY `fk_EjercicioGrupo2_docente1_idx` (`docente_iddocente`);

--
-- Indices de la tabla `ejerciciog2_has_imagen`
--
ALTER TABLE `ejerciciog2_has_imagen`
  ADD KEY `fk_EjercicioG2_has_Imagen_Imagen1_idx` (`Imagen_idImagen_Ejercicio`),
  ADD KEY `fk_EjercicioG2_has_Imagen_EjercicioG21_idx` (`EjercicioG2_idEjercicioG2`);

--
-- Indices de la tabla `ejerciciog2_has_letrag2`
--
ALTER TABLE `ejerciciog2_has_letrag2`
  ADD PRIMARY KEY (`id_EjercicioG2_has_LetraG2`),
  ADD KEY `fk_EjercicioG2_has_LetraG2_EjercicioG21_idx` (`EjercicioG2_idEjercicioG2`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`idestudiante`);

--
-- Indices de la tabla `estudiante_has_deber`
--
ALTER TABLE `estudiante_has_deber`
  ADD PRIMARY KEY (`id_estudiante_has_Debercol`),
  ADD KEY `fk_estudiante_has_EjercicioG1_estudiante1_idx` (`estudiante_idestudiante`),
  ADD KEY `fk_estudiante_has_EjercicioG1_EjercicioG21_idx` (`EjercicioG2_idEjercicioG2`),
  ADD KEY `fk_estudiante_has_EjercicioG1_docente1_idx` (`docente_iddocente`),
  ADD KEY `fk_estudiante_has_Deber_grupo_estudiante_has_deber1_idx` (`grupo_estudiante_has_deber_id_GE_H_D`),
  ADD KEY `fk_estudiante_has_Deber_grupo1_idx` (`grupo_idgrupo`),
  ADD KEY `fk_estudiante_has_Deber_Asignacion1_idx` (`Asignacion_idGrupoAsignacion`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`idgrupo`),
  ADD KEY `fk_grupo_curso1_idx` (`curso_idcurso`,`curso_Instituto_idInstituto`),
  ADD KEY `fk_grupo_docente1_idx` (`docente_iddocente`);

--
-- Indices de la tabla `grupo_estudiante`
--
ALTER TABLE `grupo_estudiante`
  ADD PRIMARY KEY (`idgrupo_estudiante`),
  ADD KEY `fk_grupo_estudiante_docente1_idx` (`docente_iddocente`),
  ADD KEY `fk_grupo_estudiante_grupo1_idx` (`grupo_idgrupo`);

--
-- Indices de la tabla `grupo_estudiante_has_deber`
--
ALTER TABLE `grupo_estudiante_has_deber`
  ADD PRIMARY KEY (`id_GE_H_D`),
  ADD KEY `fk_grupo_estudiante_has_EjercicioG2_grupo_estudiante1_idx` (`grupo_estudiante_idgrupo_estudiante`),
  ADD KEY `fk_grupo_estudiante_has_deber_EjercicioG21_idx` (`EjercicioG2_idEjercicioG2`),
  ADD KEY `fk_grupo_estudiante_has_deber_Asignacion1_idx` (`Asignacion_idGrupoAsignacion`);

--
-- Indices de la tabla `grupo_estudiante_has_estudiante`
--
ALTER TABLE `grupo_estudiante_has_estudiante`
  ADD PRIMARY KEY (`grupo_estudiante_idgrupo_estudiante`,`estudiante_idestudiante`),
  ADD KEY `fk_grupo_estudiante_has_estudiante_estudiante1_idx` (`estudiante_idestudiante`),
  ADD KEY `fk_grupo_estudiante_has_estudiante_grupo_estudiante1_idx` (`grupo_estudiante_idgrupo_estudiante`);

--
-- Indices de la tabla `grupo_has_ejercicio`
--
ALTER TABLE `grupo_has_ejercicio`
  ADD PRIMARY KEY (`grupo_idgrupo`),
  ADD KEY `fk_grupo_has_Ejercicio_grupo1_idx` (`grupo_idgrupo`),
  ADD KEY `fk_grupo_has_Ejercicio_EjercicioG21_idx` (`EjercicioG2_idEjercicioG2`);

--
-- Indices de la tabla `grupo_has_estudiante`
--
ALTER TABLE `grupo_has_estudiante`
  ADD PRIMARY KEY (`grupo_idgrupo`,`estudiante_idestudiante`),
  ADD KEY `fk_grupo_has_estudiante_estudiante1_idx` (`estudiante_idestudiante`),
  ADD KEY `fk_grupo_has_estudiante_grupo1_idx` (`grupo_idgrupo`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`idImagen_Ejercicio`);

--
-- Indices de la tabla `instituto`
--
ALTER TABLE `instituto`
  ADD PRIMARY KEY (`idInstituto`,`Adminstrador_idAdminstrador`),
  ADD KEY `fk_Instituto_Adminstrador1_idx` (`Adminstrador_idAdminstrador`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`,`Actividad_idActividad`),
  ADD KEY `fk_Tipo_Actividad1_idx` (`Actividad_idActividad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `idGrupoAsignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ejerciciog2`
--
ALTER TABLE `ejerciciog2`
  MODIFY `idEjercicioG2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `ejerciciog2_has_letrag2`
--
ALTER TABLE `ejerciciog2_has_letrag2`
  MODIFY `id_EjercicioG2_has_LetraG2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `estudiante_has_deber`
--
ALTER TABLE `estudiante_has_deber`
  MODIFY `id_estudiante_has_Debercol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3747;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `grupo_estudiante`
--
ALTER TABLE `grupo_estudiante`
  MODIFY `idgrupo_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grupo_estudiante_has_deber`
--
ALTER TABLE `grupo_estudiante_has_deber`
  MODIFY `id_GE_H_D` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `idImagen_Ejercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD CONSTRAINT `fk_Asignacion_Actividad1` FOREIGN KEY (`Actividad_idActividad`) REFERENCES `actividad` (`idActividad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Asignacion_grupo1` FOREIGN KEY (`grupo_idgrupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_GrupoActividad_docente1` FOREIGN KEY (`docente_iddocente`) REFERENCES `docente` (`iddocente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asignacion_has_ejerciciog2`
--
ALTER TABLE `asignacion_has_ejerciciog2`
  ADD CONSTRAINT `fk_Asignacion_has_EjercicioG2_Asignacion1` FOREIGN KEY (`Asignacion_idGrupoAsignacion`) REFERENCES `asignacion` (`idGrupoAsignacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Asignacion_has_EjercicioG2_EjercicioG21` FOREIGN KEY (`EjercicioG2_idEjercicioG2`) REFERENCES `ejerciciog2` (`idEjercicioG2`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_curso_Instituto1` FOREIGN KEY (`Instituto_idInstituto`) REFERENCES `instituto` (`idInstituto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ejerciciog2`
--
ALTER TABLE `ejerciciog2`
  ADD CONSTRAINT `fk_EjercicioGrupo2_Tipo1` FOREIGN KEY (`Tipo_idTipo`,`Tipo_Actividad_idActividad`) REFERENCES `tipo` (`idTipo`, `Actividad_idActividad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_EjercicioGrupo2_docente1` FOREIGN KEY (`docente_iddocente`) REFERENCES `docente` (`iddocente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ejerciciog2_has_imagen`
--
ALTER TABLE `ejerciciog2_has_imagen`
  ADD CONSTRAINT `fk_EjercicioG2_has_Imagen_EjercicioG21` FOREIGN KEY (`EjercicioG2_idEjercicioG2`) REFERENCES `ejerciciog2` (`idEjercicioG2`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_EjercicioG2_has_Imagen_Imagen1` FOREIGN KEY (`Imagen_idImagen_Ejercicio`) REFERENCES `imagen` (`idImagen_Ejercicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ejerciciog2_has_letrag2`
--
ALTER TABLE `ejerciciog2_has_letrag2`
  ADD CONSTRAINT `fk_EjercicioG2_has_LetraG2_EjercicioG21` FOREIGN KEY (`EjercicioG2_idEjercicioG2`) REFERENCES `ejerciciog2` (`idEjercicioG2`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estudiante_has_deber`
--
ALTER TABLE `estudiante_has_deber`
  ADD CONSTRAINT `fk_estudiante_has_Deber_Asignacion1` FOREIGN KEY (`Asignacion_idGrupoAsignacion`) REFERENCES `asignacion` (`idGrupoAsignacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiante_has_Deber_grupo1` FOREIGN KEY (`grupo_idgrupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiante_has_Deber_grupo_estudiante_has_deber1` FOREIGN KEY (`grupo_estudiante_has_deber_id_GE_H_D`) REFERENCES `grupo_estudiante_has_deber` (`id_GE_H_D`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiante_has_EjercicioG1_EjercicioG21` FOREIGN KEY (`EjercicioG2_idEjercicioG2`) REFERENCES `ejerciciog2` (`idEjercicioG2`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiante_has_EjercicioG1_docente1` FOREIGN KEY (`docente_iddocente`) REFERENCES `docente` (`iddocente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiante_has_EjercicioG1_estudiante1` FOREIGN KEY (`estudiante_idestudiante`) REFERENCES `estudiante` (`idestudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `fk_grupo_curso1` FOREIGN KEY (`curso_idcurso`,`curso_Instituto_idInstituto`) REFERENCES `curso` (`idcurso`, `Instituto_idInstituto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupo_docente1` FOREIGN KEY (`docente_iddocente`) REFERENCES `docente` (`iddocente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupo_estudiante`
--
ALTER TABLE `grupo_estudiante`
  ADD CONSTRAINT `fk_grupo_estudiante_docente1` FOREIGN KEY (`docente_iddocente`) REFERENCES `docente` (`iddocente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupo_estudiante_grupo1` FOREIGN KEY (`grupo_idgrupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupo_estudiante_has_deber`
--
ALTER TABLE `grupo_estudiante_has_deber`
  ADD CONSTRAINT `fk_grupo_estudiante_has_EjercicioG2_grupo_estudiante1` FOREIGN KEY (`grupo_estudiante_idgrupo_estudiante`) REFERENCES `grupo_estudiante` (`idgrupo_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupo_estudiante_has_deber_Asignacion1` FOREIGN KEY (`Asignacion_idGrupoAsignacion`) REFERENCES `asignacion` (`idGrupoAsignacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupo_estudiante_has_deber_EjercicioG21` FOREIGN KEY (`EjercicioG2_idEjercicioG2`) REFERENCES `ejerciciog2` (`idEjercicioG2`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupo_estudiante_has_estudiante`
--
ALTER TABLE `grupo_estudiante_has_estudiante`
  ADD CONSTRAINT `fk_grupo_estudiante_has_estudiante_estudiante1` FOREIGN KEY (`estudiante_idestudiante`) REFERENCES `estudiante` (`idestudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupo_estudiante_has_estudiante_grupo_estudiante1` FOREIGN KEY (`grupo_estudiante_idgrupo_estudiante`) REFERENCES `grupo_estudiante` (`idgrupo_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupo_has_ejercicio`
--
ALTER TABLE `grupo_has_ejercicio`
  ADD CONSTRAINT `fk_grupo_has_Ejercicio_EjercicioG21` FOREIGN KEY (`EjercicioG2_idEjercicioG2`) REFERENCES `ejerciciog2` (`idEjercicioG2`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupo_has_Ejercicio_grupo1` FOREIGN KEY (`grupo_idgrupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupo_has_estudiante`
--
ALTER TABLE `grupo_has_estudiante`
  ADD CONSTRAINT `fk_grupo_has_estudiante_estudiante1` FOREIGN KEY (`estudiante_idestudiante`) REFERENCES `estudiante` (`idestudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupo_has_estudiante_grupo1` FOREIGN KEY (`grupo_idgrupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `instituto`
--
ALTER TABLE `instituto`
  ADD CONSTRAINT `fk_Instituto_Adminstrador1` FOREIGN KEY (`Adminstrador_idAdminstrador`) REFERENCES `adminstrador` (`idAdminstrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD CONSTRAINT `fk_Tipo_Actividad1` FOREIGN KEY (`Actividad_idActividad`) REFERENCES `actividad` (`idActividad`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
