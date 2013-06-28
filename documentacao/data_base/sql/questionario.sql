CREATE TABLE questionario (
       id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT
     , questao_1 BLOB
     , questao_2 BLOB
     , questao_3 BLOB
     , questao_4 BLOB
     , questao_5 BLOB
     , questao_6 BLOB
     , questao_7 BLOB
     , questao_8 BLOB
     , questao_9 BLOB
     , questao_10 BLOB
     , questao_11 BLOB
     , questao_12 BLOB
     , questao_13 BLOB
     , questao_14 BLOB
     , questao_15 BLOB
     , questao_16 BLOB
     , questao_17 BLOB
     , questao_18 BLOB
     , questao_19 BLOB
     , questao_20 BLOB
     , questao_21 BLOB
     , questao_22 BLOB
     , problemas_cidade_atual TEXT
     , prioridades_futuro TEXT
     , voce_pensou_como VARCHAR(50)
     , cidade VARCHAR(50)
     , pessoa_id BIGINT(20) UNSIGNED
     , dt_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     , PRIMARY KEY (id)
     , INDEX (pessoa_id)
     , CONSTRAINT FK_questionario_1 FOREIGN KEY (pessoa_id)
     REFERENCES pessoas (id)
)ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

