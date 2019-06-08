<!-- 
Tela do organizador 
Criado por Victor Castro
-->

<?php
    session_start();
    include '../Negocios/verifica_login.php';
?>

<h2>Olá organizador, <?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="logout.php">Sair</a></h2>