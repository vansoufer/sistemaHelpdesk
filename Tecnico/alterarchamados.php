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
	</head>
	 <body>
	<form class="form" method="post" action="">
		<h1>Editar Usuário</h1>
		<div>
 
 


<?php
//conexao com o banco
	include ("../conexao.php");
	
?>

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
	
	echo "<form>
	<div class='grupo' align='center'>
	<img src='../imagens/sucesso.png' alt='some text' width=80 height=80 align='center'><br><br>
	</div>
	<div> 
	<font color=#333><center><h1>Ativo alterado com sucesso !</h1></center>
	</div>
	</form>
	";
	mysqli_close($conexao);
?>

		<fieldset>
		<center><button><a href="form-cons-chamados.php">Voltar</button></center>
		</fieldset>
		</form>
</div>
</body>
</html>