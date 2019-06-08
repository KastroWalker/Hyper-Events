-- Banco de dados HyperEvents --
-- Criando a base de dados --
create database	hyperEvents;

use hyperEvents;
-- Criando a tabela de participantes --
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

-- Criando a tabela organizadores --
create table organizadores(
	idOrg int not null auto_increment,
	nome varchar(200) not null,
	datanasc date not null,
	sexo char(1) not null,
	cpf varchar(11) not null,
	email varchar(60) not null,
	usuario varchar(200) not null,
	senha varchar(20) not null,
	primary	key(idOrg)
);

-- Criando a tabela de palestrantes --
create table palestrantes(
	idPal int not null auto_increment,
	nome varchar(200) not null,
	cpf varchar(11) not null,
	sexo char(1) not null,
	descricao varchar(500) not null, -- Aqui é pra falar de onde ele veio e as possíveis áreas de atuação
	primary key(idPal)
);

-- Criando a tabela de ministrantes --
create table ministrantes(
	idMin int not null auto_increment,
	nome varchar(200) not null,
	cpf varchar(11) not null,
	sexo char(1) not null,
	descricao varchar(500) not null, -- Mesma coisa do palestrante
	primary key(idMin)
);

-- Criando a tabela de minicursos --
create table minicursos(
	idMinicurso int not null auto_increment,
	idMin int not null,
	titulo varchar(200) not null,
	descricao varchar(500), -- Resumo do que irá ocorrer
	inicio time not null, -- Horário de início
	fim time not null, -- Horário que acabará
	data date not null, -- Dia em que será ministrado
	primary key(idMinicurso),
	foreign key(idMin) references ministrantes(idMin)
);

-- Criando a tabela de palestras --
create table palestras(
	idPalestras int not null auto_increment,
	idPal int not null,
	titulo varchar(200) not null,
	descricao varchar(500), -- Mesma coisa de minicursos
	inicio time not null, -- Mesma coisa de minicursos
	fim time not null, -- Mesma coisa de minicursos
	data date not null, -- Mesma coisa de minicursos
	primary key(idPalestras),
	foreign key(idPal) references palestrantes(idPal)
);

-- Criando tabela de locais --
create table locais(
	idLoc int not null auto_increment,
	nome varchar(200) not null,
	endereco varchar(200) not null,
	cep varchar(8) not null,
);
-- Criando a tabela de eventos --
create table eventos(
	idEvent int not null auto_increment,
	titulo varchar(200) int not null,

);