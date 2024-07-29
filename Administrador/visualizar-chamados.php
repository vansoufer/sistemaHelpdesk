<?php

require_once ("menu.html");
include("../conexao.php");
include ("../verificaAcesso.php");

?>
<?php
session_start();
$consulta = "SELECT * FROM chamados WHERE atribuicao = 1 AND prioridade = 1 ";
$con = $conexao->query($consulta);
?>
<!DOCTYPE html>
<html>
	<head>


		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A layout example that shows off a responsive pricing table.">
		

		<title>ARV-DESK</title>	
		<link rel="stylesheet" href="../css/formstyle.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		
		<style>
		h1{
			font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
			font-weight: 100;
			text-align:center;
			color: #072c45;
		}
		.th{
			color: #072c45;
		}
		.p-3{
			widht:200px;
			height:70px;
			border-radius: 20px 20px;
			background-image: linear-gradient(to bottom right, red, #FFEFD5);

		}
		.p-2{
			widht:60px;
			height:80px;
			border-radius: 20px 20px;
			background-image: linear-gradient(to bottom right, orange, #FFDAB9);

		}
		.pure-button:hover{
			background-color:#D6D6D6;
			color: #6D6D6D;
			border-bottom:3px solid #D9B310;
		}
		.pure-table:hover{
			background-color:#e8e4e4;
		}
		.campo_submit:hover{
			background-color:#D6D6D6;
			color: #6D6D6D;
			border-bottom:3px solid #D9B310;
		}
		.div1{
			margin-left:5%;
		}
		.pure-table{
			
			width:100%;
		}
		.content{
			margin-right:5%;
			align: center;
		}
		.a{
			color: #fff;
		}
		.td{
			color: #363636;
			text-align: center;
		}
		
		</style>

	<script type="text/javascript">
		function Nova()
		{
			location.href="Atender.php"
		}
	
	</script>
	</head>
	
      
      
	<body>
	
	
	<form class="form" method="post" action="#">
	
		

		
	<fieldset class="grupo">
	
			
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" id="abertas" href="chamados_abertos.php" onclick="activeNav('abertas')">Solicitações abertas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="andamento" href="chamados_andamento.php" onclick="activeNav('andamento')"> Solicitações em andamento</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="encerradas" href="chamados_encerrados.php" onclick="activeNav('encerradas')">Solicitações encerradas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " id="todas" href="chamados_todos.php" onclick="activeNav('todas')">Todas as solicitações</a>
				</li>
			</ul>

		</fieldset>

		<div id="conteudo"></div>

		</form>

		<script type="text/javascript">
			function carregar(pagina){
       			$("#conteudo").load(pagina);
			}
			
		</script>

	</body>

	<style type="text/css">
		.conteudo {
			width: 50%
			height: 50%;
		}
		
	</style>
</html>