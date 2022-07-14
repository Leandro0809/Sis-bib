-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2022 às 20:28
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `devolucao`
--

CREATE TABLE `devolucao` (
  `id` int(11) NOT NULL,
  `idemprestimo` int(11) DEFAULT NULL,
  `datadevolucao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `dataemprestimo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemdevolucao`
--

CREATE TABLE `itemdevolucao` (
  `id` int(11) NOT NULL,
  `iddevolucao` int(11) DEFAULT NULL,
  `iditemlivro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemlivro`
--

CREATE TABLE `itemlivro` (
  `id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `idlivro` int(11) DEFAULT NULL,
  `emprestado` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemlivroemprestimo`
--

CREATE TABLE `itemlivroemprestimo` (
  `id` int(11) NOT NULL,
  `iditemlivro` int(11) DEFAULT NULL,
  `idemprestimo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `idautor` int(11) DEFAULT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `publicacao` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `endereco` varchar(120) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `devolucao`
--
ALTER TABLE `devolucao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idemprestimo` (`idemprestimo`);

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Índices para tabela `itemdevolucao`
--
ALTER TABLE `itemdevolucao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddevolucao` (`iddevolucao`),
  ADD KEY `iditemlivro` (`iditemlivro`);

--
-- Índices para tabela `itemlivro`
--
ALTER TABLE `itemlivro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlivro` (`idlivro`);

--
-- Índices para tabela `itemlivroemprestimo`
--
ALTER TABLE `itemlivroemprestimo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idemprestimo` (`idemprestimo`),
  ADD KEY `iditemlivro` (`iditemlivro`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idautor` (`idautor`),
  ADD KEY `idcategoria` (`idcategoria`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `devolucao`
--
ALTER TABLE `devolucao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `itemdevolucao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `itemlivroemprestimo`
--
ALTER TABLE `itemlivroemprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `itemlivro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `devolucao`
--
ALTER TABLE `devolucao`
  ADD CONSTRAINT `devolucao_ibfk_1` FOREIGN KEY (`idemprestimo`) REFERENCES `emprestimo` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limitadores para a tabela `itemdevolucao`
--
ALTER TABLE `itemdevolucao`
  ADD CONSTRAINT `itemdevolucao_ibfk_1` FOREIGN KEY (`iddevolucao`) REFERENCES `itemdevolucao` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `itemdevolucao_ibfk_2` FOREIGN KEY (`iditemlivro`) REFERENCES `itemlivro` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limitadores para a tabela `itemlivro`
--
ALTER TABLE `itemlivro`
  ADD CONSTRAINT `itemlivro_ibfk_1` FOREIGN KEY (`idlivro`) REFERENCES `livro` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limitadores para a tabela `itemlivroemprestimo`
--
ALTER TABLE `itemlivroemprestimo`
  ADD CONSTRAINT `itemlivroemprestimo_ibfk_1` FOREIGN KEY (`idemprestimo`) REFERENCES `emprestimo` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `itemlivroemprestimo_ibfk_2` FOREIGN KEY (`iditemlivro`) REFERENCES `itemlivro` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`idautor`) REFERENCES `autor` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `livro_ibfk_2` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
