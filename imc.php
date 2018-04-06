<!-- Matheus Brasili IMC -->

<!DOCTYPE html>

<html lang="pt-BR">

	<head>
		<meta charset="utf-8"/>
		<title>Calculo IMC</title>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>

	<body>

		<!-- section do Formulário. -->

		<section>

			<h1>IMC (Indíce de Massa Corporal)</h1>

			<?php

				//Formulário

				echo'<form action="gera_calculo_imc.php" method="post">
			
					<p>
						<label>Peso: </label>
						<input type="number" name="peso" required="required" min="0" steep="0.01"/>
					</p>
				
					<p>
						<label>Altura: </label>
						<input type="number" name="altura" requried="required" min="0" steep="0.01"/>
					</p>
				
					<!-- Usuário que está realizando a operação (deve vir dos cadastros de usuários realizados no xml). -->

					
					<select name="usuario"> Nome do usuário
		
						<option value="Anonimo">Anônimo</option>

						if( file_exists("cadastro_pessoa.xml") ){
					
							$xml = simplexml_load_file("cadastro_pessoa.xml");
					
							foreach($xml->children() as $aux){
								
								$nome = $aux->nome;
								
								echo"
									
									<option value='$nome'>$nome</option>
								
								";
								
							}
						
						}
					
					</select>

					<input type="submit" value="Calcular IMC"/>

				</form>';

			?>
		
		</section>
			
	</body>

</html>