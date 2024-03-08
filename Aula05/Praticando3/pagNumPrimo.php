<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3 - Números primos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .vermelho{
            padding: 0.8vw;
            background-color: lightpink;
            border: 3px solid red;
        }
        .verde{
            padding: 0.8vw;
            background-color: lightgreen;
            border: 3px solid green;
        }
    </style>
</head>
<body>
    <?php
        $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
    ?>
    <div class="container my-2">
        <h1>Praticando 3 - Números primos</h1>
        <hr>
        <div class="d-flex justify-content-between pt-2 pb-3 fs-5">
            <a href="pagNumPrimo.php?num=1">Número 1</a>
            <a href="pagNumPrimo.php?num=2">Número 2</a>
            <a href="pagNumPrimo.php?num=3">Número 3</a>
            <a href="pagNumPrimo.php?num=5">Número 5</a>
            <a href="pagNumPrimo.php?num=20">Número 20</a>
            <a href="pagNumPrimo.php?num=32">Número 32</a>
            <a href="pagNumPrimo.php?num=37">Número 37</a>
        </div>
        <div class="text-center m-5">
            <?php
                if(isset($num)){
                    if($num == 0){
                        echo "<p class='fs-4'>O número <span class='vermelho'>$num</span> <span class='vermelho'>não é</span> um número 
                              <span class='vermelho'>PRIMO</span>. Além disso ele é um número <span class='vermelho'>PAR</span>.</p>";
                    } elseif($num <= 1){
                        echo "<p class='fs-4'>O número <span class='vermelho'>$num</span> <span class='vermelho'>não é</span> um número 
                              <span class='vermelho'>PRIMO</span>. Além disso ele é um número <span class='vermelho'>ÍMPAR</span>.</p>";
                    } else {
                        $primo = true;
                        if ($num == 2) {
                            echo "<p class='fs-4'>O número <span class='verde'>$num</span> <span class='verde'>é</span> um número 
                                 <span class='verde'>PRIMO</span>. Além disso ele é um número <span class='verde'>PAR</span>.</p>";
                        } elseif ($num % 2 == 0) {
                            echo "<p class='fs-4'>O número <span class='vermelho'>$num</span> <span class='vermelho'>não é</span> um número 
                                 <span class='vermelho'>PRIMO</span>. Além disso ele é um número <span class='vermelho'>PAR</span>.</p>";
                        } else {
                            for ($i = 3; $i <= sqrt($num); $i += 2) {
                                if ($num % $i == 0) {
                                    $primo = false;
                                    break;
                                }
                            }
                            if ($primo) {
                                echo "<p class='fs-4'>O número <span class='verde'>$num</span> <span class='verde'>é</span> um número 
                                     <span class='verde'>PRIMO</span>. Além disso ele é um número <span class='verde'>ÍMPAR</span>.</p>";
                            } else {
                                echo "<p class='fs-4'>O número <span class='vermelho'>$num</span> <span class='vermelho'>não é</span> um número 
                                     <span class='vermelho'>PRIMO</span>. Além disso ele é um número <span class='vermelho'>ÍMPAR</span>.</p>";
                            }
                        }
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>