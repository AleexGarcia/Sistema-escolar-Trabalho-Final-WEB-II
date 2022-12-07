-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2022 às 01:02
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
-- Banco de dados: `usuarios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `acesso` text DEFAULT NULL,
  `matricula` varchar(12) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `nome` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `sobrenome` varchar(30) DEFAULT NULL,
  `nascimento` date DEFAULT current_timestamp(),
  `email` varchar(100) DEFAULT NULL,
  `imagem` text DEFAULT NULL,
  `imagemNome` varchar(10) NOT NULL,
  `materias` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`materias`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `acesso`, `matricula`, `senha`, `nome`, `sobrenome`, `nascimento`, `email`, `imagem`, `imagemNome`, `materias`) VALUES
(16, 'administrador', 'alexandre', '827ccb0eea8a706c4c34a16891f84e7b', 'Alexandre', 'Garcia', '1997-01-02', 'email@email.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1668096385.jpg', '', '[\"transformacoes\",\"pocoes\",\"def\",\"herb\",\"astro\"]'),
(17, 'administrador', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'admin', '1997-01-02', 'admin@admin.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1668196588.jpg', '', ''),
(19, 'aluno', 'aluno', '827ccb0eea8a706c4c34a16891f84e7b', 'aluno', '123', '1998-01-02', 'aluno123@email.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1668816185.jpg', '1668816185', '[\"pocoes\",\"astro\",\"criat\",\"arit\",\"trouxas\"]'),
(20, 'aluno', 'dobby', '827ccb0eea8a706c4c34a16891f84e7b', 'dobby', 'o elfo', '1997-01-02', 'email@email.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1668196872.jpg', '', '[\"feiticos\",\"transformacoes\",\"pocoes\",\"defesasContraTrevas\",\"vooVassoura\",\"herbologia\",\"astronomia\",\"historiaDaMagia\",\"criaturasMagicas\",\"adivinhacao\",\"aritmancia\",\"runasAntigas\",\"EstudosDosTrouxas\"]');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
