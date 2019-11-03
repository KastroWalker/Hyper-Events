<?php
require_once '../../../Controls/conexao.php';   
session_start();
$id = $_SESSION['id_evento'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - Ver detalhes das atividades que ocorrerão no evento"/>
    <meta name="keywords" content="Visualizar, Atividades, Evento, Detalhes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/> 

    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon"/>

    <title>Atividades do Evento - Hyper Events</title>
</head>
<body>
    <?php 
    require_once '../../header_eventos.php';
    ?>

    <!-- DELETE  -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apagar Convidado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="../../../Controls/CRUD/gerencia_atividade.php?acao=deletar" method="POST">
              <div class="modal-body">
                  <input type="hidden" name="delete_id" id="delete_id">

                    <h4> Você tem certeza que deseja apagar esse convidado? </h4>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Não </button>
                <button type="submit" name="deletedata" class="btn btn-primary"> Sim, deletar </button>
              </div>
          </form>
        </div>
      </div>
    </div>

    <div class="div_principal">
        <?php require_once '../../Menus/nav_bar_evento.php' ?>
        <div class="text-right mx-auto" style="margin: 20px">
            <a href="../Cadastros/cadastra_atividade.php" class="btn btn-primary btn-lg text-right"> Cadastrar Atividade </a>
        </div>
        <?php
        if (isset($_SESSION['sucesso_excluir'])) {
        ?>
            <div class="alert alert-success text-center">
                <p>Evento Excluido com Sucesso!</p>
            </div>
        <?php 
        }
        unset($_SESSION['sucesso_excluir']);
        if (isset($_SESSION['erro_excluir'])) {
        ?>
            <div class="alert alert-danger text-center">
                <p>Erro ao Excluir o Evento!<br>Tente novamente!</p>
            </div>
        <?php 
        }
        unset($_SESSION['erro_exluir']);
        ?>
        <?php
        require_once '../../../Controls/Listar/lista_atividades.php'; 
        require_once '../../footer.php';
        ?>

        <script src="../../../JS/jquery.js"></script>
        <script src="../../../JS/bootstrap/bootstrap.min.js"></script>
        <script src="../../../JS/bootstrap/popper.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.deletebtn').on('click', function(){

                    $('#deletemodal').modal('show');
                    
                    $tr = $(this).closest('tr');

                    var data = $tr.children("td").map(function(){
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $("#delete_id").val(data[1]);
        
                });
            });
        </script>
    </body>
</html>