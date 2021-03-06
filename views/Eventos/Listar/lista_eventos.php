<!-- Tela que mostra os eventos do organizador -->
<?php
    # Iniciando a sessção
session_start();
    # Verifica se o usuário está logado
if(isset($_SESSION['id'])){
        #Verifica se o usuario está logado
    $site = ' ';
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="robots" content="index, follow"/>
        <meta name="description" content="Hyper Events - Visualizar os eventos já cadastrados"/>
        <meta name="keywords" content="Eventos, Detalhes, Visualizar"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="author" content="Victor Castro"/> 

        <link rel="stylesheet" href="../../../CSS/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
        <link rel="icon" href="../../../img/icon.png" type="image/x-icon"/>
        
        <title>Eventos - Hyper Events</title>
    </head>
    <body>
        <?php 
            # Importa o cabeçalho e a nav bar padrão
        require_once '../../header_eventos.php';
        ?>
        <!-- DELETE -->
        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apagar Evento!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="../../../Controls/CRUD/gerencia_evento.php?acao=deletar" method="POST">
                  <div class="modal-body">
                      <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Você tem certeza que deseja apagar esse evento? </h4>

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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="area_org.php">Hyper Events</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../../area_org.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lista_eventos.php">Meus eventos</a>
                        </li>  
                    </ul>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <a href="../../../Controls/logout.php" class="btn btn-danger">Sair</a>      
                </form>
            </nav>
            <div class="text-right mx-auto" style="margin: 20px">
                <a href="../Cadastros/cadastro_de_evento.php" class="btn btn-primary btn-lg text-right"> Cadastrar Evento </a>
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
            if(isset($_SESSION['alterado'])){
                ?>
                <div class="alert alert-success">
                    Alterado com sucesso!
                </div>
                <?php  
            }
            unset($_SESSION['alterado']);
            if(isset($_SESSION['erro_alterar'])){
                ?>
                <div class="alert alert-danger">
                    Erro ao Editar!
                </div>
                <?php  
            }
            unset($_SESSION['erro_alterar']);
            ?>
            <?php
            # Importa a pagina de mostrar os eventos e o rodape
            require_once '../../../Controls/Listar/lista_eventos.php';
            require_once '../../footer.php';
            ?>
        </div>
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

    <?php

}else{
    header('Location: ../index.php');
}
?>