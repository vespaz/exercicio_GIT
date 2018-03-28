<!-- Matheus Brasili -->

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
						<input type="number" name="peso" required="required" min="0"/>
					</p>
				
					<p>
						<label>Altura: </label>
						<input type="number" name="altura" requried="required" min="0"/>
					</p>
				
					<!-- Usuário que está realizando a operação (deve vir dos cadastros de usuários realizados no xml). -->

					<!-- <p>
						<label>Usuário: </label>
						<select name="usuario">
							<option value= >Usuário</option>
						</select>
					</p> -->

					<input type="submit" value="Calcular IMC"/>

				</form>';

			?>
		
		</section>
			
	</body>

</html>