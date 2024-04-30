<?php
session_start();
if(isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])){
    $_SESSION["erro"] = "Usuário já está autenticado.";
    header("Location: inicio.php");
}
require 'header.php'
?>

<div>
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Autenticação</h1>
    </div>
    <form action="destino-login.php" method="post">
        <div class="row my-3 justify-content-center">
            <div class="col-md-2">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" class="form-control">
            </div>
        </div>
        <div class="row my-3 justify-content-center">
            <div class="col-md-2">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" class="form-control">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </div>
    </form>
</div>

<?php
require 'footer.php'
?>