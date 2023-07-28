<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>

</head>
<body>
 <h1>Bem vindo funcionário</h1>   

<?php
$funcionario = "Eduardo";
$salario = 1500;

?>

<p><?=$funcionario?> seu salário inicial de <?=$salario?></p>

<?php
if($salario < 1500){
    $resultado = $salario * 1.15;
}elseif($salario <= 3000){
    $resultado = $salario *1.10;
}else{
    $resultado = $salario *1.05;
}

$resultado_formatado = number_format($resultado,2,',','.');

?>
<p>salário final de R$ <?=$resultado_formatado?></p>


</body>
</html>