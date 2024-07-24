<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title>ARV-DESK</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/autenticacao.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
	<div class="flex-column">
		<div class="left">
			<img src="imagens/img-index.png" class="">
			<div class="text-container">
				<h1>Bem vindo(a) !</h1>
				<p>Informe o login e senha para acessar o sistema.</p>
			</div>
		
		</div>
		<div class="loginbox">
			
			<h1>ARV-DESK</h1>
			
		<script  type="text/javascript">
			function loginsucessfully(){ //função que controla o tempo de espera de redirecionamento
				setTimeout("window.location = 'painel.php'", 4000);
			}

			function loginfailed(){
				setTimeout("window.location = 'index.html'", 4000);
			}
		</script>


<?php

session_start();

require ("conexao.php");

$login = $_POST["login"];
$senha = $_POST["senha"];

//adiciona barras para evitar SQL injection
$loginSeguro = addslashes($login);
$senhaSegura = addslashes($senha);

$sql = mysqli_query($conexao,"SELECT * FROM usuarios WHERE login = '$login' LIMIT 1") or die (mysqli_error());
$userData = mysqli_fetch_assoc($sql);
if($userData){
	if(password_verify($senha, $userData['senha'])){
		$nivel = $userData['nivel'];
		$nome = $userData['nome'];
	
		if($nivel == 'adm') {
			$_SESSION["login"]=$_POST["login"];
			$_SESSION["senha"]=$_POST["senha"];
			$_SESSION['adm'] = $nome;
		}
		else if ($nivel == 'tec') {
			$_SESSION["login"]=$_POST["login"];
			$_SESSION["senha"]=$_POST["senha"];
			$_SESSION['tec'] = $nome;
		}
	
		else if ($nivel == 'comum') {
			$_SESSION["login"]=$_POST["login"];
			$_SESSION["senha"]=$_POST["senha"];
			$_SESSION['comum'] = $nome;
		}
	
		echo "<br><center class='success'>Efetuando Login! Aguarde um instante...</center>";
		echo ' <br><center><div class="loader"></div></center>';
		echo "<script>loginsucessfully()</script>";
	}else{
		echo "<br><br><center><span class='foco-erro'>Dados inválidos!</span><br><span class='feedback-await'>Aguarde um instante e tente novamente.</span></center>";
		echo ' <br><center><div class="loader"></div></center>';
		echo "<script>loginfailed()</script>";
	}
	
}else{
	echo "<br><br><center><span class='foco-erro'>Dados inválidos!</span><br><span class='feedback-await'>Aguarde um instante e tente novamente.</span></center>";
	echo ' <br><center><div class="loader"></div></center>';
	echo "<script>loginfailed()</script>";
}


?>

</div>
</body>
</html>
