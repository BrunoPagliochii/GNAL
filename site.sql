-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Ago-2022 às 02:02
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

DROP TABLE IF EXISTS `avaliacoes`;
CREATE TABLE IF NOT EXISTS `avaliacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qnt_estrela` int(11) NOT NULL,
  `criado` datetime DEFAULT NULL,
  `modificado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `qnt_estrela`, `criado`, `modificado`) VALUES
(1, 5, '2022-08-13 22:22:33', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dav`
--

DROP TABLE IF EXISTS `dav`;
CREATE TABLE IF NOT EXISTS `dav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `associado` varchar(200) NOT NULL,
  `data_hora` datetime NOT NULL,
  `forma_pagamento` varchar(200) NOT NULL,
  `valor` int(11) NOT NULL,
  `criado` datetime DEFAULT NULL,
  `modificado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dav`
--

INSERT INTO `dav` (`id`, `associado`, `data_hora`, `forma_pagamento`, `valor`, `criado`, `modificado`) VALUES
(3, 'Cleiton', '2022-08-16 18:31:00', 'PIX', 0, '2022-08-13 18:31:17', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servico` varchar(200) NOT NULL,
  `detalhes` varchar(200) NOT NULL,
  `logradouro` varchar(200) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `horario` datetime NOT NULL,
  `criado` datetime DEFAULT NULL,
  `valor` varchar(10) DEFAULT NULL,
  `modificado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `servico`, `detalhes`, `logradouro`, `bairro`, `cidade`, `horario`, `criado`, `valor`, `modificado`) VALUES
(8, 'pedreiro', 'fazer muro', 'rua de teste', 'teste', 'teste', '2022-08-13 02:41:00', '2022-08-13 22:38:02', '200,00', NULL),
(7, 'eletrecista', 'Chuveiro Queimado', 'SC 283 KM7,5, 801', 'Fragosos', 'concÃ³rdia', '2022-08-15 12:30:00', '2022-08-13 22:31:17', '200,00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `sobrenome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cpf` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `confirme_senha` varchar(200) NOT NULL,
  `criado` datetime DEFAULT NULL,
  `foto` int(11) DEFAULT NULL,
  `modificado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `sobrenome`, `email`, `cpf`, `senha`, `confirme_senha`, `criado`, `foto`, `modificado`) VALUES
(1, 'teste', 'teste', 'teste@gmail.com', '111.111.111-11', '1', '1', NULL, NULL, NULL),
(2, 'Bruno', 'Pagliochi', 'poraloka27@gmail.com', '103.125.589-37', '1', '1', NULL, NULL, NULL),
(3, 'aa', 'aa', 'aa@aa', '111.111.111.11', '1', '1', '2022-08-13 14:07:27', NULL, NULL),
(4, 'Bruno', 'Pagliochi', 'bruno@gmail.com', '103.125.589-37', '1', '1', '2022-08-13 14:17:51', NULL, NULL),
(5, 'aaaa', 'a', 'aaaa@Aaaa', '103.125.589-37', '1', '', '2022-08-13 15:15:12', NULL, NULL),
(6, '', '', '', '', '', '', '2022-08-13 22:03:41', NULL, NULL),
(7, '', '', '', '', '', '', '2022-08-13 22:07:20', NULL, NULL),
(8, '', '', '', '', '', '', '2022-08-13 22:07:38', NULL, NULL),
(9, '', '', '', '', '', '', '2022-08-13 22:08:57', NULL, NULL),
(10, '', '', '', '', '', '', '2022-08-13 22:08:58', NULL, NULL),
(11, '', '', '', '', '', '', '2022-08-13 22:09:01', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
