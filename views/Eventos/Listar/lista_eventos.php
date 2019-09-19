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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Victor Castro">
        <meta name="description" content="Organizador pode visualizar seus eventos já cadastrados">
        <link rel="stylesheet" href="../../../CSS/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap-theme.css">
        <link rel="icon" href="../../../img/icon.png" type="image/x-icon"/>
        <style>
            header, footer, #Manual {
                text-align: center;
            }
        </style>
        <style>
            .div_principal {
                width: 80%;
                margin: auto; 
            }

        </style>

        <title>Eventos - Hyper Events</title>
        <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    </head>
    <body>
        <?php 
            # Importa o cabeçalho e a nav bar padrão
        require_once '../../header_eventos.php';
        ?>
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
                <div class="alert alert-success">
                    <p>Evento Excluido com Sucesso!</p>
                </div>
                <?php 
            }
            unset($_SESSION['sucesso_excluir']);
            if (isset($_SESSION['erro_excluir'])) {
                ?>
                <div class="alert alert-danger">
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
    </body>
    </html>

    <?php

}else{
    header('Location: ../index.php');
}
?>