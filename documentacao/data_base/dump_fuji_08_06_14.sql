-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jun 08, 2014 as 11:08 AM
-- Versão do Servidor: 5.1.66
-- Versão do PHP: 5.3.3-7+squeeze16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `c40desjaguarao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `programas`
--

DROP TABLE IF EXISTS `programas`;
CREATE TABLE IF NOT EXISTS `programas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) DEFAULT NULL,
  `subtitulo` varchar(500) DEFAULT NULL,
  `resumo` text,
  `apresentacao` text,
  `ativo` char(1) DEFAULT 'S',
  `dt_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `programas`
--

INSERT INTO `programas` (`id`, `nome`, `subtitulo`, `resumo`, `apresentacao`, `ativo`, `dt_cadastro`) VALUES
(1, 'horizonte4zeros', 'Desenvolvimento urbano em Jaguarão: ampliando fronteiras do saber', 'O programa trabalha com o espaço urbano da cidade e se organiza em quatro projetos: \n1) Diagnóstico Rápido Participativo Urbano - DRUP em Jaguarão; \n2) Ordenamento do núcleo urbano consolidado; \n3)Jaguarão cidade paraformal; \n4) Estrutura cromática de Jaguarão. Está dedicado à temática do desenvolvimento urbano numa cidade de fronteira do Brasil com o Uruguai, no sul do Rio Grande do Sul, a qual experimenta as tensões do crescimento provocado por novos e grandes pólos e do tombamento federal.', 'O programa se articula assumindo demandas dos gestores públicos municipais, particularmente da Prefeitura Municipal, secretarias de Planejamento Urbano e de Cultura de Jaguarão, identificadas mediante atividades de colaboração preexistentes com a UFPel, que incluem suporte à preservação patrimonial, ensino de planejamento urbano e construção de cenários de futuro, em ações com professores, alunos e técnicos das instituições. A cidade de Jaguarão apresenta especificidades que a diferenciam e reforçam a necessidade e importância deste programa, destacamente as seguintes: -- a cidade apresenta importante tendência de crescimento urbano, estimulado pelos novos pólos de atração e tombamento federal (UNIPAMPA, IFSUL, Centro de Interpretação do Pampa, diversos prédios restaurados, tombamento pelo IPHAN de toda a zona central), acompanhada de periferia tradicional de baixa renda e paisagem natural típica da unidade ambiental; -- a cidade está na fronteira com o Uruguai, com o rio Jaguarão e a ponte fazendo a conexão entre os países, que mesclam culturas e produzem comportamentos típicos e bi-laterais, o que se acirra com o Free Shop uruguaio na cidade de Rio Branco e com a futura zona de livre comércio em Jaguarão; -- esse conjunto determina um caso de cidade interessante tanto pelas peculiaridades como pelas representação de ambiente de fronteira entre o Brasil e o Uruguai, permitindo construir conhecimentos densos e métodos replicáveis em outras cidades; -- todavia e contraditoriamente, os agentes públicos não estão preparados para enfrentar a complexidade desses fatos urbanos, com relações e consequências complexas para os habitantes dos dois países e para as demais cidades de fronteira, sendo o contato com a universidade uma possibilidade de aperfeiçoamento e troca de saberes. As ações extensionistas propostas mediante os quatro projetos estão associadas ao ensino e à pesquisa, sendo os temas congruentes com a formação e trajetória dos quatro professores da UFPel que lideram a proposta, a saber: -- professor Maurício Couto Polidori, coordenador deste programa, especialista em planejamento ambiental, mestre em planejamento urbano e doutor em ciências; professor de planejamento urbano, tem atividades anteriores em apoio a diversas prefeituras, como é caso de Morro Redondo, Pinheiro Machado, Capão do Leão, Pelotas, São Lourenço do Sul, Santa Vitória do Palmar, Arroio Grande e atualmente Jaguarão; a partir de 2011 a disciplina de planejamento urbano, na graduação do curso de Arquitetura e Urbanismo da UFPel, vem sendo realizada em Jaguarão, com os alunos interagindo e apoaiando a Prefeitura; -- professora Ana Paula Neto de Faria, mestre e doutora em planejamento urbano e regional, professora de planejamento urbano e paisagismo, dedicada a estudos do ambiente construído, modelagem intra-urbana e estrutura cognitiva do espaço urbano; -- professor Eduardo Rocha, mestre em educação e doutor em arquitetura, professor de projeto arquitetônico e urbanismo, pesquisador das questões da paraformalidade, com enfoque em diferentes modos de apropriação do espaço da cidade; -- professora Natalia Naoumova, mestre em arquitetura e doutora em planejamento urbano e regional, natural da Russia e pesquisadora da estrutura cromática da paisagem e do ambiente construído, patrimônio e qualidade estética de centros históricos, com diversos trabalhos de suporte ao planejamento urbano e à colorística das edificações.', 'S', '0000-00-00 00:00:00'),
(2, 'Horizonte4Zeros', 'Cidade para todos, cultura digital e ambiente: compartilhando o espaço de Jaguarão', 'O programa de extensão “Cidade para todos, cultura digital e ambiente: compartilhando o espaço de\r\nJaguarão, RS” trabalha com o espaço urbano da cidade e se organiza em três projetos: 1) Geoinformação\r\nurbana e compartilhamento; 2) Zoneamento urbano-ambiental e acesso à terra urbanizada; 3) Oficina de\r\nGeotecnologias para gestores públicos municipais. O programa está dedicado à temática do\r\ndesenvolvimento urbano, no sub-tema acesso à terra urbanizada, numa cidade de fronteira do Brasil com\r\no Uruguai, no sul do Rio Grande do Sul, a qual experimenta processos de exclusão sócio espacial nos\r\nbairros periféricos, especialmente nas bordas de interface da área urbanizada com o ambiente natural.\r\nNesse cenário, este programa apresenta os três projetos citados anteriormente, compondo um conjunto\r\nencadeado , com as seguintes propostas específicas: a) construir um sistema de informações geográficas\r\nda área urbanizada e entorno, incluindo as opiniões dos habitantes e disponibilizando as informações na\r\ninternet; b) elaborar um zoneamento urbano e ambiental integrado, identificando e hierarquizando as áreas\r\nindicadas para a urbanização, para habitação de interesse social e para a preservação ambiental; c)\r\nrealizar treinamento para a equipe do Poder Público Municipal, mediante transferência de tecnologias,\r\npermitindo a continuidade das ações no processo de planejamento urbano local.', 'O programa de extensão “Cidade para todos, cultura digital e ambiente: compartilhando o espaço de Jaguarão, RS” trabalha com o espaço urbano da cidade e se organiza em três projetos: 1) Geoinformação urbana e compartilhamento; 2) Zoneamento urbano-ambiental e acesso à terra urbanizada; 3) Oficina de Geotecnologias para gestores públicos municipais. O programa está dedicado à temática do desenvolvimento urbano, no sub-tema acesso à terra urbanizada, numa cidade de fronteira do Brasil com o Uruguai, no sul do Rio Grande do Sul, a qual experimenta processos de exclusão sócio espacial nos bairros periféricos, especialmente nas bordas de interface da área urbanizada com o ambiente natural.', 'S', '2014-05-25 17:59:26');
