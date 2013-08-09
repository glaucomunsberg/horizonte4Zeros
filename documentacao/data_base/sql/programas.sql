CREATE TABLE programas (
       id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT
     , nome VARCHAR(500)
     , subtitulo VARCHAR(500)
     , resumo VARCHAR(500)
     , apresentacao TEXT
     , ativo CHAR(1) DEFAULT 'S'
     , dt_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     , PRIMARY KEY (id)
);
