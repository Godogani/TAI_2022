<?php
include "./database/bd.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $obj = new BD();
    $obj->connection();
    $result = $obj->select_data();
    foreach($result as $info){
        echo "ID: ".$info['id']." Nome: ".$info['user_name']." Telefone: ".$info['telefone']." CPF: ".$info['cpf']."<br>";
    }


?>
</body>
</html>