
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

 <?php
	

	
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	
    $chamada = "SELECT * FROM usuarios WHERE id ='$id'";
	$resultado_usuario = mysqli_query($conexao, $chamada);
	$row = mysqli_fetch_assoc($resultado_usuario);

	function selected( $value, $selected ){
		return $value==$selected ? ' selected="selected"' : '';
	}
	
 ?>
  
<div class="cadastro-content">
	<form class="form cadastros" method="post" action="alteraruser.php">
		<h3>Editar Usuário</h3>
    <fieldset class="grupo">
		<div class="campo">
					<input type="hidden" name='id' value="<?php echo $row['id']; ?>">
					<label for="cpf" >CPF</label>
					<input oninput="mascara(this)" type="text" name="cpf" id="cpf" placeholder="Digite um CPF" required value="<?php echo $row['cpf']; ?>">
				</div>
				<input type="hidden" name='id' value="<?php echo $row['id']; ?>">
				<div class="campo">
				<label for="status">Status</label>
						<select name="status" id="status" value="<?php echo $row['status']; ?>">
							<?php $st = $row['status'];?>
							<option value="habilitado" <?php echo selected( 'habilitado', $st ); ?>>Habilitado</option>
							<option value="desabilitado" <?php echo selected( 'desabilitado', $st ); ?>>Desabilitado</option>
								
								
						</select>
				</div>
				</fieldset>

				<fieldset class="grupo">
				<div class="campo">
				<label for="sexo" required value="<?php echo $row['sexo']; ?>">Sexo</label>
						<select name="sexo" id="sexo" required value="<?php echo $row['sexo']; ?>">
							<?php $sx = $row['sexo'];?>
							<option value="f" <?php echo selected( 'f', $sx ); ?>>Feminino</option>
							<option value="m" <?php echo selected( 'm', $sx ); ?>>Masculino</option>
						</select>
				</div>
				<div class="campo">
					<label for="cidade">Cidade</label>
					<input type="text" name="cidade" id="cidade" placeholder="Informe a cidade" required value="<?php echo $row['cidade']; ?>">
				</div>

				

			</fieldset>

			<fieldset class="grupo">

				<div class="campo">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" placeholder="Digite um nome" required value="<?php echo $row['nome']; ?>">
				</div>

				<div class="campo">
					<label for="sobrenome">Sobrenome</label>
					<input type="text" name="sobrenome" id="sobrenome" placeholder="Digite um sobrenome" required value="<?php echo $row['sobrenome']; ?>">
				</div>

			</fieldset>

			<fieldset class="grupo">
				<div class="campo">
					<label for="login">Login</label>
					<input type="text" name="login" id="login" placeholder="Digite um login" required value="<?php echo $row['login']; ?>">
				</div>

				<div class="campo">
					<label for="email">E-mail</label>
					<input type="email" name="email" id="email" placeholder="Digite um e-mail" required value="<?php echo $row['email']; ?>">
				</div>
			</fieldset>

			<fieldset class="grupo">
				<div class="campo">
					<label for="senha">Senha</label>
					<input type="password" name="senha" id="senha" placeholder="Digite uma senha" maxlength="8" minlength="4" 
						required value="<?php echo $row['senha']; ?>">
				</div>

				<div class="campo">
					<label for="confirma_senha">Confirmar</label>
					<input type="password" name="confirma_senha" id="confirma_senha" placeholder="Confirme sua senha" required>
				</div>
			</fieldset>

			<fieldset class="grupo">

				<div class="campo">
					<label for="nivel">Nível</label>
						<select name="nivel" id="nivel" required value="<?php echo $row['nivel']; ?>">
							<?php $nv = $row['sexo'];?>
							<option value="adm" <?php echo selected( 'adm', $nv ); ?>>Administrador</option>
							<option value="tec" <?php echo selected( 'tec', $nv ); ?>>Técnico</option>
							<option value="comum" <?php echo selected( 'comum', $nv ); ?>>Comum</option>
						</select>
				</div>

				<div class="campo">
					<label for="cel">Celular</label>
						<input type="text" name="celular" id="celular" placeholder="Informe um número" required value="<?php echo $row['celular']; ?>">
				</div>

			</fieldset>

			<fieldset>
			<div class="campo">
            		<label for="mensagem">Comentários</label>
            		<textarea rows="6" style="width: 32em" id="mensagem" name="mensagem" placeholder="<?php echo $row['descricao']; ?>"></textarea>
        		</div>
			</fieldset>
				

        	<fieldset>
        		
				<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;" class="btn-default">Limpar</button>
				<button type="submit" name="enviar" value="enviar" class="btn-primary">Alterar</button>
			</fieldset>
	</form>
</div>
 
</body>
</html>