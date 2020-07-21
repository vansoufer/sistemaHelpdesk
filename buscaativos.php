	<html>
	 <head>
	 <?php 
		include_once ("menu.html");
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
		<h1>Consultar Ativos</h1>
		
		<?php
		
		$status = $_POST['status'];
		$nome =  $_POST['cnome'];
		$tipo = $_POST['tipo'];
		$fabricante = $_POST['fab']; 
		
		$host = "localhost";
		$user = "root";
		$pass = "";
		$banco = "arvdesk";
		//Criar a conexao
		$conexao = mysqli_connect($host, $user, $pass)or die (mysqli_error());
		mysqli_select_db($conexao, $banco) or die (mysqli_error());
		
		
				
		if(($status == '1') || ($status == '0')){

			$chamada = "SELECT * FROM ativos WHERE status LIKE '%".$status."%' LIMIT 5";
		}
		else if(($tipo == '1')||($tipo == '2')||($tipo == '3')||($tipo == '4')||($tipo == '5')){

			$chamada = "SELECT * FROM ativos WHERE tipo LIKE '%".$tipo."%' LIMIT 5";
		}
		else {
			
			$chamada = "SELECT * FROM ativos WHERE fabricante LIKE '%".$fabricante."%' LIMIT 5";
		}
		
		
		?>
			<table class="table table table-striped">
		<thead>
				<tr>
					<th scope="col">Código</th>
					<th scope="col">Status</th>
					<th scope="col">Nome</th>
					<th scope="col">Nº Invent.</th>
					<th scope="col">Tipo</th>
					<th scope="col">Data Aqu.</th>
					<th scope="col">Setor</th>
					<th scope="col">Garantia</th>
					<th scope="col">Id User</th>
					<th scope="col">Fabricante</th>
					<th scope="col">Modelo</th>
					<th scope="col">Alterar</th>
				</tr>
			</thead>	
			<tbody>
		<?php 	
		$chamada1 = mysqli_query($conexao, $chamada);
		
				while($chamada2 = mysqli_fetch_array($chamada1)){
					$id = $chamada2['id'];
					$status = $chamada2['status'];
					$nome = $chamada2['nome'];
					$NumInventario = $chamada2['NumInventario'];
					$tipo = $chamada2['tipo'];
					$dataaqui = $chamada2['dtaquisicao'];
					$setor = $chamada2['setor'];
					$garantia = $chamada2['garantia'];
					$iduser = $chamada2['idUsuario'];
					$fabricante = $chamada2['fabricante'];
					$modelo = $chamada2['modelo'];?>
		<tr>
			
					<td><?php echo $id ?></td>
					<td><?php echo $status == '1'? 'Habiliatdo':'Desabilitado' ?></td>
					<td><?php echo $nome ?></td>
					<td><?php echo $NumInventario ?></td>
					<td><?php echo ($tipo == '1' ? 'Computador':
								   ($tipo == '2' ? 'Impressoras':
								   ($tipo == '3' ? 'Monitores':
								   ($tipo == '4' ? 'Telefones': 'Outros'))))?></td>
					<td><?php echo $dataaqui ?></td>
					<td><?php echo $setor ?></td>
					<td><?php echo $garantia ?></td>
					<td><?php echo $iduser ?></td>
					<td><?php echo $fabricante ?></td>
					<td><?php echo $modelo ?></td>
					<td><a href='editarativos.php?id=<?php echo $id?>'><img src="../imagens/lapis1.png" width=30 height=20></a></td>
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