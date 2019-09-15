/**
  *Script de inserção na Base de dados
  *Dados apenas para testes
  *Criado por Descompila Compilando
  */

use HyperEvents;

-- Inserindo tipo de usuarios padrões --
insert into tipoUsuario (nome) values ("Organizador"); 
insert into tipoUsuario (nome) values ("Participante");

-- Inserindo usuários padrões--
insert into usuario (idtipo_usuario, nome, sexo, cpf, data_nasc, usuario, senha, email, contato) values ("1", "Organizador", "M", "12345678909", "2002-04-05", "organizador", md5("root"), "organizador@gmail.com", "86999999999");
insert into usuario (idtipo_usuario, nome, sexo, cpf, data_nasc, usuario, senha, email, contato) values ("2", "Participante", "M", "12345678909", "2002-04-05", "participante", md5("1234"), "participante@gmail.com", "86999999999");

-- Inserindo Eventos --
insert into eventos (user_id, titulo, descricao, url_evento, data_inicio, data_fim, hora_inicio, hora_fim, email) values ("1", "Festa", "Vai ser massa.", "www.Festa", "2019-11-10", "2019-11-10", "07:00", "09:00", "rian_estudante@.hotmail.com");
insert into eventos (user_id, titulo, descricao, url_evento, data_inicio, data_fim, hora_inicio, hora_fim, email) values ("2", "Evento de Libras", "Apreder uma outra forma de comunicar-se.", "www.Libras", "2019-11-09", "2019-11-09", "09:00", "15:00", "rian_estudante@.hotmail.com");

-- Inserindo tipo de atividade padrões--
insert into tipoAtividade (titulo) values ("Palestra");
insert into tipoAtividade (titulo) values ("Minicurso");

-- Inserindo convidados padrões --
insert into tipoConvidado (nome) values ("Ministrante");
insert into tipoConvidado (nome) values ("Palestrante");

-- Inserindo Convidado  --
insert into convidado(idTipoConvidado, nome, descricao, email) values ("2", "Marcos", "Especializado em áreas sociais.", "rian_estudante.com");
insert into convidado(idTipoConvidado, nome, descricao, email) values ("1", "Victor", "Formado em Ciência da Computação.", "rian_estudante.com");

-- Inserindo Atividades --
insert into atividade(evento_id, idTipoAtividade, idConvidado, vagas, valor, nome, descricao, data, local, inicio, fim) values ("1", "1", "2", "50", "15", "Buscando oportunidades.", "Proucurando oportunidades no mercado de trabalho.", "2019-11-10","Auditorio.", "08:30", "09:00");
insert into atividade(evento_id, idTipoAtividade, idConvidado, vagas, valor, nome, descricao, data, local, inicio, fim) values ("2", "2", "1", "50", "15", "Segurança de dados.", "Aprenda a garantir a Segurança dos seus dados.", "2019-11-09","Laboratorio L1.", "09:30", "12:00");