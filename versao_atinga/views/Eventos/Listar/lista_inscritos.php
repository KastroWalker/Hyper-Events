<?php
include '../../../Controls/conexao.php';   
session_start();
$id = $_SESSION['id_evento'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - Visualizar os locais em que ocorrerão as atividades"/>
    <meta name="keywords" content="Visualizar,, Locais, Atividades, Evento"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/> 

    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon"/>
    
    <title>Locais do Evento - Hyper Events</title>
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
            <h5 class="modal-title" id="exampleModalLabel">Apagar Local Atividade</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="../../../Controls/CRUD/gerencia_local.php?acao=deletar" method="POST">
              <div class="modal-body">
                  <input type="hidden" name="delete_id" id="delete_id">

                    <h4> Você tem certeza que deseja apagar esse local? </h4>

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
            <a href="../Cadastros/cadastra_participante.php" class="btn btn-primary btn-lg text-right"> Cadastrar Participante </a>
        </div>
        <table class="table table-condensed table-striped table-bordered table-hover">
            <th>#</th>
            <th>Nº Matricula</th>
            <th>Nome</th>
        <?php
        require_once '../../../Controls/Listar/lista_inscritos.php'; 
        ?>
        </table>
        <?
        require_once '../../footer.php';
        ?>
    </body>
    <script src="../../../JS/jquery.js"></script>
    <script src="../../../JS/bootstrap/bootstrap.min.js"></script>
    <script src="../../../JS/bootstrap/popper.min.js"></script>
    <script>
        
    </script>
</html>