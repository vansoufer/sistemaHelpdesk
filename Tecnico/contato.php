
<?php

require_once ("menu.html");
include ("../verificaAcesso.php");

?>

<html>
	<head>
		
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
		<title>ARV-DESK</title>
		<link rel="stylesheet" href="../css/formstyle.css">
		<style>
		.grupo{
			margin-left:22%;
		}
		.div{
			margin-left:3%;
			width:100%;
		}
		.a{
			color: #fff;
		}
	</style>
	</head>
	<body>
		<form class="form" method="get" action="envio_dados.ph">
			<div class="div">
				<img src="../imagens/contato.jpg" alt="some text" width="90%" height="42%"><br>
				<font color="#072c45"><br>
				</div>
			<fieldset class="grupo">
				
				<br><br>
				
				<div class="campo">
					<label for=data>Data</label>
					<input type="date" name="date">
					<br><br>
					<label for=email>E-mail</label>
					<input type="e-mail" name="email" placeholder="Digite seu e-mail">
				</div>
				<div class="campo">
					<label for=nome>Nome</label>
					<input type="text" name="nome" placeholder="digite seu Nome aqui"><br>
					<label for=tel>Telefone</label>
					<input type="tel" name="usertel">
				</div>
				<div class="campo">
					<label for="mensagem">Comentários</label>
            		<textarea rows="6" style="width: 32em" id="mensagem" name="mensagem"></textarea><br>
					<label for=file>Arquivo adicional</label>
					<input type="file" name="arquivos">
					<br><br>
					<button type="submit" name="enviar" align="center" value="enviar"><a class="a" href="enviarcontato.php">Enviar</a></button>
				</div>
				</font>
		</form>		
	</body>
	</html>