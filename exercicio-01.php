<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <style>
        <?php $cor = "gray"; ?>
        body{ background-color: <?=$cor?>;}
    </style>
</head>
<body>
<h1>Bem vindo ao site</h1>
<hr>

<?php 
// definindo fuso horário
date_default_timezone_set("America/Sao_Paulo");

//$data = "18/07/2023";
$data = date("d/m/Y");
$hora = date("H:i");
echo "HORA: $hora";

const NOME = "Eduardo";
const CURSO = "Técnico em TI";
$CargaHoraria = 100;
$limite = $CargaHoraria / 4;

 echo "<p>a Data de hoje é ".$data."</p>";
 
?>
<p>seu nome é <b><?=NOME?></b></p>
<p>Seu curso é <?=CURSO?></p>

<?php
echo "<p style='color:pink'>Sua carga de horário é de ".$CargaHoraria." horas</p>"; 
/* // poderia simplificar <p> carga horaria <?=$CargaHoraria?> </p>*/

echo "<p style='color:blue'> seu limite de faltas é de ".$limite." faltas</p>";
/* simplificar <p> limite de <?=$limite?> </p> */
?>

<?php
$teste = "PHP Intelephense";
echo $teste;
?>


</body>
</html>