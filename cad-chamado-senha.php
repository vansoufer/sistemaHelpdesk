<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/formstyle.css">
	<title>ARVDESK</title>
</head>
<body>

<?php
	
	include ("conexao.php");
	


	$tipo = $_POST['tipo'];
	$dtAbertura = $_POST['dtAbertura'];
	
	$NomeRequerente = $_POST['NomeRequerente'];
	$setor = $_POST['setor'];
	$tpReparo = $_POST['tpReparo'];
	
	$status = $_POST['status'];
	$prioridade = $_POST['prioridade'];
	$atribuicao = $_POST['atribuicao'];
	$descricao = $_POST['descricao'];
	

	
	$sql = mysqli_query($conexao,"INSERT INTO  chamados 
		(tipo, dtAbertura, NomeRequerente,  setor, tpReparo, status, prioridade, atribuicao, descricao) VALUES 
		('$tipo', '$dtAbertura', '$NomeRequerente', '$setor', '$tpReparo', '$status', '$prioridade','$atribuicao', '$descricao')");
	
	echo "
	
	<form>
	<div class='grupo' align='center'>
	<img src='./imagens/sucesso.png' alt='some text' width=80 height=80 align='center'><br><br>
	</div>
	<div>
	<font color=#333><center><h1>Solicitação enviada com sucesso !</h1></center>
	</div>
	</form>
	";
	mysqli_close($conexao);
	
	
 ?>

 	<center><a href="index.html">Clique aqui para retornar a pagina de login</a></center>

</body>
</html>
