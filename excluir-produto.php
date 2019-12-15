<?php
require "src-inc/logica-produtos.php";
$id = $_GET['id'];
excluirProduto($conexao, $id);
require "src-inc/desconecta.php";
header("location:visualizar-produtos.php");