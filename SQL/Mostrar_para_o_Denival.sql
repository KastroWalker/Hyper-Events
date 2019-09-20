select atividade.*, tipoatividade.tipo_atividade, convidado.nome_convidado
from atividade
inner join eventos on (atividade.evento_id = 1 and eventos.evento_id = 1)
inner join tipoatividade on (atividade.idTipoAtividade = tipoatividade.idTipoAtividade and tipoatividade.idTipoAtividade = atividade.idTipoAtividade)
left outer join convidado on (atividade.idConvidado = convidado.idConvidado and convidado.idConvidado = atividade.idConvidado);