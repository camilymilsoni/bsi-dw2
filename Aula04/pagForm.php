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
        <h1>Praticando 2 - Calculadora média</h1>
        <hr>
        <div>
            <form action="pagDestino.php" method="post">
                <div class="row mb-3">
                    <label for="nota1" class="col-sm-2 col-form-label text-end">Nota 1:</label>
                    <div class="col-sm-1">
                        <input type="number" class="form-control" id="nota1" name="nota1" min="0" max="10" step="0.5" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nota2" class="col-sm-2 col-form-label text-end">Nota 2:</label>
                    <div class="col-sm-1">
                        <input type="number" class="form-control" id="nota2" name="nota2" min="0" max="10" step="0.5" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nota3" class="col-sm-2 col-form-label text-end">Nota 3:</label>
                    <div class="col-sm-1">
                        <input type="number" class="form-control" id="nota3" name="nota3" min="0" max="10" step="0.5" required>
                    </div>
                </div>
                <div class="my-4 ms-5 ps-5">
                    <button class="btn btn-success" type="submit">Calcular média</button>
                    <button class="btn btn-warning" type="reset">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>