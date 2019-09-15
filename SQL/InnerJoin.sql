select atividade.*, tipoAtividade.titulo, convidado.nome
from atividade inner join tipoAtividade on atividade.idTipoAtividade = tipoAtividade.idTipoAtividade
left outer join convidado on atividade.idConvidado = convidado.idConvidado;