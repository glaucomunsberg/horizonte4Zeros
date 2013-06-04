CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `idade` tinyint(4) DEFAULT NULL,
  `genero` varchar(1) DEFAULT NULL,
  `nivel_escolaridade` varchar(255) DEFAULT NULL,
  `renda_familiar` varchar(255) DEFAULT NULL,
  `dt_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

)
