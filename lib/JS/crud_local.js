$(document).ready(function(){
	$('.deletebtn').on('click', function(){

		$('#deletemodal').modal('show');
		
		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function(){
			return $(this).text();
		}).get();

		console.log(data);

		$("#cdelete_id").val(data[1]);
		$("#cevento").val(data[2]);

	});
});

$(document).ready(function(){
	$('.editbtn').on('click', function(){
		$('#editmodal').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function(){
			return $(this).text();
		}).get();

		console.log(data);

		$("#cevento_id").val(data[1]);
        $("#ctitulo").val(data[2]);
        $("#cdescricao").val(data[3]);
        $("#chora_inicio").val(data[4]);
        $("#cinicio").val(data[5]);
	    $("#cfim").val(data[6]);
        $("#chora_fim").val(data[7]);
        $("#cemail").val(data[8]);
        $("#csite").val(data[9]);
	});
});

$(document).ready(function(){
	$('.infobtn').on('click', function(){
		$('#infomodal').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function(){
			return $(this).text();
		}).get();

		console.log(data);
		
		document.getElementById('titulo').innerHTML = data[2];
		document.getElementById('descricao').innerHTML = data[3];
		document.getElementById('time_inicio').innerHTML = data[4];
		document.getElementById('data_inicio').innerHTML = data[5];
		document.getElementById('time_fim').innerHTML = data[6];
		document.getElementById('data_fim').innerHTML = data[7];
		document.getElementById('email_org').innerHTML = data[8];
		document.getElementById('site').innerHTML = data[9];
		document.getElementById('btnmaisinfo').href = "../informacoes_evento.php?id="+data[1];
	});
});