<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
    <!-- Uso básico do Bootstrap, mas o resultado ficou bom. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  </head>

    <body> 
    <!-- Todo o código acima deveria estar abaixo daqui, ou seja, dentro do <body>.
    Além disso, era bom fazer pelo menos abaixo do <h1> a programação de validação para
    que a página não fique tão vazia (sem nem o título) quando acontece o não preenchimento
    dos campos obrigatórios (Já colocado). -->
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

        /* Certinho! */
        $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        
        /* Esta variável nem precisava, você podia usar a $preco mesmo direto dentro do number_format mais abaixo */
        $precoBRL = $preco ;
        $disponibilidade =  filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
     <div class="alert alert-success mt-3">
        <h2>Dados Processados com sucesso!!</h2>
     </div>
        <p class="fs-5">Produto: <?= $produto ?></p>
        
        <!-- Boa solução com ternário -->
        <p class="fs-5">Fabricante: <?= empty($fabricante) ? "Não Informado." : $fabricante ?></p>
        
        <p class="fs-5">Preço: <?= 'R$ '.number_format($precoBRL,2,",",".") ?></p>

        <!-- E aqui também -->
        <p class="fs-5">Disponibilidade: <?= empty($disponibilidade) ? "Não Informado." : $disponibilidade  ?></p>
        <p class="fs-5">Descrição: <?= empty($descricao) ? "Sem comentários." : $descricao ?> </p>
    <?php }
} else {
    ?>
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

                    <!-- Certinho! -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">

    </script>
   
    </body>

</html>