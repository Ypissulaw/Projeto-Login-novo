<?php

try {
    $pdo = new PDO('mysql:dbname=projeto-cadastrar', 'root', '');
} catch (PDOException $e) {
}


if(!empty($_POST['username'])) {

	$email = $_POST['username'];

	$sql = "SELECT * FROM usuarios WHERE username = :username";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":username", $email);
	$sql->execute();

	if($sql->rowCount() > 0) {

		$sql = $sql->fetch();
		$id = $sql['id'];

		$token = md5(time().rand(0, 99999).rand(0, 99999));

		$sql = "INSERT INTO usuarios_token (id_usuario, hash, expirado_em) VALUES (:id_usuario, :hash, :expirado_em)";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":id_usuario", $id);
		$sql->bindValue(":hash", $token);
		$sql->bindValue(":expirado_em", date('Y-m-d H:i', strtotime('+2 months')));
		$sql->execute();

		$link = "redefinir.php?token=".$token;

		$mensagem = "Clique no link para redefinir sua senha:<br/>".$link;

		//mail($email, $assunto, $mensagem, $headers);

		echo "<a href='" . $link . "'>Redefinir?</a>";

		exit;

	}

}

?>
<form method="POST">
	Qual seu e-mail?<br/>
	<input type="email" name="username" /><br/>

	<input type="submit" value="Enviar"/>
</form>