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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>ARV-DESK</title>
</head>
<body>
	<div class="cadastro-content">
	<form class="form cadastros" method="post" action="buscausers.php">
		<h3>Consultar Usuário</h3>

		<fieldset class="grupo">

				<div class="campo">
					<label for="status">Status</label>
						<select name="status" id="status">
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
							<option value="tecnico">Técnico</option>
							<option value="comum">Comum</option>
						</select>
				</div>

				

		</fieldset>

		<fieldset>
				
				<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;" class="btn-default">Limpar</button>
				<button type="submit" name="enviar" value="enviar" class="btn-primary">Consultar</button>
		</fieldset>	

	</form>
	</div>
	

</body>
<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>