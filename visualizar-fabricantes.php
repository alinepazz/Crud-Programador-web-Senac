<?php

require "src-inc/logica-fabricantes.php";
$fabricantes = lerFabricantes($conexao);
//var_dump() -> função de saída estruturada/técnica

// echo "<pre>";
// var_dump($fabricantes);
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
    <p><i>Lendo e carregando <b>todos os fabricantes</b></i></p>
    <hr>
<?php foreach($fabricantes as $fabricante ) { ?>
    <div> 
        <p><b>ID:</b> <?=$fabricante['id']?>  </p>
        <p><b>Nome:</b> <?=$fabricante['nome']?> </p>
        <p>
    <a href="editar-fabricante.php?id=<?=$fabricante['id']?>">EDITAR</a> - 
    <a href="excluir-fabricante.php?id=<?=$fabricante['id']?>">EXCLUIR</a>
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