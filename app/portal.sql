-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jul-2014 às 23:42
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(4, NULL, 'Group', 2, NULL, 5, 8),
(5, 1, 'User', 1, NULL, 2, 3),
(6, 4, 'User', 2, NULL, 6, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  `section_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `category`, `section_id`) VALUES
(1, 'Esporte', 0),
(2, 'Politica', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administradores', '2014-06-18 02:32:51', '2014-06-18 02:32:51'),
(2, 'Moderadores', '2014-06-18 02:35:44', '2014-06-18 02:35:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `fonte` varchar(255) NOT NULL,
  `category_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `subtitle`, `body`, `created`, `modified`, `fonte`, `category_id`) VALUES
(1, 2, 'Vídeo mostra funcionária presa ao receber propina', '', '<p>A Pol&iacute;cia Federal divulgou o v&iacute;deo com o momento em que Roberlaine Patr&iacute;cia Alves, 28 anos, ent&atilde;o funcion&aacute;ria &nbsp;ligada ao Minist&eacute;rio da Sa&uacute;de &eacute; presa em flagrante recebendo R$ 100 mil como propina para liberar repasses federais para o Hospital do C&acirc;ncer.&nbsp;</p>\r\n\r\n<p>Segundo a Pol&iacute;cia Federal, na semana passada, o hospital depositou R$ 50 mil na conta da servidora e, nesta semana, ela veio buscar sete l&acirc;minas de cheque, que complementariam o pagamento da propina. Ela foi presa t&atilde;o logo recebeu os cheques. A mulher era funcion&aacute;ria contratada e atuava h&aacute; tr&ecirc;s anos na pasta, em Bras&iacute;lia.</p>\r\n\r\n<p>As investiga&ccedil;&otilde;es apontam que a propina era cobrada para liberar o repasse de verbas p&uacute;blicas federais oriundas de emendas parlamentares. A compra de um acelerador para radioterapia tamb&eacute;m foi alvo de cobran&ccedil;a, embora o hospital tivesse atendido os requisitos previstos em lei para obter os recursos e o aparelho</p>\r\n\r\n<p>As a&ccedil;&otilde;es da PF come&ccedil;aram em maio, quando o diretor do hospital em Campo Grande compareceu a pol&iacute;cia para relatar o crime. Com autoriza&ccedil;&atilde;o da Justi&ccedil;a, policiais passaram a monitorar a funcion&aacute;ria, que foi presa em flagrante ao ser filmada exigindo a propina do diretor do hospital.</p>\r\n\r\n<p>Nas imagens, ao ser dada a voz de pris&atilde;o, a mulher diz que h&aacute; mais pessoas envolvidas no esquema, mas em depoimento na Superintend&ecirc;ncia de Pol&iacute;cia Federal, ela alegou que atuou sozinha. A Pol&iacute;cia Federal acredita que deve concluir as investiga&ccedil;&otilde;es nos pr&oacute;ximos 15 dias. A mulher ser&aacute; indiciada por corrup&ccedil;&atilde;o passiva e lavagem de dinheiro.</p>\r\n\r\n<p>Participaram da coletiva de imprensa o superintendente da PF, Edgar Marcon, a delegada Kelly Bernardo e o presidente do Hospital do C&acirc;ncer, Carlos Coimbra.&nbsp;</p>\r\n\r\n<p><img alt="" src="C:\\Users\\Public\\Pictures\\Sample Pictures" /></p>\r\n', '2014-06-20 02:18:06', '2014-06-20 02:18:06', 'http://www.correiodoestado.com.br/noticias/video-mostra-funcionaria-presa-ao-receber-propina_219660/', '1'),
(2, 1, 'teste', '', '<p><img alt="" src="/cake/app/webroot/img/images/Jellyfish.jpg" style="height:113px; width:150px" /></p>\r\n', '2014-06-20 03:16:49', '2014-06-20 22:18:20', 'teste', '1'),
(3, 1, 'gggghkjjjh', 'gggghkjjjh', '<p>gggghkjjjhgggghkjjjhgggghkjjjhgggghkjjjhgggghkjjjhgggghkjjjhgggghkjjjh</p>\r\n', '2014-07-22 22:20:30', '2014-07-22 22:40:47', 'gggghkjjjhgggghkjjjhgggghkjjjh', '1'),
(4, 1, 'esporte de', 'esporte run', '<p>teste</p>\r\n', '2014-07-22 22:26:47', '2014-07-22 23:01:25', 'teste', '2'),
(5, 3, 'esporte', 'esporte', '<p>teste</p>\r\n', '2014-07-22 22:28:41', '2014-07-22 22:28:41', 'teste', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'admin', '06d0fb5a133894a22d7893e5514b2915f66630ff', 1, '2014-06-18 02:40:07', '2014-06-18 02:40:07'),
(2, 'editor', '06d0fb5a133894a22d7893e5514b2915f66630ff', 2, '2014-06-18 02:41:37', '2014-06-18 02:41:37'),
(3, 'wander', '06d0fb5a133894a22d7893e5514b2915f66630ff', 1, '2014-06-18 05:01:47', '2014-06-18 05:01:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
