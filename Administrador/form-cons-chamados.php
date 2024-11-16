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
		<form class="form cadastros" method="post" action="buscachamados.php">
			<h3>Consultar Chamado</h3>

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

			<fieldset style="margin-top:20px">
					
					<button type="reset" name="limpar" value="limpar" class="btn-default" style="margin-right: 15px;">Limpar</button>
					<button type="submit" name="enviar" value="enviar" class="btn-primary">Consultar</button>
					
			</fieldset>	

		</form>
	</div>
	

	
</body>
<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>


</html>