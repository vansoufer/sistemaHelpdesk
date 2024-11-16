<?php

require_once ("menu.html");
include("../conexao.php");
include ("../verificaAcesso.php");

?>
<?php

$consulta = "SELECT * FROM chamados WHERE atribuicao = 2 AND prioridade = 1 AND status != 0";
$con = $conexao->query($consulta);
$consultaAndamento = "SELECT COUNT(*) AS total FROM chamados WHERE status = 2 ";
$conAndamento = $conexao->query($consultaAndamento);
$consultaPendente = "SELECT COUNT(*) AS total FROM chamados WHERE status = 1  ";
$conPendentes = $conexao->query($consultaPendente);
$consultaEncerrados = "SELECT COUNT(*) AS total FROM chamados WHERE status = 0  ";
$conEncerrados = $conexao->query($consultaEncerrados);
$totalPendente = mysqli_fetch_assoc($conPendentes);
					$totalAndamento = mysqli_fetch_assoc($conAndamento);
					$totalEncerradas = mysqli_fetch_assoc($conEncerrados);
?>
<html>
	<head>


		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A layout example that shows off a responsive pricing table.">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<title>ARV-DESK</title>	
		<link rel="stylesheet" href="../css/formstyle.css">
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
		.error {
            background: rgb(202, 60, 60);
            /* this is a maroon */
        }

        .button-warning {
            background: rgb(223, 117, 20);
            /* this is an orange */
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
		.a{
			color: #fff;
		}
		.td{
			color: #363636;
			text-align: center;
		}
		.vc {
			text-align: center;
		}
		</style>

	<script type="text/javascript">
		function Nova()
		{
			location.href="Atender.php"
		}
	</script>
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	 
	 <script type="text/javascript">
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);

			var totalAndamento = <?php echo $totalAndamento['total'] ?>;
			var pendentes = <?php echo $totalPendente['total']?>;
			var encerradas = <?php echo $totalEncerradas['total']?>;
			function drawChart() {

				var data = google.visualization.arrayToDataTable([
					['Status', 'Total'],
					['Pendentes', pendentes],
					['Em andamento', encerradas],
					['Encerradas', totalAndamento]
				]);
				
				var options = {
					title:'Solicitações',
					colors:['#FF0000','#D9B310', '#008000']
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart'));

				chart.draw(data, options);
			}
			function Nova()
			{
				location.href="Atender.php"
			}

		</script>

	</head>
	
      
      
	<body>
	
	
	<form class="form" method="post" action="#">
	
		

		
	<fieldset class="grupo">
	<div class="welcome" >
					<div>
					<img src="../imagens/computer02.png" alt="some text" width=90 height=80><br>
					<p>Bem vindo(a), <?php echo $_SESSION['tec'];?></p>
					<div>
					<?php 
						setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
						date_default_timezone_set('America/Sao_Paulo');
						echo '<span>';
						echo date('l');
						echo '</span><span>';
						echo date('d/m/Y H:i:s a');
						echo '</span>';
					?>
					</div>
					</div>
					
					
				</div>
				<div class="content container-table" >
				
				<div class="flex">
				<div class="open-list">
				<h1>Chamados abertos</h1>
				<table class="table">
					<tr>

						<th scope="col">Código</th>
						<th scope="col">Tipo</th>
						<th scope="col">Data de Abertura</th>
						<th scope="col">Prazo</th>
						<th scope="col">Status</th>
						<th scope="col">Prioridade</th>
						<th scope="col">Ver mais</th>

					</tr>

			
					<?php while($dado = $con->fetch_array()){ ?>
				<?php
					$dt_atual		= date("d/m/Y"); // data atual
					 // converte para timestamp Unix
					 $time_dt_atual = strtotime($dt_atual);

					$dt_expira	= date ("d/m/Y", strtotime($dado["dtConcluir"])); // data de expiração do anúncio
					 // converte para timestamp Unix

				?>
					<?php 
						if (($dt_atual > $dt_expira ) || ($dt_atual == $dt_expira ) || $dado["prioridade"] == 1){
							echo "<tr class='table-danger'>";
							echo "<td>";
							echo $dado["id"];
							echo "</td>";
							echo "<td>";
							if($dado["tipo"] == 1) echo "Incidente"; else echo "Requisição";
							echo "</td>";
							echo "<td>";
							echo date ("d/m/Y", strtotime($dado["dtAbertura"]));
							echo "</td>";
							echo "<td>";
							if ($dado["dtConcluir"] == NULL) echo "Não definido"; elseif(($dt_atual > $dt_expira) || ($dt_atual == $dt_expira)) echo "$dt_expira <i class='fa fa-bomb'>"; else echo $dt_expira ;
							echo"</td>";
							echo "<td> Pendente </td>";
							echo "</td>";
							echo "<td> Alta </td>";
							echo "<td> <a href='vermais.php?id=";
							echo $dado['id'];
							echo "'><i class='bi bi-eye-fill'></a></td>";
							echo "</tr>";
						} 
						elseif (($dado["prioridade"] == 2 && ($dt_expira > $dt_atual || $dado["dtConcluir"] == NULL))){
							
							echo "<tr class='table-warning'>";
							echo "<td>";
							echo $dado["id"];
							echo "</td>";
							echo "<td>";
							if($dado["tipo"] == 1) echo "Incidente"; else echo "Requisição";
							echo "</td>";
							echo "<td>";
							echo date ("d/m/Y", strtotime($dado["dtAbertura"]));
							echo "</td>";
							echo "<td>";
							if ($dado["dtConcluir"] == NULL) echo "Não definido"; else echo $dt_expira;
							echo "</td>";
							echo "<td> Pendente </td>";
							echo "</td>";
							echo "<td> Média </td>";
							echo "<td> <a href='vermais.php?id=";
							echo $dado['id'];
							echo "'><i class='bi bi-eye-fill'></a></td>";
							echo "</tr>";
						}else{
							
							echo "<tr class='table-light'>";
							echo "<td>";
							echo $dado["id"];
							echo "</td>";
							echo "<td>";
							if($dado["tipo"] == 1) echo "Incidente"; else echo "Requisição";
							echo "</td>";
							echo "<td>";
							echo date ("d/m/Y", strtotime($dado["dtAbertura"]));
							echo "</td>";
							echo "<td>";
							if($dado["dtConcluir"] == NULL){
							 echo "Não definido";
							}else{
							 echo $dt_expira;
							}
							echo "</td>";
							echo "<td> Pendente </td>";
							echo "</td>";
							echo "<td>";
							if ($dado["prioridade"] == 2) echo " Média "; else echo " Baixa  " ;
							echo "</td>";
							echo "<td> <a href='vermais.php?id=";
							echo $dado['id'];
							echo "'><i class='bi bi-eye-fill'></i></a></td>";
							echo "</tr>";
							
						}								
					?>
						
				
				<?php } ?>
			</table>
				</div>
				<div id="piechart" style="width:40%"></div>
				</div>
						
			</div>
		</fieldset>
		</form>
		<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
	</body>
	
</html>