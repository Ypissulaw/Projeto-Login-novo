<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $pass = "";
    private $dbname = "projeto-cadastrar";
    public $pdo;

    public function getpdo() {
        $this->pdo = null;
        try {
            $this->pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->pass);
            $this->pdo->exec("set names utf8");
        } catch(PDOException $error) {
            echo "Falha na conexão: " . $error->getMessage();
        }
        return $this->pdo;
    }
}
?>
