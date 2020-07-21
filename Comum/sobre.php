
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<?php

		require_once ("menu.html");
        include ("../verificaAcesso.php");
	?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive pricing table.">
    <title>Pricing Table &ndash; Layout Examples &ndash; Pure</title>
    <link rel="stylesheet" href="/css/pure/pure-min.css">
    <link rel="stylesheet" href="/css/pure/grids-responsive-min.css">
    <link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
	<style>
	.sobre{
		margin-left: 19%;
		width:80%;
		margin-top: 5px;
		border: 0;
		
	}
	.footer {
		background-color: #0a2742;
		text-align: center;
		padding: 3px;
	}
	</style>
</head>
<body>


<fieldset class="sobre" ;>
<div class="banner">
    <h1 class="banner-head">
        ARV-DESK<br>
        Sistema Help Desk.
    </h1>
</div>

<div class="l-content">
    <div class="pricing-tables pure-g">
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-free">
                

                <ul class="pricing-table-list">
                    <li>Controle de tarefas.</li>
                    <li>Solicitações de manutenções.</li>
                    <li>Suporte ao usuário.</li>
                    <li>Gere relatórios com facilidade.</li>
                    <li>Grande espaço de armazenamento.</li>
					<li>Cadastro de ativos.</li>
                    <li>Acompanhar manutenções.</li>
                    <li>Plataforma acessível de qualquer local.</li>
                </ul>

                
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-biz pricing-table-selected">
                <div class="pricing-table-header">
                    <h2>Vantagens</h2>

                    <span class="pricing-table-price">
                        10x <span>mais eficiência</span>
                    </span>
                </div>

                <ul class="pricing-table-list">
                    <li>Elimine processos manuais.</li>
                    <li>Economize tempo.</li>
                    <li>Mais qualidade para a sua empresa.</li>
                    <li>Gerenciamento organizado.</li>
                    <li>Mantenha seus quipamentos bem cuidados.</li>
                    <li>Coleta de dados para te ajudar a tomar grandes decisões.</li>
                </ul>

                
            </div>
        </div>

        
    </div> <!-- end pricing-tables -->

    <div class="information pure-g">
        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Motivação</h3>
                <p>
                    Nós também já passamos muito tempo executando tarefas repetitivas e manuais, percorrendo corredores e salas para solicitar um reparo, porém atualmente com a evolução e crescimento da tecnologia as empresas necessitam
					de ferramentas eficientes que ajude a fornece mais qualidade na area de trabalho, para se manter no mercado e preservar os recursos, fazer mais com menos, a nossa motivação é transformar o dia-a-dia dos processos internos na sua empresa.
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Objetivo</h3>
                <p>
                    Objetivos funcionais? solicitar reparos, registrar serviços, gerar relatorios, manter controle dos setores, ativos e manutenções realizadas na empresa. 
					O nosso real objetivo é alcançar pessoas, ajudá-las a superar desafios, cuidar das suas desgastantes e demoradas para que elas possam focar no crescimento profissional e da empresa!
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Desenvolvimento</h3>
                <p>
                    O sistema foi desenvolvido pelos alunos Adriana Mataveli Viana, José Ricardo Cezário e Vanessa Souto Ferreira da FATEC -Faculdade de Tecnologia, em Ourinhos-SP.
					Foi utilizada a linguagem de programação: PHP, e html e css para os layouts.
                </p>
            </div>
        </div>

        
        
    </div> <!-- end information -->
</div> <!-- end l-content -->
</fieldset>
<br><br>
<div class="footer l-box">
    <p align="center">
         © Desenvolvido por Adriana Mataveli Viana, José Ricardo Cezário e Vanessa Souto Ferreira.
    </p>
</div>

</body>
</html>