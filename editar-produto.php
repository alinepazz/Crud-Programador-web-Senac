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
    
    <p>Utilize o formulário abaixo para atualizar os dados de <b>um produto</b>.</p>

    <form action="#" method="post">

	    <p><label for="nome">Nome:</label><br>
	    <input type="text" name="nome" id="nome" required></p>
        
        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante" required>
                <option value=""></option>
                <option value="1" selected>Asus</option>
                <option value="2">Dell</option>
                <option value="3">Apple</option>
            </select>
        </p>

	    <p><label for="descricao">Descrição:</label><br>
	    <textarea name="descricao" id="descricao" rows="3" cols="40" maxlength="500" required></textarea>
	    
        <button name="atualizar">Atualizar produto</button>
	</form>	   
    <hr>
    <p><a href="visualizar-produtos.php">Voltar à lista de produtos</a></p>


</div>

</body>
</html>