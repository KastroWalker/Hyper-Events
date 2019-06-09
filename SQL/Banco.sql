-- Banco de dados HyperEvents --
-- Criado por Kauan portela e Victor Castro --
-- Criando a base de dados --
create database	HyperEvents;

use HyperEvents;
-- Criando a tabela de participantes --
/*create table participantes(
	part_id int not null auto_increment,
	nome varchar(200) not null,
	datanasc date not null,
	sexo char(1) not null,
	cpf varchar(11) not null,
	email varchar(60) not null,
	usuario varchar(200) not null,
	senha varchar(20) not null,
	primary key(part_id)
);*/

-- Criando a tabela organizadores --
create table organizadores(
	org_id int not null auto_increment,
	nome varchar(200) not null,
	datanasc date not null,
	sexo char(1) not null,
	cpf varchar(11) not null,
	email varchar(60) not null,
	usuario varchar(200) not null,
	senha varchar(32) not null,
	primary	key(org_id)
);

-- Criando o organizador padrão para teste --
insert into organizadores (nome, datanasc, sexo, cpf, email, usuario, senha) values ('organizador', '2000-02-02', 'M', '12345678901', 'root2002@gmail.com', 'organizador', md5('root'));

-- Criando a tabela de palestrantes --
/*create table palestrantes(
	palestrante_id int not null auto_increment,
	nome varchar(200) not null,
	cpf varchar(11) not null,
	sexo char(1) not null,
	descricao varchar(500) not null, -- Aqui é pra falar de onde ele veio e as possíveis áreas de atuação
	primary key(palestrante_id)
);

-- Criando a tabela de ministrantes --
create table ministrantes(
	ministrante_id int not null auto_increment,
	nome varchar(200) not null,
	cpf varchar(11) not null,
	sexo char(1) not null,
	descricao varchar(500) not null, -- Mesma coisa do palestrante
	primary key(ministrante_id)
);

-- Criando a tabela de contatos --
create table contatos(
	contato_id int not null auto_increment,
	nome varchar(200) not null,
	email varchar(200),
	telefone varchar(10),
	primary key(contato_id)
);

-- Criando a tabela de materiais --
create table materiais(
	material_id int not null auto_increment,
	nome varchar(200) not null,
	tipo varchar(200) not null,
	quantidade int not null,
	primary key(material_id)
);

-- Criando a tabela de sócios --
create table socios(
	socio_id int not null auto_increment,
	nome varchar(200) not null,
	informacoes varchar(500) not null, -- Eu fiquei sem ideia aqui kk
	primary key(socio_id)
);

-- Criando a tabela de minicursos --
create table minicursos(
	minicurso_id int not null auto_increment,
	ministrante_id int not null,
	titulo varchar(200) not null,
	descricao varchar(500), -- Resumo do que irá ocorrer
	inicio time not null, -- Horário de início
	fim time not null, -- Horário que acabará
	data date not null, -- Dia em que será ministrado
	primary key(minicurso_id),
	foreign key(ministrante_id) references ministrantes(ministrante_id)
);

-- Criando a tabela de palestras --
create table palestras(
	palestra_id int not null auto_increment,
	palestrante_id int not null,
	titulo varchar(200) not null,
	descricao varchar(500), -- Mesma coisa de minicursos
	inicio time not null, -- Mesma coisa de minicursos
	fim time not null, -- Mesma coisa de minicursos
	data date not null, -- Mesma coisa de minicursos
	primary key(palestra_id),
	foreign key(palestrante_id) references palestrantes(palestrante_id)
);

-- Criando tabela de locais --
create table locais(
	local_id int not null auto_increment,
	nome varchar(200) not null,
	endereco varchar(200) not null,
	cep varchar(8) not null,
	descricao varchar(500), -- Descrição do local
	primary key(local_id)
);

-- Criando a tabela de eventos --
create table eventos(
	evento_id int not null auto_increment,
	-- part_id int not null, --
	org_id int not null,
	palestrante_id int,
	ministrante_id int,
	palestra_id int,
	idMinicurso int,
	local_id int,
	contato_id int,
	socio_id int,
	material_id int,
	titulo varchar(200) not null,
	descricao varchar(500) not null,
	inicio time not null,
	fim time not null,
	data_inicio date not null,
	data_fim date not null,
	primary key(evento_id),
	-- foreign key(part_id) references participantes(part_id), --
	foreign key(org_id) references organizadores(org_id),
	foreign key(palestrante_id) references palestrantes(palestrante_id),
	foreign key(ministrante_id) references ministrantes(ministrante_id),
	foreign key(palestra_id) references palestras(palestrante_id),
	foreign key(local_id) references locais(local_id),
	foreign key(contato_id) references contatos(contato_id),
	foreign key(socio_id) references socios(socio_id),
	foreign key(material_id) references materiais(material_id)
);*/