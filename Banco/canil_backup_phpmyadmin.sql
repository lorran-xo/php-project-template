-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Abr-2021 às 22:17
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `canil`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE `animais` (
  `id` int(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `idade` varchar(100) NOT NULL,
  `castrado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`id`, `tipo`, `sexo`, `idade`, `castrado`) VALUES
(3, 'gato', 'fêmea', '3 meses', 1),
(5, 'cachorro', 'fêmea', '8 meses', 1),
(6, 'gato', 'macho', '2 anos', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aparencia`
--

CREATE TABLE `aparencia` (
  `id` int(100) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `porte` varchar(100) NOT NULL,
  `peso` varchar(100) DEFAULT NULL,
  `id_animal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aparencia`
--

INSERT INTO `aparencia` (`id`, `cor`, `porte`, `peso`, `id_animal`) VALUES
(5, 'branco', 'grande', '15', 3),
(7, 'amarelo', 'grande', '2kg', 5),
(8, 'amarelo', 'Médio', '500 gramas', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `identificacao`
--

CREATE TABLE `identificacao` (
  `id` int(100) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `apelido` varchar(100) DEFAULT NULL,
  `id_animal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `identificacao`
--

INSERT INTO `identificacao` (`id`, `codigo`, `apelido`, `id_animal`) VALUES
(2, '9185', 'Teste', 3),
(4, '1987.4135', 'Hanna', 5),
(5, '1987.4135', 'Caramelo', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `raca`
--

CREATE TABLE `raca` (
  `id` int(100) NOT NULL,
  `raca` varchar(100) NOT NULL,
  `comportamento` varchar(100) NOT NULL,
  `id_animal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `raca`
--

INSERT INTO `raca` (`id`, `raca`, `comportamento`, `id_animal`) VALUES
(2, 'vira-lata', 'calmo', 3),
(4, 'poodle', 'agitado', 5),
(5, 'vira latas', 'calmo', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao`
--

CREATE TABLE `situacao` (
  `id` int(100) NOT NULL,
  `adotado` tinyint(1) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `nome_responsavel_resgate` varchar(100) NOT NULL,
  `data_resgate` date NOT NULL,
  `nome_responsavel_adocao` varchar(100) DEFAULT NULL,
  `cpf_responsavel_adocao` varchar(100) DEFAULT NULL,
  `data_adocao` date DEFAULT NULL,
  `id_animal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `situacao`
--

INSERT INTO `situacao` (`id`, `adotado`, `descricao`, `nome_responsavel_resgate`, `data_resgate`, `nome_responsavel_adocao`, `cpf_responsavel_adocao`, `data_adocao`, `id_animal`) VALUES
(2, 1, 'encontrado sozinho', 'Cassio Texeiras', '2021-04-09', 'Carlos Chagas', '112.471.387-49', '2021-04-09', 3),
(4, 0, 'perdido', 'Maria Oliveira', '2021-04-09', NULL, NULL, NULL, 5),
(5, 0, 'na rua', 'Jose Oliveira', '2021-04-09', NULL, NULL, NULL, 6);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aparencia`
--
ALTER TABLE `aparencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animais_id_fk` (`id_animal`);

--
-- Índices para tabela `identificacao`
--
ALTER TABLE `identificacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animais_id_fk` (`id_animal`);

--
-- Índices para tabela `raca`
--
ALTER TABLE `raca`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animais_fk_ra` (`id`),
  ADD KEY `animal_fk_ra` (`id_animal`);

--
-- Índices para tabela `situacao`
--
ALTER TABLE `situacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animal_fk_si` (`id_animal`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `aparencia`
--
ALTER TABLE `aparencia`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `identificacao`
--
ALTER TABLE `identificacao`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `raca`
--
ALTER TABLE `raca`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `situacao`
--
ALTER TABLE `situacao`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aparencia`
--
ALTER TABLE `aparencia`
  ADD CONSTRAINT `animal_fk_ap` FOREIGN KEY (`id_animal`) REFERENCES `animais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `identificacao`
--
ALTER TABLE `identificacao`
  ADD CONSTRAINT `animal_fk_id` FOREIGN KEY (`id_animal`) REFERENCES `animais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `raca`
--
ALTER TABLE `raca`
  ADD CONSTRAINT `animal_fk_ra` FOREIGN KEY (`id_animal`) REFERENCES `animais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `situacao`
--
ALTER TABLE `situacao`
  ADD CONSTRAINT `animal_fk_si` FOREIGN KEY (`id_animal`) REFERENCES `animais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
