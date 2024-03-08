<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 4 - Gerador de tabela / Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-2">
        <h1>Praticando 4 - Gerador de tabela</h1>
        <hr>
        <form action="pagDestino.php" method="post">
            <div class="row">
                <div class="col-md-2">
                    <label for="linhas">Linhas:</label>
                    <input type="number" id="linhas" name="linhas" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="colunas">Colunas:</label>
                    <input type="number" id="colunas" name="colunas" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="estilo">Estilo:</label>
                    <select id="estilo" name="estilo" class="form-select">
                        <option value="table-primary">table-primary</option>
                        <option value="table-secondary">table-secondary</option>
                        <option value="table-success">table-success</option>
                        <option value="table-warning">table-warning</option>
                        <option value="table-danger">table-danger</option>
                        <option value="table-info">table-info</option>
                        <option value="table-light">table-light</option>
                        <option value="table-dark">table-dark</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>