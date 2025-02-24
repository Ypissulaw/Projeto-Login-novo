<?php
class Cadastrar {
    private $pdo;
    private $table = "usuarios";
    public $id;
    public $username;
    public $password;
    public $hash;

    // Construtor conectando ao banco
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function registrar() {
        // Primeiro: criptografar a senha
        $this->hash = password_hash($this->password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO " . $this->table . " (username, password) VALUES (:username, :password)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $this->hash);

        return $stmt->execute();
    }

    public function verificarUsuario() {
        $sql = "SELECT * FROM " . $this->table . " WHERE username = :username";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":username", $this->username);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function entrar() {
        $sql = "SELECT password FROM " . $this->table . " WHERE username = :username";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":username", $this->username);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row && password_verify($this->password, $row['password']);
    }
}
?>
