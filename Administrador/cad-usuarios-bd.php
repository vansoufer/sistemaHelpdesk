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
	$sexo = $_POST['sexo'];
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$cidade = $_POST['cidade'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$nivel = $_POST['nivel'];
	$celular = $_POST['celular'];
	$descricao = $_POST´['descricao'];
	$hash = password_hash($_POST['senha'], PASSWORD_DEFAULT);
	
	$sql = mysqli_query($conexao,"INSERT INTO  usuarios 
		( cpf, status, sexo, nome, sobrenome, cidade, login, senha, email, nivel, celular, descricao) VALUES 
		('$cpf', '$status', '$sexo', '$nome', '$sobrenome', '$cidade', '$login', '$hash', '$email', '$nivel', '$celular', '$descricao')");
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

 	<center><a href="form-cad-usuarios.php">Clique aqui para novo cadastro</a></center>

</body>
</html>
