	<html>
	 <head>
	 <?php 
		include_once ("menu.html");
		include ("../verificaAcesso.php");
	 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/formstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>ARV-DESK</title>
	 
	 
	 
	 <body>
	<form class="form" method="post" action="">
	
	<br><br>
		<h1>Consultar Usuário</h1>
		
		<?php
		
		$status = $_POST['status'];
		$nivel = $_POST['nivel'];
		$pesquisar = $_POST['pesquisar']; 
		
		$host = "localhost";
		$user = "root";
		$pass = "";
		$banco = "arvdesk";
		//Criar a conexao
		$conexao = mysqli_connect($host, $user, $pass)or die (mysqli_error());
		mysqli_select_db($conexao, $banco) or die (mysqli_error());
		
		
		
		
		if(($status == 'habilitado') || ($status == 'desabilitado')){

			$chamada = "SELECT * FROM usuarios WHERE status LIKE '%".$status."%' LIMIT 5";
		}
		else if(($nivel == 'tecnico') || ($nivel == 'adm') || ($nivel == 'comum')){

			$chamada = "SELECT * FROM usuarios WHERE nivel LIKE '%".$nivel."%' LIMIT 5";
		}
		else {
			$chamada = "SELECT * FROM usuarios WHERE cpf LIKE '%".$pesquisar."' LIMIT 5";
			
		}
		
		?>
			<table class="table table table-striped">
		<thead>
				<tr>
					<th scope="col">Código</th>
					<th scope="col">Status</th>
					<th scope="col">Nome</th>
					<th scope="col">Sobrenome</th>
					<th scope="col">Nivel</th>
					<th scope="col">CPF</th>
					<th scope="col">e-mail</th>
					<th scope="col">Telefone</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>	
			<tbody>
		<?php 	
		$chamada1 = mysqli_query($conexao, $chamada);
		
				while($chamada2 = mysqli_fetch_array($chamada1)){
					$id = $chamada2['id'];
					$status = $chamada2['status'];
					$nome = $chamada2['nome'];
					$sobrenome = $chamada2['sobrenome'];
					$nivel = $chamada2['nivel'];
					$cpf = $chamada2['cpf'];
					$email = $chamada2['email'];
					$celular = $chamada2['celular'];
					?>
		<tr>
			
					<td><?php echo $id ?></td>
					<td><?php echo $status ?></td>
					<td><?php echo $nome ?></td>
					<td><?php echo $sobrenome ?></td>
					<td><?php echo ($nivel == 'adm' ? 'Administrador':
					               ($nivel == 'tec' ? 'Técnico':'Comum'))?></td>
					<td><?php echo $cpf ?></td>
					<td><?php echo $email ?></td>
					<td><?php echo $celular ?></td>
					
					<td><a href='editaruser.php?id=<?php echo $id?>'><img src="../imagens/lapis1.png" width=30 height=20></a></td>
			</tr>
			<?php } ?>
			</tbody>
			</table>
		<fieldset>
			<input class="botaolink" type='button' value='Voltar' onclick='history.go(-1)'>
		</fieldset>
		</form>
	
	</body>
	</html>