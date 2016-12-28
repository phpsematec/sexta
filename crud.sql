-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Dez-2016 às 00:46
-- Versão do servidor: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`id` int(8) unsigned NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `id_emp` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `cpf`, `id_emp`) VALUES
(19, 'maria', 'mariaasdfasdf@sdf', 1188888, 0),
(22, 'ZÃ© ComÃ©ia', 'brunoramosmartins@gmail.com', 34545656778, 0),
(23, 'Bruno Ramos', 'um_rec@hotmail.com', 65498765423, 0),
(24, 'DSGDBVASDGVBS', 'um_rec@hotmail.com', 23410000000, 0),
(29, '', '', 0, 0),
(30, 'ZÃ© ComÃ©ia', 'brunoramosmartins@gmail.com', 34545656778, 0),
(31, 'ZÃ© ComÃ©ia', 'brunoramosmartins@gmail.com', 34545656778, 0),
(32, 'ZÃ© ComÃ©ia', 'brunoramosmartins@gmail.com', 34545656778, 0),
(33, 'ZÃ© ComÃ©ia', 'brunoramosmartins@gmail.com', 34545656778, 0),
(34, 'Catatau', 'um_rec@hotmail.com', 34545656778, 0),
(35, 'ZÃ© ComÃ©ia', 'brunoramosmartins@gmail.com', 34545656778, 0),
(36, 'Bruno Ramos222', 'brunoramosmartins@gmail.com', 34545656778, 0),
(37, 'ZÃ© ComÃ©ia444', 'brunoramosmartins@gmail.com', 34545656778, 0),
(38, 'Bruno 007', 'gsdfgsdfgsdfg', 234523452345234523, 0),
(39, 'teste da sexta', 'sfgdfgsdfgsdfgsfg', 2345235, 0),
(40, 'Bruno teste hoje', 'asdfgasdgasg', 65465465, 0),
(41, 'Bruno teste hoje 2', 'fgsdfgsfg', 0, 2),
(42, 'fgfgdfgfg', 'dftgjhgjtykjhyk', 888888, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(8) unsigned NOT NULL,
  `user_nome` varchar(60) NOT NULL,
  `user_login` varchar(12) NOT NULL,
  `user_senha` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
MODIFY `id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
