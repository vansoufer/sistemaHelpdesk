	<html>
	 <head>
	 <?php 
		 include ("../verificaAcesso.php");
		include_once ("menu.html");
		include_once("../conexao.php");

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
	</head>
	 <body>
	<form class="form" method="post" action="">
	
	<br><br>
		<h1>Consultar Chamados</h1>
		
		<?php
		
		
		$Nome =  $_POST['nome'];
		
		$chamada = "SELECT * FROM chamados WHERE NomeRequerente LIKE '%".$Nome."%' LIMIT 5";
		
		
		
		
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
			<input class="botaolink" type='button' value='Voltar' onclick='history.go(-1)'>
			
		</fieldset>
		</form>
	
	</body>
	
	</html>