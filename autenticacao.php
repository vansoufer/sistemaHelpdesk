<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
 	<title>Sistema de HelpDesk</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="css/estilo.css" >
	<link rel="stylesheet" type="text/css" href="css/autenticacao.css">

</head>
<body>
<div class="loginbox">
	<img src="imagens/user.png" class="avatar">
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

$sql = mysqli_query($conexao,"SELECT * FROM usuarios WHERE login = '$loginSeguro' and senha = '$senhaSegura'") or die (mysqli_error());
$row = mysqli_num_rows($sql);


if ($row == 1) {

	while($percorrer = mysqli_fetch_array($sql)){
		$nivel = $percorrer['nivel'];
		$nome = $percorrer['nome'];

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
	}

	echo "<br><br><center><span class='foco-sucesso'>Efetuando Login!</span><br><br> Aguarde um instante.</center>";
	echo "<script>loginsucessfully()</script>";
	
} else {
	echo "<br><br><center><span class='foco-erro'>Dados inválidos!</span><br><br>Aguarde um instante e tente novamente.</center>";
	echo "<script>loginfailed()</script>";
}
echo ' <br><center><div class="loader"></div></center>';
?>

</div>
</body>
</html>
