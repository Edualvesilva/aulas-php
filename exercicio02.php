<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <style>
        h1 {
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: space-between;
        }

        .parte1 {
            background-color: lightblue;
            width: 50%;
        }

        .parte2 {
            background-color: lightsalmon;
            width: 50%;
        }
    </style>
</head>

<body>
    <?php
    $usuario1 = [
        "usuario" => "Eduardo",
        "email" => "Edualves@gmail.com",
        "senha" => "854854",
        "idade" => "18",
        "sexo" => "masculino",
        "cidade" => "São Paulo"
    ];

    $usuario2 = [
        "usuario" => "Geovana",
        "email" => "Geovana16@gmail.com",
        "senha" => "mine325",
        "idade" => "15",
        "sexo" => "Feminino",
        "cidade" => "São Paulo"
    ];

    ?>
    <h1>Bem vindo</h1>
    <div class="container">
        <article class="parte1">
            <h2>usuário: <?= $usuario1["usuario"] ?></h2>
            <h3>Email: <?= $usuario1["email"] ?> </h3>
            <h4>Idade: <?= $usuario1["idade"] ?></h4>
            <h4>Sexo: <?= $usuario1["sexo"] ?></h5>
        </article>

        <article class="parte2">
            <h2>usuário: <?= $usuario2["usuario"] ?></h2>
            <h3>Email: <?= $usuario2["email"] ?> </h3>
            <h4>Idade: <?= $usuario2["idade"] ?></h4>
            <h4>Sexo: <?= $usuario2["sexo"] ?></h5>

        </article>
    </div>
</body>

</html>