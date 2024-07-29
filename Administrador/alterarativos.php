<html>
 <head>
  <?php 

  		session_start();

		include_once ("menu.html");
		include ("../conexao.php");
		
	 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/formstyle.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>ARV-DESK</title>
	 <body>
	<form class="form" method="post" action="">
		
		<div>
 

<?php
	$id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
	$status = filter_input(INPUT_POST,'status', FILTER_SANITIZE_STRING);
	$NumInventario = filter_input(INPUT_POST,'NumInventario', FILTER_SANITIZE_STRING);
	$tipo = filter_input(INPUT_POST,'tipo', FILTER_SANITIZE_STRING);
	$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
	$dtaquisicao = filter_input(INPUT_POST,'dtaquisicao', FILTER_SANITIZE_STRING);
	$garantia = filter_input(INPUT_POST,'garantia', FILTER_SANITIZE_STRING);
	$setor = filter_input(INPUT_POST,'setor', FILTER_SANITIZE_STRING);
	$idUsuario = filter_input(INPUT_POST,'idUsuario', FILTER_SANITIZE_STRING);
	$fabricante = filter_input(INPUT_POST,'fabricante', FILTER_SANITIZE_STRING);
   	$modelo = filter_input(INPUT_POST,'modelo', FILTER_SANITIZE_STRING);
	$descricao = filter_input(INPUT_POST,'descricao', FILTER_SANITIZE_STRING);
	
	
											
	$chamada = "UPDATE ativos SET status='$status', NumInventario ='$NumInventario', tipo='$tipo', nome ='$nome',
				dtaquisicao ='$dtaquisicao', garantia ='$garantia', setor ='$setor', idUsuario ='$idUsuario', fabricante ='$fabricante',
				modelo ='$modelo', descricao ='$descricao'  WHERE id ='$id'";
	

	$resultado_usuario = mysqli_query($conexao, $chamada);
	
	echo "
	<div class='grupo' align='center' style='margin-top:150px;'>
	<i class='bi bi-check-circle' style='color:green;font-size:50px'></i><br><br>
	</div>
	<div>
	<center><h1>Ativo alterado com sucesso !</h1></center>
	<a href='form-cons-ativos.php' style='color:#134c6f; display:flex; justify-content: center;'>Clique aqui para voltar a pagina anterior</a>
	</div>
	
	";
	mysqli_close($conexao);
	?>

	

		
</form>
</div>
</body>
</html>