DROP TABLE IF EXISTS questionario;
DROP TABLE IF EXISTS projetos;
DROP TABLE IF EXISTS pessoas;
DROP TABLE IF EXISTS programas;
DROP TABLE IF EXISTS voce_pensou_como;
DROP TABLE IF EXISTS niveis_escolaridade;
DROP TABLE IF EXISTS cidades;
DROP TABLE IF EXISTS rendas_familiar;

CREATE TABLE rendas_familiar (
       id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT
     , descricao VARCHAR(255)
     , PRIMARY KEY (id)
);

CREATE TABLE cidades (
       id INT UNSIGNED NOT NULL AUTO_INCREMENT
     , nome VARCHAR(255)
     , PRIMARY KEY (id)
);

CREATE TABLE niveis_escolaridade (
       id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT
     , descricao VARCHAR(255)
     , PRIMARY KEY (id)
);

CREATE TABLE voce_pensou_como (
       id INT UNSIGNED NOT NULL AUTO_INCREMENT
     , descricao VARCHAR(255)
     , PRIMARY KEY (id)
);

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

CREATE TABLE pessoas (
       id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT
     , genero CHAR(1)
     , nome VARCHAR(255)
     , email VARCHAR(255) BINARY
     , cidade_id INTEGER UNSIGNED
     , nivel_escolaridade_id INTEGER UNSIGNED
     , renda_familiar_id INTEGER UNSIGNED
     , dt_nascimento YEAR
     , fb_id VARCHAR(255)
     , equipe CHAR(1) DEFAULT 'N'
     , dt_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     , PRIMARY KEY (id)
     , INDEX (nivel_escolaridade_id)
     , CONSTRAINT FK_pessoas_1 FOREIGN KEY (nivel_escolaridade_id)
                  REFERENCES niveis_escolaridade (id)
     , INDEX (renda_familiar_id)
     , CONSTRAINT FK_pessoas_2 FOREIGN KEY (renda_familiar_id)
                  REFERENCES rendas_familiar (id)
     , INDEX (cidade_id)
     , CONSTRAINT FK_pessoas_3 FOREIGN KEY (cidade_id)
                  REFERENCES cidades (id)
);

CREATE TABLE projetos (
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
                  REFERENCES programas (id)
);

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
     , voce_pensou_como_id INTEGER UNSIGNED
     , pessoa_id BIGINT(20) UNSIGNED
     , dt_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     , PRIMARY KEY (id)
     , INDEX (pessoa_id)
     , CONSTRAINT FK_questionario_1 FOREIGN KEY (pessoa_id)
                  REFERENCES pessoas (id)
     , INDEX (voce_pensou_como_id)
     , CONSTRAINT FK_questionario_3 FOREIGN KEY (voce_pensou_como_id)
                  REFERENCES voce_pensou_como (id)
);

