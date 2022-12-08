-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2022 às 19:14
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
  `imagemNome` varchar(10) DEFAULT NULL,
  `materias` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `acesso`, `matricula`, `senha`, `nome`, `sobrenome`, `nascimento`, `email`, `imagem`, `imagemNome`, `materias`) VALUES
(17, 'administrador', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'admin', '1997-01-02', 'admin@admin.com', NULL, '', ''),
(19, 'aluno', 'aluno', '827ccb0eea8a706c4c34a16891f84e7b', 'aluno', '123', '1998-01-02', 'aluno123@email.com', NULL, NULL, NULL),
(21, 'funcionario', 'professor', '827ccb0eea8a706c4c34a16891f84e7b', 'professor', 'professor', '2022-12-28', 'professor@email.com', NULL, NULL, NULL),
(22, 'administrador', 'dumbledore', 'e10adc3949ba59abbe56e057f20f883e', 'Albus', 'Dumbledore', '1881-12-01', 'albus_dumbledore@gmail.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1670522733.jpg', '1670522733', NULL),
(23, 'aluno', 'harrypotter', '827ccb0eea8a706c4c34a16891f84e7b', 'Harry', 'Potter', '1980-07-31', 'harry_potter@hotmail.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1670519347.jpg', '1670519347', '[\"feiticos\",\"transformacoes\",\"pocoes\",\"vooVassoura\",\"astronomia\",\"historiaDaMagia\",\"aritmancia\",\"runasAntigas\",\"EstudosDosTrouxas\"]'),
(24, 'aluno', 'hermione', '827ccb0eea8a706c4c34a16891f84e7b', 'Hermione', 'Granger ', '1979-09-19', 'hermione_granger@yahoo.com.br', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1670519467.jpg', '1670519467', '[\"feiticos\",\"transformacoes\",\"pocoes\",\"defesasContraTrevas\",\"vooVassoura\",\"herbologia\",\"astronomia\",\"historiaDaMagia\",\"criaturasMagicas\",\"adivinhacao\",\"aritmancia\",\"runasAntigas\",\"EstudosDosTrouxas\"]'),
(25, 'aluno', 'ronw', '827ccb0eea8a706c4c34a16891f84e7b', 'Ronald', 'Weasley', '1980-03-01', 'ron_weasley@hotmail.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1670519402.jpg', '1670519402', '[\"feiticos\",\"transformacoes\",\"pocoes\",\"defesasContraTrevas\",\"vooVassoura\",\"herbologia\",\"historiaDaMagia\",\"criaturasMagicas\",\"aritmancia\"]'),
(26, 'aluno', 'dracom', '827ccb0eea8a706c4c34a16891f84e7b', 'Draco', 'Malfoy', '1980-06-05', 'dracom@gmail.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1670519627.jpg', '1670519627', '[\"feiticos\",\"astronomia\",\"historiaDaMagia\",\"aritmancia\",\"runasAntigas\",\"EstudosDosTrouxas\"]'),
(27, 'aluno', 'lunal89', '827ccb0eea8a706c4c34a16891f84e7b', 'Luna', 'Lovegood', '1981-02-13', 'luna_lovegood@outlook.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1670519712.jpg', '1670519712', '[\"feiticos\",\"transformacoes\",\"pocoes\",\"defesasContraTrevas\",\"vooVassoura\",\"herbologia\",\"astronomia\",\"historiaDaMagia\",\"criaturasMagicas\",\"adivinhacao\",\"aritmancia\",\"runasAntigas\",\"EstudosDosTrouxas\"]'),
(28, 'funcionario', 'severussnape', '827ccb0eea8a706c4c34a16891f84e7b', 'Severus', 'Snape', '1960-01-09', 'severus@gmail.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1670519960.jpg', '1670519960', NULL),
(29, 'funcionario', 'minervinha', '827ccb0eea8a706c4c34a16891f84e7b', 'Minerva', 'McGonagall', '1935-10-04', 'McGonagall@hotmail.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1670520034.jpg', '1670520034', NULL),
(30, 'funcionario', 'hagrid', '827ccb0eea8a706c4c34a16891f84e7b', 'R&uacute;beo', 'Hagrid', '1928-12-06', 'rubeo@hotmail.com', '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/1670519849.jpg', '1670519849', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
