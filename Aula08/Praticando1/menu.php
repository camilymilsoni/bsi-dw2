<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<ul class="nav nav-pills">
    <li class="nav-item"><a href="inicio.php" class="nav-link" aria-current="page">Início</a></li>
    <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre</a></li>
    <li class="nav-item"><a href="faq.php" class="nav-link">FAQs</a></li>
    <li class="nav-item"><a href="contato.php" class="nav-link">Contato</a></li>
    <?php
    if(isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])){
        echo '<li class="nav-item"><a href="perfil.php" class="nav-link">Perfil</a></li>';
        echo '<li class="nav-item"><a href="sair.php" class="nav-link text-danger">Sair</a></li>';
    }
    else{
        echo '<li class="nav-item"><a href="login.php" class="nav-link">Entrar</a></li>';
    }
    ?>
</ul>