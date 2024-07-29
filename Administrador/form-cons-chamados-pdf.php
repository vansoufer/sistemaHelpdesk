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
	<form class="form" method="post" action="chamados-pdf.php">
		<h1>Consultar Chamado</h1>

		<fieldset class="grupo">

				<fieldset class="grupo">
					<div class="campo">
						<label for="dtainicial">Data Inicial</label>
							<input type="date" name="dtainicial" id="dtainicial" >
					</div>
					<div class="campo">
						<label for="dtafinal">Data Final</label>
							<input type="date" name="dtafinal" id="dtafinal" >
					</div>
			</fieldset>
			<fieldset class="grupo">
				<div class="campo">
						<label for=status>Status</label>
							<select name="status" id="status" required>
								<option value=''>---</option>
								<option value="1">Pendente</option>
								<option value="2">Em andamento</option>
								<option value="0">Encerrado</option>
							</select>
					</div>
					
					<div class="campo">
						<label for=consulta>Consultar</label>
							<select name="consulta" id="consulta">
								<option value=''>---</option>
								<option value="todos">Todos</option>
								
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