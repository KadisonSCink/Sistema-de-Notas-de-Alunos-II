-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2024 às 05:49
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
-- Banco de dados: `escola ii`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `nota1` decimal(5,2) DEFAULT NULL,
  `nota2` decimal(5,2) DEFAULT NULL,
  `nota3` decimal(5,2) DEFAULT NULL,
  `nota4` decimal(5,2) DEFAULT NULL,
  `media` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `nota1`, `nota2`, `nota3`, `nota4`, `media`) VALUES
(59, 'Maria Oliveira', 9.00, 7.50, 9.50, 10.00, 9.00),
(60, 'Pedro Santos', 6.00, 7.50, 8.00, 7.00, 7.13),
(61, 'Ana Costa', 8.50, 7.00, 9.00, 8.00, 8.13),
(62, 'Lucas Pereira', 5.50, 6.00, 7.50, 8.50, 6.88),
(63, 'Mariana Souza', 10.00, 9.50, 9.00, 10.00, 9.63),
(64, 'Gustavo Lima', 7.00, 6.50, 8.00, 7.50, 7.25),
(65, 'Camila Rocha', 9.50, 8.00, 8.50, 9.00, 8.75),
(66, 'Renan Almeida', 6.00, 7.00, 6.50, 7.50, 6.75),
(67, 'Larissa Lopes', 8.00, 9.00, 8.50, 7.50, 8.25),
(68, 'Diego Ramos', 5.00, 6.00, 7.00, 8.00, 6.50),
(69, 'Juliana Nunes', 8.50, 9.50, 10.00, 8.00, 9.00),
(70, 'Carlos Henrique', 6.50, 7.50, 8.50, 7.00, 7.38),
(71, 'Beatriz Farias', 9.00, 8.00, 8.50, 9.50, 8.75),
(72, 'Rodrigo Moreira', 7.50, 8.50, 7.00, 6.50, 7.38);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
