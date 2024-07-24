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

	$cpf = $_POST['cpf'];
	$status = $_POST['status'];
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$login = $_POST['login'];
	$hash = password_hash($_POST['senha'], PASSWORD_DEFAULT);
	$email = $_POST['email'];
	$nivel = $_POST['nivel'];
	$celular = $_POST['celular'];
	
	$sql = mysqli_query($conexao,"INSERT INTO  usuarios 
		(status, cpf, nome, sobrenome, login, senha, email, nivel, celular) VALUES 
		('$status', '$cpf', '$nome', '$sobrenome', '$login', '$hash', '$email', '$nivel', '$celular')");
	echo "<form>
	<div class='grupo' align='center'>
	<img src='../imagens/sucesso.png' alt='some text' width=80 height=80 align='center'><br><br>
	</div>
	<div>
	<font color=#333><center><h1>Cadastro realizado com sucesso !</h1></center>
	</div>
	</form>";
	mysqli_close($conexao);

 ?>

 	<center><a href="form-cad-usuarios.php">Clique aqui para novo cadastro</a></center>

</body>
</html>
