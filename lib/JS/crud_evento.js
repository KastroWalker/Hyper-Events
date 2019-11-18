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
		
		document.getElementById('nome').innerHTML = data[2];
	});
});