<?php
    use Claudsonm\CepPromise\CepPromise;
    use Claudsonm\CepPromise\Exceptions\CepPromiseException;
    require 'vendor\autoload.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 1 - Composer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-3">
        <h1>Exemplo CEP com Composer</h1>
        <hr>
        <form class="row g-3" action="praticando1.php" method="POST">
            <div class="col-3 mb-3">
                <div class="mb-2">
                    <label for="cep">CEP:</label>
                    <input class="form-control" type="number" name="cep" id="cep" required autofocus placeholder="Somente números">
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </div>
        </form>
    </div>
    <?php
        $cep = filter_input(INPUT_POST, "cep");

        function formatarCEP($cep){
            if (strlen($cep) == 8) {
                $mascara = '%%.%%%-%%%';
                return vsprintf(str_replace('%', '%s', $mascara), str_split($cep));
            } else {
                return $cep;
            }
        }

        if(isset($cep)){ 
            try{
                $endereco = CepPromise::fetch($cep);
                echo "<div class='container p-2 rounded border border-3 border-success bg-success-subtle'>";
                    echo "<h2>CEP: " . formatarCEP($cep) . "</h2>";
                    echo "<p class='m-0'>Rua: $endereco->street</p>";
                    echo "<p class='m-0'>Bairro: $endereco->district</p>";
                    echo "<p class='m-0'>Cidade: $endereco->city</p>";
                    echo "<p>Estado: $endereco->state</p>";
                echo "</div>";
            }
            catch(CepPromiseException $e){
                $endereco = $e->toArray();
                echo "<div class='container p-2 rounded border border-3 border-danger bg-danger-subtle'>";
                    echo "<h2>CEP: " . formatarCEP($cep) . "</h2>";
                    echo "<p>Detalhes do erro</p>";
                    echo "<ul>";
                        foreach ($endereco['errors'] as $erro) {
                            if ($erro['message'] === 'A autenticacao de null falhou!') {
                                echo "<li>CEP INVÁLIDO (na base dos Correios).</li>";
                            } else {
                                echo "<li>" . $erro['message'] . "</li>";
                            }
                        }
                    echo "</ul>";
                echo "</div>";
            }
        } 
    ?>
</body>
</html>