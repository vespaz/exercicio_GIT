<?php // Desenvolvido por Vinícius Monteiro ?>

<!DOCTYPE html>

<html lang="pt-br">

	<head>
	
		<meta charset="UTF-8" />
		<title>Calculadora - Resultados</title>
		<link href="css.css" type="text/css" rel="stylesheet" />
	
	</head>
	
	<body>
	
		<?php
		
			// Variávies que pegam os POST's
		
			$n1 = $_POST["n1"];
			$n2 = $_POST["n2"];
			
			$user = $_POST["usuario"];
			
			$opc = $_POST["opcao"];
			
			// Auxiliar para fazer as operações
			$aux = 0;
			
			//Auxiliar para salvar posteriormente o resultado no XML
			$correto = 0;
			
							//Debug
				
								echo "Variável n1: $n1 <br />";
								echo "Variável n2: $n2 <br />";
								echo "Variável opcao: $opc <br />";
				
			
			if($opc == 1){
				
				$aux = $n1+$n2;
				$correto = 1;
				
			}else if($opc == 2){
				
				$aux = $n1-$n2;
				$correto = 1;
				
			}else if($opc == 3){
				
				$aux = $n1*$n2;
				$correto = 1;
				
			}else if($opc == 4){
				
				if($n2 != 0){
				
					$aux = $n1/$n2;
					$correto = 1;
					
				}else{
					
					echo "Desculpe $user, mas não é possível fazer divisão por zero!";
					
				}
				
			}else if($opc == 5){
				
				if($n2 != 0){
				
					$aux = $n1%$n2;
					$correto = 1;
					
				}else{
					
					echo "Desculpe $user, mas não é possível fazer divisão por zero!";
					
				}
				
			}
				
			echo "Olá $user, o resultado é: $aux";
			
			
			
			
			
			//Salvando no XML
			
			if($correto == 1){
				
				if(!file_exists("calculadora.xml")){
					
					$xml = "<?xml version = '1.0' encoding = 'UTF-8' ?>
					
						<calculadora>
							<calculo>
							
								<nome>$user</nome>
								<resultado>$aux</resultado>
							
							</calculo>
						</calculadora>
					
					";
					
					file_put_contents("calculadora.xml", $xml);
					
				}else{
					
					$xml = simplexml_load_file("calculadora.xml");
					
					$calculo = $xml->addChild('calculo');
					
					$calculo->addChild('nome', $user);
					$calculo->addChild('resultado', $aux);
					
					file_put_contents("calculadora.xml", $xml->asXML());
					
				}
				
			}
		
		?>
		<br />
		<br />
		<a href="calculadora.php">Fazer outro calculo</a>
	
	</body>

</html>

