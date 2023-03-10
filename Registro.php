<?php
//var_dump($_POST);

?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registro</title>
	</head>
	<body>
		<?php
			date_default_timezone_set('America/Sao_Paulo');
			$nome = $_POST["nome"];
			$ddd = $_POST["ddd"];
			$telefone = $_POST["telefone"];
			$email = $_POST["email"];
			$data = date("D, d-M-Y H:i:s");			
				echo "Nome: ";
				echo $nome;
				echo "<br />";
				echo "Telefone: ";
				echo "($ddd) "; echo $telefone;
				echo "<br />";
				echo "Email: ";
				echo $email;
				echo "<br />";
				echo $data;
				echo "<br />";
			$conexao = @mysql_connect("localhost","root");
				if (!$conexao)
					die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
				
			$banco = @mysql_select_db("clientes",$conexao);
				if (!$banco)
					die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
			$query = "INSERT INTO 'clientes' ( 'nome' , 'ddd', 'telefone' , 'email', 'data' ) 
			VALUES ('$nome', '$ddd', '$telefone', '$email', '$data' )";

			mysql_query($query,$conexao);

			echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
			
			/*if(empty($nome)):
				echo "<script>alert('Preencha o nome para enviar.');history.back();</script>";
			elseif(empty($telefone)):
				echo "<script>alert('Preencha o telefone para enviar.');history.back();</script>";
			elseif(empty($email)):
				echo "<script>alert('Preencha o email para enviar.');history.back();</script>";
				/*else 
					mysql_query("insert into nome (nome, telefone, email) values ('$nome', '$telefone', '$email')");
					echo "<script>alert('Informações enviadas com sucesso.');</script>";
					header("location:Cadastro.php");
			endif;*/
		?>
	<body>
</html>