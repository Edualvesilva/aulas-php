<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  </head>
</head>

<?php
$fabricantes = ["Coca - cola", "Oscorp", "Amazon", "Google"];


if (isset($_POST["enviar"])) {
    if (empty($_POST["produto"]) || empty($_POST["preco"])) { ?>
     <div class="alert alert-danger" role="alert">
        <p>Você deve falar o Produto e Preço.</p>
        <p><a href="exercicio07.php" class="btn btn-primary">Voltar</a></p>
    </div>
    <?php
    } else {
        $produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_SPECIAL_CHARS);
        $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $disponibilidade =  filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
     <div class="alert alert-success mt-3">
        <h2>Dados Processados com sucesso!!</h2>
     </div>
        <p class="fs-5">Produto: <?= $produto ?></p>
        <p class="fs-5">Fabricante: <?= empty($fabricante) ? "Não Informado." : $fabricante ?></p>
        <p class="fs-5">Preço: <?= $preco ?></p>
        <p class="fs-5">Disponibilidade: <?= empty($disponibilidade) ? "Não Informado." : $disponibilidade  ?></p>
        <p class="fs-5">Descrição: <?= empty($descricao) ? "Sem comentários." : $descricao ?> </p>
    <?php }
} else {
    ?>


    <body>
    <div class="container mt-5">
        <h1 class="mb-4">Cadastre seu produto</h1>
        <hr>

        <form class="needs-validation" action="" method="post" novalidate>
            <p>
                <label for="produto">Nome do Produto: </label>
                <input type="text" name="produto" id="produto" required placeholder="Algum Produto">
            </p>

            <p>
                <label for="fabricante">Fabricante: </label>

                <select name="fabricante" id="fabricante" >

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
                <input type="radio" name="disponibilidade" id="disponibilidade1" value="Sim">
                <label for="disponibilidade1">Sim</label>

                <input type="radio" name="disponibilidade" id="disponibilidade2" value="Não">
                <label for="disponibilidade2">Não</label>

            </p>

            <p>
                <label for="descricao">Descrição: </label> <br>
                <textarea name="descricao" id="descricao" cols="30" rows="5"></textarea>
            </p>


            <p>
                <button type="submit" name="enviar" id="enviar" class="btn btn-outline-primary">Enviar</button>
            </p>

        </form>

    <?php }  ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>

</html>