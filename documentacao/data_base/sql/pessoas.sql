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
