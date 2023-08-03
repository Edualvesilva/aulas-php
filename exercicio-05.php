<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
</head>

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
            return "Você Passou";
        }
        return "Você Foi reprovado";
    };
    ?>
    <p> <?=$aluno?> Sua média é: <?= VerMedia(5, 6)?> <?=situacao(VerMedia(5, 6))?></p>
    <p><?=$aluna?> Sua média é: <?= VerMedia(10, 9)?> <?=situacao(VerMedia(10,9))?></p>

</body>

</html>