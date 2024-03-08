<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 2 - Contador / Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-2">
        <h1>Praticando 2 - Contador</h1>
        <hr>
        <div>
            <form action="pagDestino.php" method="post">
                <div class="row mb-3">
                    <label for="inicio" class="col-sm-2 col-form-label text-end">Início:</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="inicio" name="inicio" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="final" class="col-sm-2 col-form-label text-end">Final:</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="final" name="final" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="incremento" class="col-sm-2 col-form-label text-end">Incremento:</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="incremento" name="incremento" required>
                    </div>
                </div>
                <div class="my-4 ms-5 ps-5">
                    <button class="btn btn-success" type="submit">Enviar</button>
                    <button class="btn btn-warning" type="reset">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>