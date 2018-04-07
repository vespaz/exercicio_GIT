<?php // Desenvolvido por Vinícius Monteiro ?>

<!DOCTYPE html>

<html lang="pt-br">

	<head>
	
		<meta charset="UTF-8"/>
		<title>Calculadora</title>
		<link href="css.css" type="text/css" rel="stylesheet"/>
	
	</head>
	
	<body>
	
		<!-- Formulário da calculadora -->
	
		<form method="post" action="gera_calculo_calculadora.php" >
		
			<label>Digite o primeiro número: </label>
			<input type="number" name="n1" /> <br /><br />
			
			<label>Digite o segundo número: </label>
			<input type="number" name="n2" /><br /><br />
			
			<label>Qual a operação que você deseja fazer?</label>
			
			<!-- Seleção da operação -->
			
			<select name="opcao">
			
				<option value="1">Adição</option>
				<option value="2">Subtração</option>
				<option value="3">Multiplicação</option>
				<option value="4">Divisão</option>
				<option value="5">Resto da divisão</option>
			
			</select> <br /><br />
			
			
			<label>Nome do usuário</label>
			<select name="usuario">
			
				<option value="Anônimo">Anônimo</option>
			
				<?php

					if( file_exists("cadastro_pessoa.xml") ){
				
						$xml = simplexml_load_file("cadastro_pessoa.xml");
				
						foreach($xml->children() as $aux){
							
							$nome = $aux->nome;
							
							echo "<option value='$nome'>$nome</option>";
							
						}
					
					}
				
				?>
			
			</select>
			<br/>
			<br/>
			
			<input type="submit" value="Calcular" />
			<input type="reset" value="Limpar" />
		
		</form>
	
	</body>

</html>

