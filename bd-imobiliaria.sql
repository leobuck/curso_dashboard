-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Out-2019 às 06:16
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Database: `bd-imobiliaria`
--
CREATE DATABASE IF NOT EXISTS `bd-imobiliaria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd-imobiliaria`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `tipo_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `tipo_categoria`) VALUES
(1, 'Casa'),
(2, 'Apartamento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(150) NOT NULL,
  `sobrenome_cliente` varchar(100) NOT NULL,
  `endereco_cliente` varchar(250) NOT NULL,
  `nro_end_cliente` int(11) NOT NULL,
  `complemento_cliente` varchar(50) NOT NULL,
  `bairro_cliente` varchar(150) NOT NULL,
  `cidade_cliente` varchar(20) NOT NULL,
  `uf_cliente` varchar(5) NOT NULL,
  `cep_cliente` varchar(10) NOT NULL,
  `mail_cliente` varchar(50) NOT NULL,
  `cpf_cliente` varchar(15) NOT NULL,
  `interesse_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `sobrenome_cliente`, `endereco_cliente`, `nro_end_cliente`, `complemento_cliente`, `bairro_cliente`, `cidade_cliente`, `uf_cliente`, `cep_cliente`, `mail_cliente`, `cpf_cliente`, `interesse_cliente`) VALUES
(1, 'Leonardo', 'Buck', 'Rua Almirante TamandarÃ©', 94, 'Casa', '31 de MarÃ§o', 'Santa BÃ¡rbara DOest', 'SP', '13453151', 'leobuck12@gmail.com', '13453151', 'Comprar'),
(2, 'Ana', 'Beatriz', 'Rua Teste', 123, 'nenhum', 'Teste', 'Americana', 'SP', '13453151', 'ana@email.com', '13453151', 'Ambos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `nome_foto` varchar(100) NOT NULL,
  `id_imovel_foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `foto`
--

INSERT INTO `foto` (`id_foto`, `nome_foto`, `id_imovel_foto`) VALUES
(8, '3200436733fd26278c3db96b14a92a4d.jpg', 90521),
(9, '74d45ffefee71630ee26430c705011d1.png', 90521);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE `imovel` (
  `id_imovel` int(11) NOT NULL,
  `codigo_imovel` int(11) NOT NULL,
  `end_imovel` varchar(150) NOT NULL,
  `nro_end_imovel` int(11) NOT NULL,
  `bairro_imovel` varchar(50) NOT NULL,
  `cidade_imovel` varchar(50) NOT NULL,
  `uf_imovel` varchar(5) NOT NULL,
  `cep_imovel` varchar(10) NOT NULL,
  `complemento_imovel` varchar(100) NOT NULL,
  `valor_imovel` float NOT NULL,
  `id_modalidade_imovel` int(11) NOT NULL,
  `id_pagamento_imovel` int(11) NOT NULL,
  `id_categoria_imovel` int(11) NOT NULL,
  `cpf_cliente_imovel` int(11) NOT NULL,
  `status_imovel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`id_imovel`, `codigo_imovel`, `end_imovel`, `nro_end_imovel`, `bairro_imovel`, `cidade_imovel`, `uf_imovel`, `cep_imovel`, `complemento_imovel`, `valor_imovel`, `id_modalidade_imovel`, `id_pagamento_imovel`, `id_categoria_imovel`, `cpf_cliente_imovel`, `status_imovel`) VALUES
(1, 90521, '', 123, 'teste', 'Santa BÃ¡rbara DOeste', 'SP', '13453151', 'teste', 10000, 2, 2, 1, 1234567890, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidade`
--

CREATE TABLE `modalidade` (
  `id_modalidade` int(11) NOT NULL,
  `tipo_modalidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modalidade`
--

INSERT INTO `modalidade` (`id_modalidade`, `tipo_modalidade`) VALUES
(1, 'Aluguel'),
(2, 'Venda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id_pagamento` int(11) NOT NULL,
  `tipo_pagamento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`id_pagamento`, `tipo_pagamento`) VALUES
(1, 'Dinheiro'),
(2, 'Boleto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_imovel`
--

CREATE TABLE `status_imovel` (
  `id_status_imovel` int(11) NOT NULL,
  `usuario_corretor` varchar(50) NOT NULL,
  `codigo_imovel` int(11) NOT NULL,
  `status_imovel` varchar(20) NOT NULL,
  `valor_negocio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `nivel_acesso_usuario` int(11) NOT NULL,
  `mail_usuario` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha_usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `nivel_acesso_usuario`, `mail_usuario`, `usuario`, `senha_usuario`) VALUES
(1, 'Leonardo', 4, 'leo@email.com', 'root', 'md5(123)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`id_imovel`);

--
-- Indexes for table `modalidade`
--
ALTER TABLE `modalidade`
  ADD PRIMARY KEY (`id_modalidade`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id_pagamento`);

--
-- Indexes for table `status_imovel`
--
ALTER TABLE `status_imovel`
  ADD PRIMARY KEY (`id_status_imovel`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `imovel`
--
ALTER TABLE `imovel`
  MODIFY `id_imovel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `modalidade`
--
ALTER TABLE `modalidade`
  MODIFY `id_modalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status_imovel`
--
ALTER TABLE `status_imovel`
  MODIFY `id_status_imovel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
