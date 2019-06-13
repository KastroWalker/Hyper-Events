create database	HyperEvents;

use HyperEvents;



create table organizadores(
	org_id int not null auto_increment,
	nome varchar(200) not null,
	sexo char(1) not null,
	cpf varchar(11) not null,
	email varchar(60) not null,
	senha varchar(32) not null,
	contato varchar(11),
	primary	key(org_id)
);

insert into organizadores (nome, sexo, cpf, email, senha, contato) values ('organizador' 'M', '12345678901', 'root2002@gmail.com', 'organizador', "(86) 9987656", md5('root'));




create table participantes(
	part_id int not null auto_increment,
	nome varchar(200) not null,
	sexo char(1) not null,
	cpf varchar(11) not null,
	email varchar(60) not null,
	senha varchar(20) not null,
	contato varchar(11),
	primary key(part_id)
);

create table material(
	id_material int not null auto_increment,
	nome varchar(30) not null,
	descricao_mat(500) not null,
	evento int,
	primary key (id_material),
	foreign key (evento) references eventos(evento_id)
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
id_palestra int not null auto_increment,
nome varchar(20) not null,
local varchar(30) not null,
inicio time not null, 
fim time not null, 
palestrante_id not null,
primary key(id_palestra),
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



-- Criando a tabela de minicursos --
create table minicursos(
	minicurso_id int not null auto_increment,
	ministrante_id int not null,
	nome varchar(200) not null,
	descricao varchar(500), 
	inicio time not null, 
	fim time not null, 
	primary key(minicurso_id),
	foreign key(ministrante_id) references ministrantes(ministrante_id)
);




create table eventos(
	evento_id int not null auto_increment,
	minicurso_id int,
	org_id int not null,
	id_palestra int,
	id_material int not null,
	nome varchar(200) not null,
	descricao varchar(500),
	hora_inicio time not null,
	data_inicio date not null,
	data_fim date not null,
	url_evento varchar(200),
	primary key(evento_id),
	foreign key(org_id) references organizadores(org_id)
	foreign key(id_material) references material(id_material)
	foreign key(id_palestra) references palestra(id_palestra)
	foreign key(minicurso_id) references minicursos(minicurso_id)

);












