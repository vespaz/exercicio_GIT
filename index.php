<!DOCTYPE html>
<html lang='pt-br'>
	<head>
		<meta charset="UTF-8"/>
		<title>Home</title>
	</head>
	<body>
		<article>
			<?php
				include "cabecalho.php";

				//If para verificar se o arquivo "cadastro_pessoa.xml" existe
				if(file_exists("cadastro_pessoa.xml")){
					
					$xml = simplexml_load_file("cadastro_pessoa.xml");

					//Tabela de listagem de Usuários
					echo"<table>";
							//cabeçalho da tabela de Usuários cadastrados
							echo"<thead>";
								echo"<tr>";
									echo"<th>Nome</th>";
									echo"<th>E-mail</th>";
									echo"<th>Sexo</th>";
									echo"<th>Data de Nascimento</th>";
									echo"<th>CPF</th>";
									echo"<th>Cidade</th>";
									echo"<th>Estado</th>";
								echo"</tr>";
							echo"</thead>";
						//ForEach para puxar os Usuários cadastrados 
						foreach($xml->children() as $pessoa){
								echo"<tr>";
									echo"<td>$pessoa->nome</td>";
									echo"<td>$pessoa->email</td>";
									echo"<td>$pessoa->sexo</td>";
									echo"<td>$pessoa->nascimento</td>";
									echo"<td>$pessoa->cpf</td>";
									echo"<td>$pessoa->cidade</td>";
									echo"<td>$pessoa->estado</td>";
								echo"</tr>";	
						}
					echo"</table>";
				}else{
					echo"<h3>";
						echo"Não há usuários cadastrados no momento.";
					echo"</h3>";
				}
				
				//Tabela para os calculos feitos	
				if(file_exists("gera_caulculo_imc.xml")){
					
					$xml = simplexml_load_file("gera_caulculo_imc.xml");

					//Tabela de listagem de calculos feitos
					echo"<table>";
							//cabeçalho da tabela de calculos feitos
							echo"<thead>";
								echo"<tr>";
									echo"<th>Usuários</th>";
									echo"<th>IMC</th>";
								echo"</tr>";
							echo"</thead>";
						//ForEach para puxar os calculos feitos 
						foreach($xml->children() as $calculo){
								echo"<tr>";
									echo"<td>$calculo->$user</td>";
									echo"<td>$calculo->$aux</td>";
								echo"</tr>";	
						}
					echo"</table>";
				}else{
					echo"<h3>";
						echo"Não há calculos feitos no momento.";
					echo"</h3>";
				}

				/*
				if(file_exists(.xml)){
					
					$xml = simplexml_load_file(".xml");

					//Tabela de listagem de calculos feitos
					echo"<table>";
							//cabeçalho da tabela de calculos feitos
							echo"<thead>";
								echo"<tr>";
									echo"<th></th>";
								echo"</tr>";
							echo"</thead>";
						//ForEach para puxar os calculos feitos
						foreach($xml->children() as $//variavel de cadastro de calculos no arquivo .xml){
								echo"<tr>";
									echo"<td></td>";
								echo"</tr>";	
						}
					echo"</table>";
				}else{
					echo"<h3>";
						echo"Não há calculos feitos no momento.";
					echo"</h3>";
				}*/
			?>
		</article>
	</body>
</html>