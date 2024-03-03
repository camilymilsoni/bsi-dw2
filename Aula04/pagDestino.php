<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-2">
        <?php
            $nota1 = filter_input(INPUT_POST, "nota1");
            $nota2 = filter_input(INPUT_POST, "nota2");
            $nota3 = filter_input(INPUT_POST, "nota3");
            $media = ($nota1 + $nota2 + $nota3)/3;
        ?>
        
        <h1>Praticando 2 - Calculadora média</h1>
        <hr>
        <p class="fs-5">
            Um aluno com as notas <strong><?php echo $nota1?></strong>, 
            <strong><?php echo $nota2?></strong> e 
            <strong><?php echo $nota3?></strong>
            tem uma média igual a <strong><?php echo $media?></strong>
        </p>
        <br>
        <p class="fs-5">
            Com essa média o aluno está 
            <?php 
                if($media >= 6){
                    echo '<span class="fw-bold text-decoration-underline text-success">APROVADO</span>';
                } elseif ($media >= 4 && $media < 6){
                    echo '<span class="fw-bold text-decoration-underline text-warning">DE RECUPERAÇÃO</span>';
                } else{
                    echo '<span class="fw-bold text-decoration-underline text-danger">REPROVADO</span>';
                }
            ?>
        </p>
    </div>
</body>
</html>