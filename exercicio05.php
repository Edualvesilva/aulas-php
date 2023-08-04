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
    $alunos = [ [
        "aluno" => "Eduardo",
        "nota1" => 10,
        "nota2"  => 9 
    ],
    [
        "aluno" => "Bianca",
        "nota1" => 8,
        "nota2" => 7
    ],
    [
        "aluno" => "Pedro",
        "nota1"  => 5,
       "nota2" => 6
    ],
    [
        "aluno" => "Tanaka",
        "nota1" => 7,
        "nota2" => 7
    ],
    [
        "aluno" => "José",
        "nota1" => 5,
        "nota2" => 2
    ]
    ];
 
    function VerMedia(float $nota1,float $nota2):float
    {
        $media = ($nota1 + $nota2) / 2;
        return $media;
    }
    function situacao(float $total):string
    {
        if ($total >= 7) {
            return "<span class='aprovado'>Passou!!!</span>";
        }
        return "<span class='reprovado'>Foi reprovado!</span>";
    }

    foreach($alunos as $aluno => $informacao){
   ?>

    <p><?=$informacao["aluno"]?> está com a média de <?=VerMedia($informacao["nota1"],$informacao["nota2"])?> e <?=situacao(VerMedia($informacao["nota1"],$informacao["nota2"]))?></p>
    <?php };
    ?>

</body>

</html>