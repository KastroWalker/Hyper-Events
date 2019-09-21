
select atividade.*, tipoAtividade.titulo, convidado.nome
from atividade inner join tipoAtividade on atividade.idTipoAtividade = tipoAtividade.idTipoAtividade
left outer join convidado on atividade.idConvidado = convidado.idConvidado;


/*
select atividade.*, tipoatividade.tipo_atividade, convidado.nome_convidado
from atividade
inner join eventos on (atividade.evento_id = 1 and eventos.evento_id = 1)
inner join tipoatividade on (atividade.idTipoAtividade = tipoatividade.idTipoAtividade and tipoatividade.idTipoAtividade = atividade.idTipoAtividade)
left outer join convidado on (atividade.idConvidado = convidado.idConvidado and convidado.idConvidado = atividade.idConvidado)
*/

/*
select atividade.*, tipoatividade.tipo_atividade, convidado.nome_convidado
from atividade 
       inner join inner join tipoatividade 
         on (atividade.idTipoAtividade = tipoatividade.idTipoAtividade) and 
       inner join convidado on (atividade.idConvidado = convidado.idConvidado) and
       inner join(evento) on (atividade.evento_id = evento.evento_id)
*/

/*
select atividade.*, tipoAtividade.tipo_atividade, convidado.nome_convidado
from atividade    
       inner join tipoAtividade on (atividade.idTipoAtividade = tipoAtividade.idTipoAtividade)  
       inner join convidado on (atividade.idConvidado = convidado.idConvidado) 
       inner join eventos on (atividade.evento_id = eventos.evento_id) and eventos.evento_id = 1
left outer join convidado on (atividade.idConvidado = convidado.idConvidado and convidado.idConvidado = atividade.idConvidado);
*/