-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/12/2024 às 00:38
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `asteroids_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `asteroids`
--

CREATE TABLE `asteroids` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `diameter` decimal(10,2) DEFAULT NULL,
  `proximity` decimal(10,2) DEFAULT NULL,
  `approach_data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `asteroids`
--

INSERT INTO `asteroids` (`id`, `name`, `diameter`, `proximity`, `approach_data`) VALUES
(371, '(2007 XB23)', 0.02, 445627.88, '2024-12-11'),
(372, '504887 (2010 WL)', 0.63, 45187743.58, '2024-12-11'),
(373, '(2024 WB14)', 0.05, 6912955.53, '2024-12-11'),
(374, '(2024 XK1)', 0.02, 1861524.10, '2024-12-11'),
(375, '(2016 CN248)', 0.02, 67674249.70, '2024-12-11'),
(376, '(2017 XS)', 0.17, 50517243.55, '2024-12-11'),
(377, '(2019 XQ1)', 0.05, 12827247.49, '2024-12-11'),
(378, '(2018 XU3)', 0.05, 6442408.23, '2024-12-11'),
(379, '(2024 OR1)', 0.05, 60389117.78, '2024-12-11'),
(380, '(2017 WL1)', 0.37, 16418987.29, '2024-12-05'),
(381, '(2018 VB4)', 0.33, 61988628.91, '2024-12-05'),
(382, '(2024 WG5)', 0.04, 4595291.36, '2024-12-05'),
(383, '(2021 WA5)', 0.02, 3758699.44, '2024-12-05'),
(384, '(2024 XD1)', 0.10, 23001551.27, '2024-12-05'),
(385, '(2021 UQ4)', 0.08, 52679320.79, '2024-12-05'),
(386, '(2008 YS27)', 0.35, 17402695.79, '2024-12-05'),
(387, '(2024 XO)', 0.08, 20095161.51, '2024-12-05'),
(388, '(2024 WT1)', 0.05, 9159839.66, '2024-12-05'),
(389, '(2024 WY1)', 0.05, 11901966.68, '2024-12-05'),
(390, '(2023 GJ2)', 0.04, 69820203.67, '2024-12-05'),
(391, '(2024 WB1)', 0.04, 7331665.60, '2024-12-05'),
(392, '(2023 BJ7)', 0.01, 25499714.25, '2024-12-05'),
(393, '(2021 XN4)', 0.10, 8014464.37, '2024-12-05'),
(394, '(2009 KY1)', 0.11, 22605973.54, '2024-12-05');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `asteroids`
--
ALTER TABLE `asteroids`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `asteroids`
--
ALTER TABLE `asteroids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=395;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
