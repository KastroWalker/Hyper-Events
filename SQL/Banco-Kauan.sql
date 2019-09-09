/**
  *Banco de dados HyperEvents
  *Criado por Descompila Compilando
  */

-- Criando a base de dados --
create database HyperEvents2;

use HyperEvents2;

-- Dando o privilegio para o usuário padrão --
grant all privileges on HyperEvents2.* to 'matue'@'%';

-- Criando tabela de usuário --
create table usuario(
    user_id int not null auto_increment,
    nome varchar(200) not null,
    data_nasc date not null,
    idade int not null,
    sexo char(1) not null,
    cpf varchar(11) not null,
    usuario varchar(100) not null,
    senha varchar(32) not null,
    email varchar(100) not null,
    contato varchar(12),
    primary key(user_id)
);

-- Criando tabela de palestrantes --
create table palestrante(
    palestrante_id int not null auto_increment,
    nome varchar(200) not null,
    data_nasc date not null,
    idade int not null,
    sexo char(1) not null,
    cpf varchar(11) not null,
    usuario varchar(100) not null,
    senha varchar(32) not null,
    email varchar(100) not null,
    contato varchar(12),
    primary key(user_id)
)

-- Criando tabela de eventos --
create table eventos(
    evento_id int not null auto_increment,
    user_id int not null,
    titulo varchar(200) not null,
    descricao varchar(500) not null,
    url_evento varchar(200),
    hora_inicio time not null,
    data_inicio date not null,
    data_fim date not null,
    email varchar(100) not null,
    primary key(evento_id),
    foreign key(user_id) references usuario(user_id)
);

-- Criando a tabela de palestra --
create table palestra(
    palestra_id int not null auto_increment,
    evento_id int not null,
    nome varchar(20) not null,
    descricao varchar(200) not null, 
    data_inicio date not null,
    data_fim date not null,
    local varchar(30) not null,
    inicio time not null, 
    fim time not null,
    primary key(palestra_id),
    foreign key(evento_id) references eventos(evento_id)
);

-- Adicionado a chave estrangeira de palestra na tabela do evento --
alter table eventos add palestra_id int after data_fim;
alter table eventos add foreign key(palestra_id) references palestra(palestra_id);

-- Criando a tabela de minicurso --
create table minicursos(
    minicurso_id int not null auto_increment,
    evento_id int not null,
    nome varchar(200) not null,
    descricao varchar(500) not null, 
    data_inicio date not null,
    data_fim date not null,
    local varchar(30) not null,
    inicio time not null, 
    fim time not null, 
    primary key(minicurso_id),
    foreign key(evento_id) references eventos(evento_id)
);

-- Adicionado a chave estrangeira de minicurso na tabela do evento --
alter table eventos add minicurso_id int after palestra_id;
alter table eventos add foreign key(minicurso_id) references minicursos(minicurso_id);