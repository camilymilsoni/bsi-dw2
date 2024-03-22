<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Logs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="logs.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <span class="fs-4">Logs de Acesso</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="inicio.php" class="nav-link text-black">Início</a></li>
                <li class="nav-item"><a href="sobre.php" class="nav-link text-black">Sobre</a></li>
                <li class="nav-item"><a href="contato.php" class="nav-link text-black">Contato</a></li>
            </ul>
        </header>
    </div>
    <?php 
        $key = filter_input(INPUT_POST, "key");
        $mostrarFormulario = true; 
        $contInicio = file_get_contents("contador/contador_inicio.txt");
        $contSobre = file_get_contents("contador/contador_sobre.txt");
        $contContato = file_get_contents("contador/contador_contato.txt");
        $logsAcesso = file_get_contents("log/logs_acesso.txt");

        if (isset($_POST['key']) && $_POST['key'] === "senha_da_nasa") { ?>
            <?php $mostrarFormulario = false; ?>
            <div class="container bg-danger-subtle border border-3 border-danger p-3 rounded">
                <p>Página <strong>inicio.php</strong>: <?php echo $contInicio ?> Acessos</p>
                <p>Página <strong>sobre.php</strong>: <?php echo $contSobre ?> Acessos</p>
                <p>Página <strong>contato.php</strong>: <?php echo $contContato ?> Acessos</p>
                <p><strong>Total</strong>: <?php echo ($contInicio + $contSobre + $contContato) ?> Acessos</p>
                <hr>
                <?php
                    echo "<pre>";
                    echo $logsAcesso;
                    echo "</pre>";
                ?>
            </div>
        <?php }
        
        if ($mostrarFormulario) { ?>
            <div class="container text-center bg-danger-subtle border border-3 border-danger p-3 rounded">
                <h3 class="fst-italic">Access Key</h3>
                <hr>
                <form action="logs.php" method="post">
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <input type="password" class="form-control" id="key" name="key" placeholder="Key">
                        </div>
                    </div>
                    <button class="btn btn-primary my-3" type="submit">Enviar</button>  
                </form>
            </div>
        <?php }
        
        if (isset($_POST['key']) && $mostrarFormulario) { ?>
            <div class="container d-flex justify-content-center mt-3">
                <span class="bg-warning-subtle border border-3 border-warning p-3 rounded"> 
                    Chave incorreta. Por favor, tente novamente.
                </span>
            </div>
        <?php } 
    ?>
</body>
</html>