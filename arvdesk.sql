-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/07/2024 às 16:49
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
-- Banco de dados: `arvdesk`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ativos`
--

CREATE TABLE `ativos` (
  `id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `NumInventario` int(30) NOT NULL,
  `tipo` smallint(6) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dtaquisicao` date NOT NULL,
  `garantia` int(11) NOT NULL,
  `setor` varchar(50) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fabricante` varchar(30) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabela para cadastro de inventário';

--
-- Despejando dados para a tabela `ativos`
--

INSERT INTO `ativos` (`id`, `status`, `NumInventario`, `tipo`, `nome`, `dtaquisicao`, `garantia`, `setor`, `idUsuario`, `fabricante`, `modelo`, `descricao`) VALUES
(6, 1, 15, 1, 'Augusta', '0000-00-00', 0, '', 2, 'Acer', 'Aspire5', 'notebook'),
(7, 1, 4, 2, 'hp', '2020-05-05', 2, 'Financeiro', 3, 'Acer', 'Aspire5', 'teste'),
(8, 1, 33, 1, 'Notebook Dell ', '2020-06-02', 2, 'Marketing', 3, 'Dell', 'INSPIRON5', 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `chamados`
--

CREATE TABLE `chamados` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `dtAbertura` date NOT NULL,
  `dtAtender` date DEFAULT NULL,
  `dtConcluir` date DEFAULT NULL,
  `NomeRequerente` varchar(50) NOT NULL,
  `atribuicao` smallint(6) NOT NULL,
  `setor` varchar(50) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `nomeTecnico` varchar(50) DEFAULT NULL,
  `tpReparo` smallint(6) NOT NULL,
  `numInventario` int(11) NOT NULL,
  `idAtivo` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `prioridade` smallint(6) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `solucao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `chamados`
--

INSERT INTO `chamados` (`id`, `tipo`, `dtAbertura`, `dtAtender`, `dtConcluir`, `NomeRequerente`, `atribuicao`, `setor`, `idUsuario`, `nomeTecnico`, `tpReparo`, `numInventario`, `idAtivo`, `status`, `prioridade`, `descricao`, `solucao`) VALUES
(3, 1, '2020-03-12', '2020-03-14', '2020-03-16', 'Augusta', 1, '', NULL, NULL, 0, 12, NULL, 1, 1, 'teste', NULL),
(4, 1, '2020-05-05', '2020-05-05', '2020-06-04', 'Augusta', 1, 'Financeiro', NULL, 'George', 0, 48, NULL, 0, 1, 'impressora sem tinta', 'teste'),
(5, 1, '2020-05-13', '2020-05-08', '2020-05-20', 'Josefo', 1, 'Financeiro', NULL, NULL, 0, 12, NULL, 2, 2, 'teste', NULL),
(6, 1, '2020-06-03', '2020-06-04', '2020-06-06', 'Adair', 2, 'Adm', NULL, NULL, 0, 123, NULL, 1, 3, 'kk', NULL),
(7, 1, '2020-06-02', '2020-06-02', '2020-06-03', 'Gisele', 2, 'Adm', NULL, NULL, 0, 321, NULL, 1, 1, 'll', NULL),
(11, 1, '2020-06-02', '2020-06-03', '2020-06-04', 'Regina', 0, 'Adm', NULL, NULL, 0, 126, NULL, 1, 1, 'teste', NULL),
(12, 1, '2020-06-02', '2020-06-03', '2020-06-04', 'Regina', 2, 'Adm', NULL, NULL, 0, 126, NULL, 1, 1, 'teste', NULL),
(13, 2, '2020-06-02', '2020-06-03', '2020-06-04', 'Carla', 2, 'Adm', NULL, NULL, 1, 123, NULL, 1, 3, 'teste', NULL),
(14, 1, '2020-06-03', '2020-06-03', '2020-06-04', 'Carla', 2, 'Adm', NULL, NULL, 1, 123, NULL, 1, 1, 'teste', NULL),
(15, 2, '2020-06-02', '2020-06-05', '2020-06-08', 'Vera', 2, 'Marketing', NULL, NULL, 2, 321, NULL, 0, 3, 'teste', NULL),
(16, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(17, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(18, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(19, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(20, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(21, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(22, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(23, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(24, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(25, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(26, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(27, 2, '2020-06-01', '2020-06-05', '2020-06-06', 'Vera', 2, 'Marketing', NULL, NULL, 4, 56, NULL, 2, 3, 'teste', NULL),
(28, 2, '2020-06-04', '2020-06-09', '2020-06-11', 'Giulia', 1, 'Gerência', NULL, NULL, 5, 111, NULL, 2, 2, 'teste', NULL),
(29, 2, '2020-06-04', '2020-06-09', '2020-06-11', 'Giulia', 1, 'Gerência', NULL, NULL, 5, 111, NULL, 2, 2, 'teste', NULL),
(30, 1, '2020-06-01', '2020-06-03', '2020-06-20', 'Carla', 1, 'Gerência', NULL, NULL, 3, 33, NULL, 1, 1, 'teste', NULL),
(31, 1, '2020-06-01', '2020-06-03', '2020-06-20', 'Carla', 1, 'Gerência', NULL, NULL, 3, 33, NULL, 1, 1, 'teste', NULL),
(32, 1, '2020-06-01', '2020-06-03', '2020-06-20', 'Carla', 1, 'Gerência', NULL, NULL, 3, 33, NULL, 1, 1, 'teste', NULL),
(33, 2, '2019-12-04', '2020-06-02', '2020-06-05', 'Carla', 2, 'Marketing', NULL, NULL, 2, 126, NULL, 1, 1, 'teste', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `cpf`, `status`, `sexo`, `nome`, `sobrenome`, `cidade`, `login`, `senha`, `email`, `nivel`, `celular`, `descricao`) VALUES
(12, '111.111.111-11', 'habilitado', 'f', 'Administrador', 'Administrador', 'São Paulo', 'admin', '$2y$10$Sa.CFgf0PmjF6zPqZf9ETulWNJkWxukjBkZ6n2ilTt0UMV9/ep.gS', 'admin@teste.com', 'adm', '115449844888', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `ativos`
--
ALTER TABLE `ativos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAtivo` (`idAtivo`),
  ADD KEY `idTecnico` (`nomeTecnico`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ativos`
--
ALTER TABLE `ativos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `ativos`
--
ALTER TABLE `ativos`
  ADD CONSTRAINT `ativos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);

--
-- Restrições para tabelas `chamados`
--
ALTER TABLE `chamados`
  ADD CONSTRAINT `chamados_ibfk_1` FOREIGN KEY (`idAtivo`) REFERENCES `ativos` (`id`),
  ADD CONSTRAINT `chamados_ibfk_3` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
