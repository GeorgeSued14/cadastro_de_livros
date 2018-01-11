<?php $id = $_GET['id'];
		
		include_once('conexao.php');
               $consulta = $pdo->query("SELECT * FROM livro");
    		  foreach ($consulta as $linha) {
    		  $nome = $linha['nome'];
    		  $editora = $linha['editora'];
    		  $autor = $linha['autor'];
    		  $qtd_pag = $linha['qtd_pag'];
    		  $genero = $linha['genero'];
    		  }

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Livros</title>
	<link rel="stylesheet" href="principal.css">
</head>
<body>
	<h1> Cadastro de Livros</h1><br>
	<form action="update.php" method="POST">
		<label for="">
			<input type="text" name="id" value="<?php echo $id; ?>" placeholder="Gênero" readonly="true">
		</label>
		<label for="">
			 <input type="text" name="nome" value="<?php echo $nome?>" placeholder="Nome">
		</label>

		<label for="">
			 <input type="text" name="editora" value="<?php echo $editora?>" placeholder="Editora">
		</label>
		
		<label for="">
			 <input type="text" name="autor" value="<?php echo $autor?>" placeholder="Autor">
		</label>
		
		<label for="">
			 <input type="text" name="qtd_pag" value="<?php echo $qtd_pag?>" placeholder="Quantidade de Páginas">
		</label>

		<label for="">
			 <input type="text" name="genero" value="<?php echo $genero?>" placeholder="Gênero">
		</label>

		<input type="submit" value="Enviar">
		<input type="reset" name="" value="Limpar">
	</form>
	<br>
</body>
</html>