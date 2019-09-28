select atividade.*, tipoAtividade.titulo, convidado.nome
from atividade inner join tipoAtividade on atividade.idTipoAtividade = tipoAtividade.idTipoAtividade
left outer join convidado on atividade.idConvidado = convidado.idConvidado;

select convidado.nome_convidado, convidado.idConvidado, tipoConvidado.tipo_convidado, eventos.evento_id
from convidado inner join tipoConvidado on (convidado.idTipoConvidado = tipoConvidado.idTipoConvidado)
inner join eventos on (eventos.evento_id = convidado.evento_id) and eventos.evento_id = 1;