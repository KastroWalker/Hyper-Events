/*
Bando de Dados Hyper Events
Criado por: Victor Castro
*/

-- Criando a base de dados --
create database HyperEvents;

use HyperEvents;

-- Criando a tabela participante --
create table participante(
    participante_id int not null auto_increment,
    nome varchar(200) not null,
    -- idade int not null, --
    datanasc date not null,
    sexo char(1) not null,
    cpf varchar(11) not null,
    email varchar(50) not null,
    user varchar(200) not null,
    senha varchar(32) not null,
    primary key(participante_id)
);

-- Criando o participante padrão para teste -- 
insert into participante (nome, datanasc, sexo, cpf, email, user, senha) values ('user', '2000-02-02', 'M', '12345678901', 'user@gmail.com', 'user', md5('user'));

-- Criando a tabela organizador --
create table organizador(
    organizador_id int not null auto_increment,
    nome varchar(200) not null,
    datanasc date not null,
    sexo char(1) not null,
    cpf varchar(11) not null,
    email varchar(50) not null,
    user varchar(200) not null,
    senha varchar(32) not null,
    primary key(organizador_id)
);

-- Criando o organizador padrão para teste --
insert into organizador (nome, datanasc, sexo, cpf, email, user, senha) values ('root', '2000-02-02', 'M', '12345678901', 'root2002@gmail.com', 'root', md5('root'));