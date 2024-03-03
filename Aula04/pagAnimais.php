<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3 - Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        img{
            width: 19vw;
            height: 13vw;
            margin-right: 1vw;
        }
        .borda{
            border: 5px solid red;
        }
    </style>
</head>
<body>
    <?php
        $animal = filter_input(INPUT_GET, "animal", FILTER_SANITIZE_SPECIAL_CHARS);
        $ultimos = filter_input(INPUT_GET, "ultimos", FILTER_SANITIZE_SPECIAL_CHARS);
        $animalClicado = "";
        $informacao = "";
        if ($animal) {
            switch ($animal) {
                case "Gato":
                    $animalClicado = "Gato";
                    $informacao = "O gato é um mamífero da família dos felídeos.";
                    $ultimos .= "Gato,";
                    break;
                case "Cachorro":
                    $animalClicado = "Cachorro";
                    $informacao = "O cachorro é um mamífero da família dos canídeos.";
                    $ultimos .= "Cachorro,";
                    break;
                case "Hamster":
                    $animalClicado = "Hamster";
                    $informacao = "O hamster é um mamífero roedor da subfamília dos Cricetinae.";
                    $ultimos .= "Hamster,";
                    break;
                case "Lagartixa":
                    $animalClicado = "Lagartixa";
                    $informacao = "A lagartixa é uma espécie de lagarto de pequenas dimensões frequentemente encontrada nos lares brasileiros.";
                    $ultimos .= "Lagartixa,";
                    break;
            }
        }
    ?>
    <div class="container my-2">
        <h1>Praticando 3 - Animais</h1>
        <hr>
        <div class="d-flex justify-content-between">
            <a href="pagAnimais.php?animal=Gato&ultimos=<?php echo $ultimos ?>">
                <img src="https://www.petz.com.br/blog//wp-content/uploads/2021/11/enxoval-para-gato-Copia.jpg" alt="Gato" <?php if ($animalClicado == "Gato") echo 'class="borda"'; ?>>
            </a>
            <a href="pagAnimais.php?animal=Cachorro&ultimos=<?php echo $ultimos ?>">
                <img src="https://love.doghero.com.br/wp-content/uploads/2018/12/golden-retriever-1.png" alt="Cachorro" <?php if ($animalClicado == "Cachorro") echo 'class="borda"'; ?>>
            </a>
            <a href="pagAnimais.php?animal=Hamster&ultimos=<?php echo $ultimos ?>">
                <img src="https://p2.trrsf.com/image/fget/cf/774/0/images.terra.com/2023/03/16/1424845971-hamster-1.jpg" alt="Hamster" <?php if ($animalClicado == "Hamster") echo 'class="borda"'; ?>>
            </a>
            <a href="pagAnimais.php?animal=Lagartixa&ultimos=<?php echo $ultimos ?>">
                <img src="https://www.pensamentoverde.com.br/wp-content/uploads/2019/03/HCS_7801-1-1.jpg" alt="Lagartixa" <?php if ($animalClicado == "Lagartixa") echo 'class="borda"'; ?>>
            </a>
        </div>
        <br>
        <div>
            <?php
                if ($animal) { ?>
                    <p>Você clicou no(a) <strong><?php echo $animalClicado ?></strong>.</p>
                    <p><?php echo $informacao ?></p>
                    <p><a href="pagAnimais.php">Limpar tudo</a></p>
                    <br>
            <?php } ?>
            <?php
                if ($ultimos && (substr_count($ultimos, ',') > 1)) { ?>
                    <h4>Últimos clicados</h4>
                    <?php
                        $ultimos = $_GET['ultimos'];
                        $listaAnimais = explode(',', $ultimos);
                        $totalAnimais = count($listaAnimais) - 1;
                        for ($i = 0; $i < $totalAnimais; $i++) {
                            echo '<p>' . $listaAnimais[$i] . '</p>';
                        }
                    ?>
            <?php } ?>
        </div>
    </div>
</body>
</html>