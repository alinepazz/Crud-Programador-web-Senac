<?php
require "conecta.php";

function inserirFabricante($conexao, $nome){
    // Montar o comando SQL para inserir

    $sql = "INSERT INTO fabricantes(nome) VALUES('$nome')";


    //Executar o comando  SQL(query/faz consultas)
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao)); 

}//fim function inserir



    //SELECT

    function lerFabricantes($conexao){
        $fabricantes = [];

        //Montar o comando SQL
        $sql = "SELECT * FROM fabricantes ORDER BY nome";

        //Executando a query
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

        //Transformando o resultado em um array

        while($fabricante = mysqli_fetch_assoc($resultado) ){
            array_push($fabricantes, $fabricante);
        }

        return $fabricantes;

    }// fim function lerFabricantes

    




    //DELETE

    function excluirFabricante($conexao, $id){
        $sql = "DELETE FROM fabricantes WHERE id = $id";
        return mysqli_query($conexao, $sql) or die(mysqli_error($conexao));


    }// fim da function excluirFabricante





    
    //SELECT para carregar/buscar os dados dos fabricantes

    function lerUmfabricante($conexao, $id) {
        $sql = "SELECT * FROM fabricantes WHERE id = $id";
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        return mysqli_fetch_assoc($resultado);
    }// fim function lerUmFabricante





//UPDATE para atualizar os dados de UM FABRICANTE

function atualizarFabricante($conexao, $id, $nome){
    $sql ="UPDATE fabricantes SET nome = '$nome' WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao)); 

}//fim function atualizarFabricante


