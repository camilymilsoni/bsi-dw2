<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Início</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="inicio.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4">Início</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="sobre.php" class="nav-link text-black">Sobre</a></li>
                <li class="nav-item"><a href="contato.php" class="nav-link text-black">Contato</a></li>
                <li class="nav-item"><a href="logs.php" class="nav-link text-danger">#Logs de Acesso</a></li>
            </ul>
        </header>
    </div>
    <div class="container col-xxl-8 px-4 py-4">
        <div class="row flex-lg-row align-items-center g-5 py-4">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="https://www.ewally.com.br/wp-content/uploads/2021/01/instituicao-bancaria-exemplos.jpg" class="d-block mx-lg-auto img-fluid rounded shadow-sm" alt="Imagem Início">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cultivando prosperidade, colhendo sucesso</h1>
                <p class="lead">No Banco Prospera, estamos comprometidos em ajudar nossos clientes a alcançar sua prosperidade financeira através de soluções inovadoras e serviços de qualidade.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="sobre.php"><button type="button" class="btn btn-info btn-lg px-4 me-md-2">Sobre</button></a>
                    <a href="contato.php"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Contato</button></a>
                </div>
            </div>
        </div>
    </div>
    <footer class="container d-flex flex-wrap justify-content-center align-items-center pt-4 my-5 border-top">
        <div class="d-flex align-items-center">
            <span class="text-muted">© 2024 Camily Milsoni</span>
        </div>
    </footer>
    <?php
        $arquivoLog = "log/logs_acesso.txt";
        $arquivoCont = "contador/contador_inicio.txt";
        if (file_exists($arquivoCont)) {
            $contador = file_get_contents($arquivoCont);
        } else {
            $contador = 0; 
        }
        $contador++;
        file_put_contents($arquivoCont, $contador);
        $dataHora = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
        $dataHoraFormatada = $dataHora->format('d/m/Y - H:i:s'); 
        $infoNavegador = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/Edg/', $infoNavegador)) {
            $navegador = 'Edge';
        } elseif (preg_match('/Chrome/', $infoNavegador)) {
            $navegador = 'Chrome';
        } elseif (preg_match('/Firefox/', $infoNavegador)) {
            $navegador = 'Firefox';
        } elseif (preg_match('/Safari/', $infoNavegador)) {
            $navegador = 'Safari';
        }
        $contadorFormatado = str_pad($contador, 2, " ", STR_PAD_LEFT);
        $conteudo = "$contadorFormatado  | inicio.php   | $dataHoraFormatada | $navegador".PHP_EOL;
        file_put_contents($arquivoLog, $conteudo, FILE_APPEND);
    ?>
</body>
</html>