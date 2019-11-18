/**
  *Banco de dados HyperEvents
  *Criado por Descompila Compilando
  */
-- Criando a base de dados --
create database HyperEvents;
  use HyperEvents;

-- Dando o privilegio para o usuário padrão --
-- grant all privileges on HyperEvents.* to 'matue' @'%'; --

-- Criando tabela de tipos de usuário --
create table tipoUsuario(
  idtipo_usuario int not null auto_increment,
  nome varchar(60) not null,
  primary key(idtipo_usuario)
);

-- Inserindo tipo de usuarios padrões --
insert into tipoUsuario (nome) values("Organizador");
insert into tipoUsuario (nome) values("Participante");

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
  foreign key (idtipo_usuario) references tipoUsuario (idtipo_usuario) on delete cascade
  );

-- Criando tabela de eventos --
create table eventos(
  evento_id int not null auto_increment,
  user_id int not null,
  titulo_evento varchar(200) not null,
  descricao varchar(500) not null,
  qtde_vagas_evento int not null,
  url_evento varchar(200) default 'Não possui site',
  data_inicio date not null,
  data_fim date not null,
  hora_inicio time not null,
  hora_fim time not null,
  email varchar(100) not null,
  primary key(evento_id),
  foreign key(user_id) references usuario(user_id) on delete cascade
  );

  -- Criando tabela do local da atividade --
create table local_atividade(
  local_id int not null auto_increment,
  evento_id int not null,
  nome_local varchar(100) not null,
  primary key (local_id),
  foreign key (evento_id) references eventos (evento_id) on delete cascade
);

-- Criando tabela de tipos de atividade --
create table tipoAtividade (
  idTipoAtividade int not null auto_increment,
  tipo_atividade varchar(100) not null,
  primary key(idTipoAtividade)
  );

-- Inserindo tipo de atividade padrões--
insert into tipoAtividade (tipo_atividade) values ("Palestra");
insert into tipoAtividade (tipo_atividade) values ("Minicurso");

-- Criando tabela de tipo convidado --
create table tipoConvidado (
  idTipoConvidado int not null auto_increment,
  tipo_convidado varchar (60) not null,
  primary key (idTipoConvidado)
  );

-- Inserindo convidados padrões --
insert into tipoConvidado (tipo_convidado) values ("Ministrante");
insert into tipoConvidado (tipo_convidado) values ("Palestrante");

-- Criando tabela para convidado --
create table convidado(
  idConvidado int not null auto_increment,
  idTipoConvidado int not null,
  evento_id int not null,
  nome_convidado varchar(100) not null,
  descricao varchar(250),
  email varchar(60),
  contato VARCHAR (11),
  primary key(idConvidado),
  foreign key (idTipoConvidado) references tipoConvidado (idTipoConvidado)on delete cascade,
  foreign key (evento_id) references eventos (evento_id)on delete cascade
  );

-- Criando a tabela de atividades --
create table atividade(
  atividade_id int not null auto_increment,
  evento_id int not null,
  idTipoAtividade int not null,
  idConvidado int,
  qtde_vagas_atividade int,
  valor float,
  titulo_atividade varchar(150) not null,
  descricao varchar(500) not null,
  data date not null,
  local_id int not null,
  inicio time not null,
  fim time not null,
  primary key(atividade_id),
  foreign key(local_id) references local_atividade(local_id)on delete cascade,
  foreign key(evento_id) references eventos(evento_id)on delete cascade,
  foreign key(idTipoAtividade) references tipoAtividade(idTipoAtividade)on delete cascade,
  foreign key(idConvidado) references convidado(idConvidado)on delete cascade
  );

-- Criando a tabela de inscrições em eventos --
create table inscricao_evento (
  matricula int not null auto_increment,
  evento_id int not null,
  user_id int not null,
  data_inscricao_evento Date not null,
  hora_inscricao_evento Time not null,
  primary key (matricula),
  foreign key (user_id) references usuario (user_id)on delete cascade,
  foreign key (evento_id) references eventos (evento_id)on delete cascade
  );

-- Criando tabela de inscrição em atividade --
create table inscricao_atividade (
  atividade_id int not null,
  matricula int not null,
  data_inscricao_atividade Date not null,
  hora_inscricao_atividade Time not null,
  primary key (atividade_id, matricula),
  foreign key (atividade_id) references atividade (atividade_id)on delete cascade,
  foreign key (matricula) references inscricao_evento (matricula)on delete cascade
  );