<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD Produtos</title>
</head>
<body>
    <h1> Crud básico da tela de Produtos</h1>
    <h3>Veja os produtos existentes no banco de dados:</h3>

    <?php
        //chamando a conexao com o banco 
        include "conexao.php";

        //buscando informações

        $valoresBanco = "SELECT * FROM produtos";
        $resultadoBanco = mysqli_query($conn, $valoresBanco);
        $valoresArray = mysqli_num_rows($resultadoBanco);
    
        //verificando se os dados existem, se existirem vamos mostrar
    
        if($valoresArray > 0){
            while($dados = mysqli_fetch_array($resultadoBanco)){
                //mostrando dados dentro de uma tabela html
                
                $IDProduto = $dados['IDProduto'];
                $nomeProduto = $dados['NomeProduto'];
                $IdFornecedor = $dados['IDFornecedor'];
                $IdCategoria = $dados['IDCategoria'];
                $QTUnidade = $dados['QuantidadePorUnidade'];
                $PUnitario = $dados['PrecoUnitario'];
                $UniEstoque = $dados['UnidadesEmEstoque'];
                $UniOrdem =  $dados['UnidadesEmOrdem'];
                $NivelReposicao = $dados['NivelDeReposicao'];
                $Descontinuado = $dados['Descontinuado'];
                ?>
            
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id Produto</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Id Fornecedor</th>
                    <th scope="col">Id Categoria</th>
                    <th scope="col">Quant. por Unidade</th>
                    <th scope="col">Preço Unitario</th>
                    <th scope="col">Uni. estoque</th>
                    <th scope="col">Uni. em ordem</th>
                    <th scope="col">Nivel de Repos.</th>
                    <th scope="col">Descontinuado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row" class="table-dark"><?php echo $IDProduto ?></th>
                <form action="alterar.php" method="POST">
                    <td><input type="text" name="nomeProduto" value="<?php echo $nomeProduto ?>"></td>
                    <td ><input type="number" name="IdFornecedor" value="<?php echo $IdFornecedor ?>"></td>
                    <td><input type="number" name="IdCategoria" value="<?php echo $IdCategoria ?>"></td>
                    <td><input type="text" name="QTUnidade" value="<?php echo $QTUnidade ?>"></td>
                    <td><input type="number" name="PUnitario" value="<?php echo $PUnitario ?>"></td>
                    <td><input type="number" name="UniEstoque" value="<?php echo $UniEstoque ?>"></td>
                    <td><input type="number" name="UniOrdem" value="<?php echo $UniOrdem ?>"></td>
                    <td><input type="number" name="NivelReposicao" value="<?php echo $NivelReposicao ?>"></td>
                    <td><input type="text" name="Descontinuado" value="<?php echo $Descontinuado ?>"></td>
                    <td class="">
                        <input type="hidden" name="Id" value="<?php echo $IDProduto; ?>">
                        <input type="submit" value="Editar">
                    </td>
                </form>
                    <td>
                        <form action="excluir.php" method="POST" >
                            <input type="hidden" name="Id" value="<?php echo $IDProduto ?>">
                            <input type="submit" value="excluir"></td>
                        </form>
                    </td>
                </tr>   
                <?php } ?>   
            <?php } ?>   
            
            </tbody>
            <!-- criando o form para cadastrar dados no banco-->
                
                <form action="inserir.php" method="POST" >
                    <td><input type="number" name="IdProduto" placeholder="Id do produto"></td>
                    <td><input type="text" name="nomeProduto" placeholder="Nome do produto"></td>
                    <td><input type="number" name="IdFornecedor" placeholder="Id Fornecedor"></td>
                    <td><input type="number" name="IdCategoria" placeholder="Id Categoria"></td>
                    <td><input type="text" name="QTUnidade" placeholder="Quantidade por Unidade"></td>
                    <td><input type="number" name="PUnitario" placeholder="Preço por Unidade"></td>
                    <td><input type="number" name="UniEstoque" placeholder="Unidade em estoque"></td>
                    <td><input type="number" name="UniOrdem" placeholder="Unidades por ordem"></td>
                    <td><input type="number" name="NivelReposicao" placeholder="Nivel de reposição"></td>
                    <td><input type="text" name="Descontinuado" placeholder="Descontinuado"></td>
                    <td><input type="submit" value="Novo Cadastro"></td>
                </form>
            </table>
</body>
</html>