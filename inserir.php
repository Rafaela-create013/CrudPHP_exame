<?php
//incluindo conexao com banco
include "conexao.php";

//puxando os dados do forms e salvando nas variaveis

$IdProduto = $_POST['IdProduto'];
$nomeProduto  = $_POST['nomeProduto'];
$IdFornecedor = $_POST['IdFornecedor'];
$IdCategoria = $_POST['IdCategoria'];
$QTUnidade = $_POST['QTUnidade'];
$PUnitario = $_POST['PUnitario'];
$UniEstoque = $_POST['UniEstoque'];
$UniOrdem = $_POST['UniOrdem'];
$NivelReposicao = $_POST['NivelReposicao'];
$Descontinuado = $_POST['Descontinuado'];

//gravando os dados no banco
    $recebeDados = "INSERT INTO produtos
    VALUES(
        '$IdProduto',
        '$nomeProduto',
        '$IdFornecedor',
        '$IdCategoria',
        '$QTUnidade',
        '$PUnitario',
        '$UniEstoque',
        '$UniOrdem',
        '$NivelReposicao',
        '$Descontinuado')";

//validando a query

    $cadastro = mysqli_query($conn, $recebeDados)
    or die(mysqli_error($conn));

//retorna a pagina de produtos

    header('Location:index.php');

?>