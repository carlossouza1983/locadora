-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Out-2022 às 23:32
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs_locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(12, 'AÇÃO'),
(13, 'TERROR'),
(14, 'FICÇÃO'),
(15, 'AVENTURA'),
(16, 'DRAMA'),
(17, 'COMÉDIA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL,
  `eh_fornecedor` varchar(1) DEFAULT NULL,
  `eh_transportador` varchar(1) DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `nome_fantasia` varchar(100) NOT NULL,
  `cpf` varchar(25) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `data_cadastro` date NOT NULL,
  `ativo` varchar(1) NOT NULL DEFAULT 'S',
  `fone` varchar(18) NOT NULL,
  `celular` varchar(18) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `cep` varchar(18) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `complemento` varchar(80) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `ie` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cnae` varchar(10) NOT NULL,
  `site` varchar(30) NOT NULL,
  `eh_cliente` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `eh_fornecedor`, `eh_transportador`, `nome`, `nome_fantasia`, `cpf`, `cnpj`, `data_cadastro`, `ativo`, `fone`, `celular`, `email`, `senha`, `cep`, `logradouro`, `numero`, `uf`, `cidade`, `complemento`, `bairro`, `ie`, `rg`, `cnae`, `site`, `eh_cliente`) VALUES
(2, NULL, NULL, 'carlos costa de souza', 'souza', '', '46.018.682/0001', '2022-10-07', 'S', '(94)8555-5555', '(88) 8888-8888', 'alcicarlos@hotmail.com', '123', '68501-000', 'Avenida Itacaiúnas', '', 'PA', 'Marabá', 'casa', 'Liberdade', '629848', '', '', '', 'S'),
(3, 'S', 'S', 'carlos costa de souza', '', '', '46.018.682/0001', '2022-10-07', 'S', '(94)8555-5555', '(88) 8888-8888', 'acceramicapalestina@gmail.com', '123', '68501-000', 'Avenida Itacaiúnas', '', 'PA', 'Marabá', 'casa', 'Liberdade', '629848', '', '', '', 'S'),
(4, NULL, 'S', 'carlos costa de souza', 'souza', '', '46.018.682/0001', '2022-10-07', 'S', '(94)8555-5555', '(88) 8888-8888', 'tadeumello98@gmail.com', '123', '68501-000', 'Avenida Itacaiúnas', '', 'PA', 'Marabá', 'casa', 'Liberdade', '629848', '', '', '', 'S'),
(5, 'S', 'S', 'carlos costa de souza', 'souza', '97080535115', '46018682000160', '2022-10-07', 'S', '9485555555', '8888888888', 'kelly2019.vieira@gmail.com', '123', '68501-000', 'Avenida Itacaiúnas', '', 'PA', 'Marabá', 'casa', 'Liberdade', '629848', '25668555', '', '', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_unidade` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `eh_lancamento` varchar(1) DEFAULT NULL,
  `eh_promocao` varchar(1) NOT NULL DEFAULT 'N',
  `codigo_barra` varchar(20) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `ativo` varchar(1) NOT NULL DEFAULT 'S',
  `estoque_inicial` int(11) DEFAULT '0',
  `sinopse` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_categoria`, `id_unidade`, `titulo`, `eh_lancamento`, `eh_promocao`, `codigo_barra`, `preco`, `imagem`, `ativo`, `estoque_inicial`, `sinopse`) VALUES
(146, 0, 1, 'A PROVA DE FOGO', 'S', 'S', '', '7.00', '8883cd6289d928b1e69051be778aec8b.jpg', 'S', 3, 'um filme de amor e romance'),
(147, 12, 1, 'O INFILTRADO', 'S', 'S', '', '5.00', 'e44230cf59a77f4788539a01fac9db20.jpg', 'S', 2, 'um filme de ação com muita violência');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

CREATE TABLE `unidade` (
  `id_unidade` int(11) NOT NULL,
  `unidade` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`id_unidade`, `unidade`) VALUES
(1, 'PRATELEIRA A'),
(2, 'PRATELEIRA B'),
(3, 'PRATELEIRA C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `unidade`
--
ALTER TABLE `unidade`
  ADD PRIMARY KEY (`id_unidade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
--
-- AUTO_INCREMENT for table `unidade`
--
ALTER TABLE `unidade`
  MODIFY `id_unidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
