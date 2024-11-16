<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/formstyle.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>ARVDESK</title>
</head>
<body>

<?php
	
	include ("../conexao.php");
	include_once ("menu.html");
	include ("../verificaAcesso.php");


	$tipo = $_POST['tipo'];
	$dtAbertura = $_POST['dtAbertura'];
	$dtAtender = $_POST['dtAtender'];
	$dtConcluir = $_POST['dtConcluir'];
	$NomeRequerente = $_POST['NomeRequerente'];
	$setor = $_POST['setor'];
	$tpReparo = $_POST['tpReparo'];
	$numInventario = $_POST['numInventario'];
	$status = $_POST['status'];
	$prioridade = $_POST['prioridade'];
	$atribuicao = $_POST['atribuicao'];
	$descricao = $_POST['descricao'];
	

	
	$sql = mysqli_query($conexao,"INSERT INTO  chamados 
		(tipo, dtAbertura, dtAtender, dtConcluir, NomeRequerente,  setor, tpReparo, numInventario, status, prioridade, atribuicao, descricao) VALUES 
		('$tipo', '$dtAbertura', '$dtAtender', '$dtConcluir', '$NomeRequerente', '$setor', '$tpReparo', '$numInventario', '$status', '$prioridade','$atribuicao', '$descricao')");
	echo "<form>
	
	<div class='grupo' align='center' style='margin-top:150px;'>
	<i class='bi bi-check-circle' style='color:green;font-size:50px'></i><br><br>
	</div>
	<div>
	<center><h1>Cadastro realizado com sucesso !</h1></center>
	</div>
	</form>
	";
	mysqli_close($conexao);

 ?>

 	<center><a href="form-cad-chamados.php" color="#134c6f">Clique aqui para novo cadastro</a></center>

</body>
<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>
