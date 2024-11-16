	<html>
	 <head>
	 <?php 
		include_once ("menu.html");
		include ("../verificaAcesso.php");
	 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/formstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
	<title>ARV-DESK</title>
	
	</head>
	 <body>
	<form class="form" method="post" action="">
	
	<br><br>
		<h3>Consultar Chamados</h3>
		
		<?php
		
		$status = $_POST['status'];
		$prioridade =  $_POST['prioridade'];
		$tipo = $_POST['tipo'];
		
		
		$host = "localhost";
		$user = "root";
		$pass = "";
		$banco = "arvdesk";
		//Criar a conexao
		$conexao = mysqli_connect($host, $user, $pass)or die (mysqli_error());
		mysqli_select_db($conexao, $banco) or die (mysqli_error());
		
		
				
		if(($status == '1') || ($status == '2') || ($status == '0')){

			$chamada = "SELECT * FROM chamados WHERE status LIKE '%".$status."%' LIMIT 5";
		}
		else if(($tipo == '1')||($tipo == '2')){

			$chamada = "SELECT * FROM chamados WHERE tipo LIKE '%".$tipo."%' LIMIT 5";
		}
		else if(($prioridade == '1') || ($prioridade == '2') || ($prioridade == '3')){
			
			$chamada = "SELECT * FROM chamados WHERE prioridade LIKE '%".$prioridade."%' LIMIT 5";
		}
		
		
		?>
			<table class="table table table-striped">
		<thead>
				<tr>
					<th scope="col">Código</th>
					<th scope="col">Tipo</th>
					<th scope="col">Data Abertura</th>
					<th scope="col">Data Atender</th>
					<th scope="col">Concluído   </th>
					<th scope="col">Requerente</th>
					<th scope="col">Atribuição</th>
					<th scope="col">Status</th>
					<th scope="col">Prioridade</th>
					<th scope="col">Descrição</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>	
			<tbody>
		<?php 	
		$chamada1 = mysqli_query($conexao, $chamada);
		
				while($chamada2 = mysqli_fetch_array($chamada1)){
					$id = $chamada2['id'];
					$tipo = $chamada2['tipo'];
					$dtAbertura = date("d/m/Y", strtotime($chamada2['dtAbertura']));
					$dtAtender = date("d/m/Y", strtotime($chamada2['dtAtender']));
					$dtConcluir = date("d/m/Y", strtotime($chamada2['dtConcluir']));
					$NomeRequerente = $chamada2['NomeRequerente'];
					$atribuicao = $chamada2['atribuicao'];
					$status = $chamada2['status'];
					$prioridade = $chamada2['prioridade'];
					$descricao = $chamada2['descricao'];
					?>
		<tr>
			
					<td><?php echo $id ?></td>
					<td><?php echo $tipo == '1' ? 'Incidente':'Requisição'?></td>
					<td><?php echo $dtAbertura ?></td>
					<td><?php echo $dtAtender ?></td>
					<td><?php echo $dtConcluir ?></td>
					<td><?php echo $NomeRequerente ?></td>
					<td><?php echo $atribuicao == '1' ? 'Adm':'Técnico'?></td>
					<td><?php echo ($status == '1' ? 'Pendente':
								   ($status == '2' ? 'Em andamento': 'Encerrado'))?></td>
					<td><?php echo ($prioridade == '1' ? 'Alta':
					               ($prioridade == '2' ? 'Média':'Baixa'))?></td>
					<td><?php echo $descricao ?></td>
					<td><a href='editarchamados.php?id=<?php echo $id?>'><img src="../imagens/lapis1.png" width=30 height=20></a></td>
			</tr>
			<?php } ?>
			</tbody>
			</table>
		<fieldset>
			<input  class="btn-primary"  type='button' value='Voltar' onclick='history.go(-1)'>
			
		</fieldset>
		</form>
	
	</body>
	<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
	</html>