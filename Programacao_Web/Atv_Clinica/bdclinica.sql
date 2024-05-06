-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Mar-2023 às 03:18
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdclinica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbagendamento`
--

CREATE TABLE `tbagendamento` (
  `codAgendamento` int(11) NOT NULL,
  `dataAgendamento` date NOT NULL,
  `horaAgendamento` time NOT NULL,
  `diagnosticoAgendamento` varchar(200) NOT NULL,
  `codPaciente` int(11) DEFAULT NULL,
  `codMedico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbespecialidade`
--

CREATE TABLE `tbespecialidade` (
  `codEspecialidade` int(11) NOT NULL,
  `Especialidade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmedico`
--

CREATE TABLE `tbmedico` (
  `codMedico` int(11) NOT NULL,
  `nomeMedico` varchar(50) NOT NULL,
  `telMedico` char(10) NOT NULL,
  `celMedico` char(11) NOT NULL,
  `codEspecialidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpaciente`
--

CREATE TABLE `tbpaciente` (
  `codPaciente` int(11) NOT NULL,
  `nomePaciente` varchar(50) DEFAULT NULL,
  `telPaciente` char(10) DEFAULT NULL,
  `celPaciente` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbagendamento`
--
ALTER TABLE `tbagendamento`
  ADD PRIMARY KEY (`codAgendamento`),
  ADD KEY `fkcodPaciente` (`codPaciente`),
  ADD KEY `fkcodMedico` (`codMedico`);

--
-- Índices para tabela `tbespecialidade`
--
ALTER TABLE `tbespecialidade`
  ADD PRIMARY KEY (`codEspecialidade`);

--
-- Índices para tabela `tbmedico`
--
ALTER TABLE `tbmedico`
  ADD PRIMARY KEY (`codMedico`),
  ADD KEY `fkcodEspecialidade` (`codEspecialidade`);

--
-- Índices para tabela `tbpaciente`
--
ALTER TABLE `tbpaciente`
  ADD PRIMARY KEY (`codPaciente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbagendamento`
--
ALTER TABLE `tbagendamento`
  MODIFY `codAgendamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbespecialidade`
--
ALTER TABLE `tbespecialidade`
  MODIFY `codEspecialidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmedico`
--
ALTER TABLE `tbmedico`
  MODIFY `codMedico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpaciente`
--
ALTER TABLE `tbpaciente`
  MODIFY `codPaciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbagendamento`
--
ALTER TABLE `tbagendamento`
  ADD CONSTRAINT `fkcodMedico` FOREIGN KEY (`codMedico`) REFERENCES `tbmedico` (`codMedico`),
  ADD CONSTRAINT `fkcodPaciente` FOREIGN KEY (`codPaciente`) REFERENCES `tbpaciente` (`codPaciente`);

--
-- Limitadores para a tabela `tbmedico`
--
ALTER TABLE `tbmedico`
  ADD CONSTRAINT `fkcodEspecialidade` FOREIGN KEY (`codEspecialidade`) REFERENCES `tbespecialidade` (`codEspecialidade`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
