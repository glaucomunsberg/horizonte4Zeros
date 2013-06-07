CREATE TABLE DEFAULT_SCHEMA.pessoas (
       id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT
     , genero CHAR(1)
     , nome VARCHAR(255)
     , email VARCHAR(255) BINARY
     , cidade_natal VARCHAR(100)
     , cidade_atual VARCHAR(100)
     , nivel_escolaridade VARCHAR(100)
     , renda_familiar VARCHAR(255)
     , dt_nascimento VARCHAR(255) BINARY
     , fb_id VARCHAR(255)
     , equipe CHAR(1) DEFAULT 'N'
     , dt_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     , PRIMARY KEY (id)
);

