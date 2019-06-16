create database	HyperEvents;

use HyperEvents;

create table organizadores(
	org_id int not null auto_increment,
	nome varchar(200) not null,
	data_nasc date not null,
	idade int not null check(idade => 16),
	sexo char(1) not null,
	cpf varchar(11) not null,
	usuario varchar(100) not null,
	senha varchar(32) not null,
	email varchar(100) not null,
	contato varchar(12),
	primary	key(org_id)
);

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

create table material(
	material_id int not null auto_increment,
	evento_id int not null,
	nome varchar(30) not null,
	descricao_mat varchar(500) not null,
	qnt_material int not null,
	primary key (material_id),
	foreign key (evento_id) references eventos(evento_id)
);

create table palestrante(
    palestrante_id int not null auto_increment,
	nome varchar(200) not null,
	cpf varchar(11) not null,
	sexo char(1) not null,
	descricao varchar(500),
	primary key(palestrante_id)
);

create table palestra(
	palestra_id int not null auto_increment,
	palestrante_id int not null,
	evento_id int not null,
	nome varchar(20) not null,
	descricao varchar(200) not null; 
	data_inicio date not null,
	data_fim date not null,
	local varchar(30) not null,
	inicio time not null, 
	fim time not null,
	primary key(palestra_id),
	foreign key(evento_id) references eventos(evento_id),
	foreign key(palestrante_id) references palestrante(palestrante_id)
);

create table ministrantes(
	ministrante_id int not null auto_increment,
	nome varchar(200) not null,
	cpf varchar(11) not null,
	sexo char(1) not null,
	descricao varchar(500) , 
	primary key(ministrante_id)
);


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

create table eventos(
	evento_id int not null auto_increment,
	org_id int not null,
	nome varchar(200) not null,
	descricao varchar(500) not null,
	hora_inicio time not null,
	data_inicio date not null,
	data_fim date not null,
	minicurso_id int,
	palestra_id int,
	material_id int,
	url_evento varchar(200),
	primary key(evento_id),
	foreign key(org_id) references organizadores(org_id),
	foreign key(material_id) references material(material_id),
	foreign key(palestra_id) references palestra(palestra_id),
	foreign key(minicurso_id) references minicursos(minicurso_id)
);