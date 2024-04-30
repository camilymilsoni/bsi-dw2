<?php
session_start();
if(isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])){
    $_SESSION["erro"] = "Usuário já está autenticado.";
    header("Location: inicio.php");
    exit; 
}
require 'header.php';

$usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

if ($usuario == "camily") {
    if ($senha == "senha_da_nasa") {
        $_SESSION["usuario"] = $usuario;
        header("Location: inicio.php");
        exit;
    } else {
        unset($_SESSION["usuario"]);
?>
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Autenticação</h1>
        </div>
        <div class="alert alert-danger p-3 mb-3 rounded" role="alert">
            <h4>Falha ao efetuar autenticação</h4>
            <p class="fs-5 ps-5">A senha informada está incorreta.</p>
            <p class="fs-5 ps-5">Verifique as informações e tente novamente.</p>
            <hr>
            <a href="login.php"><p>Clique aqui para voltar</p></a>
        </div>
<?php
    }
} else {
    unset($_SESSION["usuario"]);
?>
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Autenticação</h1>
    </div>
    <div class="alert alert-danger p-3 mb-3 rounded" role="alert">
        <h4>Falha ao efetuar autenticação</h4>
        <p class="fs-5 ps-5">O usuário não foi encontrado.</p>
        <p class="fs-5 ps-5">Verifique as informações e tente novamente.</p>
        <hr>
        <a href="login.php"><p>Clique aqui para voltar</p></a>
    </div>
<?php
}

require 'footer.php';
?>