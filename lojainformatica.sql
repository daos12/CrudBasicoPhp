-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Out-2022 às 19:46
-- Versão do servidor: 5.5.21
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE DATABASE lojainformatica;
USE lojainformatica;



--
-- Banco de dados: `lojainformatica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(70) NOT NULL,
  `telCliente` varchar(25) NOT NULL,
  `genCliente` varchar(25) NOT NULL,
  `emailCliente` varchar(75) NOT NULL,
  `endCliente` varchar(75) NOT NULL,
  `cpfCliente` varchar(15) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nomeCliente`, `telCliente`, `genCliente`, `emailCliente`, `endCliente`, `cpfCliente`) VALUES
(1, 'Pablo Oliveira Silva', '(34) 98874-1254', 'Feminino', 'pabulo@gmail.com', 'Alameda Das Jequitibas', '125487536-89'),
(2, 'Rafael Santos', '(34) 98872-5553', 'Masculino', 'rafael@hotmail.com', 'Alameda Das Caviunas', '152321478-88'),
(3, 'Diego Antonio', '(34) 98872-0132', 'Masculino', 'diego@hotmail.com', 'Alameda Das Perobas', '152321479-13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `numProduto` int(11) NOT NULL,
  `nomeProduto` varchar(100) NOT NULL,
  `qtdProduto` int(11) NOT NULL,
  `catProduto` varchar(100) NOT NULL,
  `forn` varchar(100) NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `numProduto`, `nomeProduto`, `qtdProduto`, `catProduto`, `forn`) VALUES
(2, 25, 'Mouse King', 13, 'Headsets', 'Microsoft'),
(3, 9, 'Teclado Mecânico', 15, 'Headsets', 'Microsoft'),
(4, 2, 'Fone sem Fio', 30, 'Headsets', 'Microsoft'),
(7, 25, 'Caixa de Som', 50, 'Headsets', 'Positivo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
