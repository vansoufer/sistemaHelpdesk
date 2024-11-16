<?php
require_once("menu.html");
include("../conexao.php");
include ("../verificaAcesso.php");
session_start(); 
?>

<html>
 <head>
  <title>Arv-Desk</title>
  <meta charset="utf-8">   
   <link rel="stylesheet" type="text/css" href="../css/formstyle.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	
  
 </head>
  

<body>
 <form>
<?php
$id = $_SESSION['id'];
$dtConcluir = date("Y-m-d H:i:s",strtotime($_POST['dtConcluir'])); // transforma a data no formato padrão do mysql 2019/10/05
$nomeTecnico = $_POST['nomeTecnico'];
$status = $_POST['status'];
$solucao = $_POST['solucao'];


$sql = mysqli_query($conexao,"UPDATE  chamados SET dtConcluir = '$dtConcluir', nomeTecnico = '$nomeTecnico', status = '$status', solucao= '$solucao' WHERE id = '$id'");

mysqli_close($conexao);
?>
<fieldset class="grupo">
<form style="margin-top:150px;">
	<div class='grupo' align='center'>
	<i class='bi bi-check-circle' style='color:green;font-size:50px'></i><br>
	</div>
	<div>
	<center><h1>Alteração realizada com sucesso !</h1></center>
	</div>
	<center><a href="home.php" color="#134c6f">Clique aqui para voltar a pagína inicial.</a></center>
</form>
</fieldset>
</body>
<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>