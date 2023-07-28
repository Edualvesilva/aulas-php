<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .comprar{
            color: red;
        }

        .urgencia{
            color: red;
            font-weight: bold;
            background-color: yellow;
        }

        .normal{
            color: green;
        }

        h1,h2,h3{
            color: blueviolet ;
        }

        p{
            color: chocolate;
        }

        h4{color: hotpink;}

    </style>
</head>

<body>
    <h1>Estruturas Condicionais</h1>
    <hr>
    <h2>Simples</h2>
<?php
$numero = 5;
if($numero > 1){
    echo "<p>$numero é maior que 1</p>";
}

// Sintaxe sem chaves
if ($numero > 1) echo "<p>$numero é maior que 1</p>";

?>
    <h2>Composta</h2>
<?php
$produto = "Ultrabook asus";
$qtdEmEstoque = 10; // o que temos
$qtdCritica = 15; // mínimo necessário

echo "<h3>$produto</h3>";
echo "<h4>Quantidade em estoque : $qtdEmEstoque</h4>";

if ($qtdEmEstoque < $qtdCritica) {
    echo "<p class='comprar'>É necessário comprar!</p>";

    // Condicional ANINHADA
    if($qtdEmEstoque == 0){
        echo "<p class='urgencia'>Urgente!</p>";
    }

} else {
    echo "<p class='normal'>Estoque normal</p>";
}

?>

    <h2>Encadeada</h2>
<?php
/* Opcões para o exemplo:
1 -> Lanche
2 -> Pizza
3 -> Paçoca
Qualquer outra -> opção inválida
*/
$opcaoEscolhida = 1; // Comece com qualquer valor

echo "<h3>Opção: $opcaoEscolhida</h3>";

if ($opcaoEscolhida == 1){
    echo "<p>Ok,vamos fazer o Lanche</p>";
} elseif($opcaoEscolhida == 2){
    echo "<p>Beleza, pizza no forno...</p>";
}elseif($opcaoEscolhida == 3){
    echo "<p>Professor ficou feliz</p>";
} else {
    echo "<p>Não entendi... vou chamar a Valeska";
}

// Exemplo == e ==
/* Em resumo, ao comparar com dois sinais 
de igual a comparação será feita APENAS 
em relação aos VALORES.

E ao comparar com três sinais de 
igual, a comparação será feita em relação
ao VALOR E AO TIPO DE DADOS. portanto,
é mais restritivo.

*/

$a = 10;
$b = 10;
$resultado = $a == $b; //LÓGICO/BOOLEAN
var_dump($resultado);

echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);

?>
</body>

</html>