<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
    <style>
        table,td,tr,th{
            border: 1px solid black;
            margin: auto;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 5px;
        }

        table{
            border-collapse: collapse;
            width: 60%;
            min-width: 400px;
        }
  
        tr:nth-child(even){
            background-color: #f2f2f2;
        }

        tr:nth-child(odd){
            background-color: #e6e6e6;
        }

        tr:hover{
            background-color: #d9d9d9;
        }   
    </style>
</head>
<body>
 <h1>Criar array associativo com 6 nomes de linguagens de programação e pequena descrição </h1>   

<?php
$linguagens = [
    "HTML" => "Estruturação",
    "Css" => "Estilo",
    "JS" => "Comportamentos",
    "PHP" => "Back-end",
    "SQl" => "Manipulação de dados",
    "Java" => "Software"
]
?>

<table>
    <tr>
    <th>ID</th>
    <th>Linguagem</th>
    <th>Descrição</th>
    </tr>
<?php
$contagem = 1;
foreach($linguagens as $linguagem => $descritivo){
    ?>
    <tr>
       <td><?=$contagem?></td>
        <td><?=$linguagem?></td>
        <td><?=$descritivo?></td>
        
    </tr> 
    <?php
    $contagem++;
}
?>
</table>


</body>
</html>