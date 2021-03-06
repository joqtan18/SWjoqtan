-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2019 a las 19:58:59
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bddrec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `emp_id` int(11) NOT NULL,
  `emp_dni` int(8) NOT NULL,
  `emp_apellidos` varchar(150) NOT NULL,
  `emp_nombres` varchar(150) NOT NULL,
  `emp_sexo` int(11) NOT NULL,
  `emp_telefono` int(7) NOT NULL,
  `emp_celular` int(9) NOT NULL,
  `emp_direccion` varchar(150) NOT NULL,
  `emp_distrito` varchar(150) NOT NULL,
  `emp_provincia` varchar(150) NOT NULL,
  `emp_email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`emp_id`, `emp_dni`, `emp_apellidos`, `emp_nombres`, `emp_sexo`, `emp_telefono`, `emp_celular`, `emp_direccion`, `emp_distrito`, `emp_provincia`, `emp_email`) VALUES
(1, 70327397, 'RODRIGUEZ RICHARTE', 'ZALETH ', 2, 2222222, 941160145, 'JR.REPUBLICA DE HAITI', 'CALLAO', 'CALLAO', 'CALLAO@GMAIL.COM'),
(2, 70327395, 'RODRIGUEZ RICHARTE', 'JOSEPH JOQTAN', 2, 1160145, 941160145, 'mz p lt 16 villas de oquendo etapa II', 'CARMEN DE LA LEGUA-REYNOSO', 'CALLAO', 'joqtan.jr@gmail.com'),
(4, 43323864, 'RODRIGUEZ PINCHE', 'JOSE ORLANDO', 1, 1160145, 941160145, 'mz p lt 16 villas de oquendo etapa II', 'CARMEN DE LA LEGUA-REYNOSO', 'CALLAO', 'joqtan.jr@gmail.com'),
(5, 25835104, 'RICHARTE SALVADOR', 'ELIZABETH', 1, 1160145, 941160145, 'mz p lt 16 villas de oquendo etapa II', 'CARMEN DE LA LEGUA-REYNOSO', 'CALLAO', 'joqtan.jr@gmail.com'),
(6, 70327391, 'LLANTOY CLAPEZ', 'MORONI RICHARD', 1, 1160145, 941160145, 'mz p lt 16 villas de oquendo etapa II', 'CARMEN DE LA LEGUA-REYNOSO', 'CALLAO', 'joqtan.jr@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `sexo_id` int(11) NOT NULL,
  `sexo_nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`sexo_id`, `sexo_nombre`) VALUES
(1, 'MASCULINO'),
(2, 'FEMENINO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_dni` (`emp_dni`),
  ADD KEY `emp_sexo` (`emp_sexo`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`sexo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `sexo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`emp_sexo`) REFERENCES `sexo` (`sexo_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
