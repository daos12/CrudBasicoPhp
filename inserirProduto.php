<?php

include 'conexao.php';

$numProduto     = $_POST["numProduto"];
$nomeProduto    = $_POST["nomeProduto"];
$qtdProduto     = $_POST["qtdProduto"];
$catProduto     = $_POST["catProduto"];
$forn           = $_POST["forn"];

$sql = "INSERT INTO `produtos`(`numProduto`, `nomeProduto`, `qtdProduto`, `catProduto`, `forn`) 
VALUES ($numProduto,'$nomeProduto',$qtdProduto,'$catProduto','$forn')";

$inserir = mysqli_query($conexao, $sql);


?>

<div class="container" style="width: 300px; text-align: center;margin: auto; margin-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Produto Cadastrado com Sucesso!!</h4>

    <div>
        <a href="index.php" role="button" class="btn btn-sm btn-secondary">Voltar para o Menu</a>
    </div>
</div>