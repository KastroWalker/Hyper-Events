$(document).ready(function(){
    $('.ministrante').on('click', function(){     
        $("#info_convidado").fadeIn();     
        
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        console.log(data);
        document.getElementById("nome_convidado").innerHTML = data[1]; 
        document.getElementById("desc_convidado").innerHTML = data[2]; 
        document.getElementById("email_convidado").innerHTML = data[3]; 
        document.getElementById("contato_convidado").innerHTML = data[4]; 
    });
    $('.atividade').on('click', function(){
        $("#info_atividade").fadeIn();

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();
//[ "1", "Introdução a python", "Minicurso", "30", "20", "Como programar com python", "2019-12-27", "Laboratorio 01", "08:00:00", "Emilly Horta" ]
        console.log(data);
        document.getElementById("titulo_atividade").innerHTML = data[2];
        document.getElementById("tipo_atividade").innerHTML = data[3];
        document.getElementById("vagas_atividade").innerHTML = data[4];
        document.getElementById("valor_atividade").innerHTML = data[5];
        document.getElementById("desc_atividade").innerHTML = data[6];
        document.getElementById("data_atividade").innerHTML = data[7];
        document.getElementById("local_atividade").innerHTML = data[8];
        document.getElementById("hora_atividade").innerHTML = data[9];
        document.getElementById("nome_convidado").innerHTML = data[10];
    });
    $('.inscreva_btn').on('click', function(){
        $('#confirmmodal').modal('show');
    });
    $('.btn_inscreva_ativ').on('click', function(){
        $('#confirm_ativ_modal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        }).get();

        document.getElementById("atividade_id").value = data[1];
        document.getElementById("titulo_atividade").innerHTML = data[2];
    });
});