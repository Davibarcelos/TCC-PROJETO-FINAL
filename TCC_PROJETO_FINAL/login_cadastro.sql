-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 20-Jun-2023 às 19:56
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perdidos`
--

CREATE TABLE `perdidos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `especie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raca` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `porte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `datadesa` date DEFAULT NULL,
  `caracfis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `perdidos`
--

INSERT INTO `perdidos` (`id`, `nome`, `especie`, `raca`, `sexo`, `porte`, `idade`, `datadesa`, `caracfis`, `email`, `tel`, `foto`) VALUES
(1, 'Rex', 'cachorro', 'Labrador', 'Macho', 'Grande', 3, '2023-05-01', 'Pelagem marrom', 'rex@example.com', '1234567890', 0x626c6f625f6461646f735f61717569),
(2, 'Luna', 'gato', 'Siamês', 'Fêmea', 'Pequeno', 2, '2023-06-10', 'Pelagem branca com manchas cinzas', 'luna@example.com', '9876543210', 0x626c6f625f6461646f735f61717569),
(3, 'Max', 'cachorro', 'Poodle', 'Macho', 'Médio', 5, '2023-04-20', 'Pelagem branca', 'max@example.com', '5678901234', 0x626c6f625f6461646f735f61717569),
(4, 'Bella', 'gato', 'Persa', 'Fêmea', 'Médio', 1, '2023-06-05', 'Pelagem cinza', 'bella@example.com', '4321098765', 0x626c6f625f6461646f735f61717569),
(5, 'Thor', 'cachorro', 'Bulldog Francês', 'Macho', 'Pequeno', 4, '2023-03-15', 'Pelagem tigrada', 'thor@example.com', '7890123456', 0x626c6f625f6461646f735f61717569),
(6, 'Mia', 'gato', 'Maine Coon', 'Fêmea', 'Grande', 2, '2023-06-12', 'Pelagem marrom e preta', 'mia@example.com', '2109876543', 0x626c6f625f6461646f735f61717569),
(7, 'Zeus', 'cachorro', 'Rottweiler', 'Macho', 'Grande', 6, '2023-02-28', 'Pelagem preta e marrom', 'zeus@example.com', '6543210987', 0x626c6f625f6461646f735f61717569),
(8, 'Nina', 'gato', 'Bengal', 'Fêmea', 'Médio', 3, '2023-06-08', 'Pelagem rajada', 'nina@example.com', '3456789012', 0x626c6f625f6461646f735f61717569),
(9, 'Toby', 'cachorro', 'Shih Tzu', 'Macho', 'Pequeno', 2, '2023-04-25', 'Pelagem branca e marrom', 'toby@example.com', '8901234567', 0x626c6f625f6461646f735f61717569),
(10, 'Simba', 'outros', 'Leão', 'Macho', 'Grande', 8, '2023-01-10', 'Juba', 'simba@example.com', '1234509876', 0x626c6f625f6461646f735f61717569);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `telefone`, `email`, `senha`) VALUES
(1, 'Davi Cunha Barcelos de Oliveir', '22998193069', 'davibarcelos503@gmail.com', 'f8560617988f7a8f9d666647afb226aa'),
(5, 'Gabriel', '22974047777', 'gabrielnunesoliveira01@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(6, 'SARA c', '123456789', 'Sara123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'davi cunha barcelos ', '2297323626', 'cunha.davi503@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
(8, 'fabio', '22978451225', 'fabiogoulart13@gmail.com', '25f9e794323b453885f5181f1b624d0b');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `perdidos`
--
ALTER TABLE `perdidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `perdidos`
--
ALTER TABLE `perdidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
