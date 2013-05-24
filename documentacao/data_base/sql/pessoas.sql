CREATE TABLE DEFAULT_SCHEMA.pessoas (
       id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT
     , sexo VARCHAR(20)
     , nome VARCHAR(255)
     , email VARCHAR(255) BINARY
     , cidade_natal VARCHAR(100)
     , cidade_atual VARCHAR(100)
     , idade_escolar VARCHAR(100)
     , renda_familiar VARCHAR(100)
     , dt_nascimento VARCHAR(255) BINARY
     , fb_id VARCHAR(255)
     , equipe CHAR(1) DEFAULT 'N'
     , dt_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     , PRIMARY KEY (id)
);

