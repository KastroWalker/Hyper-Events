/**
  *Script de inserção na Base de dados
  *Dados apenas para testes
  *Criado por Descompila Compilando
  */

use HyperEvents;

-- Inserindo usuários padrões--
insert into usuario (
    idtipo_usuario,
    nome,
    sexo,
    cpf,
    data_nasc,
    usuario,
    senha,
    email,
    contato
  )values(
    "1",
    "Organizador",
    "M",
    "12345678909",
    "2002-04-05",
    "organizador",
    md5("root"),
    "organizador@gmail.com",
    "86999999999"
  );

insert into usuario (
    idtipo_usuario,
    nome,
    sexo,
    cpf,
    data_nasc,
    usuario,
    senha,
    email,
    contato
  )values(
    "2",
    "Participante",
    "M",
    "12345678909",
    "2002-04-05",
    "participante",
    md5("1234"),
    "participante@gmail.com",
    "86999999999"
  );
  
  insert into local_atividade (
	nome_local
  )values(
	"Sala 12"
  );
  
  insert into local_atividade (
	nome_local
  )values(
	"Laboratório 12"
  );

-- Inserindo Eventos --
insert into eventos (
    user_id,
    titulo_evento,
    qtde_vagas_evento,
    descricao,
    url_evento,
    data_inicio,
    data_fim,
    hora_inicio,
    hora_fim,
    email
  )values(
    "1",
    "Festa",
    300,
    "Vai ser massa.",
    "www.Festa",
    "2019-11-10",
    "2019-11-10",
    "07:00",
    "09:00",
    "rian_estudante@.hotmail.com"
  );

insert into eventos (
    user_id,
    titulo_evento,
    qtde_vagas_evento,
    descricao,
    url_evento,
    data_inicio,
    data_fim,
    hora_inicio,
    hora_fim,
    email
  )values(
    "2",
    "Evento de Libras",
    300,
    "Apreder uma outra forma de comunicar-se.",
    "www.Libras",
    "2019-11-09",
    "2019-11-09",
    "09:00",
    "15:00",
    "victorcsa2002@.hotmail.com"
  );

-- Inserindo Convidado  --
insert into convidado(
    idTipoConvidado,
    evento_id,
    nome_convidado,
    descricao,
    email
  )values(
    2,
    2,
    "Marcos",
    "Especializado em áreas sociais.",
    "victorcsa2002.com"
  );

insert into convidado(
    idTipoConvidado,
    evento_id,
    nome_convidado,
    descricao,
    email
  )values(
    1,
    1,
    "Victor",
    "Formado em Ciência da Computação.",
    "rian_estudante.com"
  );

-- Inserindo Atividades --
insert into atividade(
    evento_id,
    idTipoAtividade,
    idConvidado,
    qtde_vagas_atividade,
    valor,
    titulo_atividade,
    descricao,
    data,
    local_id,
    inicio,
    fim
  )values(
    "1",
    "1",
    "2",
    "50",
    "15",
    "Buscando oportunidades.",
    "Proucurando oportunidades no mercado de trabalho.",
    "2019-11-10",
    "1",
    "08:30",
    "09:00"
  );

insert into atividade(
    evento_id,
    idTipoAtividade,
    idConvidado,
    qtde_vagas_atividade,
    valor,
    titulo_atividade,
    descricao,
    data,
    local_id,
    inicio,
    fim
  )values(
    "2",
    "2",
    "1",
    "50",
    "15",
    "Segurança de dados.",
    "Aprenda a garantir a Segurança dos seus dados.",
    "2019-11-09",
    "2",
    "09:30",
    "12:00"
  );
-- Inserindo Inscrições Eventos --

insert into inscricao_evento (
    evento_id,
    user_id,
    data_inscricao_evento,
    hora_inscricao_evento
  )values(
  1, 
  2, 
  "2019-09-25", 
  "00:00");

insert into inscricao_evento (
    evento_id,
    user_id,
    data_inscricao_evento,
    hora_inscricao_evento
  )values(
   2,
   2, 
   "2019-09-26", 
   "00:30");

insert into inscricao_atividade (
    atividade_id,
    matricula,
    data_inscricao_atividade,
    hora_inscricao_atividade
  )values(
   1, 
   2, 
   "2019-09-30", 
   "00:00");

insert into inscricao_atividade (
    atividade_id,
    matricula,
    data_inscricao_atividade,
    hora_inscricao_atividade
  )values(
   2, 
   2, 
   "2019-09-30", 
   "00:30");