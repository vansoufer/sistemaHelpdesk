<html lang="pt-br">
<head>
 	<meta charset="UTF-8" />
 	<title>Sistema de HelpDesk</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  	<link rel="stylesheet" type="text/css" href="css/estilo.css" >
	<link rel="stylesheet" type="text/css" href="css/autenticacao.css">
</head>
<body>

<?php
	
	require ("conexao.php");

	session_start();
	

	if(isset($_SESSION['adm'])) {
		header("Location: ./Administrador/home.php"); //Faz o redirecionamento para a pagina desejada de acordo com o perfil.

	} else if (isset($_SESSION['tec'])) {
		header("Location: ./Tecnico/home.php"); //Faz o redirecionamento para a pagina desejada de acordo com o perfil.

	} else if (isset($_SESSION['comum'])){
		header("Location: ./Comum/home.php?nome=".$_SESSION['comum']); ///Faz o redirecionamento para a pagina desejada de acordo com o perfil.
	}

?>
	<a href="logout.php">Sair</a>  <!--Link que ao usuario clikar em sair ele faz logout-->
</body>
</html>