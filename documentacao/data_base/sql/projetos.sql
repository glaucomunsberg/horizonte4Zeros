CREATE TABLE DEFAULT_SCHEMA.projetos (
       id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT
     , nome VARCHAR(255) BINARY
     , resumo VARCHAR(300)
     , objetivos TEXT
     , mapeamento VARCHAR(255)
     , problemajustificacao TEXT
     , fundamentos TEXT
     , resultados TEXT
     , programa_id BIGINT(20) UNSIGNED
     , dt_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     , PRIMARY KEY (id)
     , INDEX (programa_id)
     , CONSTRAINT FK_projetos_1 FOREIGN KEY (programa_id)
                  REFERENCES DEFAULT_SCHEMA.programas (id)
);

