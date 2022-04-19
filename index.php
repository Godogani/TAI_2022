<?php
include "./database/bd.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h1 class="title">DALE DALE BD YES BABY</h1>
    <div class="formulario">
        <form action="index.php" method="post">
            <label>Nome teu manito</label>
            <input type="text" id="nome" name="nome"><br>
            <label>Teu CPF manito</label>
            <input type="text" id="cpf" name="cpf"><br>
            <label>TEU telefone manito</label>
            <input type="text" id="telefone" name="telefone"><br><br>
            <input type="submit" value="enviar">
        </form>
    </div>
    <br>
    <hr>
    <br>

    <?php
    $objBD = new BD();
    $objBD->connection();
    $result = $objBD->select_data();
    foreach ($result as $info) {
        echo "ID: " . $info['ID'] . " Nome: " . $info['nome'] . " Telefone: " . $info['telefone'] . " CPF: " . $info['cpf'] . "<br>";
    }

    if (!empty($_POST)) {
        echo "Salvar";
        var_dump($_POST);
        $objBD->inserir($_POST);
        header("Location: index.php");
    }



    ?>
</body>

</html>