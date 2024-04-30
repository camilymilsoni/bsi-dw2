<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
if(!isset($_SESSION["usuario"]) || empty($_SESSION["usuario"])){
    $_SESSION["erro"] = "Você está tentando acessar conteúdo restrito.";
    header("Location: inicio.php");
}
require 'header.php';
?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Perfil</h1>
    </div>
    <div>
        <p>Nome: <strong>Camily Milsoni</strong></p>
        <p>E-mail: <strong>camily.milsoni@aluno.ifsp.edu.br</strong></p>
        <p>Telefone: <strong>(17) 3426-6999</strong></p>
        <p>Endereço: <strong>Rua dos Alfeneiros, n° 4</strong></p>
        <p>Cidade: <strong>Little Whinging</strong></p>
        <p>Estado: <strong>Surrey</strong></p>
    </div>
</div>

<?php
require 'footer.php';
?>