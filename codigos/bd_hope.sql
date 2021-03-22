-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Mar-2021 às 20:09
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_hope`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `hope_ca_id` int(11) NOT NULL,
  `hope_ca_nome` varchar(500) NOT NULL,
  `hope_ca_email` varchar(500) NOT NULL,
  `hope_ca_senha` varchar(10) NOT NULL,
  `hope_ca_nascimento` varchar(10) NOT NULL,
  `hope_ca_data` datetime NOT NULL,
  `hope_ca_funcao` varchar(50) NOT NULL,
  `hope_ca_cep` varchar(9) NOT NULL,
  `hope_ca_rua` varchar(500) NOT NULL,
  `hope_ca_bairro` varchar(500) NOT NULL,
  `hope_ca_cidade` varchar(500) NOT NULL,
  `hope_ca_uf` varchar(2) NOT NULL,
  `hope_ca_complemento` varchar(50) NOT NULL,
  `hope_ca_nresi` int(50) NOT NULL,
  `hope_ca_telefone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`hope_ca_id`, `hope_ca_nome`, `hope_ca_email`, `hope_ca_senha`, `hope_ca_nascimento`, `hope_ca_data`, `hope_ca_funcao`, `hope_ca_cep`, `hope_ca_rua`, `hope_ca_bairro`, `hope_ca_cidade`, `hope_ca_uf`, `hope_ca_complemento`, `hope_ca_nresi`, `hope_ca_telefone`) VALUES
(8, 'teste', 'teste@gmail.com', 'teste', '2000-06-10', '2021-03-20 04:35:57', 'Cliente', '54540-030', 'Rua Givanaldo Severino de Mesquita', 'Vila Nova', 'Cabo de Santo Agostinho', 'PE', 'a', 123, '2147483647'),
(9, 'teste1', 'teste1@gmail.com', 'teste1', '2021-03-02', '2021-03-20 04:39:31', 'Médico', '54510-030', 'Rua Vicente Francisco de Barros', 'Destilaria', 'Cabo de Santo Agostinho', 'PE', 'd', 44, '2147483647'),
(13, 'teste2', 'teste2@gmail.com', 'teste2', '2004-07-22', '2021-03-20 04:47:49', 'Médico', '54240-030', 'Rua Quatro', 'Curado', 'Jaboatão dos Guararapes', 'PE', 'a', 75, '81985634197'),
(14, 'teste3', 'teste3@gmail.com', 'teste3', '2001-01-17', '2021-03-20 20:05:04', 'Cliente', '01001-010', 'Rua Filipe de Oliveira', 'Sé', 'São Paulo', 'SP', 't', 45, '81985624197'),
(16, 'teste 4', 'teste4@gmail.com', 'teste4', '2008-02-03', '2021-03-20 21:44:44', 'Recepção', '54240-080', 'Rua Nove', 'Curado', 'Jaboatão dos Guararapes', 'PE', 'h', 56, '81988634197'),
(20, 'Eduardo Marques', 'e.marques18@gmail.com', 'Em18', '2021-03-02', '2021-03-22 02:32:54', 'Médico', '54240-030', 'Rua Quatro', 'Curado', 'Jaboatão dos Guararapes', 'PE', 'c', 75, '81985624197'),
(21, 'teste 5', 'teste5@gmail.com', 'teste5', '2000-12-27', '2021-03-22 19:50:07', 'Cliente', '54250-030', 'Rua Rosendo Adriano', 'Cavaleiro', 'Jaboatão dos Guararapes', 'PE', 'Apartamento 10', 85, '81985624185'),
(22, 'teste 6', 'teste6@gmail.com', 'teste6', '2017-02-22', '2021-03-22 19:53:15', 'Cliente', '54240-080', 'Rua Nove', 'Curado', 'Jaboatão dos Guararapes', 'PE', 'a', 79, '81985724185'),
(23, 'Raul', 'raul.matriuhus@hotmail.com', 'raulzinho', '2000-08-02', '2021-03-22 19:56:25', 'Médico', '54240-030', 'Rua Quatro', 'Curado', 'Jaboatão dos Guararapes', 'PE', 'b', 75, '81985624192');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `hope_co_id` int(250) NOT NULL,
  `hope_co_paciente` varchar(500) NOT NULL,
  `hope_co_medico` varchar(500) NOT NULL,
  `hope_co_data` varchar(10) NOT NULL,
  `hope_co_pagamento` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`hope_co_id`, `hope_co_paciente`, `hope_co_medico`, `hope_co_data`, `hope_co_pagamento`) VALUES
(20, 'Eduardo Marques', 'Dr. Neymar Jr.', '2021-03-31', 'Real Saúde Empresarial'),
(13, 'teste2', 'Dr. Cremildo Silva', '2021-03-03', 'Life Saúde'),
(16, 'teste 4', 'Dr. Barney Stenson', '2021-03-18', 'Dinheiro'),
(20, 'Eduardo Marques', 'Dr. Cremildo Silva', '2021-03-09', 'Real Saúde Empresarial'),
(14, 'teste3', 'Dr. Homer J. Simpson', '2021-11-17', 'Crédito'),
(22, 'teste 6', 'Dr. Ted Mosby', '2021-03-13', 'Saúde Plus'),
(23, 'Raul', 'Dr. Anderson Silva', '2021-06-08', 'Débito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE `medicos` (
  `hope_me_id` int(11) NOT NULL,
  `hope_me_nomeM` varchar(500) NOT NULL,
  `hope_me_crm` int(6) NOT NULL,
  `hope_me_anos` int(2) NOT NULL,
  `hope_me_especialidade` varchar(500) NOT NULL,
  `hope_me_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`hope_me_id`, `hope_me_nomeM`, `hope_me_crm`, `hope_me_anos`, `hope_me_especialidade`, `hope_me_data`) VALUES
(20, 'Eduardo Marques', 44522, 4, 'cardio', '2021-03-22 03:14:35'),
(23, 'Raul', 180303, 3, 'Clínico geral', '2021-03-22 19:57:01');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`hope_ca_id`);

--
-- Índices para tabela `consultas`
--
ALTER TABLE `consultas`
  ADD KEY `hope_co_id` (`hope_co_id`);

--
-- Índices para tabela `medicos`
--
ALTER TABLE `medicos`
  ADD KEY `hope_me_id` (`hope_me_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `hope_ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`hope_co_id`) REFERENCES `cadastro` (`hope_ca_id`);

--
-- Limitadores para a tabela `medicos`
--
ALTER TABLE `medicos`
  ADD CONSTRAINT `medicos_ibfk_1` FOREIGN KEY (`hope_me_id`) REFERENCES `cadastro` (`hope_ca_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
