
<?php
require "src-inc/logica-produtos.php";
$produtos = lerProdutos($conexao);
//  echo "<pre>";
//  var_dump($produtos);
// echo "</pre>";


?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> SELECT - CRUD com PHP e MySQL </title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <h1>SELECT - CRUD com PHP e MySQL - <a href="index.php">Home</a></h1>
    <p><i>Lendo e carregando <b>todos os produtos</b></i></p>
    <hr>

    <?php foreach($produtos as $produto) { ?>

    <div> 
        <p> 
            <b>Fabricante:</b><?=$produto['nome_fabricante'] ?> </p>
        <p><b>Nome:</b> <?=$produto['nome'] ?> </p>
        <p><b>Descrição:</b> <?=$produto['descricao'] ?> </p>
        <p>
    <a href="editar-produto.php?id=<?=$produto['id']?>">EDITAR</a> - 
    <a href="excluir-produto.php?id=<?=$produto['id']?>">EXCLUIR</a>
        </p>
    </div>
    <hr>   
    <?php 
} 
require "src-inc/desconecta.php";

?> 

    <p><a href="index.php">Voltar ao início</a></p>
</div>


</body>
</html>