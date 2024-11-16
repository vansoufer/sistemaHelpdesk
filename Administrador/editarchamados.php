
<html>
 <head>
  <?php 
		include ("../conexao.php");
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
		<form class="form cadastros" method="post" action="alterarchamados.php">

 			<?php
	
	
			$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
			
			$chamada = "SELECT * FROM chamados WHERE id ='$id'";
			$resultado_usuario = mysqli_query($conexao, $chamada);
			$row = mysqli_fetch_assoc($resultado_usuario);

	
 			?>
  		
			<h3>Editar Solicitação</h3>
			<?php
			function selected( $value, $selected ){
			return $value==$selected ? ' selected="selected"' : '';
			}?>
				<fieldset class="grupo">
					<input type="hidden" name='id' value="<?php echo $row['id']; ?>">
					<div class="campo">					
						<label for=tipo>Tipo Chamado</label>
							<select name="tipo" id="tipo" required value="<?php echo $row['tipo']; ?>">
							<?php $tp = $row['tipo'];?>
								<option value="1" <?php echo selected( '1', $tp ); ?>>Incidente</option>
								<option value="2" <?php echo selected( '2', $tp ); ?>>Requisição</option>
							</select>
					</div>
					
					<div class="campo">
						<label for="dtAbertura">Data Abertura</label>
							<input type="date" name="dtAbertura" id="dtAbertura" required value="<?php echo $row['dtAbertura']; ?>">
					</div>
					<div class="campo">
						<label for="dtAtender">Tempo p/Aceitar</label>
							<input type="date" name="dtAtender" id="dtAtender" required value="<?php echo $row['dtAtender']; ?>">
					</div>
					
			</fieldset>

			<fieldset class="grupo">
				

					<div class="campo">
						<label for=dtConcluir>Tempo p/Solução</label>
							<input type="date" name="dtConcluir" id="dtConcluir" required value="<?php echo $row['dtConcluir']; ?>">
					</div>

					<div class="campo">
						<label for=NomeRequerente>Nome do Requerente</label>
							<input type="text" name="NomeRequerente" id="NomeRequerente" required value="<?php echo $row['NomeRequerente']; ?>">
					</div>
					<div class="campo">
						<label for=setor>Setor</label>
							<input type="text" name="setor" id="setor" required value="<?php echo $row['setor']; ?>">
					</div>
					
			</fieldset>		
			<fieldset class="grupo">		
					<div class="campo">
						<label for=tpReparo>Qual tipo de reparo:</label>
							<select name="tpReparo" id="tpReparo" required value="<?php echo $row['tpReparo']; ?>">
							<?php $tr = $row['tpReparo'];?>
								<option value="1" <?php echo selected( '1', $tr ); ?>>Reparo de Computador</option>
								<option value="2" <?php echo selected( '2', $tr ); ?>>Reparo de Impressora</option>
								<option value="3" <?php echo selected( '3', $tr ); ?>>Reparo de Software</option>
								<option value="4" <?php echo selected( '4', $tr ); ?>>Reparo de Maquina</option>
								<option value="5" <?php echo selected( '5', $tr ); ?>>Outros</option>
							</select>
					</div>
					<div class="campo">
						<label for=numInventario>Nº Inventário</label>
							<input type="text" name="numInventario" id="numInventario" required value="<?php echo $row['numInventario']; ?>">
					</div>

					<div class="campo">
						<label for=status>Status</label>
							<select name="status" id="status" required value="<?php echo $row['status']; ?>">
							<?php $st = $row['status'];?>
								<option value="1" <?php echo selected( '1', $st ); ?>>Pendente</option>
								<option value="2" <?php echo selected( '2', $st ); ?>>Em andamento</option>
								<option value="0" <?php echo selected( '3', $st ); ?>>Encerrado</option>
							</select>
					</div>
			</fieldset>
			<fieldset class="grupo">
					<div class="campo">
						<label for=prioridade>Prioridade</label>
							<select name="prioridade" id="prioridade" required value="<?php echo $row['prioridade']; ?>">
							<?php $pr = $row['prioridade'];?>
								<option value="3" <?php echo selected( '3', $pr); ?>>Baixa</option>
								<option value="2" <?php echo selected( '2', $pr); ?>>Média</option>
								<option value="1" <?php echo selected( '1', $pr); ?>>Alta</option>
							</select>
					</div>
		
			<div class="campo">
						<label for=atribuicao>Atribuir para:</label>
							<select name="atribuicao" id="atribuicao" required value="<?php echo $row['atribuicao']; ?>">
							<?php $at = $row['atribuicao'];?>
								<option value="1" <?php echo selected( '1', $at); ?>>Administrador</option>
								<option value="2" <?php echo selected( '2', $at); ?>>Técnico</option>
							</select>
					</div>
					
						</fieldset>
        	<fieldset>
				<div class="campo">
            		<label for="descricao">Descrição do Problema</label>
            		<textarea rows="6" style="width: 32em" id="descricao" name="descricao" placeholder="<?php echo $row['descricao']; ?>"></textarea>
        		</div>
			</fieldset>
			<fieldset>
				
				<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;" class="btn-default">Limpar</button>
				<button type="submit" name="enviar" value="enviar" class="btn-primary">Enviar</button>
				</fieldset>
			</fieldset>
			</form>
		</div>


</body>
<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>