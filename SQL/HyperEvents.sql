/**
  *Banco de dados HyperEvents
  *Criado por Descompila Compilando
  */

-- Criando a base de dados --
create database HyperEvents;

use HyperEvents;

-- Dando o privilegio para o usuário padrão --
grant all privileges on HyperEvents.* to 'matue'@'%';

-- Criando tabela de tipos de usuário --
create table tipoUsuario(
    idtipo_usuario int not null auto_increment,
    nome varchar(60) not null,
    primary key(idtipo_usuario)
);

-- Criando tabela de usuário --
create table usuario(
    user_id int not null auto_increment,
    idtipo_usuario int not null,
    nome varchar(200) not null,
    sexo char(1),
    cpf varchar(11),
    data_nasc Date not null,
    usuario varchar(100) not null,
    senha varchar(32) not null,
    email varchar(100) not null,
    contato varchar(11),
    primary key(user_id),
    foreign key (idtipo_usuario) references tipoUsuario (idtipo_usuario)
);

-- Criando tabela de eventos --
create table eventos(
    evento_id int not null auto_increment,
    user_id int not null,
    titulo varchar(200) not null,
    descricao varchar(500) not null,
    url_evento varchar(200),
    data_inicio date not null,
    data_fim date not null,
    hora_inicio time not null,
    hora_fim time not null,
    email varchar(100) not null,
    primary key(evento_id),
    foreign key(user_id) references usuario(user_id)
);

-- Criando tabela de tipos de atividade --
create table tipoAtividade (
    idTipoAtividade int not null auto_increment,
    titulo varchar(100) not null,
    primary key(idTipoAtividade)
);

-- Criando tabela de tipo convidado --
create table tipoConvidado (
    idTipoConvidado int not null auto_increment,
    nome varchar (60) not null,
    primary key (idTipoConvidado)
);

-- Criando tabela para convidado --
create table convidado(
    idConvidado int not null auto_increment,
    idTipoConvidado int not null,
    nome varchar(100) not null,
    descricao varchar(250),
    email varchar(60),
    primary key(idConvidado),
    foreign key (idTipoConvidado) references tipoConvidado (idTipoConvidado)
);

-- Criando a tabela de atividades --
create table atividade(
    atividade_id int not null auto_increment,
    evento_id int not null,
    idTipoAtividade int not null,
    idConvidado int,
    vagas int,
    valor float,
    nome varchar(150) not null,
    descricao varchar(500) not null, 
    data date not null,
    local varchar(60),
    inicio time not null, 
    fim time not null,
    primary key(atividade_id),
    foreign key(evento_id) references eventos(evento_id),
    foreign key(idTipoAtividade) references tipoAtividade(idTipoAtividade),
    foreign key(idConvidado) references convidado(idConvidado)
);