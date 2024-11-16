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
	
	<script type="text/javascript">
		<!--
			function abreJanela(URL) {
			location.href = URL; 
			}
		//-->
</script>
</head>
<body>
<div class="cadastro-content">
<form class="form cadastros" method="post" action="">
		<h3>Consultar Relatórios</h3>

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
</div>
	

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
	<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>