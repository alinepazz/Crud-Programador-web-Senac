<?php
require "conecta.php";

//INSERT

function inserirProduto($conexao, $nome, $descricao, $fabricanteId){
    // Montar o comando SQL para inserir

    $sql = "INSERT INTO produtos(nome, descricao, fabricante_Id) VALUES('$nome', '$descricao', $fabricanteId)";


    //Executar o comando  SQL(query/faz consultas)
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao)); 

}//fim function inserir



    //SELECT

    function lerProdutos($conexao){
        $produtos = [];

        /*CONSULTA TRAZENDO DADOS DE DUAS TABELAS:
        produtos e fabricantes
        
       INNER JOIN -> COMANDO que permite fazer JUNÇÃO entre tabelas 
        a partir de um critério*/

      

        $sql = "SELECT produtos.*, fabricantes.nome AS nome_fabricante FROM produtos INNER JOIN fabricantes ON produtos.fabricante_id = 
        fabricantes.id ORDER BY produtos.nome";

        //Executando a query
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

        //Transformando o resultado em um array

        while($produto = mysqli_fetch_assoc($resultado) ){
            array_push($produtos, $produto);
        }

        return $produtos;

    }// fim function lerProduto

    




    //DELETE

    function excluirProduto($conexao, $id){

        $sql = "DELETE FROM produtos WHERE id = $id";

        return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));


    }// fim da function excluirProduto





    
    //SELECT para carregar/buscar os dados dos produtos

    function lerUmProduto($conexao, $id) {
        $sql = "SELECT * FROM fabricantes WHERE id = $id";
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        return mysqli_fetch_assoc($resultado);
    }// fim function lerUmProduto





//UPDATE para atualizar os dados de UM PRODUTO

function atualizarProduto($conexao, $id, $nome){
    $sql ="UPDATE fabricantes SET nome = '$nome' WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao)); 

}//fim function atualizarProduto


