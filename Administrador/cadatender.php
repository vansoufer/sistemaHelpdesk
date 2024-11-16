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
<form>
	<div class='grupo' align='center'>
	<img src='../imagens/sucesso.png' alt='some text' width=80 height=80 align='center'><br><br>
	</div>
	<div>
	<font color=#333><center><h1>Alteração realizada com sucesso !</h1></center>
	</div>
	<center><a href="Atender.php">Clique aqui para nova alteração</a></center>
</form>
</body>
<footer class="footer">
			<i class="bi bi-code-slash"></i> Desenvolvido por Adriana Mataveli, José Ricardo e Vanessa Souto.
		</footer>
</html>