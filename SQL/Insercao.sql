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

-- Inserindo tipo de atividade padrões--
insert into tipoAtividade (titulo) values ("Palestra");
insert into tipoAtividade (titulo) values ("Minicurso");

-- Inserindo convidados padrões --
insert into tipoConvidado (nome) values ("Ministrante");
insert into tipoConvidado (nome) values ("Palestrante");
