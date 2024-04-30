<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
        $nome = filter_input(INPUT_GET, "nome");
        $email = filter_input(INPUT_GET, "email");
        $cor = filter_input(INPUT_GET, "cor");

        if (!$nome && isset($_COOKIE['nome'])) {
            $nome = $_COOKIE['nome'];
        }
        if (!$email && isset($_COOKIE['email'])) {
            $email = $_COOKIE['email'];
        }
        if (!$cor && isset($_COOKIE['cor'])) {
            $cor = $_COOKIE['cor'];
        }

        if(isset($nome) && isset($email) && isset($cor)) {
            setcookie('nome', $nome, time() + 3600);
            setcookie('email', $email, time() + 3600);
            setcookie('cor', $cor, time() + 3600);
        }
        
        if(isset($_GET['limpar']) && $_GET['limpar'] == 'true') {
            foreach ($_COOKIE as $chave => $valor) {
                setcookie($chave, '', time() - 3600);
            }
            header("Location: destino-get.php");
            exit();
        }
        $linkEder = "destino-get.php?nome=Eder&email=eder@gmail.com&cor=" . $cor;
        $linkJose = "destino-get.php?nome=José&email=jose@gmail.com&cor=" . $cor;
    ?>
    <div class="container my-3">
        <h1>Destino GET</h1>
        <hr>
        <?php
            if(!empty($nome) && !empty($email)){
                echo "<p>Nome informado: $nome<br>Email: $email</p>";
            }
        ?>
        <p><a href="<?php echo $linkEder;?>">Enviar dados [nome = Eder | email = eder@gmail.com]</a></p>
        <p><a href="<?php echo $linkJose;?>">Enviar dados [nome = José | email = jose@gmail.com]</a></p>
        <p><a href="destino-get.php?limpar=true">Limpar tudo</a></p>
        <div class="d-flex justify-content-around my-4">
            <a href="<?php echo 'destino-get.php?nome=' . $nome . '&email=' . $email . '&cor=lightcoral'?>">
                <img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/red.png" alt="Red" class="img-fluid border border-3 border-dark" width="320vw">
            </a>
            <a href="<?php echo 'destino-get.php?nome=' . $nome . '&email=' . $email . '&cor=lightgreen'?>">
                <img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/green.png" alt="Green" class="img-fluid border border-3 border-dark" width="320vw">
            </a>
            <a href="<?php echo 'destino-get.php?nome=' . $nome . '&email=' . $email . '&cor=lightblue'?>">
                <img src="https://about.canva.com/wp-content/uploads/sites/8/2019/03/blue.png" alt="Blue" class="img-fluid border border-3 border-dark" width="320vw">
            </a>
        </div>
    </div>
    <style>
        body{
            background-color: <?php echo $cor;?>;
        }
    </style>
</body>
</html>