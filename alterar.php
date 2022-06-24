<?php
//incluindo conexao com banco
include "conexao.php";

//puxando os dados do forms e salvando nas variaveis

$IDProduto = $_POST['Id'];
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
    $recebeDados = "UPDATE produtos
    SET
        NomeProduto = '$nomeProduto',
        IDFornecedor = '$IdFornecedor',
        IDCategoria = '$IdCategoria',
        QuantidadePorUnidade = '$QTUnidade',
        PrecoUnitario = '$PUnitario',
        UnidadesEmEstoque = '$UniEstoque',
        UnidadesEmOrdem = '$UniOrdem',
        NivelDeReposicao = '$NivelReposicao',
        Descontinuado = '$Descontinuado'
    WHERE IDProduto = '$IDProduto'";

//validando a query

    $alterar = mysqli_query($conn, $recebeDados)
    or die(mysqli_error($conn));

//retorna a pagina de produtos

   header('Location:index.php');

?> 