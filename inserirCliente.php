<?php

include 'conexao.php';

$nomeCliente    = $_POST["nomeCliente"];
$telCliente     = $_POST["telCliente"];
$genCliente     = $_POST["genCliente"];
$emailCliente   = $_POST["emailCliente"];
$endCliente     = $_POST["endCliente"];
$cpfCliente     = $_POST["cpfCliente"];


$sql = "INSERT INTO `cliente`(`nomeCliente`, `telCliente`, `genCliente`, `emailCliente`, `endCliente`, `cpfCliente`) 
VALUES ('$nomeCliente','$telCliente','$genCliente','$emailCliente','$endCliente','$cpfCliente')";

$inserir = mysqli_query($conexao,$sql);


?>

<div class="container" style="width: 300px; text-align: center;margin: auto; margin-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Cliente Cadastrado com Sucesso!!</h4>

    <div>
        <a href="index.php" role="button" class="btn btn-sm btn-secondary">Voltar para o Menu</a>
    </div>
</div>