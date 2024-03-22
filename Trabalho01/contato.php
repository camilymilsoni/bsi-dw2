<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="contato.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4">Contato</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="inicio.php" class="nav-link text-black">Início</a></li>
                <li class="nav-item"><a href="sobre.php" class="nav-link text-black">Sobre</a></li>
                <li class="nav-item"><a href="logs.php" class="nav-link text-danger">#Logs de Acesso</a></li>
            </ul>
        </header>
    </div>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-1">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Seu futuro financeiro é aqui</h1>
                <p class="col-lg-10 fs-5">Estamos sempre disponíveis para ajudá-lo com suas necessidades financeiras e oferecer orientação especializada para o seu sucesso.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control">
                        <label>Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control">
                        <label>E-mail</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-info" type="button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="container d-flex flex-wrap justify-content-center align-items-center py-4 my-5 border-top">
        <div class="d-flex align-items-center">
            <span class="text-muted">© 2024 Camily Milsoni</span>
        </div>
    </footer>
    <?php
        $arquivoLog = "log/logs_acesso.txt";
        $arquivoCont = "contador/contador_contato.txt";
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
        $conteudo = "$contadorFormatado  | contato.php  | $dataHoraFormatada | $navegador".PHP_EOL;
        file_put_contents($arquivoLog, $conteudo, FILE_APPEND);
    ?>
</body>
</html>