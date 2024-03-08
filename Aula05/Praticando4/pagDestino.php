<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 4 - Gerador de tabela / Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        $linhas = filter_input(INPUT_POST, "linhas", FILTER_SANITIZE_NUMBER_INT);
        $colunas = filter_input(INPUT_POST, "colunas", FILTER_SANITIZE_NUMBER_INT);
        $estilo = filter_input(INPUT_POST, "estilo");
    ?>
    <div class="container my-2">
        <h1>Praticando 4 - Gerador de tabela</h1>
        <hr>
        <h2>Tabela <?php echo $linhas ?>x<?php echo $colunas ?></h2>
        <div>
            <table class="table table-striped table-bordered <?php echo $estilo ?> text-center">
                <?php
                    for ($i = 0; $i < $linhas; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < $colunas; $j++) {
                            echo "<td><b>-</b></td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>