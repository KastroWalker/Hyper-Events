/**
  *Banco de dados HyperEvents
  *Criado por Desconpila Compitando
  */

--Criando usuário padrão para todos--
create user 'matue'@'%' identified by 'banco';

-- Criando a base de dados --
create database HyperEvents;

use HyperEvents;

-- Dando o privilegio para o usuário padrão --
grant all privileges on HyperEvents.* to 'matue'@'%';

-- Criando a tabela de organizadores
create table organizadores(
    org_id int not null auto_increment,
    nome varchar(200) not null,
    data_nasc date not null,
    idade int not null check(idade >= 16),
    sexo char(1) not null,
    cpf varchar(11) not null,
    usuario varchar(100) not null,
    senha varchar(32) not null,
    email varchar(100) not null,
    contato varchar(12),
    primary key(org_id)
);

insert into organizadores (nome, data_nasc, idade, sexo, cpf, usuario, senha, email, contato) values ('organizador', '2018-02-05', '16', 'M', '12346578909', 'organizador', md5('root'), 'root@gamil.com', '086999999999');

create table participantes(
    part_id int not null auto_increment,
    nome varchar(200) not null,
    data_nasc date not null,
    idade int not null,
    sexo char(1) not null,
    cpf varchar(11) not null,
    usuario varchar(100) not null,
    senha varchar(32) not null,
    email varchar(100) not null,
    contato varchar(12),
    primary key(part_id)
);

insert into participantes (nome, data_nasc, idade, sexo, cpf, usuario, senha, email, contato) values ('participante', '2018-02-05', '16', 'M', '12346578909', 'partcipante', md5('user'), 'user@gamil.com', '086999999999');