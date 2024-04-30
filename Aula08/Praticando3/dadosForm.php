<?php
    if (isset($_POST['campo']) && isset($_POST['valor'])) {
        $campo = filter_input(INPUT_POST, "campo");
        $valor = filter_input(INPUT_POST, "valor");
        setcookie($campo, $valor, time() + 3600);
    }
?>