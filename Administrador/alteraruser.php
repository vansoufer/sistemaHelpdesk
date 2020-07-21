<html>
 <head>
  <?php 
		include_once ("menu.html");
		include ("../verificaAcesso.php");
	 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/formstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>ARV-DESK</title>
	 <body>
	<form class="form" method="post" action="">
		<h1>Editar Usuário</h1>
 
 <body>
  


<?php
//conexao com o banco
	include ("../conexao.php");
	
?>

<?php
	$id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
	$cpf = filter_input(INPUT_POST,'cpf', FILTER_SANITIZE_STRING);
	$status = filter_input(INPUT_POST,'status', FILTER_SANITIZE_STRING);
	$sexo = filter_input(INPUT_POST,'sexo', FILTER_SANITIZE_STRING);
	$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
	$cidade = filter_input(INPUT_POST,'cidade', FILTER_SANITIZE_STRING);
	$sobrenome = filter_input(INPUT_POST,'sobrenome', FILTER_SANITIZE_STRING);
	$login = filter_input(INPUT_POST,'login', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING);
	$nivel = filter_input(INPUT_POST,'nivel', FILTER_SANITIZE_STRING);
	$celular = filter_input(INPUT_POST,'celular', FILTER_SANITIZE_STRING);
	
	$chamada = "UPDATE usuarios SET cpf='$cpf', status='$status', sexo='$sexo', cidade='$cidade', nome='$nome', sobrenome='$sobrenome', login='$login',   
									senha='$senha', email='$email', nivel='$nivel', celular='$celular' WHERE id='$id'"; 

	$resultado_usuario = mysqli_query($conexao, $chamada);
	
	echo "<form>
	<div class='grupo' align='center'>
	<img src='../imagens/sucesso.png' alt='some text' width=80 height=80 align='center'><br><br>
	</div>
	<div>
	<font color=#333><center><h1>Cadastro alterado com sucesso !</h1></center>
	</div>
	</form>
	";
	mysqli_close($conexao);
?>

		<fieldset>
		<center><button><a href="form-cons-usuarios.php">Voltar</button></center>
		</fieldset>
		</form>
</div>
</body>
</html>