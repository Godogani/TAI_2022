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
    <title>Listagem</title>
</head>

<body>
    <h1 class="title">Listagem Clientes</h1>
    <a href="./usuarioForm.php">Vai se cadastrar, anomalia?</a><br/>
    <a href="../index.php">Vai voltar fracassado?</a><br/>
    <?php
$objBD = new BD();
$objBD->connection();
$result = $objBD->select_data();
echo "<table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CPF</th>
        </tr>";
foreach ($result as $info) {
    echo "
        <tr>
            <td>" . $info['ID'] . "</td>
            <td>" . $info['nome'] . "</td>
            <td>" . $info['telefone'] . "</td>
            <td>" . $info['cpf'] . "</td>
            <td><a href='./usuarioForm.php?ID= ". $info['ID']."'>Editar</a></td>
        </tr>";
}
echo "</table>"

?>
</body>

</html>