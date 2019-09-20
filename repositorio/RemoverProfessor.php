<?php
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=web2", "root", "");
	} catch (PDOException $erro) {
		echo $erro->getMessage();
	}

	require_once '../modelo/Professor.php';
	$professor = new Professor();
	$aluno->setRa($_POST['ra']);

	try {
		$sql = "DELETE FROM professor WHERE ra = '" . $aluno->getRa() . "'";

		$pdo->exec($sql);
		echo "<p>Removido com sucesso.</p>";
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}

	//var_dump($professor);

	//header('Location: /paginadestino.php');
?>