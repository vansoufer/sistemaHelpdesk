
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
	 
	
 
 

 <?php
	
	
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	
    $chamada = "SELECT * FROM ativos WHERE id ='$id'";
	$resultado_usuario = mysqli_query($conexao, $chamada);
	$row = mysqli_fetch_assoc($resultado_usuario);

	
 ?>

</head>
<body>
	<div class="cadastro-content">
	<form class="form cadastros" method="post" action="alterarativos.php">
		<h3>Editar Ativos</h3>
	<?php
		function selected( $value, $selected ){
		return $value==$selected ? ' selected="selected"' : '';
	}?>
			<fieldset class="grupo">
			<input type="hidden" name='id' value="<?php echo $row['id']; ?>">
				<div class="campo">
					<label for="status">Status</label>
						<select name="status" id="status" required value="<?php echo $row['status']; ?>">
							<option value=""></option>
							<?php $st = $row['status'];?>
							<option value="1" <?php echo selected( '1', $st ); ?>>Habilitado</option>
							<option value="0" <?php echo selected( '0', $st ); ?>>Desabilitado</option>
						</select>
				</div>

				<div class="campo">
					<label for="NumInventario">Nº de inventário</label>
					<input type="number" name="NumInventario" id="NumInventario" placeholder="Informe um número" value="<?php echo $row['NumInventario']; ?>" >
				</div>
			</fieldset>
			
			<fieldset class="grupo">

				<div class="campo">
					<label for="tipo">Tipo</label>
						<select name="tipo" id="tipo" required value="<?php echo $row['tipo']; ?>">
							<option value=""></option>
							<?php $tp = $row['tipo'];?>
							<option value="1" <?php echo selected( '1', $tp ); ?>>Computadores</option>							
							<option value="2" <?php echo selected( '2', $tp ); ?> >Impressoras</option>							
							<option value="3" <?php echo selected( '3', $tp ); ?> >Monitores</option>							
							<option value="4" <?php echo selected( '4', $tp ); ?>>Telefones</option>							
							<option value="5" <?php echo selected( '5', $tp ); ?>>Outros</option>
						</select>
				</div>
				<div class="campo">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" placeholder="Digite o nome para identificação" required value="<?php echo $row['nome']; ?>">
				</div>

			</fieldset>
			
			<fieldset class="grupo">
				<div class="campo">
					<label for="dtaquisicao"> Data de aquisição</label>
					<input type="date" name="dtaquisicao" id="dtaquisicao" required value="<?php echo $row['dtaquisicao']; ?>">
				</div>
				<div class="campo">
					<label for="garantia">Garantia</label>
					<input type="number" name="garantia" id="garantia" placeholder="Informe o tempo de garantia" value="<?php echo $row['garantia']; ?>">
				</div>
			</fieldset>
			
			<fieldset class="grupo">
				<div class="campo">
					<label for="setor">Setor</label>
					<input type="text" name="setor" id="setor" placeholder="Informe o setor" value="<?php echo $row['setor']; ?>">
				</div>
				<div class="campo">
					<label for="idUsuario">Id de usuário</label>
					<input type="number" name="idUsuario" id="idUsuario" placeholder="Informe o id" value="<?php echo $row['idUsuario']; ?>">
				</div>
				
			</fieldset>

			<fieldset class="grupo">
				<div class="campo">
					<label for="fabricante">Fabricante</label>
						<input type="text" name="fabricante" id="fabricante" placeholder="Informe o fabricante" value="<?php echo $row['fabricante']; ?>">
				</div>

				<div class="campo">
					<label for="modelo">Modelo</label>
						<input type="text" name="modelo" id="modelo" placeholder="Informe o modelo" value="<?php echo $row['modelo']; ?>" >
				</div>
			</fieldset>

			<fieldset>
			<div class="campo">
            		<label for="descricao">Descrição do equipamento</label>
            		<textarea rows="6" style="width: 32em" id="descricao" name="descricao" placeholder="<?php echo $row['descricao']; ?>"></textarea>
        		</div>
			</fieldset>
				

			<fieldset>
        		
				<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;" class="btn-default">Limpar</button>
				<button type="submit" name="enviar" value="enviar" class="btn-primary">Alterar</button>
			</fieldset>
	</form>
	</div>


</body>
<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>