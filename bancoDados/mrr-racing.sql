-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/06/2021 às 18:46
-- Versão do servidor: 10.4.18-MariaDB
-- Versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mrr-racing`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `nome_imagem` varchar(100) DEFAULT NULL,
  `texto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONAMENTOS PARA TABELAS `noticias`:
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro-login`
--

CREATE TABLE `registro-login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `ativo` int(1) NOT NULL DEFAULT 1,
  `nivel` int(1) UNSIGNED NOT NULL DEFAULT 1,
  `email` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONAMENTOS PARA TABELAS `registro-login`:
--

--
-- Despejando dados para a tabela `registro-login`
--

INSERT INTO `registro-login` (`id`, `usuario`, `nome`, `sobrenome`, `nascimento`, `ativo`, `nivel`, `email`, `senha`, `cadastro`) VALUES
(1, 'LucasDuraes', 'Lucas', 'Durães', '2001-05-09', 1, 3, 'LucasDuraes@gmail.com', '480079dc8b61724ac80d0d08988f6aaf53966750', '2021-04-07 13:00:08'),
(2, 'testeadm', 'Adm', 'da Silva', '2000-01-01', 1, 2, 'amd@gmail.com', '3e3c05d866425a9f1e9641566ed35943b301ed5c', '2021-04-19 20:52:27'),
(3, 'testeuser', 'Usuario', 'Junior', '1990-12-31', 1, 1, 'user@gmail.com', '95c946bf622ef93b0a211cd0fd028dfdfcf7e39e', '2021-04-19 20:52:27'),
(4, 'testedesativado', 'Ban', 'semcoonta', '2011-04-05', 0, 2, 'banido@gmail.com', '29689a539a8e084d28f608ef8db83e385ebaf879', '2021-04-21 17:19:33'),
(5, 'Lucas-sama', 'Lucas', 'Oliveira', '2001-05-09', 1, 1, 'lucasteste@gmail.com', '480079dc8b61724ac80d0d08988f6aaf53966750', '2021-04-25 20:34:42'),
(6, 'DaviOliveira', 'Davi', 'Durães', '2006-08-14', 1, 1, 'davipedeoliveira@gmail.com', 'b412cc50101ea240e1d14b4db0f629dead8c8d2d', '2021-04-26 15:56:55'),
(7, 'Joelma', 'Joelma', 'de Fátima', '1989-11-15', 1, 1, 'joelmaduraes15@gmail.com', 'a7c24ab63dd7b305366faef51432ed491c4e0f91', '2021-04-26 16:03:19'),
(8, 'JoséAntônio', 'José', 'Durães', '1968-08-07', 1, 1, 'joseantonio@gmail.com', '5b53cad999b409898a88133ca9851b097abb500d', '2021-05-26 15:07:35'),
(9, 'Jonathan', 'Jonathan', 'Oliveira', '2002-11-07', 1, 1, 'Jonathan@gmail.com', '866bda785b6999102472013ffa49f582aabbca9a', '2021-05-26 15:29:27'),
(10, 'Guilherme', 'Guilherme', 'Oliveira', '2005-02-16', 1, 1, 'guilherme@gmail.com', '0fece84f4e944ede78c9824d7c9d7d9d58285007', '2021-05-26 15:31:17'),
(11, 'lilPeeP', 'Gus', 'Air', '1998-11-17', 1, 1, 'lilpeep@gmail.com', '3f89bc658a5f831e8feab9562c02fe4735b2c5a4', '2021-05-26 16:06:33');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipos_noticia`
--

CREATE TABLE `tipos_noticia` (
  `id_tipo` int(11) NOT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONAMENTOS PARA TABELAS `tipos_noticia`:
--

--
-- Despejando dados para a tabela `tipos_noticia`
--

INSERT INTO `tipos_noticia` (`id_tipo`, `descricao`) VALUES
(1, 'entretenimento'),
(2, 'futebol'),
(3, 'politica'),
(4, 'automobilismo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Índices de tabela `registro-login`
--
ALTER TABLE `registro-login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `nivel` (`nivel`);

--
-- Índices de tabela `tipos_noticia`
--
ALTER TABLE `tipos_noticia`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `registro-login`
--
ALTER TABLE `registro-login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tipos_noticia`
--
ALTER TABLE `tipos_noticia`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
