<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-2">
        <h1>Formulário</h1>
        <hr>
        <div class="mx-auto">
            <form action="pagDestino.php" method="post">
                <div class="row mb-3">
                    <label for="titulo" class="col-sm-3 col-form-label text-end">Título da página:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="corpo" class="col-sm-3 col-form-label text-end">Corpo:</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="corpo" name="corpo" required></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="corTexto" class="col-sm-3 col-form-label text-end">Cor texto:</label>
                    <div class="col-sm-6">
                        <input type="color" class="form-control" id="corTexto" name="corTexto" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="urlImg" class="col-sm-3 col-form-label text-end">URL de uma imagem:</label>
                    <div class="col-sm-6">
                        <input type="url" class="form-control" id="urlImg" name="urlImg" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="urlLink" class="col-sm-3 col-form-label text-end">URL de link:</label>
                    <div class="col-sm-6">
                        <input type="url" class="form-control" id="urlLink" name="urlLink" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="corFundo" class="col-sm-3 col-form-label text-end">Cor de plano de fundo da página:</label>
                    <div class="col-sm-6">
                        <input type="color" class="form-control" id="corFundo" name="corFundo" value="#B0E0E6" required>
                    </div>
                </div>
                <div class="my-4 text-center">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                    <button class="btn btn-warning" type="reset">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>