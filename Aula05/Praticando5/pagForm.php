<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 5 - Interesses / Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container my-2">
        <h1>Formulário</h1>
        <hr>
        <p>Escolha alguns interesses:</p>
        <form action="pagDestino.php" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Esportes" id="esportes">
                        <label class="form-check-label" for="esportes">Esportes</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Futebol" id="futebol">
                        <label class="form-check-label" for="futebol">Futebol</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Basquete" id="basquete">
                        <label class="form-check-label" for="basquete">Basquete</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Tênis" id="tenis">
                        <label class="form-check-label" for="tenis">Tênis</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Taekwondo" id="taekwondo">
                        <label class="form-check-label" for="taekwondo">Taekwondo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Tecnologia" id="tecnologia">
                        <label class="form-check-label" for="tecnologia">Tecnologia</label>
                    </div>
                </div> 
                <div class="col-md-3">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Smartphones" id="smartphones">
                        <label class="form-check-label" for="smartphones">Smartphones</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Computadores e hardware" id="computadores">
                        <label class="form-check-label" for="computadores">Computadores e hardware</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Desktop games" id="desktop">
                        <label class="form-check-label" for="desktop">Desktop games</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Notebooks" id="notebooks">
                        <label class="form-check-label" for="notebooks">Notebooks</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Veículos" id="veiculos">
                        <label class="form-check-label" for="veiculos">Veículos</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Escritório" id="escritorio">
                        <label class="form-check-label" for="escritorio">Escritório</label>
                    </div>
                </div>  
                <div class="col-md-3">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Vestuário" id="vestuario">
                        <label class="form-check-label" for="vestuario">Vestuário</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Perfumes" id="perfumes">
                        <label class="form-check-label" for="perfumes">Perfumes</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Economia" id="economia">
                        <label class="form-check-label" for="economia">Economia</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Comidas" id="comidas">
                        <label class="form-check-label" for="comidas">Comidas</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Bebidas" id="bebidas">
                        <label class="form-check-label" for="bebidas">Bebidas</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Imóveis" id="imoveis">
                        <label class="form-check-label" for="imoveis">Imóveis</label>
                    </div>
                </div>  
                <div class="col-md-3">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Calçados" id="calcados">
                        <label class="form-check-label" for="calcados">Calçados</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Hotéis" id="hoteis">
                        <label class="form-check-label" for="hoteis">Hotéis</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Pousadas" id="pousadas">
                        <label class="form-check-label" for="pousadas">Pousadas</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Cinema" id="cinema">
                        <label class="form-check-label" for="cinema">Cinema</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Filmes" id="filmes">
                        <label class="form-check-label" for="filmes">Filmes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkbox[]" value="Séries" id="series">
                        <label class="form-check-label" for="series">Séries</label>
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary mt-4">Enviar</button>
            <button type="reset" class="btn btn-warning mt-4">Limpar</button>
        </form>
    </div>
</body>
</html>