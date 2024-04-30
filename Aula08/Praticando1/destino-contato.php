<?php
session_start();
require 'header.php';
?>

<?php
    $nome = filter_input(INPUT_POST, "nome");
    $email = filter_input(INPUT_POST, "email");
    $mensagem = filter_input(INPUT_POST, "mensagem");
    $dataHora = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    $dataHoraFormatada = $dataHora->format('d/m/Y - H:i:s'); 
    $dataHoraFormatada2 = $dataHora->format('dmY_His'); 
?>
<div>
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para Contato</h1>
    </div>
    <div class="my-4">
        <p>Nome informado: <?php echo $nome;?></p>
        <p>E-mail: <?php echo $email;?></p>
        <p>Mensagem: <?php echo $mensagem;?></p>
        <p>Data: <?php echo $dataHoraFormatada;?></p>
        <a href="contato.php"><button type="reset" class="btn btn-info my-2">Voltar</button></a>
    </div>
</div>
<?php
    if ($nome && $email && $mensagem) {
        $conteudo = "Contato via site:".PHP_EOL;
        $conteudo .= "\nData: $dataHoraFormatada".PHP_EOL;
        $conteudo .= "\nNome: $nome".PHP_EOL;
        $conteudo .= "Email: $email".PHP_EOL;
        $conteudo .= "Mensagem: $mensagem".PHP_EOL;

        $nomeArquivo = "contatos/Contato_" . $dataHoraFormatada2 . ".txt";

        if ($arquivo = fopen($nomeArquivo, 'w')) {
            fwrite($arquivo, $conteudo);
            fclose($arquivo);
        } 
    }
?>

<?php
require 'footer.php'
?>