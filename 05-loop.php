<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
    
</head>

<body>
    <h1>Estruturas de Controle de Repetição</h1>
    <hr>

    <h2>While(enquanto)</h2>
<?php
$i = 1;
while($i <= 5 ){
    ?>
    <p><?=$i?></p>
    <?php
    $i++; 
}
?>
    <h2>DO/WHILE (repita/até)</h2>
<?php
$j = 1;

do{
    ?>
    <h3> Titulo <?=$j?></h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum laborum architecto, quibusdam reiciendis quos, aspernatur aliquid iusto dolorum odio provident labore. Laudantium reprehenderit nobis nulla aperiam perspiciatis? Asperiores, doloribus id? </p>
    <?php
   $j++;
}while($j <= 10)

?>

    <h2>FOR (para)</h2>
<?php
// variável de controle; condição; atualização
for($i = 1; $i <= 3;$i++){
?>
    <p><code>i</code> vale:<b><?=$i?></b></p>    
    <?php
}
?>
<!-- mini-exercícios
1) Crie uma array com os nomes dos meses do ano
2) Usando um loop(Qualquer um), acesse e mostre
os nomes dos meses dentro de uma lista ordenada
-->
<?php
$meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
?>
<ol>
    <?php
for( $i= 0;$i <= 11; $i++){
?>
    <li><?=$meses[$i]?></li>
<?php
}
?>
</ol> <!-- Fechando a lista -->
<?php
$alunos = ["Melissa","Tanaka","Zimbo","Eduardo"];


/* Função count() ou sizeof()
literalmente conta a quantidade de
elementos dentro de um array, retornando
um número inteiro. */

 /* Guardamos em "cache" (memória)
 a quantidade de elementos, evitando
 assim a contagem a cada iteração do loop
 e melhorando a performance. */
$quantidade = count($alunos);

for($i = 0; $i < $quantidade; $i++){
    ?>
    <p>Nome: <b><?=$alunos[$i]?></b></p>
    <?php
}
?>
 <hr>
 
 <h2>FOREACH (para cada)</h2>
 <p>útil e mais facil para lidar com <code>arrays</code>.</p>
 <ol>
<?php foreach($meses as $mes ) {?>
 <li> <?=$mes?></li>

<?php }?>
</ol>

    <h3>Manipulando arrays associativos</h3>
<?php
// Array Associativo
$clubes = [
    "Corinthians " => "Timão",
    "Palmeiras" => "Sem Mundial",
    "São Paulo" => "Tricolor",
    "Santos" => "Peixe"
];

foreach($clubes as $clube => $apelido){
    ?>
    <p>O <?=$clube?> é conhecido
    como <?=$apelido?>.</p>
<?php
}
?>
    <h2>Loop com matriz</h2>
<?php
$planoDeEstudos = [
    ["HTML","CSS","JS"],
    ["React","React Native"]
];    
// Usando for aninhado
for($linha = 0; $linha < count($planoDeEstudos);$linha++){
    for($coluna = 0; $coluna < count($planoDeEstudos[$linha]); $coluna++){
?>
<p><b><?=$planoDeEstudos[$linha][$coluna]?></b></p>
<?php }
}
?>
<hr>

<!-- Usando foreach aninhado -->
<?php
foreach($planoDeEstudos as $linha){
    foreach($linha as $coluna){
?>
    <p><i><?=$coluna?></i></p>
    <?php
    }
}
?>
    <h3>Loop com matriz associativa</h3>
<?php
$clientes = [
    [
        "nome" => "Chaves",
        "idade" => 8
    ],
    [
        "nome" => "Chapolin",
        "idade" => 25
    ],
    [
        "nome" => "Chiquinha",
        "idade" => 10
    ]
    ];

 foreach($clientes as $cliente){
?> 
 <p>Nome: <?=$cliente["nome"]?></p>
 <p>Idade: <?=$cliente["idade"]?></p>
 <?php
}

/* Lembrete sobre sintaxe de
estruturas de controle (condicionais e loops)
if(){
}else{    
} 

if():
else:
endif;    
*/
?>


</body>

</html>