<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>

<?php
$fabricantes = ["Coca - cola", "Oscorp", "Amazon", "Google"];

if(empty($_POST["produto"]) || empty($_POST["preco"])){ ?>
    <p>Você deve falar o Produto e Preço</p>
    <p><a href="exercicio07.php">Voltar</a></p>

<?php }




if (isset($_POST["enviar"])) {
    $produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_SPECIAL_CHARS);
    $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
    $disponibilidade =  filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
?>
 
    <h2>Dados Processados com sucesso!!</h2>
    <p>Produto: <?= $produto ?></p>
    <p>Fabricante: <?= $fabricante ?></p>
    <p>Preço: <?= $preco ?></p>
    <p>Disponibilidade: <?= $disponibilidade ?></p>
    <p>Descrição: <?= $descricao ?></p>
<?php } else {
?>


    <body>
        <h1>Escolha seu produto</h1>
        <hr>

        <form action="" method="post">
            <p>
                <label for="produto">Nome do Produto: </label>
                <input type="text" name="produto" id="produto" required>
            </p>

            <p>
                <label for="fabricante">Fabricante: </label>

                <select name="fabricante" id="fabricante">

                    <option value=""></option>
                    <?php foreach ($fabricantes as $fabs) { ?>
                        <option value="<?= $fabs ?>"><?= $fabs ?></option>
                    <?php } ?>
                </select>

            </p>

            <p>
                <label for="preco">Preço: </label>
                <input type="number" name="preco" id="preco" min="100" max="10000" step="0.01" required>
            </p>

            <p>
                <label for="disponibilidade">Disponibilidade: </label>
                <input type="radio" name="disponibilidade" id="disponibilidade1">
                <label for="disponibilidade1">Sim</label>

                <input type="radio" name="disponibilidade" id="disponibilidade2">
                <label for="disponibilidade2">Não</label>

            </p>

            <p>
                <label for="descricao">Descrição: </label> <br>
                <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
            </p>


            <p>
                <button type="submit" name="enviar" id="enviar">Enviar</button>
            </p>

        </form>

    <?php } ?>

    </body>

</html>