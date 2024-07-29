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
	<form class="form" method="post" action="usuarios-pdf.php">
		<h1>Consultar Usuário</h1>

		<fieldset class="grupo">

				<div class="campo">
					<label for="status">Status</label>
						<select name="status" id="status" required>
							<option value=""></option>
							<option value="habilitado">Habilitado</option>
							<option value="desabilitado">Desabilitado</option>
						</select>
				</div>

				<div class="campo">
					<label for="pesquisar">CPF</label>
						<input type="text" name="pesquisar" id="pesquisar" placeholder="Digite um CPF ">
				</div>

		</fieldset>

		<fieldset class="grupo">

				<div class="campo">
					<label for="nivel">Nível</label>
						<select name="nivel" id="nivel" >
							<option value="#"></option>
							<option value="adm">Administrador</option>
							<option value="tec">Técnico</option>
							<option value="comum">Comum</option>
						</select>
				</div>

				

		</fieldset>

		<fieldset>
				<button type="submit" name="enviar" value="enviar">Gerar</button>
				<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;">Limpar</button>
		</fieldset>	

	</form>

</body>
</html>