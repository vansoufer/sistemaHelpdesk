<!DOCTYPE html>
<html>
<head>

	<?php
		
		require_once ("menu.html");
		include("../conexao.php");
		include ("../verificaAcesso.php");
		
			$id = $_GET['id'];
		
		$consulta = "SELECT * FROM chamados WHERE id = $id ";
		$con = $conexao->query($consulta);
	 ?>


		<meta charset="utf-8">
		<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/base-min.css">
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/grids-min.css">
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/grids-responsive-min.css">
		<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
		<title>ARV-DESK</title>	
		<link rel="stylesheet" href="../css/formstyle.css">
		<style>
		h3{
			font-family: Verdana, Arial, Helvetica, sans-serif;
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
			background-color: #EEEEE0;
			margin-left:0%;
			width: 1011px;
			align: center;
		}
		.div1 {
			display: left;
		}
		.pure-g{
			background-color: #EEEEE0;
			margin-right:2%;
		}
		 .pure-g > div {
        box-sizing: border-box;
		
    }
    .l-box {
        padding: 1em;
		
    }
    .a{
			color: #fff;
		}
		</style>

	
	</head>
	
      
      
	<body>

	<fieldset class="grupo" align="center">
	
		
		<form class="form" method="get" action="#">
		

		
			<br><br>
					
		<?php while($dado = $con->fetch_array()){ ?>
				
						
					
					
					
			<div class="pure-g">
				<div class="pure-u-1-2 l-box"> 
					<h3><font color="#072c45">Código:  </font></h3>
					<img src="../imagens/id.png" alt="some text" width=20 height=20>
						<br><br>
						<?php echo $dado["id"]; ?><br>
						<br></div>
				<div class="pure-u-1-2 l-box"> 
						<h3><font color="#072c45">Tipo: </font></h3>
						<img src="../imagens/t.png" alt="some text" width=20 height=20>
						<br><br>
						<?php if($dado["tipo"] == 1) echo "Incidente"; else echo "Requisição"; ?><br></div>
						
    <br><br>
				<div class="pure-u-1-2 l-box"> <h3><font color="#072c45">Data de Abertura:</font></h3>
					<img src="../imagens/calendario.png" alt="some text" width=20 height=20>
						<br><br><?php echo date ("d/m/Y", strtotime($dado["dtAbertura"])); ?><br>
						<br>
				</div>
				<div class="pure-u-1-2 l-box">
						<h3><font color="#072c45">Prazo:</font></h3>
						<img src="../imagens/ampulheta.png" alt="some text" width=20 height=20>
						<br><br>
						<?php
						$dt_atual		= date("d/m/Y"); // data atual
						 // converte para timestamp Unix
						 $time_dt_atual = strtotime($dt_atual);
 
						$dt_expira	= date ("d/m/Y", strtotime($dado["dtConcluir"])); // data de expiração do anúncio
						 // converte para timestamp Unix
	
						?>
						<?php 
							if ($time_dt_atual > $dt_expira){ 
								echo "<p class='redtext'><font color='white'> EXPIRADO desde $dt_expira !</font></p>";
							} 
							elseif ($time_dt_atual == $dt_expira){
								echo "<p class='redtext'><font color='white> O prazo acaba hoje! </font></p>";
							}
							elseif ($dado["dtConcluir"] == NULL){ 
								echo "Não definido";
							} 							
							else { 
								echo $dt_expira;
							} ?><br>
					</div>
							
						<br><br>
					<div class="pure-u-1-2 l-box"><h3><font color="#072c45">Nome do Requerente:</font></h3>
						<img src="../imagens/identidade.png" alt="some text" width=20 height=20>
						<br><br>
						<?php echo $dado["NomeRequerente"];?>
						<br>
						</div>
					<div class="pure-u-1-2 l-box">
						<br>
						
						
						<h3><font color="#072c45">Atribuição:</font></h3>
							<img src="../imagens/manutencao.png" alt="some text" width=20 height=20>
						<br><br>
						<?php if  ($dado["atribuicao"]== 1) echo "Administrador"; else echo "Tecnico"; ?> </div>
						
    <br><br>
					<div class="pure-u-1-2 l-box"><h3><font color="#072c45">Número de Inventário:</font></h3>
						<img src="../imagens/pergunta.png" alt="some text" width=20 height=20>
						<br><br>
						<?php echo $dado["numInventario"]; ?>

						<br></div>
					<div class="pure-u-1-2 l-box">
						<br>	
							<h3><font color="#072c45">Status:</font></h3>
							<img src="../imagens/status.png" alt="some text" width=20 height=20>							
						<br><br>
						<?php echo "Pendente";?> </div>
						
    <br><br>
					<div class="pure-u-1-2 l-box"> <h3><font color="#072c45">Prioridade:</font></h3>
						<img src="../imagens/prioridade.png" alt="some text" width=20 height=20><br><br>
						
						<?php if($dado["prioridade"] == 1) echo "<img src='../imagens/energia.png' alt='some text' width=20 height=20> Alta !"; elseif ($dado["prioridade"] == 2) echo "<img src='../imagens/media.png' alt='some text' width=10 height=10> Média"; else echo "<img src='../imagens/coffee.png' alt='some text' width=20 height=20> Baixa" ;?>
						<br>
					</div>
					<div class="pure-u-1-2 l-box"> <br>
						
							<h3><font color="#072c45">Responsável:</font></h3>
							<img src="../imagens/lapis1.png" alt="some text" width=20 height=20>
						<br><br>
						<?php echo $dado["nomeTecnico"]; ?> <br>
					</div>
						
							<br><br>
		</div>
	<div class="content"><br>
		<h3><font color="#072c45">Descrição:</font></h3>
		<img src="../imagens/procurar.png" alt="some text" width=20 height=20>
						<br><br>
						<?php echo $dado["descricao"]; ?> <br>
						<br>
						<hr>
						<br>
						<br>
		
						<a href='home.php'><img src="../imagens/voltar.png" ></a>	<br>						
 

			<?php } ?>
			</div>
		</fieldset>
		</form>
		
	</body>
</html>