<!-- Tela que mostra os eventos do organizador -->
<?php
    # Iniciando a sessção
    session_start();
    # Verifica se o usuário está logado
    if(isset($_SESSION['id'])){
        #Verifica se o usuario está logado
        include '../Controls/verifica_login.php';
        $site = ' ';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Victor Castro">
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
        <style type="text/css">
            header, footer, #Manual {
                text-align: center;
            }
        </style>
        <title>Eventos - Hyper Events</title>
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
    </head>
    <body>
        <?php 
            # Importa o cabeçalho e a nav bar padrão
            require_once 'header.php';
            require_once 'nav_bar.php';
        ?>
        <div class="text-right mx-auto" style="margin: 20px">
            <a href="cadastro_de_evento.php" class="btn btn-primary btn-lg text-right"> Cadastrar Evento </a>
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
            require_once '../Controls/lista_eventos.php';
            require_once 'footer.php';
        ?>    
    </body>
</html>

<?php

    }else{
        header('Location: ../index.php');
    }
?>