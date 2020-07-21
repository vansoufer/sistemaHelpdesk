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
	
	include ("../conexao.php");
	include_once ("menu.html");
	include ("../verificaAcesso.php");


	$status = $_POST['status'];
	$NumInventario = $_POST['NumInventario'];
	$tipo = $_POST['tipo'];
	$nome = $_POST['nome'];
	$dtaquisicao = $_POST['dtaquisicao'];
	$garantia =$_POST['garantia'];
	$setor = $_POST['setor'];
	$idUsuario= $_POST['idUsuario'];
	$fabricante = $_POST['fabricante'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];

	
	$sql = mysqli_query($conexao,"INSERT INTO  ativos 
		(status, NumInventario, tipo, nome, dtaquisicao, garantia, setor, idUsuario, fabricante, modelo, descricao) VALUES 
		('$status', '$NumInventario', '$tipo', '$nome', '$dtaquisicao', '$garantia', '$setor', '$idUsuario', '$fabricante', '$modelo', '$descricao')");
	echo "<form>
	<div class='grupo' align='center'>
	<img src='../imagens/sucesso.png' alt='some text' width=80 height=80 align='center'><br><br>
	</div>
	<div>
	<font color=#333><center><h1>Cadastro realizado com sucesso !</h1></center>
	</div>
	</form>
	";
	mysqli_close($conexao);

 ?>

 	<center><a href="form-cad-ativos.php">Clique aqui para novo cadastro</a></center>

</body>
</html>
