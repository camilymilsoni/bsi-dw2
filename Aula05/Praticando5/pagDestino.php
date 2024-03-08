<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 5 - Interesses / Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        pre{
            color: deeppink;
            border: 0.15vw solid green;
            padding: 0.3vw;
        }
    </style>
</head>
<body>
    <?php
        $checkboxes = $_POST['checkbox'];
    ?>
    <div class="container my-2">
        <h1>Destino</h1>
        <hr>
        <div>
            <h2>Dados da requisição</h2>
            <?php
                echo "<pre>";
                var_dump($checkboxes);
                echo "</pre>";
            ?>
        </div>
        <div>
            <h2>Interesses selecionados (em ordem alfabética)</h2>
            <ul>
                <?php
                    sort($checkboxes);
                    for ($i = 0; $i < min(3, count($checkboxes)); $i++) {
                        echo "<li>{$checkboxes[$i]}</li>";
                    }
                    if (count($checkboxes) > 3) {
                        echo "<li>...</li>";
                    }
                ?>
            </ul>
        </div>
        <br>
        <a href="pagForm.php">Voltar para o formulário</a>
    </div>
</body>
</html>