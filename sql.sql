-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/11/2023 às 16:12
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
(1, 8, 3, 8, 11.00, 16989, '2023-11-20', '2023-11-20'),
(2, 8, 3, 8, 11.00, 5, '2023-11-20', '2023-11-20'),
(3, 12, 7, 10, 101.00, 5, '2023-11-19', '2023-11-20');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `lancamento`
--
ALTER TABLE `lancamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_fase` (`id_fase`),
  ADD KEY `id_pagamento` (`id_pagamento`),
  ADD KEY `id_fornecedor` (`id_fornecedor`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `lancamento`
--
ALTER TABLE `lancamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
