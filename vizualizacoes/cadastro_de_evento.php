<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <?php 
            require_once 'SEO.php';
        ?>
        <title>Cadastrar Evento - Hyper-Events</title>
    </head>
    <body>
        <?php 
            require_once 'header.php';
        ?>
        <main>
            <section id="Cadastrar Evento">
                <h2>Cadastrar Evento</h2>
                <form method="POST" action="../Negocios/gerencia_evento.php?acao=cadastrar">
                    <label for="titulo">Titulo do Evento: *</label>
                    <input type="text" name="titulo" id="titulo" required><br/>
                    <label for="email">Email de Contato: *</label>
                    <input type="email" name="email" id="email" required><br/>
                    <label for="inicio">Inicio do evento: *</label>
                    <input type="date" name="inicio" id="inicio" required><br/>
                    <label for="fim">Fim do Evento: *</label>
                    <input type="date" name="fim" id="fim" required><br/>
                    <label for="hora_inicio">Horario de inicio do evento: *</label>
                    <input type="time" name="hora_inicio" id="hora_inicio"><br/>
                    <label for="site">Site do Evento: </label>
                    <input type="url" name="site" id="site"><br/>
                    <label for="descricao">Descrição do evento</label>
                    <textarea name="descricao" id="descricao"></textarea>
                    <button type="submit">Cadastrar</button>
                    <button type="reset">Limpar</button>
                    <p><strong>Atenção: </strong>Todos os campos que possuem '*' são obrigatorios.</p>
                </form>
            </section>
        </main>
        <?php 
            require_once 'footer.php';
        ?>
    </body>
</html>