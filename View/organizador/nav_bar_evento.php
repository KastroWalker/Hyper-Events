<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../../area_org.php">Hyper Events</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../informacoes_evento.php?id=<?php echo $id; ?>">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lista_atividades.php">Atividades</a>
            </li>  
            <li>
                <a class="nav-link" href="lista_convidados.php">Convidados</a>
            </li>
            <li>
                <a class="nav-link" href="lista_locais.php">Locais</a>
            </li>
        </ul>
    </div>
    <form class="form-inline my-2 my-lg-0">
        <a href="../Listar/lista_eventos.php" class="btn btn-info">Voltar</a>
    </form>
</nav>