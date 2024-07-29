<html>
 <head>
  <?php 
 		include ("../verificaAcesso.php");
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
	</head>
	 <body>
	 <div>
	<form class="form" method="post" action="">
		
 

<?php
	$id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
	$tipo = filter_input(INPUT_POST,'tipo', FILTER_SANITIZE_STRING);
	$dtAbertura = filter_input(INPUT_POST,'dtAbertura', FILTER_SANITIZE_STRING);
	$dtAtender = filter_input(INPUT_POST,'dtAtender', FILTER_SANITIZE_STRING);
	$dtConcluir = filter_input(INPUT_POST,'dtConcluir`', FILTER_SANITIZE_STRING);
	$NomeRequerente = filter_input(INPUT_POST,'NomeRequerente', FILTER_SANITIZE_STRING);
	$atribuicao = filter_input(INPUT_POST,'atribuicao', FILTER_SANITIZE_STRING);
	$setor = filter_input(INPUT_POST,'setor', FILTER_SANITIZE_STRING);
	//$idUsuario = filter_input(INPUT_POST,'idUsuario', FILTER_SANITIZE_STRING);
	//$idTecnico = filter_input(INPUT_POST,'idTecnico', FILTER_SANITIZE_STRING);
   	$numInventario = filter_input(INPUT_POST,'numInventario', FILTER_SANITIZE_STRING);
	//$idAtivo = filter_input(INPUT_POST,'idAtivo`', FILTER_SANITIZE_STRING);
	$status = filter_input(INPUT_POST,'status', FILTER_SANITIZE_STRING);
	$prioridade = filter_input(INPUT_POST,'prioridade', FILTER_SANITIZE_STRING);
	$descricao = filter_input(INPUT_POST,'descricao', FILTER_SANITIZE_STRING);
											
	
	$chamada = "UPDATE chamados SET tipo = '$tipo', dtAbertura = '$dtAbertura', dtAtender = '$dtAtender', dtConcluir = '$dtConcluir',
				NomeRequerente = '$NomeRequerente', atribuicao = '$atribuicao', setor = '$setor', numInventario = '$numInventario', 
				status = '$status', prioridade = '$prioridade', descricao = '$descricao' WHERE id = '$id'";
	

	$resultado_usuario = mysqli_query($conexao, $chamada);
	
	echo "
	<div class='grupo' align='center' style='margin-top:150px;'>
	<i class='bi bi-check-circle' style='color:green;font-size:50px'></i><br><br>
	</div>
	<div> 
	<center><h1>Solicitação alterada com sucesso !</h1></center>
	<a href='form-cons-chamados.php' style='color:#134c6f; display:flex; justify-content: center;'>Clique aqui para voltar a pagina anterior</a>
	</div>
	";
	mysqli_close($conexao);
?>

	
</form>
</div>
</body>
</html>