<!-- Pagina de Cadastro da Hyper Events -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Cadastro - Hyper Events - Sistema de Eventos Acadêmicos"/>
    <meta name="keywords" content="Eventos Acadêmicos, Escola, Cadastro no sistema"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/>
    <link rel="canonical" href="https://localhost:8000/home/"/>
    <link rel="stylesheet" type="text/css" href="../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/bootstrap/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/style_cadastro.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/style_padrao.css">
    <link rel="icon" href="../../img/icon.png" type="image/x-icon"/>
    <style>
        header, footer, #Manual {
            text-align: center;
        }
    </style>
    <script src="../../JS/formata.js"></script>
    <script src="../../JS/jquery.js"></script>
    <script src="../../JS/valida_dados.js"></script>
    <script src="../../JS/verSenha.js"></script>
    <script>
        function logout() {
                /**
                  * Função para sair da pagina de cadastro
                  */
                  window.location.href = '../login.php';
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
        <title>Cadastro de usuário - Hyper Events</title>
    </head>
    <body>
        <?php
        # Iniciando a sessão
        session_start();
        # Importando cabeçalho padrão
        ?>
        <header>
            <h1 style="height: 100px"><img src="../../img/logo.png" alt="logo" style="height: 125px;">Sistema de Eventos Academicos</h1>
            <hr/>
            <script src="../../JS/jquery.js"></script>
        </header>
        <section id="cadastro">
            <?php
            if(isset($_SESSION['status_cadastro'])){
                ?>
                <div class="alert alert-success text-center">
                    Usuário Cadastrado com Sucesso!<br/>
                    Clique <a href="../login.php"><strong>aqui</strong></a> para fazer o login!
                </div>
                <?php
            }
            unset($_SESSION['status_cadastro']);
            if (isset($_SESSION['Não_foi_cadastrado'])) {
                ?>
                <div class="alert alert-danger text-center">
                    Erro ao cadastrar o usuário!
                </div>
                <?php
            }
            unset($_SESSION['Não_foi_cadastrado']);
            if(isset($_SESSION['usuario_existe'])){
                ?>
                <div class="alert alert-danger text-center">
                    Usuário já cadastrado!
                </div>
                <?php
            }
            unset($_SESSION['usuario_existe']);
                    #../Controls/cadastrar_organizador.php
            ?>
            <form method="POST" action="../../Controls/Cadastros/cadastrar_usuario.php" name="form_cadastro" onsubmit="return valida_dados();">
                <h2>Cadastro de Usuário</h2>
                <div class="form-row">
                    <div class="col-md-8">
                        <label for="nome" id="campo_nome">Nome: *</label>
                        <input type="text" name="campo_nome" id="nome" class="form-control" placeholder="Digite seu nome..." required>
                        <div class="invalid-feedback">Nome inválido!</div>
                    </div>
                    <div class="col-md-4">
                        <label for="data_nasc">Data de Nascimento: *</label>
                        <input type="date" name="campo_data_nasc" id="data_nasc" class="form-control" required>
                        <div class="invalid-feedback" id="data_invalida">Data inválida!</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="email">E-mail: *</label>
                        <input type="email" name="campo_email" id="email" class="form-control" placeholder="Ex: email@host.com" required>
                        <div class="invalid-feedback">E-mail inválido!</div>
                    </div>
                    <div class="col-md-4">
                        <label for="conf_email">Confirmar E-mail: *</label>
                        <input type="email" name="campo_conf_email" id="conf_email" class="form-control" placeholder="Confirme o seu e-mail" required>
                        <div class="invalid-feedback">O e-mail não correpondem!</div>
                    </div>
                    <div class="col-md-4">
                        <label for="telefone">Tel. Contato: </label>
                        <input type="tel" name="campo_telefone" id="telefone" onkeypress="formata_mascara(this, '## #####-####', event)" minlength="13" maxlength="13" class="frm_number_only form-control" placeholder="(xx) xxxxx-xxxx" required>
                        <div class="invalid-feedback">Número invalido</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2">
                        <label for="cpf">CPF:*</label>
                        <input type="text" name="campo_cpf" id="cpf" required onkeypress="formata_mascara(this, '###.###.###-##', event)" minlength="14" maxlength="14" class="frm_number_only form-control" placeholder="xxx.xxx.xxx-xx">
                        <div class="invalid-feedback">CPF inválido!</div>
                    </div>
                    <div class="col-md-3">
                        <label for="campo_sexo">Sexo: *</label>
                        <select class="form-control" id="campo_sexo" name="campo_sexo">
                          <option value="padrao" selected>Sexo...</option>
                          <option value="M">Masculino</option>
                          <option value="F">Feminino</option>
                      </select>
                      <div class="invalid-feedback">Escolha um valor!</div>
                  </div>
                  <div class="col-md-4">
                    <label for="user">Usuário: *</label>
                    <input type="text" name="campo_user" id="user" class="form-control" placeholder="Nome de Usuário" required>
                    <div class="invalid-feedback">Usuário Inválido!</div>
                </div>  
                <div class="col-md-3">
                    <label for="tipo_user">Tipo de usuário: *</label>
                    <select class="form-control" id="tipo_user" name="tipo_user">
                      <option value="padrao" selected>Escolha o tipo de usuário</option>
                      <option value="part">Participante</option>
                      <option value="org">Organizador</option>
                  </select>
                  <div class="invalid-feedback">Escolha um valor!</div>
              </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
                <label for="senha">Senha: *</label>
                <input type="password" name="campo_senha" id="senha" class="form-control" placeholder="Digite sua senha" required>
                <div class="invalid-feedback">Senha invalida!</div>
            </div>
            <div class="col-md-6">
                <label for="conf_senha">Confirmar Senha: *</label>
                <input type="password" name="campo_conf_senha" id="conf_senha" class="form-control" placeholder="Confirme sua senha" required>
                <div class="invalid-feedback">As senhas não correspondem!</div>
            </div>
        </div>
        <p class="alert alert-warning" style="text-align: center;"><strong>Atenção: </strong>Todos os campos que possuem '*' são obrigatorios.</p>
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <button type="reset" class="btn btn-primary">Limpar</button>
        <button class="btn btn-danger" onclick="logout();">Sair</button>    
    </form>
</section> 
<section id="Manual">
    <h2>Está com dificuldade?</h2>
    <a href="manual.php">Acesse aqui o manual</a>
</section> 
<hr/>
<footer>
    <script src="../../JS/bootstrap/bootstrap.min.js"></script>
    <h2>Direitos</h2>
    <p>2019 &copy; Copyright - Todos os direitos reservados | Criado por Descompila Compilando.</p>
</footer>
</body>
</html>