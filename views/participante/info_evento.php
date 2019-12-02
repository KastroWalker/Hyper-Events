<?php 
    include '../../Controls/conexao.php';
    session_start();
    $id = $_REQUEST['id'];
    $user_id = $_SESSION['id'];
    #echo "$user_id";
    #echo $id;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - O participante pode ver os eventos disponíveis e se cadastrar no qual lhe agradar e estiver disponível">
    <meta name="keywords" content="Eventos Acadêmicos, Lista de Eventos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Kauan Portela"/> 

    <link rel="stylesheet" type="text/css" href="../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/style_padrao.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/style_info_evento.css">
    <link rel="icon" href="../img/icon.png" type="image/x-icon"/>
    
    <title>Informação Evento</title>
</head>
<body>
    <?php 
        include '../header_cadastro.php';
        include "../../Controls/paticipante/info_evento.php";
    ?>

    <!-- DELETE  -->
    <div class="modal fade" id="confirmmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar Inscrição</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../Controls/CRUD/gerencia_inscricao_evento.php?acao=cadastrar" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    <input type="hidden" name="evento_id" value="<?php echo $id; ?>">
                    <h4>Confirme a inscrição!</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar! </button>
                    <button type="submit" name="deletedata" class="btn btn-primary"> Confirmar! </button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <div id="div_info">
        <h2>
            <?php echo $titulo; ?>
        </h2>
        
        <button class="btn btn-info inscreva_btn">Inscrever-se no evento</button>

        <div id="desc_evento" class="info">
            <h3>Descrição</h3>
            <div>
                <p>
                    <?php echo $descricao; ?>
                </p>
            </div>
        </div>
 
        <div id="Atividades" class="info">
            <h3>Atividades</h3>
            <table class="table table-bordered table-hover" style="width: 50%; margin: auto;">
                <th>#</th>
                <th>Titulo</th>
                <?php lista_atividades($conexao, $id); ?>
            </table>
            <div id='info_atividade'>
                <h3>Informações Atividade</h3>
                <table class='table table-bordered table-hover'>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Titulo: </dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="titulo_atividade"></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Descrição: </dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="desc_atividade"></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Tipo: </dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="tipo_atividade"></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Ministrate</dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="nome_convidado"></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Vagas</dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="vagas_atividade"></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Valor</dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="valor_atividade"></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Data</dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="data_atividade"></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Local</dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="local_atividade"></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Horário</dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="hora_atividade"></dd>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
 
        <div id="Convidados" class="info">
            <h3>Convidados</h3>
            <table class="table table-bordered table-hover " style="width: 50%; margin: auto;">
                <th>#</th>
                <th>Nome</th>
                <?php lista_convidados($conexao, $id); ?>            
            </table>        
            <div id='info_convidado'>
                <h3>Informações Convidado</h3>
                <table class='table table-bordered table-hover'>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Nome: </dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="nome_convidado"></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Descrição: </dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="desc_convidado"></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Email: </dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="email_convidado"></dd>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <dt class='col-sm-3'>Contato: </dt>
                        </td>
                        <td>
                            <dd class='col-sm-9' id="contato_convidado"></dd>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
 
        <div id="info_evento" class="info">
            <h3>Contato: </h3>
            <p>
                <?php echo $email; ?>
            </p>
        </div>
    </div>
    <?
        include '../footer.php';
    ?>
    <script src="../../JS/jquery.js"></script>
    <script src="../../JS/bootstrap/bootstrap.min.js"></script>
    <script src="../../JS/bootstrap/popper.min.js"></script>
    <script src="../../JS/informacoes_do_evento.js"></script>
</body>
</html>