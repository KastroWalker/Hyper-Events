<!-- 
Tela do organizador 
Criado por: Victor Castro
-->

<?php
    session_start();
    include '../Controls/verifica_login.php';
?>

<h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="../Controls/logout.php">Sair</a></h2>