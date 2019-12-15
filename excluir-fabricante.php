<?php
require "src-inc/logica-fabricantes.php";


//Obter o valor enviado via url sempre via GET

$id = $_GET['id'];

excluirFabricante($conexao, $id);
require "src-inc/desconecta.php";
header("location:visualizar-fabricantes.php");

