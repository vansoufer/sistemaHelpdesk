<?php

require_once("menu.html");
include("../conexao.php");
include ("../verificaAcesso.php");

session_start();
	$id = $_GET['id'];
		
	$consulta = "SELECT * FROM chamados WHERE id = $id ";
	$con = $conexao->query($consulta);
?>

<html>
 <head>
  <title>Arv-Desk</title>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="../css/formstyle.css"> 
   <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
	
 </head>
  

<body>

 



<form action="cadatender.php" method="post">
<fieldset class="grupo">
<div class="campo" align="center"> 

<font color="#072c45"><h2> Atender Chamado:</h2></font>
</fieldset>

<fieldset>
		
        <fieldset class="grupo">
		   <div class="campo">
				<label for="id">ID:</label>
				<?php echo $id ?><br>
				<?php
					$_SESSION['id'] = $id;
				?>
				</div>
			</fieldset>	
				
			<fieldset class="grupo">	
			<div class="campo">
            <label for="dtConcluir">Data da conclusão:</label>
            <input type="date" id="dtConcluir" name="dtConcluir" style="width: 10em" value="">
			</div>
				
				<div class="campo">
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="">--</option>
                    <option value="2">Em Andamento</option>
					<option value="0">Encerrar</option>
                </select>
            </div>

			
		</fieldset>		
		
		<fieldset class="grupo">
		<div class="campo">		
			<label for="nomeTecnico">Nome do técnico responsável: 	
			<input type='text' name='nomeTecnico' id="nomeTecnico" style="width: 30em" value=''>
			</div>
		</fieldset>	
		<fieldset class="grupo">	
			<div class="campo">
                <label for="solucao">Solução aplicada: 
				<textarea name='solucao' id='solucao' rows='5' cols='57' maxlength=''>
				</textarea>
			</div>
		</fieldset>		
		
		<fieldset class="grupo">
		
			<button type="submit" name="enviar" value="enviar">Enviar</button>
			<button type="reset" name="limpar" value="limpar" style="margin-right: 15px;">Limpar</button>
		
		</fieldset>
			



</form>
        

 
</body>
</html>