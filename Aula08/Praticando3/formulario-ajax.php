<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<?php
    $dados = ['nome', 'tel', 'email', 'cpf', 'date', 'cep'];
    foreach ($dados as $dado) {
        if (isset($_COOKIE[$dado])) {
            ${$dado} = $_COOKIE[$dado];
        } else {
            ${$dado} = '';
        }
    }
?>
    <div class="container">
        <h1 class="my-3">Formulário de Cadastro</h1>
        <hr>
        <div class="row">
            <div class="col-8">
                <form class="row g-3" action="#" method="POST">
                    <div class="col-12">
                        <div class="mb-2">
                            <label for="nome">Nome Completo:</label>
                            <input class="form-control" type="text" name="nome" id="nome" required value="<?php echo $nome; ?>">
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="tel">Telefone:</label>
                        <input class="form-control" type="tel" name="tel" id="tel" placeholder="(DD)XXXXX-XXXX" required value="<?php echo $tel; ?>">
                    </div>
                    <div class="col-md-8 mb-2">
                        <label for="email">E-mail:</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email" required value="<?php echo $email; ?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="cpf">CPF:</label>
                        <input class="form-control" type="text" name="cpf" id="cpf" placeholder="XXX.XXX.XXX-XX" required value="<?php echo $cpf; ?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="date">Data de Nascimento:</label>
                        <input class="form-control" type="date" name="date" id="date" required value="<?php echo $date; ?>">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="cep">CEP:</label>
                        <input class="form-control" type="text" name="cep" id="cep" placeholder="XX.XXX-XXX" required pattern="\d{2}\.\d{3}-\d{3}" title="Digite o CEP no formato XX.XXX-XXX" value="<?php echo $cep; ?>">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="reset" class="btn btn-warning" id="limpar">Limpar</button>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <img src="1484799.png" style="width: 60%;" class="img-fluid mt-4">
                </div>
            </div>
        </div>
    </div>    
    <script>
        $(document).ready(function() {
            $('#nome, #tel, #email, #cpf, #date, #cep').blur(function() {
                var campo = $(this).attr('id');
                var valor = $(this).val();
                $.ajax({
                    url: 'dadosForm.php',
                    type: 'POST',
                    data: {
                        campo: campo, 
                        valor: valor
                    },
                    success: function() {
                        console.log("Dados salvos\n" + campo + " = " + valor); 
                    }
                });
            });
        });
    </script>
</body>
</html>