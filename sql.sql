-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/11/2023 às 18:37
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `casa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `fase`
--

CREATE TABLE `fase` (
  `id` int(11) NOT NULL,
  `descricao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fase`
--

INSERT INTO `fase` (`id`, `descricao`) VALUES
(8, 'FASE 1'),
(9, 'FASE 2'),
(12, 'FASE 3');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `descricao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `descricao`) VALUES
(8, 'EXCELENCIA ENGENHARIA'),
(9, 'BEIRA RIO MATERIAIS PARA CONSTRUCAO'),
(10, 'ENGEL MATERIAIS PARA CONSTRUçãO'),
(11, 'BURITI MATERIAIS PARA CONSTRUçãO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `lancamento`
--

CREATE TABLE `lancamento` (
  `id` int(11) NOT NULL,
  `id_fase` int(11) NOT NULL,
  `id_pagamento` int(11) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `nfe` int(11) NOT NULL,
  `data_pagamento` date NOT NULL,
  `data_lancamento` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `lancamento`
--

INSERT INTO `lancamento` (`id`, `id_fase`, `id_pagamento`, `id_fornecedor`, `valor`, `nfe`, `data_pagamento`, `data_lancamento`) VALUES
(2, 8, 3, 8, 11.00, 5, '2023-11-20', '2023-11-20'),
(3, 12, 7, 10, 101.00, 5, '2023-11-19', '2023-11-20'),
(4, 8, 4, 9, 698.00, 6, '2023-11-21', '2023-11-21'),
(5, 12, 3, 11, 10.00, 687, '2023-11-13', '2023-11-21'),
(6, 8, 3, 8, 99.98, 34, '2023-11-21', '2023-11-21'),
(7, 8, 3, 8, 99.99, 342, '2023-11-21', '2023-11-21'),
(8, 9, 9, 11, 650.98, 343, '2023-11-01', '2023-11-21'),
(9, 8, 3, 8, 10.98, 34, '2023-11-28', '2023-11-21'),
(10, 9, 3, 9, 150.98, 323, '2023-11-15', '2023-11-21'),
(11, 9, 3, 9, 14.78, 324, '2023-11-01', '2023-11-21'),
(12, 8, 4, 9, 50.98, 345, '2023-12-12', '2023-11-21'),
(13, 8, 6, 10, 500.98, 34, '2023-12-14', '2023-11-21'),
(14, 9, 3, 8, 896.98, 3242, '2023-12-13', '2023-11-21'),
(15, 12, 3, 8, 1800.98, 434, '2023-12-14', '2023-11-21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id` int(11) NOT NULL,
  `descricao` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pagamento`
--

INSERT INTO `pagamento` (`id`, `descricao`) VALUES
(3, 'CREDIARIO 1X'),
(4, 'CREDIARIO 2X'),
(5, 'CREDIARIO 3X'),
(6, 'CREDIARIO 4X'),
(7, 'PIX'),
(8, 'CARTAO CREDITO 1X'),
(9, 'CARTAO CREDITO 2X'),
(10, 'CARTAO CREDITO 3X'),
(11, 'CARTAO CREDITO 4X');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `fase`
--
ALTER TABLE `fase`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `lancamento`
--
ALTER TABLE `lancamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fase` (`id_fase`),
  ADD KEY `id_pagamento` (`id_pagamento`),
  ADD KEY `id_fornecedor` (`id_fornecedor`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fase`
--
ALTER TABLE `fase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `lancamento`
--
ALTER TABLE `lancamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `lancamento`
--
ALTER TABLE `lancamento`
  ADD CONSTRAINT `lancamento_ibfk_1` FOREIGN KEY (`id_fase`) REFERENCES `fase` (`id`),
  ADD CONSTRAINT `lancamento_ibfk_2` FOREIGN KEY (`id_pagamento`) REFERENCES `pagamento` (`id`),
  ADD CONSTRAINT `lancamento_ibfk_3` FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
