<html>
	<head>
		<!-- Desenvolvido pelo Pedro Gomes Participante 4-->
		<meta charset="UTF-8"/>
		<title>Exercicio GIT</title>
	</head>
	
	<body>
		<div>
			<form action="cadastro_pessoa.php" method="post">
				<fieldset>
					<legend>Entrada de Dados</legend>
					
					<label>Nome:</label>
					<input type="text" name="nome"/>
					<br />
					<br />
					
					<label>Email:</label>
					<input type="text" name="email"/>
					<br />
					<br />
					
					<label>Sexo:</label>
					<input type="radio" value="M" name="sexo">Masculino
					<input type="radio" value="F" name="sexo">Feminino
					<input type="radio" value="O" name="sexo">Outro
					<br />
					<br />
					
					<label>Data Nascimento:</label>
					<input type="date" name="nascimento"/>
					<br />
					<br />
					
					<label>CPF:</label>
					<input type="number" name="cpf"/>
					<br />
					<br />
					
					<label>Cidade:</label>
					<input type="text" name="cidade"/>
					<br />
					<br />
					
					<label>Estado:</label>
					<input type="text" name="estado"/>
					<br />
					<br />
					
					<input type="submit" value="Enviar"/>
				</fieldset>
			</form>
		</div>
	</body>
</html>