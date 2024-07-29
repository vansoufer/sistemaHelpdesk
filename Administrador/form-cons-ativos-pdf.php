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
</head>
<body>
	<form class="form" method="post" action="ativos-pdf.php">
		<h1>Consultar Ativo</h1>

		<fieldset class="grupo">

				<div class="campo">
					<label for="status">Status</label>
						<select name="status" id="status" required>
							<option value=""></option>
							<option value="1">Habilitado</option>
							<option value="0">Desabilitado</option>
						</select>
				</div>

				<div class="campo">
					<label for="fab">Fabricante</label>
						<input type="text" name="fab" id="fab" placeholder="Informe o fabricante">
						
				</div>

		</fieldset>

		<fieldset class="grupo">
			
			<div class="campo">
					<label for="tipo">Tipo</label>
						<select name="tipo" id="tipo">
							<option value=""></option>
							<option value="1">Computadores</option>
							<option value="2">Impressoras</option>
							<option value="3">Monitores</option>
							<option value="4">Telefones</option>
							<option value="5">Outros</option>
						</select>
				</div>

			

		</fieldset>

		<fieldset>
				<button type="submit" name="enviar" value="enviar">Gerar</button>
				<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;">Limpar</button>
				
		</fieldset>	

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