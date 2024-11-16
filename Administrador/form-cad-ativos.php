<!DOCTYPE html>
<html>
<head>

	<?php
		require_once ("menu.html");
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
	<form class="form cadastros" method="post" action="cad-ativos-bd.php">
		<h1>Cadastrar Ativo</h1>
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
					<label for="NumInventario">Nº de inventário</label>
					<input type="number" name="NumInventario" id="NumInventario" placeholder="Informe um número" >
				</div>

				<div class="campo">
					<label for="tipo">Tipo</label>
						<select name="tipo" id="tipo" required>
							<option value=""></option>
							<option value="1">Computadores</option>
							<option value="2">Impressoras</option>
							<option value="3">Monitores</option>
							<option value="4">Telefones</option>
							<option value="5">Outros</option>
						</select>
				</div>
			</fieldset>

			<fieldset class="grupo">

				<div class="campo">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" placeholder="Digite o nome para identificação" required>
				</div>
				<div class="campo">
					<label for="dtaquisicao"> Data de aquisição</label>
					<input type="date" name="dtaquisicao" id="dtaquisicao" required>
				</div>
				<div class="campo">
					<label for="garantia">Garantia</label>
					<input type="number" name="garantia" id="garantia" placeholder="Informe o tempo de garantia" >
				</div>

			</fieldset>
			
			
			<fieldset class="grupo">
				<div class="campo">
					<label for="setor">Setor</label>
					<input type="text" name="setor" id="setor" placeholder="Informe o setor" >
				</div>
				<div class="campo">
					<label for="fabricante">Fabricante</label>
						<input type="text" name="fabricante" id="fabricante" placeholder="Informe o fabricante">
				</div>

				<div class="campo">
					<label for="modelo">Modelo</label>
						<input type="text" name="modelo" id="modelo" placeholder="Informe o modelo" >
				</div>
				
			</fieldset>

			<fieldset class="grupo">
				
			</fieldset>

				<div class="campo">
            		<label for="descricao">Descrição do equipamento</label>
            		<textarea rows="6" style="width: 32em" id="descricao" name="descricao"></textarea>
        		</div>

			<fieldset>
				
				<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;" class="btn-default">Limpar</button>
				<button type="submit" name="enviar" value="enviar" class="btn-primary">Enviar</button>
			</fieldset>
	</form>
	</div>

<body>
<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>