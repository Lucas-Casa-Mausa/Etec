-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Mar-2023 às 02:25
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdcampeonato`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbjogador`
--

CREATE TABLE `tbjogador` (
  `codJogador` int(11) NOT NULL,
  `nomeJogador` varchar(50) DEFAULT NULL,
  `codPosicao` int(11) DEFAULT NULL,
  `idadeJogador` int(11) DEFAULT NULL,
  `alturaJogador` varchar(5) DEFAULT NULL,
  `pesoJogador` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbjogador`
--

INSERT INTO `tbjogador` (`codJogador`, `nomeJogador`, `codPosicao`, `idadeJogador`, `alturaJogador`, `pesoJogador`) VALUES
(1, 'Arthur', 2, 25, '1.80', '75'),
(2, 'Casa', 1, 29, '1.60', '50'),
(3, 'Calvo', 9, 30, '1.40', '88'),
(4, 'Natan', 8, 12, '1.30', '180');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbjogadortime`
--

CREATE TABLE `tbjogadortime` (
  `codJogadorTime` int(11) NOT NULL,
  `codJogador` int(11) DEFAULT NULL,
  `codStatus` int(11) DEFAULT NULL,
  `codTime` int(11) DEFAULT NULL,
  `dataCadastro` date DEFAULT curdate(),
  `horaCadastro` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbjogadortime`
--

INSERT INTO `tbjogadortime` (`codJogadorTime`, `codJogador`, `codStatus`, `codTime`, `dataCadastro`, `horaCadastro`) VALUES
(1, 1, 1, 1, '2023-03-23', '22:23:16'),
(2, 2, 2, 1, '2023-03-23', '22:23:23'),
(3, 3, 1, 1, '2023-03-23', '22:23:30'),
(4, 4, 1, 1, '2023-03-23', '22:23:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbposicao`
--

CREATE TABLE `tbposicao` (
  `codPosicao` int(11) NOT NULL,
  `posicao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbposicao`
--

INSERT INTO `tbposicao` (`codPosicao`, `posicao`) VALUES
(1, 'centroavante'),
(2, 'atacante'),
(3, 'pontadireita'),
(4, 'pontaesquerda'),
(5, 'zagueiro'),
(6, 'meio campo'),
(7, 'meia amador '),
(8, 'volante'),
(9, 'goleiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbstatus`
--

CREATE TABLE `tbstatus` (
  `codStatus` int(11) NOT NULL,
  `descricaoStatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbstatus`
--

INSERT INTO `tbstatus` (`codStatus`, `descricaoStatus`) VALUES
(1, 'atual'),
(2, 'antigo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtime`
--

CREATE TABLE `tbtime` (
  `codTime` int(11) NOT NULL,
  `clube` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbtime`
--

INSERT INTO `tbtime` (`codTime`, `clube`) VALUES
(1, 'black mesa'),
(2, 'real madrid'),
(3, 'atlético mineiro');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbjogador`
--
ALTER TABLE `tbjogador`
  ADD PRIMARY KEY (`codJogador`),
  ADD KEY `codPosicao` (`codPosicao`);

--
-- Índices para tabela `tbjogadortime`
--
ALTER TABLE `tbjogadortime`
  ADD PRIMARY KEY (`codJogadorTime`),
  ADD KEY `codJogador` (`codJogador`),
  ADD KEY `codTime` (`codTime`),
  ADD KEY `codStatus` (`codStatus`);

--
-- Índices para tabela `tbposicao`
--
ALTER TABLE `tbposicao`
  ADD PRIMARY KEY (`codPosicao`);

--
-- Índices para tabela `tbstatus`
--
ALTER TABLE `tbstatus`
  ADD PRIMARY KEY (`codStatus`);

--
-- Índices para tabela `tbtime`
--
ALTER TABLE `tbtime`
  ADD PRIMARY KEY (`codTime`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbjogador`
--
ALTER TABLE `tbjogador`
  MODIFY `codJogador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbjogadortime`
--
ALTER TABLE `tbjogadortime`
  MODIFY `codJogadorTime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbposicao`
--
ALTER TABLE `tbposicao`
  MODIFY `codPosicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbstatus`
--
ALTER TABLE `tbstatus`
  MODIFY `codStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbtime`
--
ALTER TABLE `tbtime`
  MODIFY `codTime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbjogador`
--
ALTER TABLE `tbjogador`
  ADD CONSTRAINT `tbjogador_ibfk_1` FOREIGN KEY (`codPosicao`) REFERENCES `tbposicao` (`codPosicao`);

--
-- Limitadores para a tabela `tbjogadortime`
--
ALTER TABLE `tbjogadortime`
  ADD CONSTRAINT `tbjogadortime_ibfk_1` FOREIGN KEY (`codJogador`) REFERENCES `tbjogador` (`codJogador`),
  ADD CONSTRAINT `tbjogadortime_ibfk_2` FOREIGN KEY (`codTime`) REFERENCES `tbtime` (`codTime`),
  ADD CONSTRAINT `tbjogadortime_ibfk_3` FOREIGN KEY (`codStatus`) REFERENCES `tbstatus` (`codStatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
