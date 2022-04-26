<?php
include "../database/bd.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles.css" rel="stylesheet">
    <title>Formulário</title>
</head>

<body>
    <h1 class="title">Formulário</h1>
    <a href="../index.php">Vai voltar fracassado?</a><br/>

    <div class="formulario">
        <form action="./listaUsuario.php" method="get">
            <input type="hidden" id="id" name="id" value="<?php echo !empty($result->ID) ? $result->ID : "" ?> ">
            <label>Nome teu manito</label>
            <input type="text" id="nome" name="nome" value="<?php echo !empty($result->nome) ? $result->nome : "" ?> "><br>
            <label>Teu CPF manito</label>
            <input type="text" id="cpf" name="cpf"  value="<?php echo !empty($result->cpf) ? $result->cpf : "" ?> "><br>
            <label>TEU telefone manito</label>
            <input type="text" id="telefone" name="telefone"  value="<?php echo !empty($result->telefone) ? $result->telefone : "" ?> "><br><br>
            <input type="submit" value="enviar">
        </form>
    </div>
    <br>
    <hr>
    <br>

    <?php
$objBD = new BD();
$objBD->connection();

if (!empty($_GET['ID'])) {
    $result = $objBD->buscar($_GET['ID']);
    var_dump($result);
}

if (!empty($_POST)) {
    if(!empty($_POST['ID'])){
        $objBD->atualizar($_POST);
    }
    echo "Salvar";
    var_dump($_POST);
    $objBD->inserir($_POST);
    header("Location: index.php");
}

?>
</body>

</html>