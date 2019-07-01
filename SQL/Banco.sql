/**
  *Banco de dados HyperEvents
  *Criado por Descompila Compitando
  */

-- Criando usuário padrão para todos --
-- create user 'matue'@'%' identified by 'banco'; --

-- Criando a base de dados --
create database HyperEvents;

use HyperEvents;

-- Dando o privilegio para o usuário padrão --
grant all privileges on HyperEvents.* to 'matue'@'%';

-- Criando a tabela de organizadores --
create table organizadores(
    org_id int not null auto_increment,
    nome varchar(200) not null,
    data_nasc date not null,
    idade int not null,
    sexo char(1) not null,
    cpf varchar(11) not null,
    usuario varchar(100) not null,
    senha varchar(32) not null,
    email varchar(100) not null,
    contato varchar(12),
    primary key(org_id)
);

-- Criando um organizador padrão --
insert into organizadores (nome, data_nasc, idade, sexo, cpf, usuario, senha, email, contato) values ('organizador', '2018-02-05', '16', 'M', '12346578909', 'organizador', md5('root'), 'root@gamil.com', '086999999999');

-- Criando a tabela participantes --
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

-- Criando um participante padrão --
insert into participantes (nome, data_nasc, idade, sexo, cpf, usuario, senha, email, contato) values ('participante', '2018-02-05', '16', 'M', '12346578909', 'partcipante', md5('user'), 'user@gamil.com', '086999999999');

-- Criando a tabela de eventos --
create table eventos(
    evento_id int not null auto_increment,
    org_id int not null,
    titulo varchar(200) not null,
    descricao varchar(500) not null,
    url_evento varchar(200),
    hora_inicio time not null,
    data_inicio date not null,
    data_fim date not null,
    email varchar(100) not null,
    primary key(evento_id),
    foreign key(org_id) references organizadores(org_id)
);

-- Criando a tabela de material --
create table material(
    material_id int not null auto_increment,
    evento_id int not null,
    nome varchar(30) not null,
    descricao_mat varchar(500) not null,
    qnt_material int not null,
    primary key (material_id),
    foreign key (evento_id) references eventos(evento_id)
);

-- Adicionado a chave estrangeira de material na tabela do evento --
alter table eventos add material_id int after data_fim;
alter table eventos add foreign key(material_id) references material(material_id);

-- Criando tabela de palestrante --
create table palestrante(
    palestrante_id int not null auto_increment,
    nome varchar(200) not null,
    cpf varchar(11) not null,
    sexo char(1) not null,
    descricao varchar(500),
    primary key(palestrante_id)
);

-- Criando a tabela de palestra --
create table palestra(
    palestra_id int not null auto_increment,
    palestrante_id int not null,
    evento_id int not null,
    nome varchar(20) not null,
    descricao varchar(200) not null, 
    data_inicio date not null,
    data_fim date not null,
    local varchar(30) not null,
    inicio time not null, 
    fim time not null,
    primary key(palestra_id),
    foreign key(evento_id) references eventos(evento_id),
    foreign key(palestrante_id) references palestrante(palestrante_id)
);

-- Adicionado a chave estrangeira de palestra na tabela do evento --
alter table eventos add palestra_id int after material_id;
alter table eventos add foreign key(palestra_id) references palestra(palestra_id);

-- Criando a tabela de ministrante --
create table ministrantes(
    ministrante_id int not null auto_increment,
    nome varchar(200) not null,
    cpf varchar(11) not null,
    sexo char(1) not null,
    descricao varchar(500) , 
    primary key(ministrante_id)
);

-- Criando a tabela de minicurso --
create table minicursos(
    minicurso_id int not null auto_increment,
    ministrante_id int not null,
    evento_id int not null,
    nome varchar(200) not null,
    descricao varchar(500) not null, 
    data_inicio date not null,
    data_fim date not null,
    local varchar(30) not null,
    inicio time not null, 
    fim time not null, 
    primary key(minicurso_id),
    foreign key(evento_id) references eventos(evento_id),
    foreign key(ministrante_id) references ministrantes(ministrante_id)
);

-- Adicionado a chave estrangeira de minicurso na tabela do evento --
alter table eventos add minicurso_id int after palestra_id;
alter table eventos add foreign key(minicurso_id) references minicursos(minicurso_id);

-- Criando a tabela que relaciona os participantes e os eventos --
create table eventos_participantes(
    evento_id int not null,
    part_id int not null,
    primary key(evento_id, part_id),
    foreign key(evento_id) references eventos(evento_id),
    foreign key(part_id) references participantes(part_id)
);