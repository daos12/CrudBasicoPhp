<?php 

    include 'conexao.php';
    $id = $_POST["id"];

    $numProduto     = $_POST ["numProduto"];
    $nomeProduto    = $_POST ["nomeProduto"];
    $qtdProduto     = $_POST ["qtdProduto"];
    $catProduto     = $_POST ["catProduto"];
    $forn           = $_POST ["forn"];

    $sql = "UPDATE `produtos` SET `numProduto`=$numProduto,`nomeProduto`='$nomeProduto',`qtdProduto`=$qtdProduto,`catProduto`='$catProduto',`forn`='$forn' WHERE idProduto = $id";

    $atualizar = mysqli_query($conexao,$sql);

?>

<div class="container" style="width: 300px; text-align: center;margin: auto; margin-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Produto Atualizado com Sucesso!!</h4>

    <div>
        <a href="listarProduto.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>