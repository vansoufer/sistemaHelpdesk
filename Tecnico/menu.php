
<?php 
  include ("../verificaAcesso.php");
 ?>


<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script type="text/javascript">
    function carregar(pagina){
          $("#conteudo").load(pagina);
      }
  </script>

  <link rel="stylesheet" type="text/css" href="../css/menu-principal.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <meta charset="utf-8">
  <style>
 
	.wrapper .main_content .header {
		background-color: #0a2742;
		padding:11px;
		align-items:right;
	}

	</style>

  <title>ARV-DESK</title>
</head>

<body>
<div class="wrapper">
    <div class="sidebar">
      <h2>ARV-DESK</h2>
        <ul class="mainmenu">
          <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
		  
		  
          

          <li><a href="#"><i class="fas fa-user"></i>Usuários</a>
            <ul>
              <li><a href="form-cad-usuarios.php"><span class="fa fa-plus"></span>Cadastrar</a></li>
			  <li><a href="form-cons-usuarios.php"><span class="fa fa-search"></span>Consultar</a></li>
              
            </ul>
          </li>

          <li><a href="#"><i class="fas fa-database"></i>Ativos</a>
              <ul>
                  <li><a href="form-cad-ativos.php"><span class="fa fa-plus"></span>Cadastrar</a></li>
				  <li><a href="form-cons-ativos.php"><span class="fa fa-search"></span>Consultar</a></li>
                  
              </ul>
          </li>


          <li><a href="#"><i class="fas fa-headset"></i>Chamados</a>
            <ul>
              <li><a href="form-cad-chamados.php"><span class="fa fa-plus"></span>Efetuar</a></li>
			  <li><a href="form-cons-chamados.php"><span class="fa fa-search"></span>Consultar</a></li>
              
            </ul>
          </li>
          <li><a href="#"><i class="fas fa-tasks"></i>Relatórios</a>
            <ul>
              <li><a href="pesquisarrelatorio.php"><span class="fa fa-plus"></span>Gerar</a></li>
             
            </ul>
          </li>
          <li><a href="contato.php"><i class="fas fa-address-book"></i>Contato</a></li>
          <li><a href="sobre.php"><i class="fas fa-address-card"></i>Sobre</a></li>
          
        </ul> 

    </div>

    <div class="main_content">

        <div class="header">
          <ul>
            <li><a href="logout.php"><img src="../imagens/sair.png" alt="some text" width=25 height=25><br><h6> Sair</h6></a></li>
          </ul>
        </div>

    </div>
</div>
</body>
</html>