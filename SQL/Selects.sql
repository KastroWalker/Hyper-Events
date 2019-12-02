-- Listando detalhes das atividades --
select atividade.*, tipoAtividade.tipo_atividade, convidado.nome_convidado, local_atividade.nome_local
from atividade inner join tipoAtividade on (atividade.idTipoAtividade = tipoAtividade.idTipoAtividade)
inner join convidado on (convidado.idConvidado = atividade.idConvidado)
inner join local_atividade on (local_atividade.local_id = atividade.local_id)
inner join eventos on (eventos.evento_id = atividade.evento_id) and eventos.evento_id = 1 and atividade.atividade_id = 1;

-- Listando detalhe dos convidados -- 
select convidado.nome_convidado, convidado.idConvidado, tipoConvidado.tipo_convidado, eventos.evento_id
from convidado inner join tipoConvidado on (convidado.idTipoConvidado = tipoConvidado.idTipoConvidado)
inner join eventos on (eventos.evento_id = convidado.evento_id) and eventos.evento_id = 1;

-- Listando o nome do evento e o nome do usuário de inscrição evento --
select usuario.nome, eventos.titulo_evento, inscricao_evento.*
from inscricao_evento inner join eventos on (inscricao_evento.evento_id = eventos.evento_id)
inner join usuario on (inscricao_evento.user_id = usuario.user_id) and eventos.evento_id = 1;