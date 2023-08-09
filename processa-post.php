<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>

<body>
    <h1>Exemplo usando POST</h1>
    <hr>
    <p>Receber e processar dados via <b>POST</b></p>

    <?php
    /* Se os campos nome e e-mail estão vazios */
    if (empty($_POST["nome"]) || empty($_POST["email"])) { ?>
        <p> Você deve preencher nome e e-mail </p>
        <p> <a href="10-formulario.html">Voltar</a></p>
    <?php } else {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = $_POST["idade"];
        $mensagem = $_POST["mensagem"];

        if (isset($_POST["interesses"]) && is_array($_POST["interesses"])) {
            $interesses = $_POST["interesses"];
        } else {
            $interesses = array();
        }


        /* Se houver interesses (Ou seja, foi selecionado pelo menos 1),
        guarde na variável o $_POST["interesses"].
        caso contrário, guarde na variável um array vazio. */

        // $interesses = $_POST["interesses"];
    ?>

        <h2>Dados:</h2>
        <ul>
            <li>Nome: <?= $nome ?></li>
            <li>E-mail: <?= $email ?></li>
            <li>Idade: <?= $idade ?></li>
            <li>Interesses: <?= empty($interesses) ? "Nenhum item selecionado" : implode(",",$interesses) ?></li>
            <!-- Se a variável mensagem NÃO ESTIVER VAZIA,
        mostre o <li> com a mensagem -->
            <?php if (!empty($mensagem)) { ?>
                <li>Mensagem: <?= $mensagem ?></li>
        
            <?php } ?>
        </ul>

    <?php
    }

    ?>
</body>

</html>