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
        
        $nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        $idade = filter_input (INPUT_POST,"idade",FILTER_SANITIZE_NUMBER_INT);
        $mensagem = filter_input(INPUT_POST,"mensagem",FILTER_SANITIZE_SPECIAL_CHARS);

    /*     if (isset($_POST["interesses"]) && is_array($_POST["interesses"])) {
            $interesses = $_POST["interesses"];
        } else {
            $interesses = array();
        }
 */

     $interesses = filter_var_array($_POST["interesses"] ?? [], FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

        <h2>Dados:</h2>
        <ul>
            <li>Nome: <?= $nome ?></li>
            <li>E-mail: <?= $email ?></li>
            <li>Idade: <?= $idade ?></li>

            <!-- Versão 1:Transformando o array $interesses em string -->

            <li>Interesses: <?= empty($interesses) ? "Nenhum item selecionado" : implode(",", $interesses) ?></li>

        <!-- Versão 2: Acessando cada interesse -->
            <li>Interesses: 
                <ul>
                    <?php foreach($interesses as $interesse){?>
                    <li> <?=$interesse?></li>
                    <?php } ?>
                </ul>
            </li>

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