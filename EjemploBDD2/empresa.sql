-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 03:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa`
--

-- --------------------------------------------------------

--
-- Table structure for table `asignaciones`
--

CREATE TABLE `asignaciones` (
  `ID_Asignacion` int(11) NOT NULL,
  `ID_Empleado` int(11) DEFAULT NULL,
  `ID_Proyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asignaciones`
--

INSERT INTO `asignaciones` (`ID_Asignacion`, `ID_Empleado`, `ID_Proyecto`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 3),
(5, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `departamentos`
--

CREATE TABLE `departamentos` (
  `ID_Departamento` int(11) NOT NULL,
  `NombreDepartamento` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `Gerente` varchar(50) DEFAULT NULL,
  `Ciudad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departamentos`
--

INSERT INTO `departamentos` (`ID_Departamento`, `NombreDepartamento`, `Descripcion`, `Gerente`, `Ciudad`) VALUES
(1, 'Ventas', 'Ventas de la empresa', 'Luis', 'Tijuana'),
(2, 'Marketing', 'Publicidad de la empres', 'Luis', 'Tijuana'),
(3, 'Recursos Humanos', 'Contrataciones', 'Luis', 'Tijuana'),
(4, 'Tecnología', 'Informatica', 'Luis', 'Tijuana'),
(5, 'Finanzas', 'Contabilidad', 'Luis', 'Tijuana');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `ID_Empleado` int(11) NOT NULL,
  `NombreEmpleado` varchar(50) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `ID_Departamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`ID_Empleado`, `NombreEmpleado`, `Edad`, `ID_Departamento`) VALUES
(1, 'Juan Perez', 34, 1),
(2, 'María García', 33, 2),
(3, 'Carlos López', 55, 3),
(4, 'Ana Martínez', 33, 1),
(5, 'Luis Rodriguez', 44, 4);

-- --------------------------------------------------------

--
-- Table structure for table `proyectos`
--

CREATE TABLE `proyectos` (
  `ID_Proyecto` int(11) NOT NULL,
  `NombreProyecto` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `Presupuesto` int(11) DEFAULT NULL,
  `Lider` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proyectos`
--

INSERT INTO `proyectos` (`ID_Proyecto`, `NombreProyecto`, `Descripcion`, `Presupuesto`, `Lider`) VALUES
(1, 'Proyecto A', 'Calculadora', 1000, 'America'),
(2, 'Proyecto B', 'Ventas Tienda', 1000, 'Samantha'),
(3, 'Proyecto C', 'Sopa de Letras', 1000, 'Jesus'),
(4, 'Proyecto D', 'Sistema Escolar', 1000, 'Marco'),
(5, 'Proyecto E', 'Fotografias', 1000, 'Miguel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD PRIMARY KEY (`ID_Asignacion`),
  ADD KEY `ID_Empleado` (`ID_Empleado`),
  ADD KEY `ID_Proyecto` (`ID_Proyecto`);

--
-- Indexes for table `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`ID_Departamento`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_Empleado`),
  ADD KEY `ID_Departamento` (`ID_Departamento`);

--
-- Indexes for table `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`ID_Proyecto`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD CONSTRAINT `asignaciones_ibfk_1` FOREIGN KEY (`ID_Empleado`) REFERENCES `empleados` (`ID_Empleado`),
  ADD CONSTRAINT `asignaciones_ibfk_2` FOREIGN KEY (`ID_Proyecto`) REFERENCES `proyectos` (`ID_Proyecto`);

--
-- Constraints for table `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`ID_Departamento`) REFERENCES `departamentos` (`ID_Departamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
