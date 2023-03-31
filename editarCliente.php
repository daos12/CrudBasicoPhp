<?php
    include 'conexao.php';  
    $id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar Clientes</title>
</head>

<body>

    <section>
        <div class="container tamanhoForm">
            <form action="atualizarCliente.php" method="POST">
                <?php 
                $sql = "SELECT * FROM `cliente` WHERE idCliente = $id";

                $buscar = mysqli_query($conexao, $sql);
    
                while ($array = mysqli_fetch_array($buscar)) {
                    $idCliente      = $array["idCliente"];
                    $nomeCliente    = $array["nomeCliente"];
                    $telCliente     = $array["telCliente"];
                    $genCliente     = $array["genCliente"];
                    $emailCliente   = $array["emailCliente"];
                    $endCliente     = $array["endCliente"];
                    $cpfCliente     = $array["cpfCliente"];
                ?>


                <h3>Editar Clientes</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="nomeCliente" value = "<?php echo $nomeCliente ?>">

                    <input type="text" class="form-control" name="id" value = "<?php echo $id ?>" style="display:none;">

                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="telCliente" value = "<?php echo $telCliente ?>">

                </div>

                <div class="form-group">
                    <label>Gênero</label>
                    <select class="form-control" name="genCliente">
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outros</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" class="form-control" name="emailCliente" value = "<?php echo $emailCliente ?>">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input type="text" class="form-control" name="endCliente" value = "<?php echo $endCliente ?>">

                </div>

                <div class="form-group">
                    <label>CPF</label>
                    <input type="text" class="form-control" name="cpfCliente" value = "<?php echo $cpfCliente ?>">

                </div>

                <div class="botao">
                    <button type="submit" class="btn btn-secondary">Editar</button>
                </div>

                <?php  }?>
            </form>
        </div>
    </section>

</body>

</html>