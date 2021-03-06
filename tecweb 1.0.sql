-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2016 às 09:44
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tecweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `CATEGORIA_ID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `CATEGORIA_PAI_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`CATEGORIA_ID`, `NOME`, `CATEGORIA_PAI_ID`) VALUES
(1, 'camisas', 1),
(2, 'cachecois', 1),
(3, 'Mochila', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CLIENTE_ID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `DATA_NASCIMENTO` date NOT NULL,
  `SEXO` char(1) NOT NULL,
  `LOGUIN` varchar(100) NOT NULL,
  `SENHA` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`CLIENTE_ID`, `NOME`, `CPF`, `DATA_NASCIMENTO`, `SEXO`, `LOGUIN`, `SENHA`) VALUES
(0, 'asdasdas', '1234234', '2016-11-01', 'M', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `ENDERECO_ID` int(11) NOT NULL,
  `CLIENTE_ID` int(11) NOT NULL,
  `CEP` varchar(8) NOT NULL,
  `ENDERECO` varchar(60) NOT NULL,
  `NUMERO` varchar(10) NOT NULL,
  `COMPLEMENTO` varchar(60) NOT NULL,
  `BAIRRO` varchar(60) NOT NULL,
  `CIDADE` varchar(60) NOT NULL,
  `ESTADO` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`ENDERECO_ID`, `CLIENTE_ID`, `CEP`, `ENDERECO`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `CIDADE`, `ESTADO`) VALUES
(0, 0, '12312313', 'RUA DOS BOBOS', '0', '', 'TESTE', 'TESTE', 'TESTE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedido`
--

CREATE TABLE `item_pedido` (
  `PRODUTO_ID` int(11) NOT NULL,
  `PEDIDO_ID` int(11) NOT NULL,
  `QUANTIDADE` int(11) NOT NULL,
  `SUBTOTAL` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item_pedido`
--

INSERT INTO `item_pedido` (`PRODUTO_ID`, `PEDIDO_ID`, `QUANTIDADE`, `SUBTOTAL`) VALUES
(1, 2, 1, '0.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `PEDIDO_ID` int(11) NOT NULL,
  `STATUS_ID` int(11) NOT NULL,
  `DATA` date NOT NULL,
  `VALOR_FRETE` decimal(10,2) NOT NULL,
  `VALOR_TOTAL` decimal(10,2) NOT NULL,
  `CLIENTE_ID` int(11) NOT NULL,
  `CODIGO_RASTREIO` varchar(20) NOT NULL,
  `ENDERECO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`PEDIDO_ID`, `STATUS_ID`, `DATA`, `VALOR_FRETE`, `VALOR_TOTAL`, `CLIENTE_ID`, `CODIGO_RASTREIO`, `ENDERECO_ID`) VALUES
(2, 1, '2016-11-19', '0.00', '0.00', 0, '123123123', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `PRODUTO_ID` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `PRECO` decimal(10,2) NOT NULL,
  `DESCRICAO` varchar(100) DEFAULT NULL,
  `QUANTIDADE` int(11) NOT NULL,
  `STATUSPRODUTO` varchar(40) DEFAULT NULL,
  `CATEGORIA_ID` int(11) NOT NULL,
  `PRODUTO_IMAGEM_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`PRODUTO_ID`, `NOME`, `PRECO`, `DESCRICAO`, `QUANTIDADE`, `STATUSPRODUTO`, `CATEGORIA_ID`, `PRODUTO_IMAGEM_ID`) VALUES
(0, 'teste', '0.00', NULL, 2, NULL, 1, NULL),
(1, 'Metal Earth Bird of Prey', '99.00', 'Replica da nave no filme Star Strek', 7, 'DISPONIVEL', 1, 1),
(2, 'teste id 2', '150.00', 'esse texto serve de teste para o banco de dados', 1, 'DISPONIVEL', 1, 1),
(3, 'Camiseta Be Like a Panda NEW F', '20.00', '-', 1, 'DISPONIVEL', 1, 3),
(4, 'Camiseta Be Like a Panda NEW', '20.00', '', 1, 'DISPONIVEL', 1, 4),
(5, 'Camiseta The Kingdom', '25.99', '', 1, 'DISPONIVEL', 1, 5),
(6, 'Camiseta Give me Rupees', '34.99', NULL, 1, 'DISPONIVEL', 1, 6),
(7, 'Camiseta Village Store', '40.00', NULL, 1, 'DISPONIVEL', 1, 7),
(8, 'Camiseta Universo Galatico ', '45.00', NULL, 1, 'DISPONIVEL', 1, 8),
(9, 'Cachecol Escola de Magia Eagles', '60.00', NULL, 1, 'DISPONIVEL', 2, 9),
(10, 'Cachecol Escola de Magia Badgers', '60.00', NULL, 1, 'DISPONIVEL', 2, 10),
(11, 'Cachecol Escola de Magia Lions', '60.00', NULL, 1, 'DISPONIVEL', 2, 11),
(12, 'Mochila Hero of Time', '150.00', NULL, 1, 'DISPONIVEL', 3, 12),
(13, 'Mochila Back to Wonderland', '99.00', NULL, 1, 'DISPONIVEL', 3, 13),
(14, 'Mochila Bag 2D2', '120.00', NULL, 1, 'DISPONIVEL', 3, 14),
(15, 'Bolsa Raven House', '70.00', NULL, 1, 'DISPONIVEL', 3, 15),
(16, 'Bolsa Raccoon House', '70.00', NULL, 1, 'DISPONIVEL', 3, 16),
(17, 'Bolsa Snake House', '70.00', NULL, 1, 'DISPONIVEL', 3, 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_imagem`
--

CREATE TABLE `produto_imagem` (
  `IMAGEM_ID` int(11) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `LARGURA` decimal(10,0) NOT NULL,
  `ALTURA` decimal(10,0) NOT NULL,
  `TITULO` varchar(40) DEFAULT NULL,
  `PRODUTO_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto_imagem`
--

INSERT INTO `produto_imagem` (`IMAGEM_ID`, `URL`, `LARGURA`, `ALTURA`, `TITULO`, `PRODUTO_ID`) VALUES
(1, 'http://statick1.bseller.com.br/product/30117/150859_1.jpg', '400', '500', 'nave', 1),
(2, 'http://statick1.bseller.com.br/product/53798/304803_CAMISETA_CINZA_MESCLA_250x325-%25281%2529.png', '400', '500', 'cin\\a', 2),
(3, 'http://statick1.bseller.com.br/product/61233/305221_CAMISETA_PRETA_250x325-%25282%2529.png', '400', '500', 'preta', 3),
(4, 'http://statick1.bseller.com.br/product/61234/305196_CAMISETA_PRETA_400X520-%25282%2529.png', '400', '500', 'preta', 4),
(5, 'http://statick1.bseller.com.br/product/59501/305118_250x325.png', '400', '500', 'ruiva', 5),
(6, 'http://statick1.bseller.com.br/product/64771/312823_CAMISETA_BEGE_2_250x325.png', '400', '500', 'ruiva', 0),
(7, 'http://statick1.bseller.com.br/product/64772/312825_CAMISETA_BEGE_400X520.png', '400', '500', 'branco', 0),
(8, 'http://statick1.bseller.com.br/product/64989/313418_CAMISETA_BRANCA_2_400X520.png', '400', '500', 'branco', NULL),
(9, 'http://statick1.bseller.com.br/product/62076/286992_400x520CC.png', '400', '500', 'ch', 9),
(10, 'http://statick1.bseller.com.br/product/62078/286981_400x520CL.png', '400', '500', 'ch2', NULL),
(11, 'http://statick1.bseller.com.br/product/62077/286955_400x520CG.png', '400', '500', 'ch2', NULL),
(12, 'http://statick1.bseller.com.br/product/59446/263540_linkm.png', '400', '500', 'moch', NULL),
(13, 'http://statick1.bseller.com.br/product/59444/263645_am.png', '400', '500', 'moch', NULL),
(14, 'http://statick1.bseller.com.br/product/59443/263632_rm.png', '400', '500', 'moch', NULL),
(15, 'http://statick1.bseller.com.br/product/56134/247819_cm.png', '400', '500', 'moch', NULL),
(16, 'http://statick1.bseller.com.br/product/56137/247918_Lufalufa520.png', '400', '500', 'moch', NULL),
(17, 'http://statick1.bseller.com.br/product/56135/247821_sonserina520.png', '400', '500', 'moch', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_status`
--

CREATE TABLE `tb_status` (
  `STATUS_ID` int(11) NOT NULL,
  `PEDIDO_ID` int(11) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_status`
--

INSERT INTO `tb_status` (`STATUS_ID`, `PEDIDO_ID`, `STATUS`) VALUES
(1, 2, 'DISPONIVEL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefones`
--

CREATE TABLE `telefones` (
  `TELEFONE_ID` int(11) NOT NULL,
  `NUMERO` varchar(20) DEFAULT NULL,
  `TIPO` varchar(20) DEFAULT NULL,
  `CLIENTE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_pagamento`
--

CREATE TABLE `tipo_pagamento` (
  `IDTIPO` int(11) NOT NULL,
  `NOMETIPO` varchar(40) NOT NULL,
  `SATATUS_PAG` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tracking`
--

CREATE TABLE `tracking` (
  `MOVIMENTACAO_ID` int(11) NOT NULL,
  `PEDIDO_ID` int(11) NOT NULL,
  `STATUS_MOVIMETACAO` varchar(50) NOT NULL,
  `DATA_HORA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CATEGORIA_ID`),
  ADD KEY `FK_CATEGORIA_PAI_ID_TB_CATEGORIA` (`CATEGORIA_PAI_ID`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CLIENTE_ID`),
  ADD UNIQUE KEY `LOGUIN` (`LOGUIN`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`ENDERECO_ID`),
  ADD KEY `FK_CLI_ID` (`CLIENTE_ID`);

--
-- Indexes for table `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD PRIMARY KEY (`PRODUTO_ID`,`PEDIDO_ID`),
  ADD KEY `FK_TB_ITEM_PEDIDO_TB_PEDIDO` (`PEDIDO_ID`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`PEDIDO_ID`),
  ADD KEY `FK_TB_PEDIDO_TB_CLIENTE` (`CLIENTE_ID`),
  ADD KEY `FK_ENDERECO_ENTREGA_ID_TB_ENDERECO` (`ENDERECO_ID`),
  ADD KEY `FK_TB_STATUS_TB_PEDIDO` (`STATUS_ID`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`PRODUTO_ID`),
  ADD KEY `FK_CATEGORIA_ID` (`CATEGORIA_ID`),
  ADD KEY `FK_PRODUTO_IMAGEM_ID` (`PRODUTO_IMAGEM_ID`),
  ADD KEY `PRODUTO_ID` (`PRODUTO_ID`),
  ADD KEY `PRODUTO_ID_2` (`PRODUTO_ID`),
  ADD KEY `PRODUTO_ID_3` (`PRODUTO_ID`);

--
-- Indexes for table `produto_imagem`
--
ALTER TABLE `produto_imagem`
  ADD PRIMARY KEY (`IMAGEM_ID`),
  ADD KEY `FK_PROD_IMG` (`PRODUTO_ID`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`STATUS_ID`),
  ADD KEY `FK_TB_STATUS_PEDIDO` (`PEDIDO_ID`);

--
-- Indexes for table `telefones`
--
ALTER TABLE `telefones`
  ADD PRIMARY KEY (`TELEFONE_ID`),
  ADD KEY `FK_CLIENTE_TELEFONE` (`CLIENTE_ID`);

--
-- Indexes for table `tipo_pagamento`
--
ALTER TABLE `tipo_pagamento`
  ADD PRIMARY KEY (`IDTIPO`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`MOVIMENTACAO_ID`),
  ADD KEY `FK_PEDIDO_ID` (`PEDIDO_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `CATEGORIA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `PEDIDO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produto_imagem`
--
ALTER TABLE `produto_imagem`
  MODIFY `IMAGEM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `STATUS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `telefones`
--
ALTER TABLE `telefones`
  MODIFY `TELEFONE_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_pagamento`
--
ALTER TABLE `tipo_pagamento`
  MODIFY `IDTIPO` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `FK_CATEGORIA_PAI_ID_TB_CATEGORIA` FOREIGN KEY (`CATEGORIA_PAI_ID`) REFERENCES `categoria` (`CATEGORIA_ID`);

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `FK_CLI_ID` FOREIGN KEY (`CLIENTE_ID`) REFERENCES `cliente` (`CLIENTE_ID`);

--
-- Limitadores para a tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD CONSTRAINT `FK_TB_ITEM_PEDIDO_TB_PEDIDO` FOREIGN KEY (`PEDIDO_ID`) REFERENCES `pedido` (`PEDIDO_ID`),
  ADD CONSTRAINT `FK_TB_ITEM_PEDIDO_TB_PRODUTO` FOREIGN KEY (`PRODUTO_ID`) REFERENCES `produto` (`PRODUTO_ID`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `FK_ENDERECO_ENTREGA_ID_TB_ENDERECO` FOREIGN KEY (`ENDERECO_ID`) REFERENCES `endereco` (`ENDERECO_ID`),
  ADD CONSTRAINT `FK_TB_PEDIDO_TB_CLIENTE` FOREIGN KEY (`CLIENTE_ID`) REFERENCES `cliente` (`CLIENTE_ID`),
  ADD CONSTRAINT `FK_TB_STATUS_TB_PEDIDO` FOREIGN KEY (`STATUS_ID`) REFERENCES `tb_status` (`STATUS_ID`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `FK_CATEGORIA_ID` FOREIGN KEY (`CATEGORIA_ID`) REFERENCES `categoria` (`CATEGORIA_ID`),
  ADD CONSTRAINT `FK_PRODUTO_IMAGEM_ID` FOREIGN KEY (`PRODUTO_IMAGEM_ID`) REFERENCES `produto_imagem` (`IMAGEM_ID`);

--
-- Limitadores para a tabela `produto_imagem`
--
ALTER TABLE `produto_imagem`
  ADD CONSTRAINT `FK_PROD_IMG` FOREIGN KEY (`PRODUTO_ID`) REFERENCES `produto` (`PRODUTO_ID`);

--
-- Limitadores para a tabela `tb_status`
--
ALTER TABLE `tb_status`
  ADD CONSTRAINT `FK_TB_STATUS_PEDIDO` FOREIGN KEY (`PEDIDO_ID`) REFERENCES `pedido` (`PEDIDO_ID`);

--
-- Limitadores para a tabela `telefones`
--
ALTER TABLE `telefones`
  ADD CONSTRAINT `FK_CLIENTE_TELEFONE` FOREIGN KEY (`CLIENTE_ID`) REFERENCES `cliente` (`CLIENTE_ID`);

--
-- Limitadores para a tabela `tracking`
--
ALTER TABLE `tracking`
  ADD CONSTRAINT `FK_PEDIDO_ID` FOREIGN KEY (`PEDIDO_ID`) REFERENCES `pedido` (`PEDIDO_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
