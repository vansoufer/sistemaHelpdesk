<html>
	 <head>
	 <?php 
		include_once ("menu.html");
		include ("../verificaAcesso.php");
	 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/formstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>ARV-DESK</title>
	 <body>
	<form class="form" method="post" action="">
	
	<br><br>
		<h1>Consultar Chamados</h1>
		
		<?php
		
		$usuarios = $_POST['usuarios'];
		$ativos =  $_POST['ativos'];
		$chamados = $_POST['chamados'];
		
		
		if($usuarios == 'usuarios') {

			include_once ("form-cons-usuarios.php");
		}
		else if($ativos == 'ativos'){

			include_once ("form-cons-ativos.php");
		}
		else if($chamados == 'chamados'){
			
			include_once ("form-cons-chamados.php");
		}
		
		
		?>
			
		<fieldset>
			<input class="botaolink" type='button' value='Voltar' onclick='history.go(-1)'>
		</fieldset>
		</form>
	
	</body>
	</html>