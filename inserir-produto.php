

<?php
require "src-inc/logica-fabricantes.php";
$fabricantes = lerFabricantes($conexao);


if( isset($_POST['inserir']) ){
    require "src-inc/logica-produtos.php";
    $nome = $_POST['nome'];
    $fabricanteId = $_POST["fabricante"];
    $descricao = $_POST['descricao'];
    inserirProduto($conexao, $nome, $descricao, $fabricanteId);
    require "src-inc/desconecta.php";
    header("location:visualizar-produtos.php");
}




// echo "<pre>";
// var_dump($fabricantes);
// echo "</pre>";


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
    		
    <p>Utilize o formulário abaixo para cadastrar um <b>produto</b>.</p>
    
	<form action="#" method="post">
	    <p><label for="nome">Nome:</label><br>
	    <input type="text" name="nome" id="nome" required></p>
	    
        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante" required>
                <option value=""></option>
<?php foreach($fabricantes as $fabricante) { ?>
<option value="<?=$fabricante['id']?>">
    <?=$fabricante['nome']?>

</option>



<?php } ?>










            </select>
        </p>

	    <p><label for="descricao">Descrição:</label><br>
	    <textarea name="descricao" id="descricao" rows="3" cols="40" maxlength="500" required></textarea>
	    
       <p> <button name="inserir">Inserir produto</button></p>
	</form>	

	<hr>
    <p><a href="index.php">Voltar ao início</a></p>


</div>

</body>
</html>