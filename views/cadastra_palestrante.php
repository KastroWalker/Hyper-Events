<?php 
session_start();

$tipo = $_REQUEST['tipo'];
$evento_id = $_REQUEST['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Cadastro de palestrante - Hyper Events - Sistema de Eventos Acadêmicos"/>
    <meta name="keywords" content="Eventos Acadêmicos, Escola, Cadastro no sistema"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/>
    <link rel="canonical" href="https://localhost:8000/home/"/>
    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style_cadastro.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style_padrao.css">
    <link rel="icon" href="../img/icon.png" type="image/x-icon"/>
    <style>
        header, footer, #Manual {
            text-align: center;
        }

    </style>
    <script src="../JS/formata.js"></script>
    <script src="../JS/jquery.js"></script>
    <script src="../JS/valida_dados_palestrante.js"></script>
    <script src="../JS/verSenha.js"></script>
    <script>
        function logout() {
                /**
                  * Função para sair da pagina de cadastro
                  */
                  window.location.href = '../index.php';
              }

              function frm_number_only_exc(){
                /**
                  * Função pada deixar digitar apenas numero
                  */
                  if ( event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40 || event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || ( event.keyCode < 106 && event.keyCode > 95 ) ) { 
                    return true;
                }else{
                    return false;
                }
            }

            $(document).ready(function(){

                $("input.frm_number_only").keydown(function(event) { 

                 if ( frm_number_only_exc() ) { 

                 } else { 
                     if ( event.keyCode < 48 || event.keyCode > 57 ) { 
                         event.preventDefault();  
                     }        
                 } 
             }); 

            });
        </script>
        <title>Cadastro de Palestrante - Hyper Events</title>
    </head>
    <body>
    	<?php
        require_once "header.php";
        ?>
        <main>
            <section id="cadastro">
                <form method="POST" action="tabelaDeMinecurso.html" name="form_cadastro_palestrante" onsubmit="return valida_dados_palestrante();">
                    <h2>Cadastro de Palestrante</h2>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label for="nome" id="campo_nome">Nome: *</label>
                            <input type="text" name="campo_nome" id="nome" class="form-control" placeholder="Digite seu nome..." required>
                            <div class="invalid-feedback">Nome inválido!</div>
                        </div>
                        <div class="col-md-4">
                            <label for="data_nasc">Data de Nascimento: *</label>
                            <input type="date" name="campo_data_nasc" id="data_nasc" class="form-control" required>
                            <div class="invalid-feedback" id="data_invalida">Data inválida!</div>
                        </div>
                        <div class="col-md-4">
                            <label for="cpf">CPF:*</label>
                            <input type="text" name="campo_cpf" id="cpf" required onkeypress="formata_mascara(this, '###.###.###-##', event)" minlength="14" maxlength="14" class="frm_number_only form-control" placeholder="xxx.xxx.xxx-xx">
                            <div class="invalid-feedback">CPF inválido!</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label for="email">E-mail: *</label>
                            <input type="email" name="campo_email" id="email" class="form-control" placeholder="Ex: email@host.com" required>
                            <div class="invalid-feedback">E-mail inválido!</div>
                        </div>
                        <div class="col-md-4">
                            <label for="telefone">Tel. Contato: </label>
                            <input type="tel" name="campo_telefone" id="telefone" onkeypress="formata_mascara(this, '## #####-####', event)" minlength="13" maxlength="13" class="frm_number_only form-control" placeholder="(xx) xxxxx-xxxx" required>
                            <div class="invalid-feedback">Número invalido</div>
                        </div>
                        <div class="col-md-4">
                            <label for="campo_sexo">Sexo: *</label>
                            <select class="form-control" id="campo_sexo" name="campo_sexo">
                              <option value="padrao" selected>Sexo...</option>
                              <option value="M">Masculino</option>
                              <option value="F">Feminino</option>
                          </select>
                          <div class="invalid-feedback">Escolha um valor!</div>
                      </div>
                  </div>
                  <p class="alert alert-warning" style="text-align: center;"><strong>Atenção: </strong>Todos os campos que possuem '*' são obrigatorios.</p>
                  <button type="submit" class="btn btn-success">Cadastrar</button>
                  <button type="reset" class="btn btn-primary">Limpar</button>
                  <a href="cadastra_atividade.php?tipo=<?php echo $tipo?>&id=<?php echo $evento_id?>" id="btn_voltar" name="btn_voltar" class="btn btn-info">Voltar</a>    
              </form>
          </section> 
          <?php
          require_once 'footer.php';
          ?>      
      </body>
      </html>