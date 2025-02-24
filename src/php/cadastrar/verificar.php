<?php
include_once '../config/config.php';
include_once '../cadastro.class.php';

$cadastrar = new Cadastrar($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cadastrar->username = $_POST['username'];
    $cadastrar->password = $_POST['password'];
    
    if (isset($_POST['entrar'])) {
        // Tentar login
        if ($cadastrar->verificarUsuario()) {
            if ($cadastrar->entrar()) {
                echo "Login bem-sucedido!";
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }
    } elseif (isset($_POST['criar'])) {
        // Registrar novo usuário
        if ($cadastrar->verificarUsuario()) {
            echo "Usuário já existe.";
        } else {
            if ($cadastrar->registrar()) {
                echo "Usuário registrado com sucesso!";
            } else {
                echo "Erro ao registrar o usuário.";
            }
        }
    }
}
?>
