-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Maio-2021 às 15:45
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `tipo` varchar(220) NOT NULL,
  `email` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `telefone`, `tipo`, `email`) VALUES
(1, 'Vanessa Ribeiro  ', '31991508946         ', 'Celular         ', 'vanessa.batistaribeiro25@gmail.com         '),
(2, 'Filipe Ribeiro', '31996881148  ', 'Celular  ', 'filipecardosoribeiro25@gmail.com  '),
(3, 'Misael Cardoso ', '31999999998', 'Celular', ' misael@gmail.com'),
(4, 'Maria das Dores ', '31988888888 ', 'Celular ', ' maria@gmail.com'),
(5, 'Neusa Cardoso', '31977777777', 'Celular', 'neusa@gmail.com'),
(7, 'Andressa Pereira', '31977717771', 'Celular', 'andressa@gmail.com'),
(53, 'Larissa Neves', '31988888888', 'Celular', 'larissa@gmail.com'),
(57, 'Paula Dias', '31988889999', 'Celular', 'paula@gmail.com'),
(59, 'Joao Silva', '3133335555', 'Residencial', ''),
(60, 'Raissa Pereira', '3133553355', 'Celular', 'raissa@gmail.com'),
(61, 'Guilherme Ribeiro', '31987775555', 'Celular', 'gui@gmail.com'),
(62, 'Miguel Arcanjo', '3135363536', 'Residencial', 'arcanjo@yahoo.com'),
(63, 'Mabel Cardoso', '31988558855', 'Celular', 'mabel@gmail.com'),
(64, 'Gabriel Arcanjo', '3136363636', 'Residencial', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(2, 'Vanessa Ribeiro', 'vana@gmail.com', 'vanessa', '$2y$10$w0vocJ2l6i76LP1/8Kt4COWeCK8MEzXUzqK.BXexbeubavpeVIflK');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
