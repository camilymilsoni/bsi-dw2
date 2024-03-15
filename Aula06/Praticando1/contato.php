<?php
require 'header.php'
?>

<div>
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para Contato</h1>
    </div>
    <form action="pagDestino.php" method="post">
            <div class="row my-4 justify-content-center">
                <div class="col-md-4">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
            </div>
            <div class="row my-3 justify-content-center">
                <div class="col-md-8">
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" class="form-control" rows="3"></textarea>
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