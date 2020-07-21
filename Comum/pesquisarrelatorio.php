<!DOCTYPE html>
<html>
<head>
	<?php 
		include_once ("menu.html");
		include ("../verificaAcesso.php");
	 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/formstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>ARV-DESK</title>
	
	<script type="text/javascript">
		<!--
			function abreJanela(URL) {
			location.href = URL; 
			}
		//-->
</script>
</head>
<body>

	<form class="form" method="post" action="">
		<h1>Consultar Relatórios</h1>

		<fieldset class="grupo">

				<fieldset class="grupo">
					<div class="campo">
						<label for=tipo>Pesquisar</label>
							<select name="tipo" id="tipo" onchange="javascript: abreJanela(this.value)">
								<option value=''>---</option>
								<option value="form-cons-usuarios-pdf.php">Usuários</option>
								<option value="form-cons-ativos-pdf.php">Ativos</option>
								<option value="form-cons-chamados-pdf.php">Chamados</option>
							</select>
					</div>

				
		</fieldset>

		<fieldset>
		

	</form>

</body>

	<style type="text/css">

		button[type=button] {
			background-color: #6495ED;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-top: 10px;
		}

		button[type=button]:hover {
			background-color: #1E90FF;
		}
	</style>
</html>