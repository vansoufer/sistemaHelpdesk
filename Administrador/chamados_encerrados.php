<?php
require_once ("visualizar-chamados.php");
include("../conexao.php");

?>
<?php

$consulta = "SELECT * FROM chamados WHERE status = 0 ";
$con = $conexao->query($consulta);
?>
<html>
	<head>


		<meta charset="utf-8">
		
		
			
		<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
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
		.redtext {
			background-color: #FA5858;
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
		.a{
			color: #fff;
		}
		.td{
			color: #363636;
			text-align: center;
		}
		</style>
		<script>
			function activeNav (){
					document.querySelectorAll(".nav-link").forEach((ele) =>
						ele.classList.remove('active')
					);

					var activeElement = document.getElementById('encerradas');
					activeElement.classList.add('active');
					
			}
		
			activeNav();
		</script>
	
	</head>
	
      
      
	<body>

		<br><br>	

			<fieldset class="grupo">

			<div class="content-chamados">
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
						if ((($dt_atual > $dt_expira ) || ($dt_atual == $dt_expira ) || $dado["prioridade"] == 1) && $dado["status"] !=0){
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
							echo "<td>";
							if($dado['status'] == 1) echo 'Pendente </td>'; else echo 'Em andamento </td>';
							echo "<td> Alta </td>";
							echo "<td> <a href='vermais.php?id=";
							echo $dado['id'];
							echo "'><i class='bi bi-eye-fill'></a></td>";
							echo "</tr>";
						} 
						elseif (($dado["prioridade"] == 2 && ($dt_expira > $dt_atual || $dado["dtConcluir"] == NULL) ) && $dado['status'] !=0){
							
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
							if($dado['status'] == 1) echo '<td> Pendente </td>'; else echo '<td> Em andamento </td>';
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
							echo "<td>";
							if($dado['status'] == 1) echo 'Pendente </td>'; elseif($dado['status'] == 2) echo 'Em andamento </td>'; else echo "Encerrada </td>";
							echo "</td>";
							echo "<td>";
							if ($dado["prioridade"] == 2) echo " Média "; elseif($dado["prioridade"] == 1) echo "Alta"; else echo " Baixa  " ;
							echo "</td>";
							echo "<td> <a href='vermais.php?id=";
							echo $dado['id'];
							echo "'><i class='bi bi-eye-fill'></i></a></td>";
							echo "</tr>";
							
						}								
					} ?>
				</table>		
			</div>
		</fieldset>
		</form>
		
	</body>
	<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>