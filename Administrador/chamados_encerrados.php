<?php

include("../conexao.php");
include ("../verificaAcesso.php");

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
		.content{
			margin-left:5%;
			width: 900px;
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
	
	</head>
	
      
      
	<body>

		<br><br>	

			<fieldset class="grupo">

			<div class="content">
				<table class="pure-table pure-table-horizontal" border="0px" >
					
						<tr>
							<th scope="col"><font color="#072c45">Código: </font> </th>
							<th scope="col"><font color="#072c45">Tipo: </font></th>
							<th scope="col"><font color="#072c45">Data de Abertura:</font></th>
							<th scope="col"><font color="#072c45">Data de Conclusão:</font></th>
							<th scope="col"><font color="#072c45">Status:</font></th>
							<th scope="col"><font color="#072c45">Prioridade:</font></th>
						</tr>
					
					<?php while($dado = $con->fetch_array()){ ?>
					
						<tr class="td">
							<td><?php echo $dado["id"]; ?></td>
							<td><?php if($dado["tipo"] == 1) echo "Incidente"; else echo "Requisição"; ?></td>
							<td><?php echo date ("d/m/Y", strtotime($dado["dtAbertura"])); ?></td>
							<td><?php echo date ("d/m/Y", strtotime($dado["dtConcluir"])); ?></td>
							<td><?php echo "Encerrado"?></td>
							<td><?php if($dado["prioridade"] == 1) echo "<img src='../imagens/energia.png' alt='some text' width=20 height=20> Alta !"; elseif($dado["prioridade"] == 2) echo "<img src='../imagens/media.png' alt='some text' width=10 height=10> Média"; else echo "<img src='../imagens/coffee.png' alt='some text' width=20 height=20> Baixa";?></td>
							<td><a class="a" href="vermais.php?id=<?= $dado['id']; ?>"><img src="../imagens/vermais.png"></a></td>
							
							
							
						</tr>
					<?php } ?>
				</table>		
			</div>
		</fieldset>
		</form>
		
	</body>
</html>