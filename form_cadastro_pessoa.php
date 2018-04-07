<html>
	<head>
		<!-- Desenvolvido pelo Pedro Gomes Participante 4-->
		<meta charset="UTF-8"/>
		<title>Exercicio GIT</title>

	</head>
	
	<body>
		<center><h1>Cadastro de Usuário</h1></center>
		
		<?php
			include "cabecalho.php";
		?>
		<br />
		<br />
		<div>
			<form action="cadastro_pessoa.php" method="post">
				<center>	
					<label>Nome:</label>
					<input class="input" type="text" name="nome"/>
					<br />
					<br />
					
					<label>Email:</label>
					<input class="input" type="text" name="email"/>
					<br />
					<br />
					
					<label>Sexo:</label>
					<input class="rad" type="radio" value="M" name="sexo">Masculino
					<input class="rad" type="radio" value="F" name="sexo">Feminino
					<input class="rad" type="radio" value="O" name="sexo">Outro
					<br />
					<br />
					
					<label>Data Nascimento:</label>
					<input class="input" type="date" name="nascimento"/>
					<br />
					<br />
					
					<label>CPF:</label>
					<input class="input" type="number" name="cpf"/>
					<br />
					<br />
					
					<label>Cidade:</label>
					<input class="input" type="text" name="cidade"/>
					<br />
					<br />
					
					<label>Estado:</label>
					<input class="input" type="text" name="estado"/>
					<br />
					<br />	
					<input class="botao" type="submit" value="Enviar"/>
				</center>
			</form>
		</div>
	</body>
</html>