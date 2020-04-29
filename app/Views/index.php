<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hyper Events</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Hyper Events</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success br" id="btn-criar" href="<?= base_url() ?>/evento/adicionar">Criar Evento</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" id="btn-login" href="<?= base_url() ?>/usuario/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white">
        <div class="container text-center">
            <h1>Bem Vindo ao Hyper Events</h1>
            <p class="lead">Sistema de Gerênciamento de Eventos Científicos</p>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Hyper Events</h2>
                    <p class="lead">Com o Hyper Events gerênciar o seu evento ficou bem mais simples.</p>
                    <ul>
                        <li>Crie um envento.</li>
                        <li>Gerêncie os seus inscritos.</li>
                        <li>Exporte frequência com apenas um clique.</li>
                        <li>Acompanhe as informções do seu evento em tempo real.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="services" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Services we offer</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; <span id="ano_atual">2020</span> | Todos os direitos reservados</p>
            <p class="m-0 text-center text-white">&lt;/&gt; por <a href="https://kastrowalker.github.io" target="_blank">@kastrowalker</a>.</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="dist/js/scrolling-nav.js"></script>

</body>

</html>