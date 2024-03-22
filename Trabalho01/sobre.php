<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Sobre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="sobre.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4">Sobre</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="inicio.php" class="nav-link text-black">Início</a></li>
                <li class="nav-item"><a href="contato.php" class="nav-link text-black">Contato</a></li>
                <li class="nav-item"><a href="logs.php" class="nav-link text-danger">#Logs de Acesso</a></li>
            </ul>
        </header>
    </div>
    <section class="pt-3 pb-4 text-center container">
        <div class="row py-lg-1">
            <div class="col-lg-8 col-md-8 mx-auto">
                <p class="fs-4 fw-medium bg-body-tertiary rounded py-3 shadow-sm">Na jornada da vida financeira, o Banco Prospera é seu parceiro <span class="bg-info text-white fw-bold rounded p-2">CONFIÁVEL</span></p>
            </div>
        </div>
    </section>
    <div class="album py-3">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://i0.wp.com/lecupon.com/wp-content/uploads/Instituicoes-financeiras.png?fit=680%2C437&ssl=1" alt="Imagem 1" class="rounded" width="100%" height="245">
                        <div class="card-body">
                            <p class="card-text">Buscamos impulsionar o progresso financeiro e o bem-estar de nossos clientes, oferecendo soluções personalizadas e inovadoras.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://img.olhardigital.com.br/wp-content/uploads/2022/12/banco.jpg" alt="Imagem 2" class="rounded" width="100%" height="245">
                        <div class="card-body">
                            <p class="card-text">Nossos valores fundamentais incluem integridade, inovação, colaboração e excelência, que moldam nossa cultura e orientam nossas ações diárias.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://kamino.com.br/wp-content/uploads/2022/11/equipe-financeira.jpg" alt="Imagem 3" class="rounded" width="100%" height="245">
                        <div class="card-body">
                            <p class="card-text">Nossa equipe é formada por profissionais dedicados e apaixonados, comprometidos com o sucesso financeiro de nossos clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container d-flex flex-wrap justify-content-center align-items-center py-4 mt-5 border-top">
        <div class="d-flex align-items-center">
            <span class="text-muted">© 2024 Camily Milsoni</span>
        </div>
    </footer>
    <?php
        $arquivoLog = "log/logs_acesso.txt";
        $arquivoCont = "contador/contador_sobre.txt";
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
        $conteudo = "$contadorFormatado  | sobre.php    | $dataHoraFormatada | $navegador".PHP_EOL;
        file_put_contents($arquivoLog, $conteudo, FILE_APPEND);
    ?>
</body>
</html>