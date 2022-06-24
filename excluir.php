<?php
//incluindo conexao com banco
include "conexao.php";

//puxando o dado do forms e salvando nas variavel

$IdProduto = $_POST['Id'];

//gravando os dados no banco
    $recebeDados = "DELETE FROM produtos WHERE IDProduto = '$IdProduto'";

//validando a query

    $cadastro = mysqli_query($conn, $recebeDados)
    or die(mysqli_error($conn));

//retorna a pagina de produtos

    header('Location:index.php');

?>