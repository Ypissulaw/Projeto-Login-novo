<?php
try {
    $pdo = new PDO('mysql:dbname=projeto-cadastrar', 'root', '');
} catch (PDOException $e) {
}

if(!empty($_GET['token'])) {
	$token = $_GET['token'];

	$sql = "SELECT * FROM usuarios_token WHERE hash = :hash AND used = 0 AND expirado_em > NOW()";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":hash", $token);
	$sql->execute();

	if($sql->rowCount() > 0) {
		$sql = $sql->fetch();
		$id = $sql['id_usuario'];

		if(!empty($_POST['pass'])) {
			$senha = $_POST['pass'];

			$sql = "UPDATE usuarios SET password = :pass WHERE id = :id";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":pass", md5($senha));
			$sql->bindValue(":id", $id);
			$sql->execute();

			$sql = "UPDATE usuarios_token SET used = 1 WHERE hash = :hash";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":hash", $token);
			$sql->execute();

			echo "Senha alterada com sucesso!";
			exit;
		}

		?>
		<form method="POST">
			Digite a nova senha:<br/>
			<input type="password" name="pass" /><br/>
			<input type="submit" value="Mudar senha" />
		</form>
		<?php



	} else {
		echo "Token inválido ou usado!";
		exit;
	}
}