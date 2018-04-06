<!-- Matheus Brasili -->

<!DOCTYPE html>

<html lang="pt-BR">

	<head>
	
		<meta charset="UTF-8"/>
		<title>IMC - Resultados</title>
		<link href="" type="text/css" rel="stylesheet"/>
	
	</head>
	
	<body>
	
		<?php
		
			// Variávies que pegam os POST's
		
			$peso = $_POST["peso"];
			$altura = $_POST["altura"];
			
			$user = $_POST["usuario"];
			
			$opc = $_POST["opcao"];
			
			// Auxiliar para fazer as operações
			$aux = 0;
			
			//Calcula IMC
			$imc = $peso / ($altura * $altura);
			
			
			//Salvando no XML
			
			if(!file_exists("imc.xml")){
				
				$xml = "<?xml encoding = 'UTF-8' version = '1.0' ?>
				
					<imc>
						<calculo>
						
							<nome>$user</nome>
							<resultado>$aux</resultado>
						
						</calculo>
					</imc>
				
				";
				
				file_put_contents("imc.xml", $xml);
				
			}else{
				
				$xml = simplexml_load_file("imc.xml");
				
				$calculo = $xml->addChild('calculo');
				
			}
			
			
		
		?>
		
	
	</body>

</html>

