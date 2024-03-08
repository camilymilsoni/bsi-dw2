<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 2 - Contador / Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        $inicio = filter_input(INPUT_POST, "inicio", FILTER_SANITIZE_NUMBER_INT);
        $final = filter_input(INPUT_POST, "final", FILTER_SANITIZE_NUMBER_INT);
        $incremento = filter_input(INPUT_POST, "incremento", FILTER_SANITIZE_NUMBER_INT);
    ?>
    <div class="container my-2">
        <h1>Praticando 2 - Contador</h1>
        <hr>
        <div>
            <h2>Parâmetros informados:</h2>
            <p>Início: <?php echo $inicio?></p>
            <p>Final: <?php echo $final?></p>
            <p>Incremento: <?php echo $incremento?></p>
            <?php
                if($inicio > $final){
                    for($i = $inicio; $i >= $final; $i = $i - $incremento){
                        echo $i . " ";
                    }
                }
                else{
                    for($i = $inicio; $i <= $final; $i = $i + $incremento){
                        echo $i . " ";
                    }
                }
            ?>
        </div>
</body>
</html>