<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays</title>
    <style>
        ul li:nth-child(odd) {
            color: blue;
        }

        ul li:nth-child(even) {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Trabalhando com arrays (vetores e matrizes)</h1>

    <h2>Arrays com índice numérico</h2>
    <?php
    // Sintaxe com colchetes
    $bandas = ["Savatage", "Dio", "Rush"];

    // Sintaxe com função array()
    $cursos = array("HTML", "Node", "PHP");

    // Sintaxe de atribuição manual
    $buteco[0] = "Bolinho de bacalhau";
    $buteco[1] = "Pastel";
    $buteco[2] = "Esfiha";

    // Constantes de array(PHP 7+)
    define("UNIDADES", ["Penha", "Tatuapé"]);
    const FRUTAS = ["Morango", "Abacaxi"];
    ?>

    <h3>Acessando os dados</h3>
    <ol>
        <li>Banda que mais gosto:
            <?= $bandas[2] ?>
        </li>
        <li>Curso básico de: <?= $cursos[0] ?></li>
        <li>Quero comer : <?= $buteco[1] ?></li>
        <li>Estamos no Senac <?= UNIDADES[0] ?></li>
        <li>Fruta boa para caipirinha: <?= FRUTAS[0] ?></li>
    </ol>
    <hr>

    <h2>Array associativo</h2>
    <?php
    $curso = [
        // chave associativa
        // identificador => valor
        "titulo" => "Gastronomia",
        "carga_horaria" => 150,
        "descritivo" => "Aprenda a ferver água"
    ];

    ?>
    <h3>Acessando os dados (array associativo)</h3>
    <p>Nome do curso: <?= $curso["titulo"] ?></p>
    <p>Carga horaria: <?= $curso["carga_horaria"] ?></p>
    <p>Descritivo: <?= $curso["descritivo"] ?></p>

    <hr>

    <h2>Matriz (array dentro de array)</h2>

    <?php
    $planoDeEstudos = [
        ["JS AVANÇADO", "Node.js", "React"],
        ["PHP", "POO", "MySQL", "Python"],
        ["Teoria das cores", "Photoshop", "UX/UI"]
    ];

    ?>
    <p>Meu primeiro curso é: <?= $planoDeEstudos[0][1] ?></p>

    <ul>
        <li><?= $planoDeEstudos[0][2] ?></li>
        <li><?= $planoDeEstudos[1][2] ?></li>
        <li><?= $planoDeEstudos[2][1] ?></li>
        <li><?= $planoDeEstudos[2][0] ?></li>
    </ul>

    <hr>
    <h2>Funcões de análise de estruturas de dados (debug/depuração)</h2>

    <h3>print_r()</h3>
    <pre>
    <?= print_r($bandas) ?>
    </pre>

    <pre>
    <h3>var_dump()</h3>
    <?= var_dump($bandas) ?>
    </pre>

</body>

</html>