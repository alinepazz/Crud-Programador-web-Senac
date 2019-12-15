<?php
if( isset($_POST['inserir']) ){
    //Importando as funções
   require "src-inc/logica-fabricantes.php";


   //Obtendo o nome que foi digitado no formulário
   $nome = $_POST['nome'];


   //Invocando a função insert
    inserirFabricante($conexao, $nome);


// Desconexão com o banco

require "src-inc/desconecta.php";


//Redirecionar para a página de visualização
header("location:visualizar-fabricantes.php");

}



?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> INSERT - CRUD com PHP e MySQL </title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <h1>INSERT - CRUD com PHP e MySQL - <a href="index.php">Home</a></h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para cadastrar um <b>fabricante</b>.</p>
    
	<form action="#" method="post">
	    <p>
            <label for="nome">Nome:</label><br>
	        <input type="text" name="nome" id="nome" required>
        </p>	    
        <button name="inserir">Inserir fabricante</button>
	</form>	

	<hr>
    <p><a href="index.php">Voltar ao início</a></p>


</div>

</body>
</html>