<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
    <style>
        .aprovado {
            color: green;
        }

        .reprovado {
            color: red;
        }

        h1,
        h2 {
            text-align: center;
        }
    </style>
</head>

<h1>Exercicio Usando function</h1>
<ul>
    <li>Crie duas variáveis para representar as notas de um aluno</li>
    <li>Calcule a média destas notas e verifique a situação do aluno (aprovado ou reprovado)</li>
</ul>


<h2>Desafios</h2>
<ol>
    <li>Use duas funções: uma para isolar a lógica de cálculo da média, e outra para isolar a lógica de verificação da situação do aluno.</li>
    <li> Use recursos do CSS para formatar em vermelho caso reprovado, e azul caso aprovado.</li>

</ol>

<body>
    <?php
    $aluno = "Eduardo";
    $aluna = "Gabriela";

    function VerMedia($nota1, $nota2)
    {
        $media = ($nota1 + $nota2) / 2;
        return $media;
    };
    function situacao($total)
    {
        if ($total >= 7) {
            return "<span class='aprovado'>Você Passou!!!</span>";
        }
        return "<span class='reprovado'>Você Foi reprovado!</span>";
    };
    ?>
    <p> <?= $aluno ?> Sua média é: <?= VerMedia(5, 6) ?>,<?= situacao(VerMedia(5, 6)) ?></p>
    <p><?= $aluna ?> Sua média é: <?= VerMedia(10, 9) ?>,<?= situacao(VerMedia(10, 9)) ?></p>

</body>

</html>