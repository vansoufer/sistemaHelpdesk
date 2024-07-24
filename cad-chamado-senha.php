<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/formstyle.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/autenticacao.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>ARVDESK</title>
</head>
<body class="body-forgot-password">
<div class="back forgot-password">
<div class="content">
	<form class="form-forgot-password">
	<h1>ARV-DESK</h1>
<?php
	
	include ("conexao.php");
	


	$tipo = 2;
	$dtAbertura = date('Y-m-d');
	
	$NomeRequerente = $_POST['NomeRequerente'];
	$setor = $_POST['setor'];
	$tpReparo = 5;
	
	$status = 1;
	$prioridade = 1;
	$atribuicao = 1;
	$descricao = $_POST['descricao'];
	

	
	$sql = mysqli_query($conexao,"INSERT INTO  chamados 
		(tipo, dtAbertura, NomeRequerente,  setor, tpReparo, status, prioridade, atribuicao, descricao) VALUES 
		('$tipo', '$dtAbertura', '$NomeRequerente', '$setor', '$tpReparo', '$status', '$prioridade','$atribuicao', '$descricao')");
	
	if($sql){
		echo "
		
		<div class='grupo' align='center'>
		<i class='bi bi-check-circle-fill'></i><br><br>
		</div>
		<div>
		<font color=#333><center><h1>Solicitação enviada com sucesso !</h1></center>
		</div>
		";
	}else if($sqp->error){
		echo "
		
		<div class='grupo' align='center'>
		<i class='bi bi-exclamation-triangle-fill'></i><br><br>
		</div>
		<div>
		<font color=#333><center><h1>Ocorreu um erro ao enviar solicitação, entre em contato com o Administrador.</h1></center>
		</div>
		";
	}
	mysqli_close($conexao);
	
	
 ?>

 	<center><a href="index.html" class="go-back">Clique aqui para retornar a pagina de login</a></center>
</form>
</div>
</div>
</body>
</html>
