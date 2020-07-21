<!DOCTYPE html>
<?php
// Incluimos o arquivo de restrição
include ("../verificaAcesso.php");
require_once ("menu.html");
?>
<html>
<head>

		

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/formstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>ARV-DESK</title>

</head>
<body>
	
<form class="form" method="post" action="cad-usuarios-bd.php">
	<h1>Cadastrar Usuário</h1>
			<fieldset class="grupo">

				<div class="campo">
				<label for="status">Status</label>
						<select name="status" id="status" required>
							<option disabled>---</option>
							<option value="habilitado" selected>Habilitado</option>
							<option value="desabilitado">Desabilitado</option>
						</select>
				</div>

				<div class="campo">
					<label for="cpf" >CPF</label>
					<input oninput="mascara(this)" type="text" name="cpf" id="cpf" placeholder="Digite um CPF" required>
				</div>

			</fieldset>

			<fieldset class="grupo">

				<div class="campo">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" placeholder="Digite um nome" required>
				</div>

				<div class="campo">
					<label for="sobrenome">Sobrenome</label>
					<input type="text" name="sobrenome" id="sobrenome" placeholder="Digite um sobrenome" required>
				</div>

			</fieldset>

			<fieldset class="grupo">
				<div class="campo">
					<label for="login">Login</label>
					<input type="text" name="login" id="login" placeholder="Digite um login" required>
				</div>

				<div class="campo">
					<label for="email">E-mail</label>
					<input type="email" name="email" id="email" placeholder="Digite um e-mail" required>
				</div>
			</fieldset>

			<fieldset class="grupo">
				<div class="campo">
					<label for="senha">Senha</label>
					<input type="password" name="senha" id="senha" placeholder="Digite uma senha" maxlength="8" minlength="4" 
						required>
				</div>

				<div class="campo">
					<label for="confirma_senha">Confirmar</label>
					<input type="password" name="confirma_senha" id="confirma_senha" placeholder="Confirme sua senha" required>
				</div>
			</fieldset>

			<fieldset class="grupo">

				<div class="campo">
					<label for="nivel">Nível</label>
						<select name="nivel" id="nivel" required>
							<option value="#"></option>
							<option value="adm">Administrador</option>
							<option value="tec">Técnico</option>
							<option value="comum">Comum</option>
						</select>
				</div>

				<div class="campo">
					<label for="cel">Celular</label>
						<input type="text" name="celular" id="celular" placeholder="Informe um número" required>
				</div>

			</fieldset>

				<div class="campo">
            		<label for="mensagem">Comentários</label>
            		<textarea rows="6" style="width: 32em" id="mensagem" name="mensagem"></textarea>
        		</div>

        	<fieldset>
        		<button type="submit" name="enviar" value="enviar">Enviar</button>
				<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;">Limpar</button>
			</fieldset>
</form>

<!--Esse script valida a senha na hora do cadastro, se a senha é igual ao campo confirma senha-->
	<script type="text/javascript">
		var senha = document.getElementById("senha"), 
		confirma_senha = document.getElementById("confirma_senha");

		function validatePassword(){
  			if(senha.value != confirma_senha.value) {
    		confirma_senha.setCustomValidity("Senhas diferentes!");
  			} else {
    			confirma_senha.setCustomValidity('');
  			}
		}

		senha.onchange = validatePassword;
		confirma_senha.onkeyup = validatePassword;
	</script>

<!--Esse script formata o campo CPF-->
	<script type="text/javascript">
		function mascara(i){
   
   		var v = i.value;
   
   		if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      		i.value = v.substring(0, v.length-1);
      		return;
   		}
   
   		i.setAttribute("maxlength", "14");
   		if (v.length == 3 || v.length == 7) i.value += ".";
   		if (v.length == 11) i.value += "-";
}
	</script>

</body>
</html>