<?php
require "src-inc/logica-fabricantes.php";
$id = $_GET['id'];
$fabricante = lerUmfabricante($conexao, $id);


if( isset($_POST['atualizar']) ){
    $nome = $_POST['nome'];
    atualizarFabricante($conexao, $id, $nome);
    require "src-inc/desconecta.php";
    header("location:visualizar-fabricantes.php");
}


// echo"<pre>";
// var_dump($fabricante); //var_dump -> serve para o programador verificar se está tudo funcionando
// echo"</pre>";


?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> UPDATE - CRUD com PHP e MySQL </title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <h1>UPDATE - CRUD com PHP e MySQL - <a href="index.php">Home</a></h1>
    <hr>
    
    <p>Utilize o formulário abaixo para atualizar os dados de <b>um fabricante</b>.</p>

    <form action="#" method="post">
    <input type="hidden" name="id"
    value="<?=$fabricante['id']?>">
           
        
	    <p>
            <label for="nome">Nome:</label><br>
            <input value="<?=$fabricante['nome']?>"
            type="text" name="nome" id="nome" required>
        </p>   
        <button name="atualizar">Atualizar fabricante</button>
	</form>	

   
    <hr>
    <p><a href="visualizar-fabricantes.php">Voltar à lista de fabricantes</a></p>


</div>

</body>
</html>