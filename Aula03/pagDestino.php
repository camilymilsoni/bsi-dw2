<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, a{
            color: <?php echo $_POST['corTexto']; ?>;
            background-color: <?php echo $_POST['corFundo']; ?>;
        }
    </style>
</head>
<body>
    <div class="container my-2">
        <h1>
            <?php echo $_POST['titulo']; ?>
        </h1>
        <hr>
        <p>
            <?php echo $_POST['corpo']; ?>
        </p>
        <img src="<?php echo $_POST['urlImg']; ?>" alt="imagem">
        <div class="mt-3">
            <a href="<?php echo $_POST['urlLink']; ?>" target="_blank">Fonte</a>
        </div>
    </div>
</body>
</html>