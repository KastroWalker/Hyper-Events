/*-- MySQL Workbench Synchronization
-- Generated: 2019-09-20 19:43
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Victor Castro

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `HyperEvents`.`inscricao_atividade` 
DROP FOREIGN KEY `inscricao_atividade_ibfk_2`;

ALTER TABLE `HyperEvents`.`inscricao_atividade` 
DROP COLUMN `user_id`,
ADD COLUMN `Matricula` BIGINT(20) NOT NULL AFTER `hota_inscricao_atividade`,
DROP PRIMARY KEY,
ADD PRIMARY KEY (`atividade_id`, `Matricula`),
ADD INDEX `fk_inscricao_atividade_inscricao_evento1_idx` (`Matricula` ASC),
DROP INDEX `user_id` ;

ALTER TABLE `HyperEvents`.`inscricao_evento` 
ADD COLUMN `Matricula` BIGINT(20) NOT NULL AFTER `hota_inscricao_evento`,
DROP PRIMARY KEY,
ADD PRIMARY KEY (`Matricula`);

ALTER TABLE `HyperEvents`.`inscricao_atividade` 
ADD CONSTRAINT `fk_inscricao_atividade_inscricao_evento1`
  FOREIGN KEY (`Matricula`)
  REFERENCES `HyperEvents`.`inscricao_evento` (`Matricula`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


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

-- Inserindo usuários padrões --
insert into tipoUsuario (nome) values ("Organizador"); 
insert into tipoUsuario (nome) values ("Participante");

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

insert into usuario (idtipo_usuario, nome, sexo, cpf, data_nasc, usuario, senha, email, contato) values ("1", "Organizador", "M", "12345678909", "2002-04-05", "organizador", md5("root"), "organizador@gmail.com", "86999999999");
insert into usuario (idtipo_usuario, nome, sexo, cpf, data_nasc, usuario, senha, email, contato) values ("2", "Participante", "M", "12345678909", "2002-04-05", "participante", md5("1234"), "participante@gmail.com", "86999999999");

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

insert into tipoAtividade (titulo) values ("Palestra");
insert into tipoAtividade (titulo) values ("Minicurso");

-- Criando tabela de tipo convidado --
create table tipoConvidado (
    idTipoConvidado int not null auto_increment,
    nome varchar (60) not null,
    primary key (idTipoConvidado)
);

-- Adicionando convidados padrões --
insert into tipoConvidado (nome) values ("Ministrante");
insert into tipoConvidado (nome) values ("Palestrante");

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
    nome varchar(20) not null,
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