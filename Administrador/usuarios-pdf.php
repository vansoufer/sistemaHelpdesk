

<?php
//require ("menu.html");



	include_once("../conexao.php");
	include ("../verificaAcesso.php");
ob_start();	

	$html = '<table border=0 width=100% height=60% style="margin:40px 0;">';
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<td><b>Codigo</td>';
	$html .= '<td><b>CPF</td>';
	$html .= '<td><b>Status</td>';
	$html .= '<td><b>Nome</td>';
	$html .= '<td><b>Sobrenome</td>';
	$html .= '<td><b>Cidade</td>';
	
	$html .= '<td><b>e-mail</td>';
	$html .= '<td><b>Nivel</td>';
	$html .= '<td><b>Telefone</td>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	

		$status = $_POST['status'];
		$nivel = $_POST['nivel'];
		$pesquisar = $_POST['pesquisar']; 
		
		
		if(($status == 'habilitado') || ($status == 'desabilitado')){
			
			
			
			$chamada = "SELECT * FROM usuarios WHERE status LIKE '%".$status."%' LIMIT 5";
			$chamada1 = mysqli_query($conexao, $chamada);
					while($row_user = mysqli_fetch_array($chamada1)){
								
						$nivel = ($row_user ['nivel'] == 'adm' ? 'Administrador': 
							   ($row_user ['nivel'] == 'tec' ? 'Técnico': 'Comum'));
				
						$html .= '<tbody >';
						$html .= '<tr><td>'.$row_user['id'] . "</td>";
						$html .= '<td>'.$row_user['cpf'] . "</td>";	
						$html .= '<td>'.$row_user['status'] . "</td>";
						$html .= '<td>'.$row_user['nome'] . "</td>";
						$html .= '<td>'.$row_user['sobrenome'] . "</td>";
						$html .= '<td>'.$row_user['cidade'] . "</td>";
						
						$html .= '<td>'.$row_user['email'] . "</td>";
						$html .= '<td>'.$nivel . "</td>";
						$html .= '<td>'.$row_user['celular'] . "</td></tr>";
						}
			
				
				
		}
		
		else if(($nivel == 'tecnico') || ($nivel == 'adm') || ($nivel == 'comum')){
			
			
			$chamada = "SELECT * FROM usuarios WHERE nivel LIKE '%".$nivel."%' LIMIT 5";
			$chamada1 = mysqli_query($conexao, $chamada);
					while($row_user = mysqli_fetch_array($chamada1)){
						
						$nivel = ($row_user ['nivel'] == 'adm' ? 'Administrador': 
							   ($row_user ['nivel'] == 'tec' ? 'Técnico': 'Comum'));
				
						$html .= '<tbody >';
						$html .= '<tr><td>'.$row_user['id'] . "</td>";
						$html .= '<td>'.$row_user['cpf'] . "</td>";	
						$html .= '<td>'.$row_user['status'] . "</td>";
						$html .= '<td>'.$row_user['nome'] . "</td>";
						$html .= '<td>'.$row_user['sobrenome'] . "</td>";
						$html .= '<td>'.$row_user['cidade'] . "</td>";
						
						$html .= '<td>'.$row_user['email'] . "</td>";
						$html .= '<td>'.$nivel . "</td>";
						$html .= '<td>'.$row_user['celular'] . "</td></tr>";
						}
					
		}
		
		else {
			
			
			$chamada = "SELECT * FROM usuarios WHERE cpf LIKE '%".$pesquisar."' LIMIT 5";
			$chamada1 = mysqli_query($conexao, $chamada);
					while($row_user = mysqli_fetch_array($chamada1)){
				
						$nivel = ($row_user ['nivel'] == 'adm' ? 'Administrador': 
							   ($row_user ['nivel'] == 'tec' ? 'Técnico': 'Comum'));
				
						$html .= '<tbody >';
						$html .= '<tr><td>'.$row_user['id'] . "</td>";
						$html .= '<td>'.$row_user['cpf'] . "</td>";	
						$html .= '<td>'.$row_user['status'] . "</td>";
						$html .= '<td>'.$row_user['nome'] . "</td>";
						$html .= '<td>'.$row_user['sobrenome'] . "</td>";
						$html .= '<td>'.$row_user['cidade'] . "</td>";
						
						$html .= '<td>'.$row_user['email'] . "</td>";
						$html .= '<td>'.$nivel . "</td>";
						$html .= '<td>'.$row_user['celular'] . "</td></tr>";
					}
				
		}
			
		
		
				
				
	$html .= '</tbody>';
	$html .= '</table';
	
	$pdf = ob_get_clean ();
	echo $pdf;
	

use Dompdf\Dompdf;
	// include autoloader
		require_once 'dompdf/autoload.inc.php';
		
		$dompdf = new DOMPDF();
		
		$dompdf->loadHtml('
			<center><img src="../imagens/computer02.png" style="padding-top:18px;height:70px;"> 
			<br><b>ARV-DESK </center><br>
			<h3 style="text_align: center;"> Relatório de usuários </h3><br><br>
			
			
			'. $html .'
		
		
		');
		$dompdf->setPaper('A4', 'landscape');
		//renderizar o html
		$dompdf->render();
		$dompdf->stream( //exibir a pagina
			"usuarios.pdf",
			array(
				"Attachment" => false
			)
		);
?>
