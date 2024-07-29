

<?php
//require ("menu.html");

	include_once("../conexao.php");
	include ("../verificaAcesso.php");

ob_start();	

	$html = '<table border=0 width=100% height=60% style="margin:40px 0;">';
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<td><b>Tipo</td>';
	$html .= '<td><b>Dt Abert.</td>';
	$html .= '<td><b>Dt Aten</td>';
	$html .= '<td><b>Concluído</td>';
	$html .= '<td><b>Requerente</td>';
	$html .= '<td><b>Atribuição</td>';
	$html .= '<td><b>Status</td>';
	$html .= '<td><b>Prioridade</td>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	

		$status = $_POST['status'];
		$dtainicial =  $_POST['dtainicial'];
		$dtafinal = $_POST['dtafinal']; 
		$consulta = $_POST['consulta'];
		
						
			if(($status == '1') || ($status == '2') || ($status == '0')){

			$chamada = "SELECT * FROM chamados WHERE status LIKE '%".$status."%' LIMIT 5";
			$chamada1 = mysqli_query($conexao, $chamada);
					while($row_user = mysqli_fetch_array($chamada1)){
						
						$tip = $row_user ['tipo'] == '1' ? 'Incidente':'Requisição';
						
						$atrib = $row_user ['atribuicao'] == '1' ? 'Adm':'Técnico';
						
						$sta = ($row_user ['status'] == '1' ? 'Pendente': 
							   ($row_user ['status'] == '2' ? 'Em andamento': 'Encerrado'));
							   
						$prio = ($row_user ['prioridade'] == '1' ? 'Alta':
								($row_user ['prioridade'] == '2' ? 'Média':'Baixa'));
								
						$html .= '<tbody >';						
						$html .= '<tr><td>'.$tip . "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtAbertura'] )). "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtAtender'])) . "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtConcluir'] )). "</td>";
						$html .= '<td>'.$row_user['NomeRequerente'] . "</td>";
						$html .= '<td>'.$atrib . "</td>";
						$html .= '<td>'.$sta . "</td>";
						$html .= '<td>'.$prio . "</td></tr>";
					}
		}
		else if($consulta == 'todos'){

			$chamada = "SELECT * FROM chamados";
			$chamada1 = mysqli_query($conexao, $chamada);
					while($row_user = mysqli_fetch_array($chamada1)){
						
						$tip = $row_user ['tipo'] == '1' ? 'Incidente':'Requisição';
						
						$atrib = $row_user ['atribuicao'] == '1' ? 'Adm':'Técnico';
						
						$sta = ($row_user ['status'] == '1' ? 'Pendente': 
							   ($row_user ['status'] == '2' ? 'Em andamento': 'Encerrado'));
							   
						$prio = ($row_user ['prioridade'] == '1' ? 'Alta':
								($row_user ['prioridade'] == '2' ? 'Média':'Baixa'));
								
						$html .= '<tbody >';						
						$html .= '<tr><td>'.$tip . "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtAbertura'])) . "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtAtender'])) . "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtConcluir'])) . "</td>";
						$html .= '<td>'.$row_user['NomeRequerente'] . "</td>";
						$html .= '<td>'.$atrib . "</td>";
						$html .= '<td>'.$sta . "</td>";
						$html .= '<td>'.$prio . "</td></tr>";
					}
		}
		
		else{
		
		$pesquisar = $_POST['dtainicial'];
			
		while ($pesquisar<=$dtafinal){

			$chamada = "SELECT * FROM chamados WHERE dtAbertura LIKE '%".$pesquisar."%' LIMIT 5";
			$chamada1 = mysqli_query($conexao, $chamada);
					while($row_user = mysqli_fetch_array($chamada1)){
				
						$tip = $row_user ['tipo'] == '1' ? 'Incidente':'Requisição';
						
						$atrib = $row_user ['atribuicao'] == '1' ? 'Adm':'Técnico';
						
						$sta = ($row_user ['status'] == '1' ? 'Pendente': 
							   ($row_user ['status'] == '2' ? 'Em andamento': 'Encerrado'));
							   
						$prio = ($row_user ['prioridade'] == '1' ? 'Alta':
								($row_user ['prioridade'] == '2' ? 'Média':'Baixa'));
								
						$html .= '<tbody >';						
						$html .= '<tr><td>'.$tip . "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtAbertura'] )). "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtAtender'] )). "</td>";
						$html .= '<td>'.date("d/m/Y", strtotime($row_user['dtConcluir'])) . "</td>";
						$html .= '<td>'.$row_user['NomeRequerente'] . "</td>";
						$html .= '<td>'.$atrib . "</td>";
						$html .= '<td>'.$sta . "</td>";
						$html .= '<td>'.$prio . "</td></tr>";
						
						}
					$pesquisar ++;
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
			<h3 style="text_align: center;"> Relatório de chamados </h3><br>
			
			
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
