-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Fev-2025 às 16:17
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `etecuirapuru`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `func` ()   begin
		SELECT 'ola mundo';
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `nome_function` (IN `nome` VARCHAR(200), IN `nota` VARCHAR(200))   BEGIN # útil quando você precisa de múltiplas instruções para executar uma operação complexa dentro de um procedimento armazenado, função ou trigger.
	INSERT INTO aluno (nome,nota)
    values (nome,nota);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistroAluno` (IN `nome_` VARCHAR(200), IN `curso_` VARCHAR(200))   BEGIN 
INSERT INTO aluno (nome,curso) VALUES (nome_,curso_);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistroFuncional` (IN `nome_` VARCHAR(200), IN `componente_` VARCHAR(200), IN `curso_` VARCHAR(200))   BEGIN 
 
 	INSERT INTO professor(nome,componente,curso)
 	VALUES (nome_,componente_,curso_);
 
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `curso` varchar(200) DEFAULT NULL,
  `nota` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `curso`, `nota`) VALUES
(1, 'fsdfdf', 'fsd', NULL),
(2, 'sdf', NULL, 'fds');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `curso` varchar(200) DEFAULT NULL,
  `componente` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
