<!DOCTYPE html>
<html>
<head>

	<?php
		include ("../verificaAcesso.php");
		require_once ("menu.html");
		
	 ?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/formstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>ARV-DESK</title>
</head>
<body>
	<form class="form" method="post" action="#">
		<h1>Cadastrar Ativo</h1>
			<fieldset class="grupo">

				<div class="campo">
					<label for="status">Status</label>
						<select name="status" id="status" required>
							<option value=""></option>
							<option value="#">Habilitado</option>
							<option value="#">Desabilitado</option>
						</select>
				</div>

				<div class="campo">
					<label for="inventario">Nº de inventário</label>
					<input type="number" name="inventario" id="inventario" placeholder="Informe um número" >
				</div>
			</fieldset>

			<fieldset class="grupo">

				<div class="campo">
					<label for="status">Tipo</label>
						<select name="status" id="status" required>
							<option value=""></option>
							<option value="#">Computadores</option>
							<option value="#">Impressoras</option>
							<option value="#">Monitores</option>
							<option value="#">Telefones</option>
							<option value="#">Outros</option>
						</select>
				</div>

				<div class="campo">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" placeholder="Digite o nome para identificação" required>
				</div>

			</fieldset>

			<fieldset class="grupo">
				<div class="campo">
					<label for="fab">Fabricante</label>
						<input type="text" name="fab" id="fab" placeholder="Informe o fabricante">
				</div>

				<div class="campo">
					<label for="model">Modelo</label>
						<input type="text" name="model" id="model" placeholder="Informe o modelo" >
				</div>
			</fieldset>

				<div class="campo">
            		<label for="mensagem">Descrição do equipamento</label>
            		<textarea rows="6" style="width: 32em" id="mensagem" name="mensagem"></textarea>
        		</div>

			<fieldset>
				<button type="submit" name="enviar" value="enviar">Enviar</button>
				<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;">Limpar</button>
			</fieldset>
	</form>
<body>
</html>