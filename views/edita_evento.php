<?php 
    include '../Controls/conexao.php';

    $id = $_REQUEST['id'];
    #echo "$id";

    $sql = "select * from eventos where evento_id = $id";

    $result = mysqli_query($conexao, $sql);

    if($tlb = mysqli_fetch_array($result)){
        $Titulo = $tlb['titulo'];   
        $Descricao = $tlb['descricao'];
        $hora_inicio = $tlb['hora_inicio'];
        $data_inicio = $tlb['data_inicio'];
        $data_fim = $tlb['data_fim'];
        $email = $tlb['email'];
        $url_evento = $tlb['url_evento'];

        #echo "$hora_inicio";

        mysqli_error($conexao);
    } else {
        echo "Registro não encontrado";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Victor Castro">
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../CSS/style_cadastro_eveto.css">
        <style type="text/css">
            header, footer, #Manual {
                text-align: center;
            }
        </style>
        <script src="../JS/valida_cadastro_evento.js"></script>
        <title>Hyper Events - Editar Evento</title>
    </head>
    <body>
        <?php
            require_once 'header.php';
        ?>
        <main>
            <form method="POST" action="../Controls/gerencia_evento.php?acao=editar" id="form_cadastro">
                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                <h2>Editar Evento</h2>
                <div class="form-group">
                    <label for="titulo">Titulo do Evento: *</label>
                    <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $Titulo; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email de Contato: *</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>" required>
                <div>
                <div class="form-group">
                    <label for="inicio">Inicio do evento: *</label>
                    <input type="date" name="inicio" id="inicio" class="form-control" value="<?php echo $data_inicio; ?>" required>
                </div>
                <div class="form-group">
                    <label for="fim">Fim do Evento: *</label>
                    <input type="date" name="fim" id="fim" class="form-control" value="<?php echo $data_fim; ?>" required>
                </div>
                <div class="form-group">
                    <label for="hora_inicio">Horario de inicio do evento: *</label>
                    <input type="time" name="hora_inicio" class="form-control" id="hora_inicio" value="<?php echo $hora_inicio; ?> " required >
                </div>
                <div class="form-group">
                    <label for="site">Site do Evento: </label>
                    <input type="url" name="site" class="form-control" id="site" value="<?php echo $url_evento; ?> " >
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição do evento</label>
                <textarea name="descricao" class="form-control" id="descricao"><?php echo $Descricao; ?></textarea>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Editar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <a class="btn btn-info" href="lista_eventos.php">Voltar</a>
                <p><strong>Atenção: </strong>Todos os campos que possuem '*' são obrigatorios.</p>
            </form>
        <?php 
            # Importa o rodape padrão
            require_once 'footer.php';
        ?>
    </body>
</html>