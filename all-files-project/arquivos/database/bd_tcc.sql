-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Dez-2017 às 17:35
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tcc`
--
CREATE DATABASE IF NOT EXISTS `tcc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nivel` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `cpf`, `email`, `senha`, `nivel`) VALUES
(1, 'JoÃ£o Pedro', '478166528-44', 'joao@gmail.com', '202cb962ac59075b964b07152d234b70', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(2, 'Rock'),
(3, 'Samba'),
(4, 'Heavy Metal'),
(5, 'Jazz'),
(6, 'ForrÃ³'),
(10, 'Progressivo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `sobrenome`, `email`, `senha`, `nivel`) VALUES
(24, 'CÃ©sar', 'Oliveira', 'cesar@hotmail.com', '202cb962ac59075b964b07152d234b70', 0),
(26, 'Rodney', 'Silva', 'rodney@gmail.com', '9efc314b65237d5d646e1b817372afc6', 0),
(29, 'Isadora', 'Rodrigues', 'isa@google.com', '202cb962ac59075b964b07152d234b70', 0),
(30, 'LÃ­dia', 'MÃ¼zel', 'lidia@hotmail.com', '202cb962ac59075b964b07152d234b70', 0),
(31, 'Milene', 'Pinto Veloso', 'milene_veloso@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compositores`
--

CREATE TABLE IF NOT EXISTS `compositores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `nivel` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `compositores`
--

INSERT INTO `compositores` (`id`, `nome`, `email`, `senha`, `telefone`, `nivel`) VALUES
(5, 'JoÃ£o MÃ¼zel', 'jojomuzel@hotmail.com', '202cb962ac59075b964b07152d234b70', '+55 (15) 99740-0721', 1),
(6, 'Luccas MÃ¼zel', 'luccas@hotmail.com', '202cb962ac59075b964b07152d234b70', '+55 (15) 99696-4796', 0),
(7, 'Eliezer Dias', 'eliezar@hotmail.com', '202cb962ac59075b964b07152d234b70', '+55 (15) 997117784', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

CREATE TABLE IF NOT EXISTS `musica` (
  `idmusica` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `autor` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `letra` text NOT NULL,
  `partitura` varchar(45) NOT NULL,
  `fins` varchar(15) NOT NULL,
  `genero` varchar(45) NOT NULL,
  PRIMARY KEY (`idmusica`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `musica`
--

INSERT INTO `musica` (`idmusica`, `titulo`, `autor`, `data`, `letra`, `partitura`, `fins`, `genero`) VALUES
(1, 'Internal Conflicts', 'JoÃ£o MÃ¼zel', '2017-02-12', '<p>What are within me? Has a many problems,<br />What are within me? Internal conflicts.</p><p>What&#39;s happening to me? I don&#39;t know,<br />What&#39;s happening to me? I want know.</p><p>That hard times, hard so much!<br />That hard times, I need to hold on!</p><p>When my conflicts filled my life,<br />I had no idea what to do.<br />And my head, explode with that,&nbsp;<br />And my heart still hurts!</p><p>This problems provoke me, causing frustrations,<br />My brain don&#39;t understand anything!</p><p>I look for pleasures for my soul,<br />And nothing happens.<br />I need to someone, to help me with my life,<br />Please God, help me!</p><p>I can&#39;t stand it anymore,&nbsp;<br />I want changing everything!</p><p>[refr&atilde;o]<br />Nothing else stop me of live in peace,<br />I think that my world is better now,<br />Internal conflicts there will always been,<br />But now, I have the faith necessary!</p><p>When my faith filled my soul,<br />I felt much better.<br />and I am a new follower,<br />That&#39;s my life!</p><p>Now I sing to everbody, my song,<br />Telling My Story!</p><p>[refr&atilde;o]<br />Nothing else stop me of live in peace,<br />I think that my world is better now,<br />Internal conflicts there will always been,<br />But now, I have the force necessary!</p>', '30892.jpg', 'Venda', 'Heavy Metal'),
(4, 'Black Sky', 'Luccas MÃ¼zel', '2012-02-17', '<p>When you take a look around<br />What you see<br />What is showned<br />Nothing is real<br />You are blind</p><p>We have have wings to reach the sky<br />So why we can&#39;t fly?<br />They change the colors<br />Of the pictures<br />And now we look<br />To the black sky</p><p>We can see&nbsp;<br />The blood in the ground<br />While I wait<br />The winds of change<br />The breathe of hope</p><p>Angels and demons will come<br />The final battle is approaching<br />The afterlife is waiting<br />Lost of memory<br />Shame and pain</p><p>Face to face<br />Brain to brain<br />(x2)</p><p>Holy light<br />Bad dreams<br />False vision&nbsp;<br />Wrong expression</p><p>Opinions that don&#39;t matter<br />Fears and more fears<br />Sound of fails</p><p>Angels and demons will come<br />The final battle is approaching<br />The afterlife is waiting<br />Lost of memory<br />Shame and pain</p><p>Blood and bones around<br />Fire in the houses<br />Bodies without lifes</p><p>What is the life now?<br />Who is happy and who is crying?<br />Who is the winner and who is the loser?<br />Can you tell me<br />If I&#39;m dead or alive?</p><p>Angels and demons will come<br />The final battle is approaching<br />The afterlife is waiting<br />This fight makes no sense&nbsp;<br />&nbsp;</p>', '6464.jpg', 'Trilha Sonora -', 'Heavy Metal'),
(8, 'Continue', 'JoÃ£o MÃ¼zel', '1111-11-11', '<p>Assim como h&aacute; aqueles<br />Que n&atilde;o sabem diferenciar<br />O sonho da realidade<br />H&aacute; aqueles que n&atilde;o podem enxerga-la</p><p>O medo de seguir em frente<br />O medo do que os outros ir&atilde;o pensar<br />Mas se o mundo &eacute; feito<br />De opini&otilde;es diferentes<br />Porque ningu&eacute;m pode aceitar?</p><p>(refr&atilde;o)<br />Assim como ele se sacrificou por n&oacute;s<br />H&aacute; alguns que tentam se ajudar<br />Mas n&atilde;o se pode agradar a todos<br />Ent&atilde;o lute por quem vale a pena</p><p>Encarando mais um dia<br />N&atilde;o esque&ccedil;a a realidade<br />Fa&ccedil;a o que for preciso<br />Para conquistar seu sonho</p><p>Mas n&atilde;o se esque&ccedil;a<br />H&aacute; pessoas diferentes<br />E ideologias diferentes<br />Ent&atilde;o tenha uma pra viver</p><p>(refr&atilde;o)<br />Assim como ele se sacrificou por n&oacute;s<br />H&aacute; alguns que tentam se ajudar<br />Mas n&atilde;o se pode agradar a todos<br />Ent&atilde;o lute por quem vale a pena</p>', '4355.jpg', 'Venda', 'Pop');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicacompleta`
--

CREATE TABLE IF NOT EXISTS `musicacompleta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `letra` text NOT NULL,
  `musica_demo` varchar(45) NOT NULL,
  `musica_completa` varchar(45) NOT NULL,
  `partitura` varchar(45) NOT NULL,
  `fins` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `musicacompleta`
--

INSERT INTO `musicacompleta` (`id`, `titulo`, `autor`, `data`, `letra`, `musica_demo`, `musica_completa`, `partitura`, `fins`, `genero`) VALUES
(2, 'Justice Law', 'Luccas MÃ¼zel', '2015-08-05', '<p>Where is the laws?<br />Where is the justice?</p><p>Steal a bread is crime<br />But steal millions of Money no<br />No one understand<br />What the think after all</p><p>Center of country<br />Center of attencions<br />But the only feeling is greed<br />Liars</p><p>(refr&atilde;o)<br />Toys to gain Money<br />Faded to obey<br />What the people do?<br />Who will awake to truth?</p><p>What we wait for?<br />Just think no change nothing<br />Only the will to fight<br />Can change the present</p><p>I just want to see<br />When the masks fall</p><p>Poors don&rsquo;t have rights<br />No place to fall dead<br />Show your voice now</p><p>(refr&atilde;o)<br />Toys to gain Money<br />Faded to obey<br />What the people do?<br />Who wil awake to truth?</p><p>Bandits<br />Corrupts<br />Thiefs</p><p>Aprisioning us<br />In your arms<br />In your chains</p><p>You&rsquo;re blind and don&rsquo;t know<br />The true in your front<br />We have the reason with us<br />We can made a revolution<br />We are humans too<br />&nbsp;</p>', '23747.mp3', '', '', 'Vinheta', 'Heavy Metal'),
(6, 'continue', 'JoÃ£o MÃ¼zel', '2017-11-01', '<p>Assim como h&aacute; aqueles<br />Que n&atilde;o sabem diferenciar<br />O sonho da realidade<br />H&aacute; aqueles que n&atilde;o podem enxerga-la</p><p>O medo de seguir em frente<br />O medo do que os outros ir&atilde;o pensar<br />Mas se o mundo &eacute; feito<br />De opini&otilde;es diferentes<br />Porque ningu&eacute;m pode aceitar?</p><p>(refr&atilde;o)<br />Assim como ele se sacrificou por n&oacute;s<br />H&aacute; alguns que tentam se ajudar<br />Mas n&atilde;o se pode agradar a todos<br />Ent&atilde;o lute por quem vale a pena</p><p>Encarando mais um dia<br />N&atilde;o esque&ccedil;a a realidade<br />Fa&ccedil;a o que for preciso<br />Para conquistar seu sonho</p><p>Mas n&atilde;o se esque&ccedil;a<br />H&aacute; pessoas diferentes<br />E ideologias diferentes<br />Ent&atilde;o tenha uma pra viver</p><p>(refr&atilde;o)<br />Assim como ele se sacrificou por n&oacute;s<br />H&aacute; alguns que tentam se ajudar<br />Mas n&atilde;o se pode agradar a todos<br />Ent&atilde;o lute por quem vale a pena</p>', '7602.mp3', '', '', 'venda', 'Heavy Metal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicainst`
--

CREATE TABLE IF NOT EXISTS `musicainst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `musica_demo` varchar(45) DEFAULT NULL,
  `musica_completa` varchar(45) DEFAULT NULL,
  `partitura` varchar(45) DEFAULT NULL,
  `fins` varchar(45) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `musicainst`
--

INSERT INTO `musicainst` (`id`, `titulo`, `autor`, `data`, `musica_demo`, `musica_completa`, `partitura`, `fins`, `genero`) VALUES
(3, 'In My Confort Zone', 'JoÃ£o MÃ¼zel', '2016-11-14', '14340.mp3', NULL, NULL, 'Venda', 'MÃºsica Instrumental'),
(4, 'For Those About Love The Prog', 'JoÃ£o MÃ¼zel', '0000-00-00', '22707.mp3', NULL, NULL, 'Venda', 'Heavy Metal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
