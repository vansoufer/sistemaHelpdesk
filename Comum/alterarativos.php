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
		<div>
 
 


<?php
//conexao com o banco
	include ("../conexao.php");
	
?>

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
		<center><button><a href="form-cons-ativos.php">Voltar</button></center>
		</fieldset>
		</form>
</div>
</body>
</html>