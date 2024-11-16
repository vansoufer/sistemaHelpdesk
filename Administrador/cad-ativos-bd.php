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


	$status = $_POST['status'];
	$numInventario = $_POST['NumInventario'];
	$tipo = $_POST['tipo'];
	$nome = $_POST['nome'];
	$dtaquisicao = $_POST['dtaquisicao'];
	$garantia =$_POST['garantia'];
	$setor = $_POST['setor'];
	$fabricante = $_POST['fabricante'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];
	
	$sql = mysqli_query($conexao,"INSERT INTO  ativos (status, NumInventario, tipo, nome, dtaquisicao, garantia, setor, fabricante, modelo, descricao) VALUES 
		('$status', '$numInventario', '$tipo', '$nome', '$dtaquisicao', '$garantia', '$setor', '$fabricante','$modelo', '$descricao')");
	
	echo "<div class='cadastro-content'>
		<form style='margin-top:150px;'>
		<div class='grupo' align='center'>
		<i class='bi bi-check-circle' style='color:green;font-size:50px'></i><br><br>
		</div>
		<div>
		<font color=#333><center><h1>Cadastro realizado com sucesso !</h1></center>
		</div>
		</form></div>
	";
	
	mysqli_close($conexao);

 ?>

 	<center><a href="form-cad-ativos.php" color="#134c6f">Clique aqui para novo cadastro</a></center>

</body>
<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>
