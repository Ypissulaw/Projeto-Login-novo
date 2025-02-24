<?php
include_once 'config/config.php';
include_once 'cadastro.class.php';

$cadastrar = new Cadastrar($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cadastrar->username = $_POST['username'];
    $cadastrar->password = $_POST['password'];
    
    // Determine a ação com base no botão clicado
    if ($_POST['action'] == 'login') {
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
    }
}
?>
