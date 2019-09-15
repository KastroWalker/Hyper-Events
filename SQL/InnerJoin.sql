select ati.nome, tati.titulo
from tipoatividade as tati inner join atividade as ati
where tati.idTipoAtividade = ati.idTipoAtividade;