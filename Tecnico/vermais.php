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
		<title>ARV-DESK</title>	
		<link rel="stylesheet" href="../css/formstyle.css">
		<link rel="stylesheet" href="../css/vermais.css">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	
	</head>
	
      
      
	<body>

	<fieldset class="grupo" align="center">
	
		
		<form class="form vermais" method="get" action="#">
		

		
			<br><br>
					
		<?php while($dado = $con->fetch_array()){ ?>

				
			<div class="main-content">
						<i class="bi bi-tools"></i>
						<div>
							<div class="block">
								<div>
									<label>Código</label>
									<?php echo $dado["id"]; ?>
								</div>
								<div>
									<label>Tipo</label>
									<?php if($dado["tipo"] == 1) echo "Incidente"; else echo "Requisição"; ?>
								</div>
								<div>
									<label> Requerente	</label>
									<?php echo $dado["NomeRequerente"];?>
								</div>
								<div>
									<label>Atribuição</label>
									<?php if  ($dado["atribuicao"]== 1) echo "Administrador"; else echo "Tecnico"; ?> 
								</div>
								<div>
									<label>Data de abertura</label>
									<?php echo date ("d/m/Y", strtotime($dado["dtAbertura"])); ?>
								</div>
							</div>
							
							<div class="block">
							<div>
									<label>Prazo</label>
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
										} ?>
								</div>
								<div>
									<label>Nº Inventário</label>
									<?php echo $dado["numInventario"]; ?>
								</div>
								<div>
									<label>Status</label>
									<?php if($dado['status'] == 1) echo "Pendente"; elseif($dado['status'] == 2) echo "Em andamento";else echo "Concluído";?>
								</div>
								<div>
									<label>Prioridade</label>
									<?php if($dado["prioridade"] == 1) echo " Alta "; elseif ($dado["prioridade"] == 2) echo " Média"; else echo "Baixa" ;?>
							
								</div>
								<div>
									<label>Responsável</label>
									<?php echo $dado["nomeTecnico"]; ?>
								</div>
							</div>
						
							<div class="block">
								<div>
									<label>Descrição</label>
									<?php echo $dado["descricao"]; ?>
								</div>
							</div>
							
						</div>
						<div>
							<a href='home.php' class="btn-default"> Cancelar</a>
							<a href='Atender.php?id=<?= $dado['id']; ?>' class="btn-primary">Alterar</a>
							
						</div>
							
					</div>
				
			<?php } ?>		

	
		

	
			</div>
		</fieldset>
		</form>
		<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
	</body>
</html>