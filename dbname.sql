-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03-Jan-2022 às 23:52
-- Versão do servidor: 10.5.12-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id18040534_cristiano`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banidos33`
--

CREATE TABLE `banidos33` (
  `user` text NOT NULL,
  `device` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tokens33`
--

CREATE TABLE `tokens33` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Vendedor` text NOT NULL,
  `StartDate` timestamp NULL DEFAULT NULL,
  `EndDate` timestamp NULL DEFAULT NULL,
  `UID` varchar(60) DEFAULT NULL,
  `UID2` varchar(60) DEFAULT NULL,
  `status` text NOT NULL,
  `devices` text NOT NULL,
  `dias` text NOT NULL,
  `diasp` text NOT NULL,
  `Expiry` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tokens33`
--

INSERT INTO `tokens33` (`Username`, `Password`, `Vendedor`, `StartDate`, `EndDate`, `UID`, `UID2`, `status`, `devices`, `dias`, `diasp`, `Expiry`) VALUES
('55', '5', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, 'on', '1', '7', '', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios33`
--

CREATE TABLE `usuarios33` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `status` text NOT NULL,
  `plano` text NOT NULL,
  `garantia` timestamp NULL DEFAULT NULL,
  `compra` timestamp NULL DEFAULT NULL,
  `nomedopainel` text NOT NULL,
  `slot1` int(11) NOT NULL,
  `slot2` int(11) NOT NULL,
  `slot3` int(11) NOT NULL,
  `slot4` int(11) NOT NULL,
  `valor1` int(11) NOT NULL,
  `valor2` int(11) NOT NULL,
  `valor3` int(11) NOT NULL,
  `valor4` int(11) NOT NULL,
  `antvpn` text NOT NULL,
  `flogin` text NOT NULL,
  `vendedorespodemadicionardias` text NOT NULL,
  `vendedorespodempausar` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios33`
--

INSERT INTO `usuarios33` (`id`, `login`, `senha`, `status`, `plano`, `garantia`, `compra`, `nomedopainel`, `slot1`, `slot2`, `slot3`, `slot4`, `valor1`, `valor2`, `valor3`, `valor4`, `antvpn`, `flogin`, `vendedorespodemadicionardias`, `vendedorespodempausar`, `message`) VALUES
(1, 'xDex', '81dc9bdb52d04dc20036dbd8313ed055', '0', '', NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', ''),
(2, 'admin', 'config', 'Ativado', 'P', '2021-10-30 18:24:05', '2021-07-23 18:24:05', 'GreenPower', 1, 7, 30, 60, 1, 1, 2, 2, 'Ativado', 'Ativado', 'Desativado', 'Desativado', 'Servidor Offline');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores33`
--

CREATE TABLE `vendedores33` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `creditos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendedores33`
--

INSERT INTO `vendedores33` (`id`, `login`, `senha`, `creditos`) VALUES
(77, '2', 'c81e728d9d4c2f636f067f89cc14862c', 53);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tokens33`
--
ALTER TABLE `tokens33`
  ADD UNIQUE KEY `Username` (`Username`,`Password`);

--
-- Índices para tabela `usuarios33`
--
ALTER TABLE `usuarios33`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendedores33`
--
ALTER TABLE `vendedores33`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios33`
--
ALTER TABLE `usuarios33`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `vendedores33`
--
ALTER TABLE `vendedores33`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
