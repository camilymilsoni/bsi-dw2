<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 1 - Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
    ?>
    <div class="container my-2">
        <h1>Praticando 1 - Tabuada</h1>
        <hr>
        <div>
            <form action="pagTabuada.php" method="get">
                <div class="row mb-3">
                    <label for="num" class="col-sm-2 col-form-label text-end">Número:</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="num" name="num" required>
                    </div>
                </div>
                <div class="my-4 ms-4 ps-5">
                    <button class="btn btn-success" type="submit">Enviar</button>
                    <a href="pagTabuada.php" class="btn btn-warning">Limpar</button></a>
                </div>
            </form>
        </div>
        <div>
            <?php
                if(isset($num)){
                    echo "<hr>";
                    echo "<h2>Tabuada do $num</h2>";
                    for($i = 1; $i <= 10; $i++){
                        echo "<p>$num x $i = " .($num * $i). "</p>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>