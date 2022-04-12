<?php

class BD{
    private $host = "localhost";
    private $dbname = "database";
    private $port = 3306;
    private $user = "root";
    private $password = "";
    private $db_charset = "utf8";
    public function connection()
    {
        $conn = "mysql:host=$this->host;dbname=$this->dbname;port=$this->port";
        return new PDO($conn, $this->user,$this->password,
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . $this->db_charset]
        );
    }
    public function select_data(){
        $conn=$this->connection();
        $default = $conn->prepare("SELECT * from user");
        $default->execute();

        return $default;
    }
}
?>