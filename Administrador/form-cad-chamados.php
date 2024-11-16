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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
	<title>ARV-DESK</title>
</head>
<body>
<div class="cadastro-content">
<form class="form cadastros" method="post" action="cad-chamados-bd.php">
		
		<h3>Abrir Solicitação</h3>
			<fieldset class="grupo">
					<div class="campo">
						<label for=tipo>Tipo Chamado</label>
							<select name="tipo" id="tipo" required>
								<option disabled selected>---</option>
								<option value="1">Incidente</option>
								<option value="2">Requisição</option>
							</select>
					</div>

					<div class="campo">
						<label for="dtAbertura">Data Abertura</label>
							<input type="date" name="dtAbertura" id="dtAbertura" required>
					</div>
					<div class="campo">
						<label for="dtAtender">Tempo p/Aceitar</label>
							<input type="date" name="dtAtender" id="dtAtender" required>
					</div>
					
			</fieldset>

			<fieldset class="grupo">
				

					<div class="campo">
						<label for=dtConcluir>Tempo p/Solução</label>
							<input type="date" name="dtConcluir" id="dtConcluir" required>
					</div>

					<div class="campo">
						<label for=NomeRequerente>Nome do Requerente</label>
							<input type="text" name="NomeRequerente" id="NomeRequerente" required>
					</div>
					<div class="campo">
						<label for=setor>Setor</label>
							<input type="text" name="setor" id="setor" required>
					</div>
					
			</fieldset>		
			<fieldset class="grupo">		
					<div class="campo">
						<label for=tpReparo>Qual tipo de reparo:</label>
							<select name="tpReparo" id="tpReparo" required>
								<option disabled selected>---</option>
								<option value="1">Reparo de Computador</option>
								<option value="2">Reparo de Impressora</option>
								<option value="3">Reparo de Software</option>
								<option value="4">Reparo de Maquina</option>
								<option value="5">Outros</option>
							</select>
					</div>
					<div class="campo">
						<label for=numInventario>Nº Inventário</label>
							<input type="text" name="numInventario" id="numInventario" required>
					</div>

					<div class="campo">
						<label for=status>Status</label>
							<select name="status" id="status" required>
								<option disabled selected>---</option>
								<option value="1">Pendente</option>
								<option value="2">Em andamento</option>
								<option value="0">Encerrado</option>
							</select>
					</div>
			</fieldset>
			<fieldset class="grupo">
					<div class="campo">
						<label for=prioridade>Prioridade</label>
							<select name="prioridade" id="prioridade" required>
								<option disabled selected>---</option>
								<option value="3">Baixa</option>
								<option value="2">Média</option>
								<option value="1">Alta</option>
							</select>
					</div>
		
			<div class="campo">
						<label for=atribuicao>Atribuir para:</label>
							<select name="atribuicao" id="atribuicao" required>
								<option disabled selected>---</option>
								<option value="1">Administrador</option>
								<option value="2">Técnico</option>
							</select>
					</div>
					
						</fieldset>
        	<fieldset>
				<div class="campo">
            		<label for="descricao">Descrição do Problema</label>
            		<textarea rows="6" style="width: 32em" id="descricao" name="descricao"></textarea>
        		</div>
			</fieldset>
			<fieldset>
			<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;" class="btn-default">Limpar</button>
				<button type="submit" name="enviar" value="enviar" class="btn-primary">Enviar</button>
				
			</fieldset>
	</form>
</div>
	
</body>
<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>