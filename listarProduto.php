<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Lista de Pordutos</title>
</head>

<body>

    <div class="container">
        <h3 style="text-align:center;">Listagem de Produtos</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Alteração</th>
                </tr>
            </thead>

            <?php

            include 'conexao.php';

            $sql = "SELECT * FROM `produtos`";
            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)) {
                $idProduto      = $array["idProduto"];
                $numProduto     = $array["numProduto"];
                $nomeProduto    = $array["nomeProduto"];
                $qtdProduto     = $array["qtdProduto"];
                $catProduto     = $array["catProduto"];
                $forn           = $array["forn"];
            ?>
                <tr>
                    <td><?php echo $numProduto ?></td>
                    <td><?php echo $nomeProduto ?></td>
                    <td><?php echo $qtdProduto ?></td>
                    <td><?php echo $catProduto ?></td>
                    <td><?php echo $forn ?></td>

                    <td><a class="btn btn-outline-dark" href="editarProduto.php?id=<?php echo $idProduto ?>" role="button">Editar</a>
                    <a class="btn btn-outline-danger" href="deletarProduto.php?id=<?php echo $idProduto ?>" role="button">Deletar</a></td>
                </tr>

            <?php } ?>

        </table>
    </div>

</body>

</html>