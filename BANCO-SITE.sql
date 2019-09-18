CREATE DATABASE FullService;
use FullService;

CREATE TABLE login(
	id_user int primary key auto_increment not null,
    login varchar(50),
    senha char(40)
);

-- drop table cadastro;
CREATE TABLE cadastro(
	id_cadastro int primary key auto_increment not null,
    nome varchar(90),
    cpf varchar(15),
    CEP varchar(10),
    telefone varchar(12),
    nivel varchar (20),
    email varchar(60),
    senha char(40)
);

select * from cadastro;

INSERT INTO cadastro (nome, cpf, cep, telefone, nivel, email, senha) VALUES (tati, 111111111111111, 111111-11111 , 1198656-6996, Trabalhador, 'gois@gmail.com', sha1(1111111111) );
INSERT INTO `fullservice`.`cadastro` (`id_cadastro`, `nome`, `cpf`, `CEP`, `telefone`, `nivel`, `email`, `senha`) VALUES ('1', 'tati', '111111111111111', '1545425252', '11986656968', '1', 'tati@gmail.com', '1234');
