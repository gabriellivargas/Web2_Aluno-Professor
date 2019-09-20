<?php
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=web2", "root", "");
	} catch (PDOException $erro) {
		echo $erro->getMessage();
	}

	require_once '../modelo/Aluno.php';
	$aluno = new Aluno();
	$aluno->setRa($_POST['ra']);
	$aluno->setNome($_POST['nome']);
	try {
		$sql = "UPDATE aluno SET nome = '" . $aluno->getNome() . "' WHERE ra = '" . $aluno->getRa() . "'";

		$pdo->exec($sql);
		echo "<p>Alterado com sucesso.</p>";
	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}

	//var_dump($aluno);

	//header('Location: /paginadestino.php');
?>