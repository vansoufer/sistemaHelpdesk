

<?php
//require ("menu.html");


	include ("../verificaAcesso.php");
	include_once("../conexao.php");
	
ob_start();	

	$html = '<table border=0 width=100% height=60% style="margin:40px 0;">';
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<td><b>Status</td>';
	$html .= '<td><b>Nome</td>';
	$html .= '<td><b>Nº Invent.</td>';
	$html .= '<td><b>Tipo</td>';
	$html .= '<td><b>Data Aqu.</td>';
	$html .= '<td><b>Setor</td>';
	$html .= '<td><b>Garantia</td>';
	$html .= '<td><b>Id User</td>';
	$html .= '<td><b>Fabricante</td>';
	$html .= '<td><b>Modelo</td>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
		$status = $_POST['status'];
		$tipo = $_POST['tipo'];
		$fabricante = $_POST['fab'];
		
		
		
		if(($status == '1') || ($status == '0')){

			$chamada = "SELECT * FROM ativos WHERE status LIKE '%".$status."%' LIMIT 5";
			
			$chamada1 = mysqli_query($conexao, $chamada);
			//var_dump ($chamada);
					while($row_user = mysqli_fetch_array($chamada1)){
						$sta = $row_user ['status'] == '1' ? 'Habilitado': 'Desabilitado';
						$tip = ($row_user ['tipo'] == '1' ? 'Computador':
							   ($row_user ['tipo'] == '2' ? 'Impressoras':
							   ($row_user ['tipo'] == '3' ? 'Monitores':
							   ($row_user ['tipo'] == '4' ? 'Telefones': 'Outros'))));
						
						$html .= '<tbody >';
						$html .= '<tr><td>'.$sta .  "</td>";
						$html .= '<td>'.$row_user['nome'] . "</td>";	
						$html .= '<td>'.$row_user['NumInventario'] . "</td>";
						$html .= '<td>'.$tip . "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtaquisicao'])) . "</td>";
						$html .= '<td>'.$row_user['setor'] . "</td>";
						$html .= '<td>'.$row_user['garantia'] . "</td>";
						$html .= '<td>'.$row_user['idUsuario'] . "</td>";
						$html .= '<td>'.$row_user['fabricante'] . "</td>";
						$html .= '<td>'.$row_user['modelo'] . "</td></td>";
						
						}
		}
		
		else if(($tipo == '1')||($tipo == '2')||($tipo == '3')||($tipo == '4')||($tipo == '5')){

			$chamada = "SELECT * FROM ativos WHERE tipo LIKE '%".$tipo."%' LIMIT 5";
			$chamada1 = mysqli_query($conexao, $chamada);
					while($row_user = mysqli_fetch_array($chamada1)){
						$sta =  $row_user ['status'] == '1' ? 'Habilitado': 'Desabilitado';
						$tip = ($row_user ['tipo'] == '1' ? 'Computador':
							   ($row_user ['tipo'] == '2' ? 'Impressoras':
							   ($row_user ['tipo'] == '3' ? 'Monitores':
							   ($row_user ['tipo'] == '4' ? 'Telefones': 'Outros'))));
						$html .= '<tbody >';
						$html .= '<tr><td>'.$sta .  "</td>";
						$html .= '<td>'.$row_user['nome'] . "</td>";	
						$html .= '<td>'.$row_user['NumInventario'] . "</td>";
						$html .= '<td>'.$tip . "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtaquisicao'])) . "</td>";
						$html .= '<td>'.$row_user['setor'] . "</td>";
						$html .= '<td>'.$row_user['garantia'] . "</td>";
						$html .= '<td>'.$row_user['idUsuario'] . "</td>";
						$html .= '<td>'.$row_user['fabricante'] . "</td>";
						$html .= '<td>'.$row_user['modelo'] . "</td></td>";
						}
					
		}
		
		else {
			
			$chamada = "SELECT * FROM ativos WHERE fabricante LIKE '%".$fabricante."%' LIMIT 5";
			$chamada1 = mysqli_query($conexao, $chamada);
					while($row_user = mysqli_fetch_array($chamada1)){
						$sta = $row_user ['status'] == '1' ? 'Habilitado': 'Desabilitado';
						$tip = ($row_user ['tipo'] == '1' ? 'Computador':
							   ($row_user ['tipo'] == '2' ? 'Impressoras':
							   ($row_user ['tipo'] == '3' ? 'Monitores':
							   ($row_user ['tipo'] == '4' ? 'Telefones': 'Outros'))));
						
						$html .= '<tbody >';
						$html .= '<tr><td>'.$sta .  "</td>";
						$html .= '<td>'.$row_user['nome'] . "</td>";	
						$html .= '<td>'.$row_user['NumInventario'] . "</td>";
						$html .= '<td>'.$tip . "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtaquisicao'])) . "</td>";
						$html .= '<td>'.$row_user['setor'] . "</td>";
						$html .= '<td>'.$row_user['garantia'] . "</td>";
						$html .= '<td>'.$row_user['idUsuario'] . "</td>";
						$html .= '<td>'.$row_user['fabricante'] . "</td>";
						$html .= '<td>'.$row_user['modelo'] . "</td></td>";
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
			<h3 style="text_align: center;"> Relatório de ativos </h3><br>
			
			
			'. $html .'
		
		
		');
		$dompdf->setPaper('A4', 'landscape');
		//renderizar o html
		$dompdf->render();
		$dompdf->stream( //exibir a pagina
			"relatório_por_data.pdf",
			array(
				"Attachment" => false
			)
		);
?>
