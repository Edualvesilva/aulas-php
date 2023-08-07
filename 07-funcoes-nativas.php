<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07- Funções Nativas</title>
</head>

<body>
    <h1>Exemplos de funções nativas</h1>
    <hr>

    <h2>Strings</h2>
    <h3>trim()</h3>
    <?php
    /* Função que remove espaços antes e depois de strings. */
    $nome = "       Vinicius me deve 80 paçocas       ";
    $nomeSemEspaço = trim($nome);

    ?>
    <pre> <?= var_dump($nome) ?></pre>
    <pre><?= var_dump($nomeSemEspaço) ?></pre>
    <h3>str_replace()</h3>
    <?php
    /* Função que permite substituição
de strings/caracteres.
*/
    $fraseFeia = "<p>Fulano é um bobão e xarope</p>";
    $fraseBonitinha = str_replace(
        ["xarope", "bobão"],
        "*****",
        $fraseFeia
    );
    ?>
    <p><?= $fraseFeia ?></p>
    <p><?= $fraseBonitinha ?></p>

    <h3>explode()</h3>
    <?php
    /* Função que transforma uma string em uma array */
    $linguagens = "HTML - CSS - JS - PHP";
    $arrayLinguagens = explode(" - ", $linguagens);
    ?>
    <pre><?= var_dump($linguagens) ?></pre>
    <pre><?= var_dump($arrayLinguagens) ?></pre>
    <hr>
    <h2>Númericas</h2>
    <h3>min,max,round</h3>
    <?php
    $valores = [10, 5, 50, 100, 275];
    $valorQualquer = 1259.7
    ?>
    <p>Menor valor: <?= min($valores) ?></p>
    <p>Maior valor: <?= max($valores) ?></p>
    <p>Arredondamento <?= round($valorQualquer) ?></p>

    <hr>
    <h2>Arrays</h2>
    <h2>implode()</h2>
    <?php
    /* Função que transforma array
em string */
    $bandas = ["Rush", "Slayer", "Dio"];
    $textoBandas = implode(" - ", $bandas);
    ?>
    <pre><?= var_dump($bandas) ?></pre>
    <pre><?= var_dump($textoBandas) ?></pre>

    <h3>extract()</h3>
    <?php
    /* Função que extrai chaves associativas para variáveis */
    $aluno = [
        "id" => 1,
        "nome" => "Chaves do 8",
        "idade" => 25
    ];
    extract($aluno)
    ?>
    <ul>
        <li>ID: <?= $id ?></li>
        <li>Nome: <?= $nome ?> </li>
        <li>Idade: <?= $idade ?></li>
    </ul>

    <h3>array_sum()</h3>
    <?php
    /* Função para somar os valores
de um array */
    $total = array_sum($valores);
    ?>

    <p>Soma dos valores: <?= $total ?></p>
    <hr>

    <h3>array_unique()</h3>
    <?php
    /* Função que retorna um novo 
array com dados únicos. */
    $produtos = ["TV", "Notebook", "TV", "Geladeira", "Monitor", "Notebook", "Teclado", "Mouse"];

    $produtosUnicos = array_unique($produtos);
    ?>
    <pre><?= var_dump($produtos) ?></pre>
    <pre><?= var_dump($produtosUnicos) ?></pre>

    <hr>
    <h2>Filtros</h2>
    <p>Recursos/constantes de análise e limpeza de dados aplicados através das funções <code>filter_var()</code> e <code>filter_input()</code>.</p>

    <h3>Validação</h3>
    <?php
    $email = "tiago@gmail.com.br";
    /* Se o e-mail informado for inválido, ou seja, 
    se não seguir o padrão geral de endereços de e-mail,
    a função abaixo retornará "false". */
    ?>
    <pre> <?= var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)) ?>
</pre>

    <h3>Sanitização</h3>
    <?php
    $ataque = "<script>
    document.body.innerHTML = '<h1>Sou ráqui! hahahaha :( </h1>'</script>";

    // Execução sem sanitização (Script é válido)   
    //echo $ataque;   

    $ataqueSanitizado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);

    // Execução com sanitização (Script é anulado)
    echo $ataqueSanitizado;
    ?>
    <hr>
    <h2>Segurança (criptografia de dados)</h2>

</body>

</html>