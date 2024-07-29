<html>
 <head>
  <?php 
		include_once ("menu.html");
		include ("../verificaAcesso.php");
		include ("../conexao.php");
	 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/formstyle.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>ARV-DESK</title>
	</head>
 <body>
 <div>
	<form class="form" method="post" action="">


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
	$hash = password_hash($senha, PASSWORD_DEFAULT);
	
	$chamada = "UPDATE usuarios SET cpf='$cpf', status='$status', sexo='$sexo', cidade='$cidade', nome='$nome', sobrenome='$sobrenome', login='$login',   
									senha='$hash', email='$email', nivel='$nivel', celular='$celular' WHERE id='$id'"; 

	$resultado_usuario = mysqli_query($conexao, $chamada);
	
	echo "
	<div class='grupo' align='center' style='margin-top:150px;'>
	<i class='bi bi-check-circle' style='color:green;font-size:50px'></i><br><br>
	</div>
	<div>
	<center><h1>Cadastro alterado com sucesso !</h1></center>
	<a href='form-cons-usuarios.php' style='color:#134c6f; display:flex; justify-content: center;'>Clique aqui para voltar a pagina anterior</button>
	</div>
	
	";
	mysqli_close($conexao);
?>

</form>
</div>
</body>
</html>