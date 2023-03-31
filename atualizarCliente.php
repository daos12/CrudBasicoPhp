<?php

    include 'conexao.php';
    $id = $_POST["id"];

    $nomeCliente    = $_POST["nomeCliente"];
    $telCliente     = $_POST["telCliente"];
    $genCliente     = $_POST["genCliente"];
    $emailCliente   = $_POST["emailCliente"];
    $endCliente     = $_POST["endCliente"];
    $cpfCliente     = $_POST["cpfCliente"];

    $sql = "UPDATE `cliente` SET `nomeCliente`='$nomeCliente',`telCliente`='$telCliente',`genCliente`='$genCliente',`emailCliente`='$emailCliente',`endCliente`='$endCliente',`cpfCliente`='$cpfCliente' WHERE idCliente = $id";

    $atualizar = mysqli_query($conexao, $sql);

?>

<div class="container" style="width: 300px; text-align: center;margin: auto; margin-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <h4>Cliente Atualizado com Sucesso!!</h4>

    <div>
        <a href="listarCliente.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>