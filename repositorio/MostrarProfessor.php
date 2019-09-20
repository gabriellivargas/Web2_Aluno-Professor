<?php
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=web2", "root", "");
	} catch (PDOException $erro) {
		echo $erro->getMessage();
	}

	require_once '../modelo/Professor.php';
	$professor = new Professor();

	try {
		$sql = "SELECT * FROM Professor";

		$tamanho = $pdo->query($sql);


		if($tamanho->rowCount() > 0) {

			echo "<table>";
			echo "<tr>";
			echo "<th> Nome</th>";
			echo "<th> Idade</th>";
			echo "<th> CPF</th>";
			echo "<th> Ra</th>";
			echo "<th> Siape</th>";
			echo "<th> Sexo</th>";
			echo "</tr>";
			while ($row = $tamanho->fetch()) {
				echo "<tr>";
				echo "<td>".$row['nome']."</td>";
				echo "<td>".$row['idade']."</td>";
				echo "<td>".$row['cpf']."</td>";
				echo "<td>".$row['siape']."</td>";
				echo "<td>".$row['sexo']."</td>";
			}
		}

	} catch(PDOException $e) {
		die("Não foi possível executar o script: $sql. " . $e->getMessage());
	}

	//var_dump($professor);

	//header('Location: /paginadestino.php');
?>