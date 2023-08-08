<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= getPageTitle(); ?> - Site PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php
    function getPageTitle()
    {   // Recuperar/Descobrir qual o nome da página aberta no momento
        $page = $_SERVER['PHP_SELF'];

        // $pageTitle = pathinfo($page,PATHINFO_FILENAME);
        $pageTitle = basename($_SERVER["PHP_SELF"]);

        switch ($pageTitle) {
            case "index.php":
                return "Página inicial";
                break;
            case "cursos.php":
                return "Cursos";
                break;
            case "contato.php":
                return "Contato";
                break;
            case "duvidas.php":
                return "Dúvidas";
        }
    };

    ?>
    <header>
        <h1><?= getPageTitle(); ?></h1>
        <nav>
            <a href="index.php">Página Inicial</a>
            <a href="cursos.php">Cursos</a>
            <a href="duvidas.php">Dúvidas</a>
            <a href="contato.php">Contato</a>
        </nav>

    </header>

    <main>