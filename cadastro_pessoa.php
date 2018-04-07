<html>
	<head>
		<!-- Desenvolvido pelo Pedro Gomes Participante 4-->
		<meta charset="UTF-8"/>
		<title>Exercicio GIT</title>
	</head>
	
	<body>
		<?php 
			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$sexo = $_POST["sexo"];
			$nascimento = $_POST["nascimento"];
			$cpf = $_POST["cpf"];
			$cidade = $_POST["cidade"];
			$estado = $_POST["estado"];
			
			if(!file_exists("cadastro_pessoa.xml")){
				$xml = "<?xml version='1.0' encoding='UTF-8'?>
				
				<pessoas>
					<pessoa>
						<nome>$nome</nome>
						<email>$email</email>
						<sexo>$sexo</sexo>
						<nascimento>$nascimento</nascimento>
						<cpf>$cpf</cpf>
						<cidade>$cidade</cidade>
						<estado>$estado</estado>
					</pessoa>
				</pessoas>";
				
				file_put_contents("cadastro_pessoa.xml", $xml);
			}else{
				$xml = simplexml_load_file("cadastro_pessoa.xml");
				
				$pessoa = $xml->addChild('pessoa');
				
				$pessoa->addChild('nome', $nome);
				$pessoa->addChild('email', $email);
				$pessoa->addChild('sexo', $sexo);
				$pessoa->addChild('nascimento', $nascimento);
				$pessoa->addChild('cpf', $cpf);
				$pessoa->addChild('cidade', $cidade);
				$pessoa->addChild('estado', $estado);
				
				file_put_contents("cadastro_pessoa.xml", $xml->asXML());
			}
			echo "<h1 class='enviado'>Enviado!!</h1>";
		?>
	</body>
</html>