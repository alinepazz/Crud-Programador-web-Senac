<?php
/*Script para permitir que a aplicação/site
acesse o servidor de Banco de Dados*/ 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "progwebt12_vendas";


//Conectando com o banco de dados

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);


//Habilitando charset UTF8 também para a conexão do banco
mysqli_set_charset($conexao, "utf8");

/*Teste*/
// if(!$conexao){
//     die(mysqli_connect_error($conexao));
// }else {
//     echo "Beleza";
// }