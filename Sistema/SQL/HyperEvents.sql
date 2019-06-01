create database HyperEvents;

use HyperEvents;

create table participante(
	participante_id int not null auto_increment,
	nome varchar(200) not null,
	datanasc date not null,
	sexo char(1) not null,
	cpf varchar(11) not null,
	email varchar(50) not null,
	user varchar(200) not null,
	senha varchar(32) not null,
	primary key(participante_id)
);

insert into participante (nome, datanasc, sexo, cpf, email, user, senha) values ('victor', '2002-04-05', 'M', '12345678901', '', 'kastrowalker');