-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 24-Maio-2013 às 14:51
-- Versão do servidor: 5.1.68-cll
-- versão do PHP: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `glaucomu_horizonte`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dt_nascimento` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `fb_id` varchar(255) DEFAULT NULL,
  `equipe` char(1) DEFAULT 'N',
  `dt_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sexo` varchar(20) DEFAULT NULL,
  `cidade_natal` varchar(100) DEFAULT NULL,
  `cidade_atual` varchar(100) DEFAULT NULL,
  `idade_escolar` varchar(100) DEFAULT NULL,
  `renda_familiar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `email`, `dt_nascimento`, `fb_id`, `equipe`, `dt_cadastro`, `sexo`, `cidade_natal`, `cidade_atual`, `idade_escolar`, `renda_familiar`) VALUES
(6, 'Otavio M Peres', 'otmperes@gmail.com', '01/26/1983', '100001967597669', 'N', '2013-04-17 18:52:46', 'male', NULL, NULL, NULL, NULL),
(7, 'Maiga Yokemura', 'mnyokemura@gmail.com', '01/14/1994', '832668188', 'N', '2013-04-18 13:58:19', NULL, NULL, NULL, NULL, NULL),
(13, 'Lucas Prezotto', 'lucasprezotto@hotmail.com', '03/06/1992', '1439311647', 'N', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL),
(14, 'Estela Delanoy Polidori', 'estela.polidori@gmail.com', '10/02/1992', '100002659240852', 'N', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL),
(17, 'Glauco Roberto Munsberg', 'glaucomunsberg@gmail.com', '07/08/1988', '100000197237018', 'N', '0000-00-00 00:00:00', 'male', 'Pelotas, Brazil', 'Pelotas, Brazil', NULL, NULL),
(18, 'Maurício Polidori', 'mauricio.polidori@terra.com.br', '09/22/1958', '1526962872', 'N', '0000-00-00 00:00:00', 'male', 'Pelotas', 'Pelotas', NULL, NULL),
(19, 'Giovana de Matos', 'gi_matosb@hotmail.com', '11/08/1992', '100003089628629', 'N', '0000-00-00 00:00:00', 'female', 'Pelotas (Pelotas, Brazil)', 'Pelotas (Pelotas, Brazil)', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `programas`
--

CREATE TABLE IF NOT EXISTS `programas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `resumo` varchar(500) DEFAULT NULL,
  `apresentacao` text,
  `ativo` char(1) DEFAULT 'S',
  `dt_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nome` varchar(500) DEFAULT NULL,
  `subtitulo` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `programas`
--

INSERT INTO `programas` (`id`, `resumo`, `apresentacao`, `ativo`, `dt_cadastro`, `nome`, `subtitulo`) VALUES
(1, 'O programa se articula assumindo demandas dos gestores públicos municipais, particularmente da Prefeitura Municipal, secretarias de Planejamento Urbano e de Cultura de Jaguarão, identificadas mediante atividades de colaboração preexistentes com a UFPel, que incluem suporte à preservação patrimonial, ensino de planejamento urbano e construção de cenários de futuro, em ações com professores, alunos e técnicos das instituições.', 'O programa se articula assumindo demandas dos gestores públicos municipais, particularmente da Prefeitura Municipal, secretarias de Planejamento Urbano e de Cultura de Jaguarão, identificadas mediante atividades de colaboração preexistentes com a UFPel, que incluem suporte à preservação patrimonial, ensino de planejamento urbano e construção de cenários de futuro, em ações com professores, alunos e técnicos das instituições.', 'S', '2013-04-29 12:57:48', 'horizonte4zeros', ' desenvolvimento urbano em jaguarão: ampliando fronteiras do saber');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE IF NOT EXISTS `projetos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `resumo` varchar(300) DEFAULT NULL,
  `objetivos` text,
  `mapeamento` varchar(255) DEFAULT NULL,
  `problemajustificacao` text,
  `fundamentos` text,
  `resultados` text,
  `programa_id` bigint(20) unsigned DEFAULT NULL,
  `dt_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `programa_id` (`programa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `nome`, `resumo`, `objetivos`, `mapeamento`, `problemajustificacao`, `fundamentos`, `resultados`, `programa_id`, `dt_cadastro`) VALUES
(1, 'DRUP em Jaguarão\n', 'reuniões de preparação: fazem parte da rotina dos membros da equipe executora, podendo contar com\na participação dos técnicos envolvidos e representantes da comunidade em geral.\n', 'objetivos 1', NULL, 'a realização de diagnósticos tem sido uma das atividades iniciais e estruturantes dos trabalhos com as\ncidades, os quais podem ser realizados de diferentes modos. De modo a complementar os diagnósticos\ntradicionais (realizado pela Prefeitura ao elaborar o Plano Diretor e pela UFPel ao construir e analisar o\nSistema de Informações Geográficas, em projeto de extensão atual), este projeto propõe um diagnóstico\nfundado nas cognições dos usuários do espaço, de modo participativo e dedicado à visualização da\ninformação. Nesse caminho, o Diagnóstico Rápido Participativo Urbano, conhecido pela sigla DRUP, está\nproposto como passo inicial do programa, construindo visão ampla e integradora dos diversos aspectos da\ncidade.', 'fundamentos 1', 'resumo 1', 1, '2013-04-29 12:59:22'),
(2, 'Ordenamento Urbano', 'produção de material didático: é etapa na qual a equipe e os participantes do projeto discutem e\nconfeccionam os materiais necessários para as ações previstas no projeto, visando atender os objetivos\npropostos.\n', 'objetivos 2', NULL, 'Ordenamento do núcleo urbano consolidado: a cidade teve seu Plano Diretor aprovado recentemente,\nSIGProj - Página 6 de 34\nao que se seguiu o tombamento pelo IPHAN de toda a área central, entorno e cerca de 650 prédios.\nNesse processo, restaram diversas incongruências entre os dois instrumentos de planejamento e controle\nurbanos, bem como entre eles e a realidade da cidade. Além disso, a cidade experimenta efetivo surto de\ncrescimento, ocasionado pelos novos pólos de atração e pelos investimentos locais, o que indica a\noportunidade de estudar a estrutura intraurbana e de compatibilizar os mecanismos para seu planejamento\ne desenho urbano.', 'fundamentos 2', 'resumo 2', 1, '2013-04-29 12:59:56'),
(3, 'Jaguarão cidade paraformal', ' aulas teóricas: são momentos de estudo dos grupos envolvidos, em que se pretende um processo de\ncomunicação e troca de saberes. \n', 'objetivos 3', NULL, 'Jaguarão cidade paraformal: áreas do conhecimento como a economia e o urbanismo têm consolidado\no uso das categorias de “cidade formal e informal”, da “economia formal e informal”. Esses pares de\nopostos têm ocupado os meios de comunicação e forjado ou fingido um debate sobre “o que é” e “o que\nnão é” a cidade e a urbanidade, polaridade conceitual que parecia constituir um dentro e um fora\ncompletamente definidos e um congelamento das complexas relações urbano-ecológicas. Partindo desses\nestereótipos a proposta de extensão “Jaguarão cidade para-formal” pretende experimentar categorias\nalternativas para explorar o campo do meio, da zona cinza, gradual e complexa. Neste sentido, está sendo\nusado o neologismo “para-formal” (na fronteira), artificial e provisório, algo relativo à forma, porém não é\nela mesma, evitando tomar o formal e o informal como adjetivos fixos. A idéia é introduzir alternativas\nlocais e específicas, tornando mais “reais” os processos de “formação, transformação, deformação e\nin-formação”.', 'fundamentos 3', 'resumo 3', 1, '2013-04-29 13:00:26'),
(4, 'Cromática de Jaguarão', 'exposições: pretendem apresentação de resultados, parciais ou finais, ao público em geral; incluem\nmapas, imagens, vídeos e outros materiais produzidos durante a execução do projeto de extensão.', 'objetivos 4', NULL, 'Estrutura cromática de Jaguarão: os estudos cromáticos sustentam a criação de instrumentos\nurbanísticos de diversos tipos e níveis, desde os planos e projetos aos regulamentos e catálogos ou atlas\ncromáticos, manuais, elucidários, cadernos de encargos-tipo, etc - os que se necessitem, ou que se\ndemonstrem mais adequados. Os estudos desse tipo são fundamentais para cidades tombadas, como a\nde Jaguarão, ajudando a sustentar o tombamento de forma qualificada. Aparece, assim, o panorama das\npossibilidades de intervenção, articulando a interpretação crítica das análises realizadas com os objetivos\nda ideologia da conservação patrimonial, no quadro dos seus atuais paradigmas.', 'fundamentos 4', 'resumo 4', 1, '2013-04-29 13:00:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
