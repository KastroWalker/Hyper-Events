/**
  *Banco de dados HyperEvents
  *Criado por Tico e Teco
  *Versão: 1.0
  */

create database HyperEvents;

use HyperEvents;

create table Organizador(
	organizador_id int not null auto_increment,
	nome varchar(100) not null,
	email varchar(100) not null,
	senha varchar(32) not null,
	primary key(organizador_id)
);

create table Participante(
	participante_id int not null auto_increment,
	nome varchar(100) not null,
	email varchar(100) not null,
	senha varchar(32) not null,
	primary key(participante_id)
);

create table Ministrante(
	ministrante_id int not null auto_increment,
	nome varchar(100) not null,
	descricao varchar(200) not null,
	email varchar(100) not null,
	primary key(ministrante_id)
);

create table Evento(
	evento_id int not null auto_increment,
	organizador_id int not null,
	titulo varchar(100) not null,
	descricao varchar(300) not null,
	local varchar(200) not null,
	data_inicio date not null,
	data_final date not null,
	qtde_vagas int not null,
	primary key(evento_id),
	foreign key(organizador_id) references Organizador(organizador_id)
);

create table TipoAtividade(
	tipo_atividade_id int not null auto_increment,
	nome varchar(50),
	primary key(tipo_atividade_id)
);

create table Atividade(
	atividade_id int not null auto_increment,
	tipo_atividade_id int not null,
	ministrante_id int not null,
	nome varchar(100) not null,
	descricao varchar(300) not null,
	qtde_vagas int not null,
	local varchar(200) not null,
	data_inicial date not null,
	data_final date not null,
	hora_inicial time not null,
	hora_final time not null,
	primary key(atividade_id),
	foreign key(tipo_atividade_id) references TipoAtividade(tipo_atividade_id),
	foreign key(ministrante_id) references Ministrante(ministrante_id)
);

create table Inscricao(
	inscricao_id int not null auto_increment,
	atividade_id int not null,
	participante_id int not null,
	primary key(inscricao_id),
	foreign key(atividade_id) references Atividade(atividade_id),
	foreign key(participante_id) references Participante(participante_id)
);

insert into TipoAtividade (nome) values ("miniscurso");
insert into TipoAtividade (nome) values ("palestra");