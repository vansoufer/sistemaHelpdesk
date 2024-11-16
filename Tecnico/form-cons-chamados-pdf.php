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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
	<title>ARV-DESK</title>
</head>
<body>
	<div class="cadastro-content">
	<form class="form cadastros" method="post" action="chamados-pdf.php">
		<h3>Consultar Chamado</h3>

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
		
		<fieldset style="margin-top:20px">

			<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;" class="btn-default">Limpar</button>
			<button type="submit" name="enviar" value="enviar" class="btn-primary">Gerar</button>
				
		</fieldset>	

	</form>

	</div>
	
</body>


	<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>