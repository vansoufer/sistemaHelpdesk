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
	<form class="form" method="post" action="buscachamados.php">
		<h1>Consultar Chamado</h1>

		<fieldset class="grupo">

				<fieldset class="grupo">
					<div class="campo">
						<label for=tipo>Tipo Chamado</label>
							<select name="tipo" id="tipo">
								<option value=''>---</option>
								<option value="1">Incidente</option>
								<option value="2">Requisição</option>
							</select>
					</div>

				<div class="campo">
						<label for=status>Status</label>
							<select name="status" id="status">
								<option value=''>---</option>
								<option value="1">Pendente</option>
								<option value="2">Em andamento</option>
								<option value="0">Encerrado</option>
							</select>
					</div>

		</fieldset>

		<fieldset class="grupo">
			
			<div class="campo">
						<label for=prioridade>Prioridade</label>
							<select name="prioridade" id="prioridade">
								<option value=''>---</option>
								<option value="3">Baixa</option>
								<option value="2">Média</option>
								<option value="1">Alta</option>
							</select>
					</div>

			

		</fieldset>

		<fieldset>
				<button type="submit" name="enviar" value="enviar">Consultar</button>
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