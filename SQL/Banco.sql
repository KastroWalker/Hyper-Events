-- Banco de dados HyperEvents --
-- Criando a base de dados --
create database	hyperEvents;

use hyperEvents;
-- Criando tabela de participantes --
create table participantes(
	idPart int not null auto_increment,
	nome varchar(200) not null,
	datanasc date not null,
	sexo char(1) not null,
	cpf varchar(11) not null,
	email varchar(60) not null,
	usuario varchar(200) not null,
	senha varchar(20) not null,
	primary key(idUser)
);

-- Criando tabela organizadores --
create table organizadores(
	idOrg int not null,
	nome varchar(200) not null,
	datanasc date not null,
	sexo char(1) not null,
	cpf varchar(11) not null,
	email varchar(60) not null,
	usuario varchar(200) not null,
	senha varchar(20) not null,
	primary	key(idOrg)
);